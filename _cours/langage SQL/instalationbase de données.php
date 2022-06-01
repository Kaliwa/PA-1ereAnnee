
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php
$title = 'Cours';
include('../../includes/head.php');
include('../../includes/header.php');
?>
    <body>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-11091363-7', 'sqlfacile.com');
ga('send', 'pageview');
</script>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Accueil</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/apprendre_bases_de_donnees/mysql_1" title="Apprendre MySQL">MySQL</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/apprendre_bases_de_donnees/sqlite_1" title="Apprendre SQLite">SQLite</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/apprendre_bases_de_donnees/postgresql_1" title="Apprendre PostgreSQL">PostgreSQL</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/apprendre_bases_de_donnees/premieres_requetes_sql_1" title="Apprendre SQL">SQL</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <div class="container">
            <div class="row">
    <div class="col-md-9">
<div id="seealso"></div>
<div class="book">
    <br>
    <br>
	<h1 class="h1">2.Installation d'une base de données</h1>
<h1 class="h2">2.1.Introduction</h1>
        <div>Si vous souhaitez utiliser une base de données vous devez:
        <table cellspacing="0" cellpadding="0" border="0"><tr><td><ul>
            <li>Soit disposer d'un accès à une base existante (ce qui peut être le cas par exemple si vous utiliser une base de données proposée par un hébergeur ou installée par un administrateur de votre équipe). Dans ce cas, vous devrez simplement récupérer les informations suivantes:
                <table cellspacing="0" cellpadding="0" border="0"><tr><td><ul>
                    <li>Nature de la base de données (MySQL, Oracle, etc.) ?</li>
                    <li>Nom ou adresse IP du serveur hébergeant cette base (et éventuellement port sur lequel le serveur tourne)</li>
                    <li>Nom de la base à laquelle vous avez accès</li>
                    <li>Nom d'utilisateur</li>
                    <li>Mot de passe</li>
                </ul></td></tr></table>
            </li>
            <li>Soit en installer une vous-même</li>
        </ul></td></tr></table>
        <table cellspacing="0" cellpadding="0" border="0" class="rem"><tr>
<td><ul>
            <li>Disposer d'une base de données déjà installée ne dispense pas nécessairement d'en installer une soi-même (sur sa propre machine). L'une (déjà installée) pouvant être la base de données de prod (i.e. la vraie) et l'autre (celle que vous installez) pouvant servir de base de test (sans que cela ne nécessite de connaissances pointues en administration de base de données. Tant pis pour l'optimisation voire la sécurité si c'est juste pour tester avec des données bidons pouvant êtres écrasées à tout moment</li>
        </ul></td>
</tr></table>
        </div>
        <div>Nous allons donc au fil des chapitres suivants vous indiquer comment installer les serveurs, mais aussi comment accéder (après éventuellement avoir installé des logiciels clients) aux bases de données suivantes:
            <table cellspacing="0" cellpadding="0" border="0"><tr><td><ul>
                <li>SQLite (dans ce cas, il n'y a pas de serveur)</li>
                <li>MySQL</li>
                <li>PostgreSQL</li>
            </ul></td></tr></table>
        </div>
    <h1 class="h1">3.Connexion à une base de données</h1>
    <h1 class="h2">3.1.Introduction</h1>
        <div>Pour vous connecter à une base de données vous aurez besoin d'un logiciel client adapté. Il existe trois grandes catégories de logiciels clients:
        <table cellspacing="0" cellpadding="0" border="0"><tr><td><ul>
            <li>Avec une interface en ligne de commande</li>
            <li>Avec une interface graphique (sous forme de client "lourd")</li>
            <li>Avec une interface web</li>
        </ul></td></tr></table>
        </div>
        <div>Les hébergeurs proposent généralement un accès web (souvent phpMyAdmin puisque, pour la plupart, ils proposent MySQL)</div>
     <h1 class="h1">4.MySQL</h1>
     <h1 class="h2">4.1.Présentation</h1>
        
        <div>MySQL et en l'occurence MySQL Community Server est une base de données multi-plateforme, libre, gratuite et pourtant très performante et offrant de nombreuses possibilités.</div>
        <div>Elle est très populaire auprès des concepteurs de site internet en PHP et est proposée par la plupart des hébergeurs web.</div>
    <h1 class="h2">4.2.Installation du serveur</h1>
        <div>Avant de vous lancer dans l'installation d'un serveur MySQL vous devez vous demander si c'est bien ce dont vous avez besoin. Si vous souhaitez simplement accéder à une base de données MySQL existante alors il vous suffit d'utiliser un client MySQL (après éventuellement l'avoir installé.</div>
        <div>Si vous utilisez MySQL pour la réalisation d'un site internet PHP/MySQL que vous installez chez un hébergeur, vous aurez sans doute, malgré tout,  besoin d'installer un serveur MySQL sur votre machine juste pour tester votre application avant de la mettre en ligne. Notez bien que si vous installez votre environnement de test à partir d'un kit d'installation (ex: Wamp) alors vraisemblablement un serveur MySQL est déjà installé.</div>
        <h1 class="h2">4.3.Installation d'un client</h1>
         <div>Pour vous connecter à une base de données MySQL (qu'elle soit installée sur votre poste de travail ou sur une machine distante) vous aurez besoin d'un logiciel client. Celui ci peut-être en ligne de commande, il peut disposer d'une interface graphique et être accessible via une interface web ou pas.</div>
            <li>une interface en ligne de commande pour MySQL</li>
            <li>une interface graphique avec MySQL Query Browser</li>
            
        </ul></td></tr></table>
        </div>
        <div>Si l'un de ces clients est déjà installé alors vous pouvez commencer directement à apprendre à utiliser
        <table cellspacing="0" cellpadding="0" border="0"><tr><td><ul>
            <li>l'interface en ligne de commande pour MySQL</li>
            <li>l'interface graphique avec MySQL Query Browser</li>
            <li>l'interface web avec phpMyAdmin</li>
        </ul></td></tr></table>
        </div>   
</div>
    </div>
    </div>
</div>
<div class="row">
<div class="col-md-2">
<ul class="pager">
</ul>
</div>
<div class="col-md-8">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
style="display:inline-block;width:728px;height:90px;"
data-ad-client="ca-pub-6434008488247541"
data-ad-slot="4697052032"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({
});
</script>
</div>
<div class="col-md-2">
<ul class="pager">
</ul>
</div>
</div>
            <hr>
        </div> <!-- /container -->
            </body>
<?php include('../../includes/footer.php');?>

<style>
*{


    margin: 0;
    padding: 0;


    font-family: "Roboto", sans-serif;
}

header a, header a:visited{
    text-decoration: none;
    color: white;
}

main, body{
    width: 100%;
    height: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden; 
}

main{
    position: relative;
    padding-bottom: 150px;
    top: 50px;
    min-height: 1000px;
}


header{
    
    position: fixed;
    width: 100%;
    z-index: 10;
    display: flex;

    background-color: #2B2C28;
    color: white;

    height: 50px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

nav > ul{
    display: flex;
    list-style: none;
}

header a{
    display: block;
    padding: 15px 25px;
}

li > a:hover{
    background-color: #293694;

}

article{
    position: relative;
    top: 50px;
}


table{
    padding: 25px 0px;
}

table {
    font-weight: bold;
  border-collapse: collapse;
  width: 100%;
}

table td, table th {
  border: 1px solid #ddd;
  padding: 8px;
}

table tr:nth-child(even){background-color: #f2f2f2;}

table tr:hover {background-color: #ddd;}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #3d9da3;
  color: white;
}


footer{
    position: relative;
    /* width: 100%;
    bottom: 0px; */
    background-color: #2B2C28;
    height: 150px;
    box-shadow: 0 4px 8px 8px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}



.title{
    display: flex;
    align-self: center;

    font-size: 20px;
    padding: 0px 15px;
}

.no-decoration{
    text-decoration: none;
}

.no-decoration:visited{
    text-decoration: none;
    color: unset;
}

.icon{
    height: 45px;
    position: relative;
    align-self: center; 
}

.menu{
    align-self: center;
    margin: 0 auto;
}

.message{
    display: table;
    position: relative;
    /* margin: 25px auto; */

    width: 100%;
    color: white;
}

.message-title{
    display: table-caption;
    text-align: center;

    padding: 15px 0; 

    opacity: 85%;

    color: white;

    background-color: inherit;
}

.message-icon{
    display: table-cell;
    vertical-align: middle;

    width: 30px;
    padding: 30px;

    font-size: 25px;

    text-align: center;
    background-color: rgba(0, 0, 0, 0.25);
}

.message-content{
    position: relative;
    display: table-cell;

    padding: 15px 0 30px 0;
    left: 25px;
    
    line-height: 1.2em;
    list-style: square;

    
}


.navLink{
    color: white;
}


.login{
    position: absolute;
    right: 0px;
}

.login:hover{
    background-color: green;
}


.background-img{
    width: 100%;
    /* height: 750px; */
    object-fit: cover;

    opacity: 66%;
}



.chapitre{
    margin: 0 auto;
    max-width: 90%;
}


.introduction{
    position: absolute;

    font-size: 25px;
    font-weight: bold;
    color: black;

    width: 50%;
    top: 50%;
    left: 25%;
}

.information{
  position: absolute;

    width: 5%;

    top: 52%;
    left: 18%;
}

.indent{
    position: relative;
    left: 30px;
}

.italic{
    font-style: italic;
}

.bold{
    font-weight: bold;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #4CAF50;
  color: white;
}

.round {
  border-radius: 50%;
}

.page-navigation{
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
      
}

.page-navigation:hover {
  background-color: #ddd;
  color: black;
}

.list{
    display: list-item;
    list-style-type: square;
}

.underline{
    text-decoration: underline;
}

.lightBlue{
    background-color: #BCD2EE;
}

.copyright{
    position: absolute;

    color: #E8F7EE;
    font-weight: bold;
    font-style: italic;

    right: 50%;
    top: 50%;
}


.socials{
    position: relative;
    left: 35%;
    top: 25%;
    color: white;
}

.alert{
 background-color:#1bb65e ;
}

.exemple{
background-color: #1bb65e;
}

.note{
background-color: #0074D9;
}

.code{
background-color: #67666a;
}

.syntaxe{
background-color: #9B59B6;
}

.warning{
    background-color: #F1C40F;
}

.white{
    color: white;
}
</style>
</html>


