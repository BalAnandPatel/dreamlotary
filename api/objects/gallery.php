<?php
class Galley{

    private $conn;
    private $table_name = "imagegallery";

    public $id, $image_name, $created_on, $created_by;

    public function __construct($db){
        $this->conn = $db;
    }

    function insert_galleryimg(){
  
        // query to insert record
    $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                         created_by=:created_by, 
                         created_on=:created_on
                    "; 
                          
        // prepare query
        $stmt = $this->conn->prepare($query);
        $this->created_by=htmlspecialchars(strip_tags($this->created_by));
        $this->created_on=htmlspecialchars(strip_tags($this->created_on));
        
        //bind values
        $stmt->bindParam(":created_by", $this->created_by);
        $stmt->bindParam(":created_on", $this->created_on);
    
        // execute query
        if($stmt->execute()){
            return true;
        }
      
        return false;
          
    }
    function read_gallery_maxId(){
        $query="Select max(id) as id from " . $this->table_name ."";
        $stmt = $this->conn->prepare($query); 
        $stmt->execute();
        return $stmt;
    }

    function read_gallery(){
        $query="Select 
        id, created_on, created_by
        
        from " .$this->table_name;
        $stmt = $this->conn->prepare($query); 
        // $stmt->bindParam(":id", $this->id);
        $stmt->execute();
        return $stmt;
    }

  function delete_notification(){
  
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