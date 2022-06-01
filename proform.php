<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);

include('includes/bdd.php');

$id = htmlspecialchars($_POST['id']);
$email = htmlspecialchars($_POST['email']);
$name = htmlspecialchars($_FILES['file']['name']);
$demand = htmlspecialchars($_POST['demand']);
if(!isset($_FILES['file']) || empty($_FILES['file']['name'])){
	header('location:prof.php?message=Veuillez mettre un fichier !');
	exit;
}else{
							
							$pattern = '#^.+\.([pP][dD][fF])$#';
							if(!preg_match($pattern, $name)){
								header('location:prof.php?message=Fichier du mauvais type ! Mettez un pdf !');
								exit;
							}


						$path= 'demandprof';
						if(!file_exists($path)){
							mkdir($path, 0777);
						}

						$filename = $_FILES['file']['name'];

						$array = explode('.', $filename);

						$extension = end($array);
						$filename = 'professeur-' . $id . '-' . $email . '.' . $extension;

						$destination = $path . '/' . $filename;

						move_uploaded_file($_FILES['file']['tmp_name'], $destination);


					$q = 'INSERT INTO waiting(demand, document, id_user) VALUES(?,?,?)';
					$req = $bdd->prepare($q);
					$reponse = $req->execute(array($demand,$filename,$id));

					if($reponse){
					header('location:profile.php?message=Demande bien envoyée !');
					exit;
					}else{
						header('location:prof.php?message=Erreur lors de la demande');
						exit;	
					}
				}



?>