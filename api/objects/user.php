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
        from " .$this->table_name. " as user LEFT JOIN " .$this->user_account ." as ua ON user.id=ua.userId where user.status=1 and user.userType=:userType and userEmail=:userEmail";
        $stmt = $this->conn->prepare($query); 
        $stmt->bindParam(":userType", $this->userType);
        $stmt->bindParam(":userEmail", $this->userEmail);
        $stmt->execute();
        return $stmt;
    }

    public function read_exam_details(){
        $query="Select  id, exam_name, type, age, total_post, eligibility, amount, status, exam_date_start, exam_date_end, result_date, admit_card_date, created_by, created_on
        from " .$this->table_name . " where exam_name=:exam_name";
        $stmt = $this->conn->prepare($query); 
        $stmt->bindParam(":exam_name", $this->exam_name);
        // $stmt->bindParam(":id", $this->id);
        $stmt->execute();
        return $stmt;
    }

     public function read_payment_varify_details(){
       $query="Select  reg.id,reg.full_name,reg.registration_no,dob,mobile,reg.exam_name,amount,reg.status,
        reg.created_on, reg.created_by from " .$this->table_registration . " as reg left join "
         . $this->table_name . " as exam on reg.exam_name=exam.exam_name 
        where reg.registration_no=:registration_no and reg.mobile=:mobile";
        $stmt = $this->conn->prepare($query); 
        $stmt->bindParam(":registration_no", $this->registration_no);
        $stmt->bindParam(":mobile", $this->mobile);
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



    function update_exam(){
  
        // query to insert record
       $query = "UPDATE 
                    " . $this->table_name . "
                SET
                   exam_name=:exam_name,
                   type=:type,
                   amount=:amount, 
                   eligibility=:eligibility,
                   age=:age,
                   total_post=:total_post,
                   exam_date_start=:exam_date_start,
                   exam_date_end=:exam_date_end,
                   result_date=:result_date,
                   admit_card_date=:admit_card_date,
                   status=:status,
                   updated_on=:updated_on,
                   updated_by=:updated_by 
                   where id=:id";
                          
        // prepare query
        $stmt = $this->conn->prepare($query);
        $this->exam_name=htmlspecialchars(strip_tags($this->exam_name));
        $this->type=htmlspecialchars(strip_tags($this->type));
        $this->amount=htmlspecialchars(strip_tags($this->amount));
        $this->age=htmlspecialchars(strip_tags($this->age));
        $this->total_post=htmlspecialchars(strip_tags($this->total_post));
        $this->eligibility=htmlspecialchars(strip_tags($this->eligibility));
        $this->exam_date_end=htmlspecialchars(strip_tags($this->exam_date_end));
        $this->exam_date_start=htmlspecialchars(strip_tags($this->exam_date_start));
        $this->admit_card_date=htmlspecialchars(strip_tags($this->admit_card_date));
        $this->result_date=htmlspecialchars(strip_tags($this->result_date));
        $this->status=htmlspecialchars(strip_tags($this->status));
        $this->updated_on=htmlspecialchars(strip_tags($this->updated_on));
        $this->updated_by=htmlspecialchars(strip_tags($this->updated_by));
        
        
        //bind values
        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":exam_name", $this->exam_name);
        $stmt->bindParam(":type", $this->type);
        $stmt->bindParam(":amount", $this->amount);
        $stmt->bindParam(":age", $this->age);
        $stmt->bindParam(":total_post", $this->total_post);
        $stmt->bindParam(":eligibility", $this->eligibility);
        $stmt->bindParam(":exam_date_end", $this->exam_date_end);
        $stmt->bindParam(":exam_date_start", $this->exam_date_start);
        $stmt->bindParam(":admit_card_date", $this->admit_card_date);
        $stmt->bindParam(":result_date", $this->result_date);
        $stmt->bindParam(":status", $this->status);
        $stmt->bindParam(":updated_on", $this->updated_on);
        $stmt->bindParam(":updated_by", $this->updated_by);
        
      
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