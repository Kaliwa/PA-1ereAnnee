<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);

include('includes/bdd.php');

if(isset($_COOKIE['email']))
{
	$getemail = $_COOKIE['email'];
	$requser = $bdd->prepare('SELECT * FROM users WHERE email = ?');
	$requser->execute(array($getemail));
	$userinfo = $requser->fetch();

	$email = $userinfo['email'];
	if(isset($_POST['button'])){
	if(isset($_FILES['image']) && !empty($_FILES['image']['name'])){
						//var_dump($_FILES['image']['type']);
							$image =[
								'image/jpeg',
								'image/png',
								'image/gif'
							];
						}
						if(!in_array($_FILES['image']['type'], $image)){
							header('location:profile.php?message=Le fichier n\'est pas du bon type&type=danger');
							exit;
						}

						$path= 'img_profile';
						if(!file_exists($path)){
							mkdir($path, 0777);
						}

						//var_dump($_FILES);

						$filename = $_FILES['image']['name'];

						$array = explode('.', $filename);

						$extension = end($array);
						$filename = 'profile-' . time() . '.' . $extension;

						$destination = $path . '/' . $filename;

						move_uploaded_file($_FILES['image']['tmp_name'], $destination);
                	

            		$q = 'UPDATE users SET image =  ? WHERE email = ?';
					$req = $bdd->prepare($q);
					$reponse = $req->execute(array($filename,$email));

					if($reponse){
					header('location:profile.php?message=Photo modifiée avec succès.&type=success');
					exit;
					}else{
						header('location:profile.php?message=Erreur lors du changement de photo.&type=danger');
						exit;	
					}
				}
				
?>
<!DOCTYPE html>
<html>
<?php
$title = $userinfo['pseudo'];
?>
	<?php include('includes/head.php'); ?>
	<?php include('includes/header.php'); ?>
<body>









	<div class="container">
		<!-- div class="container-fluid">
			<form action="changeprofil.php" method="post"  enctype="multipart/form-data">
				<button class="btn btn-primary" name="modify" >Modifier le profil</button>
			</form>
		</div> -->
			<div class="row align-items-center" style="padding:40px;">
				<div class="col-6">
				<?php if($userinfo['status'] == 3){
					echo '<div class="container-fluid">
						<form action="admin.php">
							<button class="btn btn-primary">Admin</button>
						</form>
						</div>';
				} ?>


				<?php echo '<h1 style="text-transform:uppercase;">' . $userinfo['pseudo'] . '</h1>' ?>
				<?php echo '<h4>' . $userinfo['email'] . '</h4>'?>
				<?php include('includes/message.php');?>

				<?php if($userinfo['status'] == 0){
					echo '<div class="container-fluid">
						<form action="prof.php">
							<button class="btn btn-primary">Devenez professeur</button>
						</form>
						</div>';
				} ?>

				</div>
			
			
				<div class="col-6">
				<?php if(isset($userinfo['image'])){ 
					echo '<img class="img-thumbnail" src="img_profile/'.$userinfo['image'].'" alt="Image de profil"'; 
								echo '
								<div class="form-group">
								  	<div class="mb-2">
									    <label class="form-label">Changez votre photo de profil :</label>
										<form style="max-width:170px;" action="" method="post"  enctype="multipart/form-data">
										<input style="max-width:150px;" class="form-control-file" type="file" name="image" accept="image/*"><br><br>
										<button class="btn btn-primary" name="button" >Mettre à jour la photo</button>
										</form>
									</div>
								</div>'
								;

							}?>
							</div>
						</div>
						
			</div>							
		</body>
		<?php include('includes/footer.php') ?>

<style >
	

input[type='file']{
	color: transparent;
}

</style>




</html>
<?php
}
?>