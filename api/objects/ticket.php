<?php
class Ticket{

    private $conn;
    private $table_name = "ticket";

    public $id, $ticketAmount, $status, $lotaryNum, $lotaryAmount, $createdOn, $createdBy;

    public function __construct($db){
        $this->conn = $db;
    }

    function insertTicket(){
  
        // query to insert record
    $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                         ticketAmount=:ticketAmount,
                         lotaryAmount=:lotaryAmount,
                         lotaryNum=:lotaryNum,
                         status=:status, 
                         createdOn=:createdOn,
                         createdBy=:createdBy
                    "; 
                          
        // prepare query
        $stmt = $this->conn->prepare($query);
        $this->ticketAmount=htmlspecialchars(strip_tags($this->ticketAmount));
        $this->lotaryAmount=htmlspecialchars(strip_tags($this->lotaryAmount));
        $this->lotaryNum=htmlspecialchars(strip_tags($this->lotaryNum));
        $this->status=htmlspecialchars(strip_tags($this->status));
        $this->createdOn=htmlspecialchars(strip_tags($this->createdOn));
        $this->createdBy=htmlspecialchars(strip_tags($this->createdBy));
        
        //bind values
        $stmt->bindParam(":ticketAmount", $this->ticketAmount);
        $stmt->bindParam(":lotaryAmount", $this->lotaryAmount);
        $stmt->bindParam(":lotaryNum", $this->lotaryNum);
        $stmt->bindParam(":status", $this->status);
        $stmt->bindParam(":createdOn", $this->createdOn);
        $stmt->bindParam(":createdBy", $this->createdBy);
    
       
      
        // execute query
        if($stmt->execute()){
            return true;
        }
      
        return false;
          
    }
    function read_notice_maxId(){
        $query="Select max(id) as id from " . $this->table_name ."";
        $stmt = $this->conn->prepare($query); 
        $stmt->execute();
        return $stmt;
    }

    function readTicketDetails(){
        $query="Select 
        id, ticketAmount, lotaryAmount, lotaryNum, status, createdOn, createdBy from " .$this->table_name." where status=1";
        $stmt = $this->conn->prepare($query); 
        // $stmt->bindParam(":id", $this->id);
        $stmt->execute();
        return $stmt;
    }

  function deleteTicket(){
  
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