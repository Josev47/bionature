<?php

 require_once 'config/config.php';

 class Connect extends PDO{
  private $conn;

  public function __construct(){
    $connString = 'mysql:host='._DB_HOST_.';dbname='._DB_NAME_.';charset=utf8';
  

    try {
      $this->conn = new PDO($connString, _DB_USER_, _DB_PASS_);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    catch(PDOException $e) {
      die ('Conexión fallida: '.$e->getMessage());
    }
  }
  public function Conn(){
    return $this->conn;
  } 
 }

?>