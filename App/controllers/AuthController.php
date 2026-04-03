<?php 
require_once('../App/models/User.php');

class AuthController{
    private $User;
    public function __construct($User){
        $this->User = $User;
    }

    function ShowRegisterForm(){
        require_once('../App/views/auth/register.php');
    }
    function ShowloginForm(){
        require_once('../App/views/auth/login.php');
    }
    function ShowHome(){
        require_once('../App/views/home.php');
    }
    function saveRegister(){
        if($_SERVER['RESQUEST_METHOD'] === 'POST'){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['psw'];
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            $sucess = $this->User->register($username, $email , $hashed_password);
            if($sucess){
                header('location: index.php?action=login');
                exit();
            }else {
                echo "Erreur lors de l'inscription.";
            }
        }
    }
}













?>