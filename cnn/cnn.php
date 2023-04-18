<?php
class cnn{
private $host  = 'localhost';
private $user  = 'root';
private $password   = "";
private $database  = "php_factura";

private $dbConnect = false;
private $conn = null;
public function getdbC(){
    return $this->dbConnect;
}
  public function __construct(){

          $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database);

          if($this->conn->connect_error){
              die("Error failed to connect to MySQL: " . $this->conn->connect_error);
              exit;
          }else{
              $this->dbConnect = $this->conn;
          }


  }
}
  ?>
