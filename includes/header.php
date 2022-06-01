<header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <div class="container">
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavDropdown">
	      <ul id="coursID" class="navbar-nav bg-dark">

			<?php
			if(isset($_SESSION['email'])){
				// L'utilisateur est connecté
				$active = ($title == 'Home') ? 'active' : '';
				echo '<li class="nav-item"><a class="nav-link ' .$active. '" href="home">Home</a></li>';
				
				$active = ($title == 'Forum') ? 'active' : '';
				echo '<li class="nav-item"><a class="nav-link ' .$active. '" href="forum">Forum</a></li>';
				
				$active = ($title == 'Cours') ? 'active' : '';
				echo '<li class="nav-item"><a class="nav-link ' .$active. '" href="Cours.php">Cours</a></li>';
				
				
				$active = ($title == 'About') ? 'active' : '';
				echo '<li class="nav-item"><a class="nav-link ' .$active. '" href="about">About</a></li>';
				$active = ($title == ''.$userinfo['pseudo'].'') ? 'active' : '';
				echo '<li class="nav-item"><a class="nav-link ' .$active. '" href="profil">Profil</a></li>';
				$active = ($title == 'Déconnexion') ? 'active' : '';
				echo '<li class="nav-item"><a class="nav-link ' . $active. ' " href="deconnexion">Déconnexion</a></li>';
			}
			?>
			<form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" onkeyup="showResult(this.value)">
		      <div id="livesearch"></div>
		    </form>
	      </ul>
	    </div>
	  </div>
	</nav>
</header>

<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","https://www.techclass.fr/livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>

<style>

#coursID ul {
  padding:0;
  margin:0;
  list-style: none;
  text-align: center;
  color : #fff;
      background-color: #000000;
}
 
#coursID li {
  display:inline-block;
  vertical-align: top;
  position: relative;
}
#coursID li li {
  display:inherit;
}
#coursID a, #coursID span {
  display:block;
  padding:5px 50px;
  text-decoration: none;
  color:#fff;
  font-family:arial;
}
#coursID ul li a, #menu ul li span {
  padding:5px 8px;
}
#coursID ul {
  position: absolute;
  z-index: 1000;
  min-width:100%;
  white-space: nowrap;
  text-align: left;
}
#coursID ul ul {
  left:100%;
  top:0;
  overflow: hidden;
  max-width: 0;
  min-width: 0;
  transition: 0.3s all;
}
#coursID ul li:hover ul {
  max-width: 30em;
}
#coursID ul li {
  max-height:0;
  overflow: hidden;
  transition:all 0.8s;
}
#coursID li li li {
  max-height: inherit;
}
#coursID li:hover li {
  max-height: 15em;
  overflow: visible;
}
</style>