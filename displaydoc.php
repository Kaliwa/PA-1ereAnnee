<?php include('includes/bdd.php'); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['ID_DOC'])) {
    $ID_DOC = htmlspecialchars($_GET['ID_DOC']);
    $query = "SELECT MIME,DOC,NOM,SIZE FROM DOCUMENTS WHERE ID_DOC = ".$ID_DOC;
    $stmt = $bdd->prepare($query);
    $stmt->bindColumn(1, $MIME);
    $stmt->bindColumn(2, $DOC);
	$stmt->bindColumn(3, $NOM);
	$stmt->bindColumn(4, $SIZE);
    if ($stmt->execute() === FALSE) {
        echo 'Could not display pdf';
    } else {
        $stmt->fetch(PDO::FETCH_BOUND);
        
		header("Content-length: ".$SIZE);
		header("Content-type: ".$MIME);
		header("Content-Disposition: attachment; filename=".$NOM);
		echo $DOC;
    }
}
?>