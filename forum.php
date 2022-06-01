<?php
session_start(); ?>
<!DOCTYPE html>
<html>
<?php
$title = 'Forum';
include('includes/head.php');
include('includes/header.php');

?>
	
	<body>


    	<?php include('includes/bdd.php'); ?>
		<?php
			$req = $bdd->prepare('SELECT id, nom FROM matiere');
			$req->execute();

			$result = $req->fetchAll(PDO::ERRMODE_EXCEPTION);
			
			
		?>

    <?php include('includes/message.php'); ?>
    	<div class="container-fluid">
    		<div style="padding-top: 150px; padding-bottom: 150px;" class="container">
    			<div class="row align-items-center">
				<div class="col-6" id="reponse">
					<?php
						echo'<h3>Matières</h3>';
						foreach ($result as $key) {
				
			
    		echo '<a class="linked" style="text-decoration: none;" href="#" id="'.$key['id'].'" onclick="Afficher('.$key['id'].')">'. $key['nom'] .'</a><br>';
	}	

					?>
				</div>
				
				<div class="formforum col-6">
					<img class="thumbnail" src="images/forum.png">
					<form action="newforum.php">
					    <input type="submit" value="Créer un nouveau Topic" />
					</form>
				</div>
			</div>
		</div>
	</div>


	
			
			
		

		
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

</style>

</html>