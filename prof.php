<?php
session_start(); 
error_reporting(E_ALL);
ini_set("display_errors", 1);

?>
<!DOCTYPE html>
<html>
<?php 
$title = 'DEVENEZ PROFESSEUR !';
include('includes/head.php');
include('includes/bdd.php');
?>
	
	<body>
		<main>
		<div class="container">
			<div class="row align-items-center">
				<p>Pour devenir professeur nous demandons à chacun de prouver qu'il ou elle est bien un professeur. De ce fait nous vous demandons de bien vouloir nous adresser une preuve pour valider votre demande</p><br><br><br>
					<?php 
						$getemail = $_COOKIE['email'];
						$requser = $bdd->prepare('SELECT * FROM users WHERE email = ?');
						$requser->execute(array($getemail));
						$userinfo = $requser->fetch(PDO::FETCH_ASSOC);
					?>
								  	<div class="mb-2">

									    <label class="form-label">Devenez professeur :</label>

									    <?php
										echo '<form action="proform.php" method="post"  enctype="multipart/form-data">
										<input style="max-width:500px;" class="form-control" type="text" name="demand">
										<input type="hidden" name="id" value="'.$userinfo['id'].'">
										<input type="hidden" name="email" value="'.$userinfo['email'].'">
										<input class="form-control-file" type="file" name="file" ><br><br>
										<button class="btn btn-primary" name="button">Envoyer</button>
										</form>';
										?>
										
									</div>
								</div>	
		</div>
	</main>
	</body>
</html>