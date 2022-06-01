<?php
session_start();
?>


<!DOCTYPE html>
<html>
<?php
$title ='Admin';
include('includes/head.php');
include('includes/header.php'); ?>

<?php
include('includes/bdd.php');
if(isset($_GET['type']) AND $_GET['type'] == 'users') {
   if(isset($_GET['confirme']) AND !empty($_GET['confirme'])) {
      $confirme = (int) $_GET['confirme'];
      $req = $bdd->prepare('UPDATE users SET confirme = 1 WHERE id = ?');
      $req->execute(array($confirme));
   }
   if(isset($_GET['supprime']) AND !empty($_GET['supprime'])) {
      $supprime = (int) $_GET['supprime'];
      $req = $bdd->prepare('DELETE FROM users WHERE id = ?');
      $req->execute(array($supprime));
   }
} elseif(isset($_GET['type']) AND $_GET['type'] == 'message') {
   if(isset($_GET['approuve']) AND !empty($_GET['approuve'])) {
      $approuve = (int) $_GET['approuve'];
      $req = $bdd->prepare('UPDATE message SET approuve = 1 WHERE id = ?');
      $req->execute(array($approuve));
   }
   if(isset($_GET['supprime']) AND !empty($_GET['supprime'])) {
      $supprime = (int) $_GET['supprime'];
      $req = $bdd->prepare('DELETE FROM message WHERE id = ?');
      $req->execute(array($supprime));
   }
} elseif(isset($_GET['type']) AND $_GET['type'] == 'topics') {
   if(isset($_GET['confirme']) AND !empty($_GET['confirme'])) {
      $confirme = (int) $_GET['confirme'];
      $req = $bdd->prepare('UPDATE forum SET approuve = 1 WHERE id = ?');
      $req->execute(array($confirme));
   }
   if(isset($_GET['idtopic']) AND !empty($_GET['idtopic'])) {
      $idtopic = (int) $_GET['idtopic'];
      $req = $bdd->prepare('DELETE FROM forum WHERE id = ?');
      $req->execute(array($idtopic));
   }
} elseif(isset($_GET['type']) AND $_GET['type'] == 'prof') {
   if(isset($_GET['approuve']) AND !empty($_GET['approuve'])) {
      $confirme = (int) $_GET['approuve'];
      $res = $bdd->prepare('UPDATE users SET status=1 WHERE id = ?');
      $res->execute(array($confirme));
   }
   if(isset($_GET['supprime']) AND !empty($_GET['supprime'])) {
      $supp = (int) $_GET['supprime'];
      $req = $bdd->prepare('DELETE FROM waiting WHERE id = ?');
      $req->execute(array($supp));
   }
}

$users = $bdd->query('SELECT * FROM users ORDER BY id ASC ');
$message = $bdd->query('SELECT * FROM message ORDER BY id DESC ');
$topics = $bdd->query('SELECT * FROM forum ORDER BY id ASC');
$prof = $bdd->query('SELECT * FROM waiting ORDER BY id ASC');
?>
<body>
   <div class="container">
      <div class="row">
         <div class="col-6" style="float:none;margin:auto;">
   <h1 style="text-align: center;">Utilisateurs</h1>
      
      <?php while($m = $users->fetch()) { ?>
      <?= '<p class="linked">'. $m['id'] ?> :
      <?= $m['pseudo'] ?> - 
      <?php if($m['confirme'] == 0) { ?> - <a href="admin.php?type=users&confirme=<?= $m['id'] ?>"> <img alt="Qries" src="/images/confirm.png"
         width="20" height="20"></a>
      <?php } ?> <a href="admin.php?type=users&supprime=<?= $m['id'] ?>"> 
	  <img alt="Qries" src="/images/supprimer.png"
         width="20" height="20">
	  </a></p>
      <?php } ?>
   

   <h1 style="text-align: center;">Topics</h1>
       <?php while($t = $topics->fetch()) { ?>
      <?= '<p class="linked">'. $t['id'] ?> :
      <?= $t['topic'] ?> - 
      <?php if($t['approuve'] == 0) { ?> - <a href="admin.php?type=topics&confirme=<?= $t['id'] ?>"> <img alt="Qries" src="/images/confirm.png"
         width="20" height="20"></a>
      <?php } ?> <a href="admin.php?type=topics&idtopic=<?= $t['id'] ?>"> <img alt="Qries" src="/images/supprimer.png"
         width="20" height="20"></a></p>
      <?php } ?>

   
   <h1 style="text-align: center;">Commentaires</h1>

      <?php while($c = $message->fetch()) { ?>
      <?= '<p class="linked">' .$c['id'] ?> : <?= $c['id_users'] ?> : <?= $c['message_body']  ?>
      <?php if($c['approuve'] == 0) { ?> - <a href="admin.php?type=message&approuve=<?= $c['id'] ?>"><img alt="Qries" src="/images/confirm.png"
         width="20" height="20"></a>
      <?php } ?> <a href="admin.php?type=message&supprime=<?= $c['id']?>"><img alt="Qries" src="/images/supprimer.png"
         width="20" height="20"></a></p>
      <?php } ?>


   
   <h1 style="text-align: center;">Demandes professeur</h1>
      <?php while($p = $prof->fetch()) { ?>
      <?= '<p><a href="https://www.techclass.fr/demandprof/'.$p['document'].'" class="linked">'?><?= $p['id_user'] ?> : <?= $p['demand']  ?>
      <?php if($p['approuve'] == 0) { ?> - <a href="admin.php?type=prof&approuve=<?= $p['id_user'] ?>"><img alt="Qries" src="/images/confirm.png"
         width="20" height="20"></a>
      <?php } ?> <a href="admin.php?type=prof&supprime=<?= $p['id']?>"><img alt="Qries" src="/images/supprimer.png"
         width="20" height="20"></a></a></p> 
      <?php } ?>




   </div>
    </div>
</div>


</body>
<?php include('includes/footer.php'); ?>
</html>


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