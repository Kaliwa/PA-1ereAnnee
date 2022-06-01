<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
include('../includes/bdd.php');

if(isset($_GET['info'])){

	$info = "'".$_GET['info']."'";

	
	$q = 'SELECT * FROM users WHERE pseudo = '. $info;
	$req = $bdd->query($q);
	$result = $req->fetch(PDO::FETCH_ASSOC);
	
	//var_dump($result);

	


		
		echo $result['email'];

		
	
	
}



?>