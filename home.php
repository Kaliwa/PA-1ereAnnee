<?php
session_start(); ?>
<!DOCTYPE html>
<html>
<?php
$title = 'Home';
include('includes/head.php');
include('includes/header.php');
?>

<body>

      
   
<div class="landing-page">
  <div class="container">
    <div class="info">
      <h1>Cours & Exercice</h1>
      <p>Vous retrouverez des cours sur le langage C, l'architecture d'un ordinateur, celle d'un réseau et encore bien d'autres</p>
        <form action="Cours.php">
            <button>COURS</button>
        </form>
    </div>
    <div class="image">
      <img src="https://cdn.pixabay.com/photo/2018/05/21/23/32/education-3420037_960_720.png">
    </div>
    <div class="clearfix"></div>
  </div>
</div>








<div class="landing-page">
  <div class="container">
    <div class="info">
      <h1>Forum</h1>
      <p>Poser des questions et échanger entre vous !</p>
        <form action="forum">
            <button>FORUM</button>
        </form>
    </div>
    <div class="image">
      <img src="https://cdn.pixabay.com/photo/2015/02/22/17/46/forum-645246_960_720.jpg">
    </div>
    <div class="clearfix"></div>
  </div>
</div>















<!-- End Landing Page -->
</body>
<?php include('includes/footer.php'); ?>

<style>
  

* {
    box-sizing: border-box;
}

body {
    font-family: 'Roboto-Condensed';
}

.container {
    width: 1170px;
    padding-right: 15px;
    padding-left: 15px;
    margin: auto;
}

/* Start Landing Page */

.landing-page {
    position: relative;
    background-color: #FFF;
}

.landing-page .header-area {
    display: flex;
    padding: 25px 0 0;
    position: relative;
}

.landing-page .header-area .logo {
    text-transform: uppercase;
    font-style: italic;
    margin-top: 10px;
    font-size: 19px;
    width: 300px;
    color: #5d5d5d;
}

.landing-page .header-area .links {
    list-style: none;
    padding: 0;
    margin: 0;
    width: 100%;
    text-align: right;
}

.landing-page .header-area .links li {
    display: inline-block;
    margin-left: 30px;
    color: #5d5d5d;
    cursor: pointer;
}

.landing-page .header-area .links li:last-child {
    border: 0;
    border-radius: 20px;
    padding: 10px 18px;
    color: #FFF;
    background-color: #6c63ff;
}

.landing-page .info {
    width: 35%;
    float: left;
    margin-top: 130px;
}

.landing-page .info h1 {
    font-size: 44px;
    margin: 0 0 20px;
    line-height: 1.4;
    color: #5d5d5d;
}

.landing-page .info p {
    margin: 0;
    line-height: 1.6;
    font-size: 15px;
    color: #5d5d5d;
}

.landing-page .info button {
    border: 0;
    border-radius: 20px;
    padding: 12px 30px;
    margin-top: 30px;
    cursor: pointer;
    color: #FFF;
    background-color: #6c63ff;
}

.landing-page .image {
    width: 50%;
    float: right;
    margin-top: 35px;
}

.landing-page .image img {
    max-width: 100%;
}
























   <?php include('includes/footer.php');?>



</style>

</html>