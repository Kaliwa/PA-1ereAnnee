<?php session_start();?>
<!DOCTYPE html>
<html>
<?php
$title = 'Forum';
include('includes/head.php');
include('includes/header.php');?>

<body>


<?php include('includes/message.php');

include('includes/bdd.php');
$req  = $bdd->query('SELECT * FROM matiere');
$results = $req->fetchAll(PDO::FETCH_ASSOC);

?>


<section>
 <h6 class="titre">Bienvenue dans notre forum</h6> 
</section>
<section id="sect1">



<form action="verifnewtopic.php" method="post">
<textarea name="topic"  placeholder="Topic" id="topic"></textarea>
<textarea name="message"  placeholder="Votre message" id="zmessage"></textarea>
<label for="matiere-select">Choisissez une matière :</label>

<select name="matiere" id="matiere-select">
  <option id="null" value="#">#</option>
    <?php
    foreach ($results as $res) {
     echo '<option  id="'.$res['nom'].'" value="'.$res['nom'].'">'.$res['nom'].'</option>';
    }
     
  ?>
    
</select>
<input type="submit" name="envoyer" value="Envoyer" class="btn2">
</form>

</section>


<?php include('includes/footer.php');?>














</body>



<style>

h6{

  color: white;
  font-family: 'Roboto-Condensed';
  font-size: 30px;
}

 
.titre{
  line-height: 80px;
  margin-left: 290px;
  text-align: center;
  margin-right: 290px;
  background-color: indigo;
  border:solid 2px black;
  
}

.btn2{
  width: 150px;
  height: 30px;
  font-family: Roboto-condensed;
  font-size: 16px;
    float: right;
    border:none;
    border-radius: 6px;
    color: white;
    margin-top: 20px;
    background-color: indigo;
    margin: 5px;
    }

#sect1{
  width: 60%;
  height:auto;
  margin-top: 20px;
  padding: 50px;
  margin-right: auto;
  margin-left: auto;  
    }
    #div1 img{
    margin-right: 10px;
    width: 40px;
    height: 40px;
    border-radius:50px;
    float: left;
    }
    #div2{
      width: 100%;
      height: auto;
      padding: 15px;
      background-color: #a4defd;
      margin: 10px;
    }
    #zmessage{
      font-family: Roboto-Condensed;
      width: 100%;
      height: 180px;
      padding: 15px;
      margin: 10px;
      font-size:16px;
    }

nav{
    display:flex;
    flex-wrap:wrap;
    justify-content: center;
    align-items: center;
    border-bottom: 5px solid #6f6f6f;
}
nav h1{
    color: #717171;
    font-family: 'Roboto-Condensed';
    font-size: 30px;
}
nav .onglets{
    margin-top: 3px;
    margin-left: 300px;
}
nav .onglets a{
    text-decoration: none;
    color: #000;
    margin-right: 10px;
    border-bottom: 1px solid #000;
    padding-bottom: 5px;
}

</style>
















</html>

