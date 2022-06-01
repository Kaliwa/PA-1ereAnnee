<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php 
$title='TechClass';
include('includes/head.php');
?>



<body class="fond">
	<?php include('includes/message.php') ?>

    <h1>Bienvenue à TechClass</h1>
    

    <a href="connexion" class="button">Let's go !</a>

    


</body>

<style>
	.fond{
 background-image: url("https://cdn.pixabay.com/photo/2015/06/08/15/11/typewriter-801921_960_720.jpg");
 height: 80vh;
 background-position: center;
 background-size: cover;
 display: flex;
 flex-direction: column;
 justify-content: center;
 align-items: center;
 text-align: center;
 padding: 20px;
}
.button {
    font-size: 18px;
    text-decoration: none;
    color: white;
    border: white 2px solid;
    padding: 20px;
    border-radius: 10px;
    margin-top: 20px;
    background-color: black;

    
}

.button:hover {
 color: black;
 background-color: white;
 cursor: pointer;
}

h1{
   font-size: 60px;
   color: white;
   padding-top: 75px;
   background-color: black;
   border: black 2px solid;
    padding: 20px;
    border-radius: 10px;
    text-decoration: none;

}




</style>





</html>