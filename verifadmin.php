<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);

if(isset($_POST['email']) && !empty($_POST['email'])){
    setcookie('email', $_POST['email'], time() + (24 * 60 * 60));
}
if(!isset($_POST['email']) || empty($_POST['email']) || !isset($_POST['password']) || empty($_POST['password'])){
    header('location:admin.php?message=Vous devez remplir les 2 champs.&type=danger');
    exit;
};
if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    header('location:admin.php?message=Email invalide.&type=danger');
    exit;
}
include('includes/bdd.php');


$q ='SELECT id FROM admin WHERE email = :email AND password = :password';
$req = $bdd->prepare($q);
$req->execute([
'email' => $_POST['email'],
'password' => hash('sha1', $_POST['password'])
]);

$reponse = $req->fetch();


if ($reponse === false){
    header('location:admin.php?message=Identifiants incorrects.&type=danger');
    exit;
}else{
    session_start();
    
    $_SESSION['email'] = $_POST['email'];
    header('location:homeadmin.php');
    exit;
}?>