<?php 

class user {

  private $db;
  function __construct($db)
  {
    $this->db = $db;
  }
 function register($username, $email , $hashed_password, $role='surfeur'){
    $sql = 'INSERT INTO users (username,email,psw,role) VALUES (:u,:e,:p,:r)';
    $stmt = $this -> db ->prepare ($sql);
    return $stmt -> execute ([
            'u' => $username,
            'e' => $email,
            'p' => $hashed_password,
            'r' => $role
    ]);
 }


 




}



?>