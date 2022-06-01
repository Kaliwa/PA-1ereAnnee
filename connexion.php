<!DOCTYPE html>
<html>
    <?php 
    $title='Connexion';
    include('includes/head.php');
    ?>
<body class="fond2">
      <?php include('includes/message.php');?>
    <div class="forms-wrapper">
  
    
        <form class="form-login" action="verifconnex.php" method="post">
            <h2>Connexion</h2>            
            <input type="email" name="email" placeholder="email">
            <input type="password" name="password" placeholder="mot de passe">
      
      
            <input id="login-btn" type="submit" name="submit1" value="Se connecter">
        </form>
        <form class="form-signup" action="verifinscription.php" method="post">
            <h2>Inscription</h2>
            <input type="email" name="email" placeholder="email">
            <input type="text" name="pseudo" placeholder="pseudo">
            <input type="password" name="password" placeholder="mot de passe">
            <input id="join-btn" type="submit" name="submit2" value="S'inscrire">
        </form>
    
    
    </div>

  </body>
 


</html>
<style>
    







.forms-wrapper {
  display: flex;
  height: 100vh;
}


.form-login {
  width: 50%;
  padding: 2.5rem;
  background-image: url("https://images.pexels.com/photos/3473569/pexels-photo-3473569.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
  
  display: flex;
  flex-direction: column;
  align-items: center;
  padding-top: 6.9rem;
}

.form-signup {
  width: 50%;
  padding: 2.5rem;
  background-image: url("https://images.pexels.com/photos/2387793/pexels-photo-2387793.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");

  display: flex;
  flex-direction: column;
  align-items: center;
  padding-top: 6.9rem;
}

input::placeholder {
  color: white;
}

form > input[type = "email"], form > input[type = "password"] {
    border:0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid white;
    padding: 14px 10px;
    width: 200px;
    outline: none;
    color: white;
    border-radius: 24px;
    
  }

  form > input[type = "email"]:focus, form > input[type = "password"]:focus{
    width: 280px;
    border-color: white;
  }
 

form > input[type = "text"],form > input[type = "password"]{
    border:0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid white;
    padding: 14px 10px;
    width: 200px;
    outline: none;
    color: white;
    border-radius: 24px;
    
  }

  form > input[type = "text"]:focus,form > input[type = "password"]:focus{
    width: 280px;
    border-color: white;
  }

  form > input[type = "submit"]{
    border:0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid white;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    cursor: pointer;
  }


  form > input[type = "submit"] {
    border:0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    padding: 14px 40px;
    outline: none;
    color: white;
    cursor: pointer;
    border-color: white;
    border-radius: 24px;
    border-width: 0.12rem;
    border-style: solid;
  }
  
  #join-btn:hover{
    background-color: indigo;
    border-width: 0rem;
  }
  
  #login-btn:hover {
    background-color: #3d84b8;
    border-width: 0rem;
  }



  h2{
    color:white;

</style>