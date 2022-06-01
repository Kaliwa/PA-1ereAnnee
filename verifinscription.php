<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

if(isset($_POST['email']) && !empty($_POST['email'])){
	setcookie('email', $_POST['email'], time() + (24 * 60 * 60));
}
if(!isset($_POST['email']) || empty($_POST['email']) || !isset($_POST['password']) || empty($_POST['password'])){
	header('location:connexion?message=Vous devez remplir les 2 champs.&type=danger');
	exit;
}


if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	header('location:connexion?message=Email invalide.&type=danger');
	exit;
}

include('includes/bdd.php');

$q = 'SELECT email FROM users WHERE email =?';
$req = $bdd->prepare($q);
$req->execute([$_POST['email']]);

$result = $req->fetch();

if($result !== false){
	header('location:connexion?message=Email déjà utilisé.&type=danger');
	exit;
}

$q = 'SELECT pseudo FROM users WHERE pseudo =?';
$req = $bdd->prepare($q);
$req->execute([$_POST['pseudo']]);

$result = $req->fetch();

if($result !== false){
	header('location:connexion?message=Pseudo déjà utilisé.&type=danger');
	exit;
}


$pass_hache = htmlspecialchars($_POST['password']);

if(strlen($_POST['password']) < 8 || preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', ($pass_hache))){
	header('location:connexion?message=Mot de passe contient plus 8 caractères,une majuscule,une minuscule,un chiffre.&type=danger');
	exit;
}

/*if(strlen($_POST['password']) < 8 || (strlen($_POST['password']) >12)){}*/

$longueurkey = 12;
$key = "";
for($i = 1; $i<$longueurkey; $i++){
	$key .= mt_rand(0,9);
}

$email = htmlspecialchars($_POST['email']);
$pseudo = htmlspecialchars($_POST['pseudo']);
$password = htmlspecialchars(hash('sha256', $_POST['password']));

$req = $bdd->prepare('INSERT INTO users(email, pseudo, password, confirmkey) VALUES ( ?, ?, ?, ?)');

$reponse = $req->execute(array($email, $pseudo, $password,$key));

if($reponse){
	header('location:email.php');
	include('mails.php');
	exit;
}else{
	header('location:connexion?message=Erreur lors de la création du compte.&type=danger');
	exit;
}


?>