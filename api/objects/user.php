<?php 

 class User{

    private $conn;
    private $table_name = "user_login";
    private $user_account = "user_account";
    // private $table_payment = "payment";

    public function __construct($db){
        $this->conn = $db;
    }

    public $id, $userId, $userName, $userEmail, $userPass, $userMobile, $accountHolder, $bankName, $branchName, $ifscCode, $accountNum, $googlePayNum, $phonePayNum, $status, $createdOn, $createdBy, $updatedOn, $updatedBy;
    
    public function readMaxUserId(){
        $query="Select max(id) as userId from " .$this->table_name;
        $stmt = $this->conn->prepare($query);
        // $stmt->bindParam(":userName", $this->userName); 
        $stmt->execute();
        return $stmt;
    }

    public function readUserProfile(){
     $query="Select user.id, userType, userRole, userName, userMobile, userEmail, user.status, user.createdOn, user.createdBy, accountHolder, bankName, branchName, ifscCode, accountNum, googlePayNum, phonePayNum
        from " .$this->table_name. " as user LEFT JOIN " .$this->user_account ." as ua ON user.id=ua.userId where user.status=1 and user.userType=:userType and user.id=:id";
        $stmt = $this->conn->prepare($query); 
        $stmt->bindParam(":userType", $this->userType);
        $stmt->bindParam(":id", $this->id);
        $stmt->execute();
        return $stmt;
    }

    public function readAllUsersDetail(){
        $query="Select id, userType, userRole, userName, userMobile, userEmail, status, createdOn, createdBy
        from " .$this->table_name;
        $stmt = $this->conn->prepare($query); 
        // $stmt->bindParam(":exam_name", $this->exam_name);
        $stmt->execute();
        return $stmt;
    }

 
    public function read_print_varify_details(){
       $query="Select  pay.user_id as id,reg.full_name,reg.registration_no,dob,mobile,reg.exam_name,transaction_id,amount, pay.status,pay.created_on, pay.created_by from " .$this->table_registration . " as reg left join "
         . $this->table_payment . " as pay on reg.id=pay.user_id 
         where reg.registration_no=:registration_no and reg.mobile=:mobile and pay.status=1";
        $stmt = $this->conn->prepare($query); 
        $stmt->bindParam(":registration_no", $this->registration_no);
        $stmt->bindParam(":mobile", $this->mobile);
        $stmt->execute();
        return $stmt;
    }

        public function get_reg_number(){
        $query="Select  id,full_name,exam_name,mobile,registration_no,status
          from " .$this->table_registration .  " where full_name=:full_name and mobile=:mobile";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":full_name", $this->full_name);
        $stmt->bindParam(":mobile", $this->mobile); 
        $stmt->execute();
        return $stmt;
    }

    public function read_exam_list(){
        $query="Select  id,exam_name,type,age,total_post,eligibility,
         amount,status,exam_date_start,exam_date_end,result_date,admit_card_date,created_by,created_on
        from " .$this->table_name;
        $stmt = $this->conn->prepare($query); 
        $stmt->execute();
        return $stmt;
    }

    public function insertUser(){

           $query="INSERT INTO
        " . $this->table_name . "
    SET      userType=:userType,
             userRole=:userRole,
             userName=:userName,
             userEmail=:userEmail,
             userMobile=:userMobile, 
             userPass=:userPass,
             status=:status,
             createdOn=:createdOn,
             createdBy=:createdBy
               ";

        $stmt = $this->conn->prepare($query);
        $this->userType=htmlspecialchars(strip_tags($this->userType));
        $this->userRole=htmlspecialchars(strip_tags($this->userRole));
        $this->userName=htmlspecialchars(strip_tags($this->userName));
        $this->userMobile=htmlspecialchars(strip_tags($this->userMobile));
        $this->userEmail=htmlspecialchars(strip_tags($this->userEmail));
        $this->userPass=htmlspecialchars(strip_tags($this->userPass));
        $this->status=htmlspecialchars(strip_tags($this->status));
        $this->createdBy=htmlspecialchars(strip_tags($this->createdBy));
        $this->createdOn=htmlspecialchars(strip_tags($this->createdOn));


        $stmt->bindParam(":userRole", $this->userRole);
        $stmt->bindParam(":userType", $this->userType);
        $stmt->bindParam(":userName", $this->userName);
        $stmt->bindParam(":userMobile", $this->userMobile);
        $stmt->bindParam(":userEmail", $this->userEmail);
        $stmt->bindParam(":userPass", $this->userPass);
        $stmt->bindParam(":status", $this->status);
        $stmt->bindParam(":createdOn", $this->createdOn);
        $stmt->bindParam(":createdBy", $this->createdBy);
       
         // execute query
         if($stmt->execute()){
            return true;
        }
      
        return false;
    }

     public function insertUserAccount(){

           $query="INSERT INTO
        " . $this->user_account . "
    SET      userId=:userId,
             status=:status,
             createdOn=:createdOn,
             createdBy=:createdBy
               ";

        $stmt = $this->conn->prepare($query);
        $this->userId=htmlspecialchars(strip_tags($this->userId));
        $this->status=htmlspecialchars(strip_tags($this->status));
        $this->createdBy=htmlspecialchars(strip_tags($this->createdBy));
        $this->createdOn=htmlspecialchars(strip_tags($this->createdOn));


        $stmt->bindParam(":userId", $this->userId);
        $stmt->bindParam(":status", $this->status);
        $stmt->bindParam(":createdOn", $this->createdOn);
        $stmt->bindParam(":createdBy", $this->createdBy);
       
         // execute query
         if($stmt->execute()){
            return true;
        }
      
        return false;
    }


    function updateUserProfile(){
  
        // query to insert record
       $query = "UPDATE 
                    " . $this->user_account . "
                SET
                   accountHolder=:accountHolder,
                   bankName=:bankName,
                   branchName=:branchName, 
                   ifscCode=:ifscCode,
                   accountNum=:accountNum,
                   phonePayNum=:phonePayNum,
                   googlePayNum=:googlePayNum,
                   updatedOn=:updatedOn,
                   updatedBy=:updatedBy
                   where userId=:userId";
                          
        // prepare query
        $stmt = $this->conn->prepare($query);
        $this->accountHolder=htmlspecialchars(strip_tags($this->accountHolder));
        $this->bankName=htmlspecialchars(strip_tags($this->bankName));
        $this->branchName=htmlspecialchars(strip_tags($this->branchName));
        $this->ifscCode=htmlspecialchars(strip_tags($this->ifscCode));
        $this->accountNum=htmlspecialchars(strip_tags($this->accountNum));
        $this->phonePayNum=htmlspecialchars(strip_tags($this->phonePayNum));
        $this->googlePayNum=htmlspecialchars(strip_tags($this->googlePayNum));
        $this->updatedOn=htmlspecialchars(strip_tags($this->updatedOn));
        $this->updatedBy=htmlspecialchars(strip_tags($this->updatedBy));
         
        //bind values
        $stmt->bindParam(":userId", $this->userId);
        $stmt->bindParam(":accountHolder", $this->accountHolder);
         $stmt->bindParam(":bankName", $this->bankName);
        $stmt->bindParam(":branchName", $this->branchName);
        $stmt->bindParam(":ifscCode", $this->ifscCode);
        $stmt->bindParam(":accountNum", $this->accountNum);
        $stmt->bindParam(":phonePayNum", $this->phonePayNum);
        $stmt->bindParam(":googlePayNum", $this->googlePayNum);
        $stmt->bindParam(":updatedOn", $this->updatedOn);
        $stmt->bindParam(":updatedBy", $this->updatedBy);   
      
        // execute query
        if($stmt->execute()){
            return true;
        }
      
        return false;
          
    }


   function delete_exam(){
  
    // delete query
    $query = " DELETE FROM " . $this->table_name . " 
    WHERE id= ? ";
  
    // prepare query
    $stmt = $this->conn->prepare($query);
  
    // sanitize
    $this->id=htmlspecialchars(strip_tags($this->id));
  
    // bind id of record to delete
    $stmt->bindParam(1, $this->id);
  
    // execute query
    if($stmt->execute()){
        return true;
    }
  
    return false;
}


 }
?>