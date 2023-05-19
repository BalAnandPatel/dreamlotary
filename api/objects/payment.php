<?php 

 class payment{
    private $conn;
    private $payment_history = "payment_history";
    private $user_login = "user_login";
    private $user_account = "user_account";
    private $ticket = "ticket";
    private $ticket_purchase = "ticket_purchase";

    public function __construct($db){
        $this->conn = $db;
    }

    public $id, $userId, $userName, $userEmail, $userPass, $userMobile, $accountHolder, $bankName, $branchName, $ifscCode, $accountNum, $googlePayNum, $phonePayNum, $status, $createdOn, $createdBy, $updatedOn, $updatedBy, $ticketId, $ticketAmount, $lotteryNum, $lotteryAmount;


       public function paymentEentry(){

        $query="INSERT INTO
        " . $this->payment_history . "
    SET
             ticketAmount=:ticketAmount,
             lotteryNum=:lotteryNum,
             lotteryAmount=:lotteryAmount, 
             userId=:userId,
             userName=:userName,
             bankName=:bankName,
             branchName=:branchName,
             accountNum=:accountNum,
             ifscCode=:ifscCode,
             accountHolder=:accountHolder, 
             paymentMode=:paymentMode,
             slipNum=:slipNum,
             remark=:remark,
             status=:status,
             createdOn=:createdOn,
             createdBy=:createdBy
             ";

        $stmt = $this->conn->prepare($query);
        $this->ticketAmount=htmlspecialchars(strip_tags($this->ticketAmount));
        $this->lotteryNum=htmlspecialchars(strip_tags($this->lotteryNum));
        $this->lotteryAmount=htmlspecialchars(strip_tags($this->lotteryAmount));
        $this->userId=htmlspecialchars(strip_tags($this->userId));
        $this->userName=htmlspecialchars(strip_tags($this->userName));
        $this->bankName=htmlspecialchars(strip_tags($this->bankName));
        $this->branchName=htmlspecialchars(strip_tags($this->branchName));
        $this->accountNum=htmlspecialchars(strip_tags($this->accountNum));
        $this->ifscCode=htmlspecialchars(strip_tags($this->ifscCode));
        $this->accountHolder=htmlspecialchars(strip_tags($this->accountHolder));
        $this->paymentMode=htmlspecialchars(strip_tags($this->paymentMode));
        $this->slipNum=htmlspecialchars(strip_tags($this->slipNum));
        $this->remark=htmlspecialchars(strip_tags($this->remark));
        $this->status=htmlspecialchars(strip_tags($this->status));
        $this->createdOn=htmlspecialchars(strip_tags($this->createdOn));
        $this->createdBy=htmlspecialchars(strip_tags($this->createdBy));


        $stmt->bindParam(":ticketAmount", $this->ticketAmount);
        $stmt->bindParam(":lotteryNum", $this->lotteryNum);
        $stmt->bindParam(":lotteryAmount", $this->lotteryAmount);
        $stmt->bindParam(":userId", $this->userId);
        $stmt->bindParam(":userName", $this->userName);
        $stmt->bindParam(":bankName", $this->bankName);
        $stmt->bindParam(":branchName", $this->branchName);
        $stmt->bindParam(":accountNum", $this->accountNum);
        $stmt->bindParam(":ifscCode", $this->ifscCode);
        $stmt->bindParam(":accountHolder", $this->accountHolder);
        $stmt->bindParam(":paymentMode", $this->paymentMode);
        $stmt->bindParam(":slipNum", $this->slipNum);
        $stmt->bindParam(":remark", $this->remark);
        $stmt->bindParam(":status", $this->status);
        $stmt->bindParam(":createdOn", $this->createdOn);
        $stmt->bindParam(":createdBy", $this->createdBy);
       
         // execute query
         if($stmt->execute()){
            return true;
        }
      
        return false;
    }


    public function readPaymentDetails(){
        // $query="Select userName,userEmail,userMobile,th.userId,accountHolder,accountNum,ifscCode,bankName,branchName,googlePayNum,phonePayNum,ticketAmount,lotteryAmount,lotteryNum from user_account as ua left join user_login as ul on ua.userId=ul.id left join ticket_purchase as th on ul.id=th.userId where th.status=3 and th.id=:id";
        $query="Select userName,userEmail,userMobile,th.userId,accountHolder,accountNum,ifscCode,bankName,branchName,googlePayNum,phonePayNum,ticketAmount,lotteryAmount,lotteryNum from ticket_purchase as th left join user_login as ul on th.userId=ul.id left join user_account as ua on th.userId=ua.userId where th.status=3 and th.id=:id";
        $stmt = $this->conn->prepare($query); 
        $stmt->bindParam(":id", $this->id);
        // $stmt->bindParam(":amount", $this->amount);
        $stmt->execute();
        return $stmt;
    }

    public function confirm_payment(){
        $query="Select pid,user_id,transaction_id,amount,status,request_id ,created_by,created_on
        from " .$this->table_name .  " where user_id=:user_id and transaction_id=:transaction_id and amount=:amount and status=1";
        $stmt = $this->conn->prepare($query); 
        $stmt->bindParam(":user_id", $this->user_id);
        $stmt->bindParam(":amount", $this->amount);
        $stmt->bindParam(":transaction_id", $this->transaction_id);
       

        $stmt->execute();
        return $stmt;
    }
}

?>