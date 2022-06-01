<?php
session_start();
$matiere = 0;
if(isset($_GET['id'])){
	$matiere = (int)$_GET['id'];
}
include('includes/bdd.php');


$req  = $bdd->query('SELECT * FROM forum WHERE matiere_id = ' . $matiere);
$results = $req->fetchAll(PDO::FETCH_ASSOC);
        echo '
                <form action="forum">
                        <input type="submit" value="Retour" />
                    </form>';
		echo'<h3>Topics</h3>';
foreach ($results as $result) {
	echo '<a style="text-decoration:none;" class="linked" href="#" onclick="AfficherTopic('.$result['id'].')">'.$result['topic'].'</a> <br>  ';
	
}



exit;
?>
<style>
.linked{
    color: #000;
    margin-right: 10px;
    border-bottom: 1px solid #000;
    padding-bottom: 5px;
    display:flex;
    flex-wrap:wrap;
    justify-content: center;
    align-items: center;
    border: 3px solid #6f6f6f;
}

</style>
