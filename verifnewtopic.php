<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);

if(!isset($_POST['topic']) || empty($_POST['topic']) || !isset($_POST['message']) || empty($_POST['message'])){
	header('location:forum.php?message=Remplissez tous les champs');
	exit;
}

if((strlen($_POST['topic']) < 6) || (strlen($_POST['topic']) > 40)){
	header('location:forum.php?message=Topic doit faire entre 6 et 40 caractères');
	exit;
}

if($_POST['matiere'] === '#'){
	header('location:forum.php?message=Veuillez sélectionner une matiere');
	exit;
}



include('includes/bdd.php');


$q = 'SELECT pseudo, id FROM users WHERE email =?';
$req = $bdd->prepare($q);
$req->execute([$_SESSION['email']]);

$result = $req->fetch();

$e ='SELECT id, nom FROM matiere WHERE nom = :nom';
$req = $bdd->prepare($e);
$req->execute([
	'nom' => $_POST['matiere']
]);

$reponse = $req->fetch();




$id = $result['id'];
$pseudo = htmlspecialchars($result['pseudo']);
$date_heure = date('Y-m-d H:i:s');
$topic = htmlspecialchars($_POST['topic']);
$message = htmlspecialchars($_POST['message']);


$matiere = $reponse['id'];

//var_dump($_POST['matiere']);
$q = $bdd->prepare('INSERT INTO forum(topic, description, id_users, matiere_id, date_heure) VALUES(?,?,?,?,?)');
$req = $q->execute(array($topic, $message, $id, $matiere, $date_heure));


if ($reponse === false){
    header('location:forum?message=Impossible de créer le topic');
    exit;
}else{
    header('location:forum?message=Topic créé avec succès');
    exit;
}?>