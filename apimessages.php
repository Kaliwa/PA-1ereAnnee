<?php
$messages = 0;
if(isset($_GET['id'])){
	$messages = (int)$_GET['id'];
}
include('includes/bdd.php');


$req = $bdd->prepare('SELECT * FROM message, users WHERE message.id_forum = ? AND message.id_users = users.id');
$req->execute(array($messages));
$results = $req->fetchAll(PDO::FETCH_ASSOC);

$req = $bdd->prepare('SELECT * FROM users WHERE email = ?');
$req->execute(array($_SESSION['email']));
$resultat = $req->fetch(PDO::FETCH_ASSOC);

$useridpost = $resultat['id'];


foreach ($results as $result) {
	echo '<div style="margin-left:auto;margin-right:auto;" class="linked row align-items-center">
				<div class="col-3">
				<p class="pseudo">'.$result['pseudo'].'</p>
				</div><div class="col-9"></div>
				<div class="col-12">
				<p>' .$result['message_body'].'</p>
				</div>
			</div>' ; 
}





echo '<form class="formforum" name="answerform" method="POST" action="repondforum.php">
				<input name="answer" placeholder="Répondre">
				<input name="message" type="hidden" value="'.$messages.'">
				<input name="userpost" type="hidden" value="'.$useridpost.'">
				<button type="submit">Envoyer</button>
		  </form>';

exit;


?>
