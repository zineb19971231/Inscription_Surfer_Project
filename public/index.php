<?php
session_start();
require_once('../config/database.php');
require_once('../App/models/User.php');
require_once ('../App/controllers/AuthController.php');

$database = new Database();
$db = $database-> Connection();

$userModel= new User($db);
$authController= new AuthController($userModel);
$action = $_GET['action'] ?? 'register';


require_once ('../App/views/layout/header.php');

if($action === 'register'){
    $authController ->ShowRegisterForm();
}elseif($action === 'saveRegister'){
    $authController -> saveRegister();
}elseif($action === 'login'){
    $authController ->ShowloginForm();
}elseif($action === 'home'){
    $authController-> ShowHome();}

require_once '../App/views/layout/footer.php';

































// if ($data) {
//     echo " Connexion établie avec succès à la base de données !";
// } else {
//     echo " La connexion a échoué.";
// }



?>