<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
include('includes/bdd.php');


$messages = htmlspecialchars($_POST['message']);
$useridmess = htmlspecialchars($_POST['userpost']);



$answer = $bdd->prepare('INSERT INTO message(message_body, id_users, id_forum) VALUES(?,?,?)');
$rep = $answer->execute(array(htmlspecialchars($_POST['answer']),$useridmess, $messages));

if($rep){
	header('location:forum?message=Bien envoyé !');
	exit;
}else{
	header('location:forum?message=Erreur lors de la génération de la réponse.&type=danger');
	exit;
}



?>
