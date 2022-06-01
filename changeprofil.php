<?php
session_start(); 
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<!DOCTYPE html>
<html>
<?php 
$title= 'Modifier le profil';
include('includes/head.php');
include('includes/bdd.php');
?>
	<body>
		<div class="container-fluid">
			<form action="profil" method="post"  enctype="multipart/form-data">
				<button class="btn btn-success" name="modify" >Revenir en arrière</button>
			</form>
		</div>


		<?php

			
				$email = $_SESSION['email'];
				$q = 'SELECT * FROM users WHERE email = ?';
				$req = $bdd->prepare($q);
				$req->execute(array($email));
				$result = $req->fetch(PDO::FETCH_ASSOC);

					echo '<h6>Changer de pseudo :</h6>';
					echo '<p>Pseudo : '. $result['pseudo'] .'</p>';
					echo '';
					echo '<h6>Changer d\'email :</h6>';
					echo '<p>Email :'. $result['email'] .'</p>';

					
 				


		


		?>




	</body>
</html>