<?php


 abstract class database_myadmin {
    private $cont;
    private $dsn;
    private $servername ;
    private $database;
    private $user;
    private $password;
    private $charset;
    private $stmt;
 

    //connect to database
public function __construct() {
$this->servername="localhost";    
$this->database="tour-packages";
$this->user="mahmoud";
$this->password="12345";
$this->charset="utf8mb4";
$this->dsn="mysql:host=". $this->servername . ";dbname=" . $this->database . ";charset=" . $this->charset;

try {

    $this->cont = new PDO($this->dsn,$this->user,$this->password); // mysql
    $this->cont->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
}catch(PDOException $e) {

 // Exit, displaying an error message
echo 'connection faild'.$e->getMessage();
}
    }
    
    
    public function bind($params = []){
        foreach ($params as $key => $value) {

            if (is_string($value))
                $type = PDO::PARAM_STR;
            elseif (is_int($value))
                $type = PDO::PARAM_INT;
            elseif (is_bool($value))
                $type = PDO::PARAM_BOOL;
            else
                $type = PDO::PARAM_NULL;
            
            $this->stmt->bindValue(':'.$key , $value , $type);
        }
        return $this;
    }
    
 
    /*
     * Fetch
     * You Can Use it To get One Row With Single Query
     */
    
    public function fetch(){
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    /*
     * Fetch All
     * You Can Use it To get All Rows As an array
     */
    
    public function fetchAll(){
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
//get row
    public function GetRow($col,$table,$other=null,$bind=[]){
        
        return $this->query($col,$table,$other)->bind($bind)->execute()->fetch();
        
    }
//get rows
   public function GetRows($col,$table,$other=null,$bind=[]){ 
    
       return $this->query($col,$table,$other)->bind($bind)->execute()->fetchAll();

    }
// insert row
    public function InsertRow($table , $colums , $values){
        $this->stmt = $this->cont->prepare("INSERT INTO $table ($colums) VALUES ($values)");
        return $this;
        
    }
// update row
    public function UpdateRow($table , $values ,$colum, $value){
        $this->stmt = $this->cont->prepare("UPDATE $table SET $values WHERE $colum = $value");
        return $this;
    }
// delet row
    public function DeletRow($table , $colum , $value){
        $this->stmt = $this->cont->prepare("DELETE FROM $table WHERE $colum = $value");
        return $this;
        
    }
    
    public function query($colum , $table , $other = null){
        $this->stmt = $this->cont->prepare("SELECT $colum FROM `$table` $other");
        return $this;
    }
    
    //check 
    public function lastInsertId(){
        return $this->cont->lastInsertId();
    }
    
    public function rowCount(){
        return $this->stmt->rowCount();
    }
    
 // ececute
        public function execute(){
        $this->stmt->execute();
        return $this;
    }
    
        public function close(){
        $this->cont = NULL;
    }
    
}
