<?php 

class Database{
 private $host = 'localhost';
 private $username= 'root';
 private $password = '';
 private $db_name = 'db_surf';
 private $conn; 
 public function Connection(){
    $this ->conn = 'null';
    try{
      $this ->conn = new pdo(
      "mysql:host=" .$this->host . ";dbname=" .$this->db_name ,
      $this->username,
      $this->password,
      );
      $this->conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $this->conn;
    }
    catch(PDOException $e){
      echo "Erreur de connexion : " . $e->getMessage();
      return false;
 }
 
 
}
}
$database = new Database();
$data = $database-> Connection();

if ($data) {
    echo " Connexion établie avec succès à la base de données !";
} else {
    echo " La connexion a échoué.";
}


?>