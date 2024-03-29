<?php

require_once('new_config.php');

class Database{

public $connection;


function __construct(){
    $this->open_db_connection();
}

public function open_db_connection(){
    // $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME); // old procedureal way
     $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME); // new oop way
      if($this->connection->connect_errno){
      die("database connection failed badly" . $this->connection->connect_error);
  }

  }


    //this method query the database
    public function query($sql){

        // $result= mysqli_query($this->connection, $sql);/ old procedural way
 
        $result= $this->connection->query($sql); // oop way
        $this->confirm_query($result);
         return $result;
     }
 
     //confirm query method
 
     private function confirm_query($result){
         if(!$result){
             die("query failed".$this->connection->error);
         }
     }

     
// ths method escape our string to protect
// our query from sql injection and penetration

    public function escape_string($string){

        // $escaped_string=mysqli_escape_string($this->connection, $string); // procedureal way
         $escaped_string = $this->connection->real_escape_string($string); // oop method from mysqli
         return $escaped_string;
     }

     public function the_insert_id(){
        return mysqli_insert_id($this->connection);
    }

 




}

$database =new Database();
