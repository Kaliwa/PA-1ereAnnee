<?php
session_start();
$topic = 0;
if(isset($_GET['id'])){
	$topic = (int)$_GET['id'];
}
include('includes/bdd.php');



$e ='SELECT * FROM forum WHERE id = ?';
$req = $bdd->prepare($e);
$req->execute(array($topic));
$reponse = $req->fetch(PDO::FETCH_ASSOC);

$userid = $reponse['id_users'];

$q = 'SELECT * FROM users WHERE id = ?';
$req = $bdd->prepare($q);
$req->execute(array($userid));
$user = $req->fetch(PDO::FETCH_ASSOC);

$request  = $bdd->query('SELECT * FROM forum WHERE id = ' . $topic);
$resultat = $request->fetch(PDO::FETCH_ASSOC);

echo '
                <form>
                        <input onclick="Afficher('.$resultat['matiere_id'].')" type="submit" value="Retour" />
                    </form>';

	echo '
	
	<br><h3 style="margin-left:auto;margin-right:auto;">'.$reponse['description'].'</h3>
	 	
			<div style="margin-left:auto;margin-right:auto;" class="linked row align-items-center">
				<div class="col-6">
				<p>Utilisateur : '.$user['pseudo'].'</p>
				</div>
				<div class="col-6">
				<p>Date : ' .$reponse['date_heure'].'</p>
				</div>
			</div>
		



	';
	
	
include('apimessages.php');







exit;
?>