<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
try{
	$bdd = new PDO('mysql:host=localhost:3306;dbname=', '', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e){
	die('Erreur : ' . $e->getMessage());
}

?>