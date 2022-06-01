<?php include('includes/bdd.php'); ?>
<?php
	$uploaddir = '/home/techclass/uploads/';
	$NOM = basename($_FILES['userfile']['name']);
	$uploadfile = $uploaddir . $NOM;

	echo '<pre>';
	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
		echo "Le fichier est valide, et a été téléchargé
			   avec succès. Voici plus d'informations :\n";
		
		$ID_LESSON = $_GET['ID_LESSON'];
		$cours_intro = $_GET['cours_intro'];
		$id_matiere = $_GET['id_matiere'];

		$PATH = $uploadfile;
		
		$MIME = mime_content_type($PATH);
		
		
		
		//$fp = fopen($_FILES['userfile']['tmp_name'], 'r');
		//$blob = fread($fp, filesize($_FILES['userfile']['tmp_name']));
		//$blob = addslashes($blob);
		//fclose($fp);
		
		//$blob = addslashes(file_get_contents($_FILES['userfile']['tmp_name']));
		$blob = fopen($PATH, 'rb');
		
		$req = $bdd->prepare('INSERT INTO DOCUMENTS(NOM, ID_LESSON, PATH,DOC,MIME,SIZE) VALUES(:NOM,:ID_LESSON,:PATH,:DOC,:MIME,:SIZE)');
		$req->bindParam(':NOM', $NOM);
		$req->bindParam(':ID_LESSON', $ID_LESSON);
		$req->bindParam(':PATH', $PATH);
        $req->bindParam(':DOC', $blob, PDO::PARAM_LOB);
		$req->bindParam(':MIME', $MIME);
		$req->bindParam(':SIZE', $_FILES['userfile']['size']);
		$rep = $req->execute();
		
		header('location:Module.php?ID_LESSON='.$ID_LESSON.'&id_matiere='.$id_matiere.'&cours_intro='.$cours_intro);
		
	} else {
		echo "Attaque potentielle par téléchargement de fichiers.
			  Voici plus d'informations :\n";
	}

	echo 'Voici quelques informations de débogage :';
	echo $_FILES['userfile']['name'];
	print_r($_FILES);

	echo '</pre>';

?>