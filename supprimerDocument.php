<?php
session_start(); ?>
<!DOCTYPE html>
<html>
<?php
$title = 'Cours';
include('includes/head.php');
include('includes/header.php');

?>
	
	<body>


		<?php include('includes/bdd.php'); ?>
		<?php
			$ID_DOC = $_GET['ID_DOC'];
			$ID_LESSON = $_GET['ID_LESSON'];
			$cours_intro = $_GET['cours_intro'];
			$id_matiere = $_GET['id_matiere'];
			
			$req = $bdd->prepare('DELETE FROM DOCUMENTS WHERE ID_DOC='.$ID_DOC);
			$rep = $req->execute();
			

			header('location:Module.php?ID_LESSON='.$ID_LESSON.'&cours_intro='.$cours_intro.'&id_matiere='.$id_matiere.'');


//header('Location: /ModulesCours.php?id_matiere='.$id_matiere.'&nomCours='.$nomCours.');      
		
		?>

    </body>
	<?php include('includes/footer.php'); ?>
	<script type="text/javascript">
		function Afficher(matiere){
			var xhr = new XMLHttpRequest();
			xhr.open('GET', 'https://techclass.fr/api.php?id='+matiere);
			xhr.onload = function(){
				if(xhr.status === 200){

					document.getElementById('reponse').innerHTML = xhr.responseText;
				}else{
					alert('Request Failed' + xhr.status);
				}
			};
			xhr.send();
}

		function AfficherTopic(topic){
			var xhr = new XMLHttpRequest();
			xhr.open('GET', 'https://techclass.fr/apitopic.php?id='+topic);
			xhr.onload = function(){
				if(xhr.status === 200){

					document.getElementById('reponse').innerHTML = xhr.responseText;
				}else{
					alert('Request Failed' + xhr.status);
				}
			};
			xhr.send();
}
		function AfficherMessages(messages){
			var xhr = new XMLHttpRequest();
			xhr.open('GET', 'https://techclass.fr/apimessages.php?id='+messages);
			xhr.onload = function(){
				if(xhr.status === 200){

					document.getElementById('reponse').innerHTML = xhr.responseText;
				}else{
					alert('Request Failed' + xhr.status);
				}
			};
			xhr.send();
}

	

	</script>
	





<style>
h3{
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
.formforum{
	display:flex;
    flex-wrap:wrap;
    justify-content: center;
    align-items: center;
}
img{
	padding-bottom: 50px;
	max-height: 400px ;
	max-width:400px ;
	display:flex;
    flex-wrap:wrap;
    justify-content: center;
    align-items: center;
}
body{
	max-height: 700px;
}
footer{
	min-width: 100%;
	position: absolute;
}
.center {
    color: #000;
    margin-right: 10px;
    padding-bottom: 5px;
    display:flex;
    flex-wrap:wrap;
    justify-content: center;
    align-items: center;
}

</style>

</html>