<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);

if(isset($_POST['email']) && !empty($_POST['email'])){
    setcookie('email', $_POST['email'], time() + (24 * 60 * 60));
}
if(!isset($_POST['email']) || empty($_POST['email']) || !isset($_POST['password']) || empty($_POST['password'])){
    header('location:connexion?message=Vous devez remplir les 2 champs.&type=danger');
    exit;
};
if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    header('location:connexion?message=Email invalide.&type=danger');
    exit;
}
include('includes/bdd.php');




$q ='SELECT id,status FROM users WHERE email = :email AND password = :password';
$req = $bdd->prepare($q);
$req->execute([
'email' => $_POST['email'],
'password' => hash('sha256',$_POST['password'])
]);

$reponse = $req->fetch(PDO::FETCH_ASSOC);


if ($reponse === false){
    header('location:connexion?message=Identifiants incorrects.&type=danger');
    exit;
}else{
    session_start();
    foreach ($reponse as $key) {
		$_SESSION['status'] = $key['status'];
	}
	$_SESSION['email'] = $_POST['email'];
	
    header('location:home');
    exit;
}?>