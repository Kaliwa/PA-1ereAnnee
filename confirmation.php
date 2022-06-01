<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include('includes/bdd.php');	

if(isset($_GET['pseudo']) || $_GET['key'] || !empty($_GET['pseudo']) || !empty($_GET['key'])){
	$pseudo = htmlspecialchars(urldecode($_GET['pseudo']));
	$key = $_GET['key'];
	$requser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? AND confirmkey = ?');
	$requser->execute(array($pseudo, $key));

	$userexist = $requser->rowCount();

	if($userexist == 1 ){
		$user = $requser->fetch();
		if($user['confirmedkey'] == 0){
			$updateuser = $bdd->prepare('UPDATE users SET confirmedkey = 1 WHERE pseudo = ? AND confirmkey = ?');
			$updateuser->execute(array($pseudo, $key));
			include('includes/confirmed.php');
		}else{
			include('includes/already.html');
		}
	}else{
		include('includes/unknow.html');
	}

	}

?>