<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php
$title = 'Cours';
include('../../includes/head.php');
include('../../includes/header.php');
?>
    <body>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-11091363-7"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments)};
gtag('js', new Date());

gtag('config', 'UA-11091363-7');
</script>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
               
                </div>
               
            </div>
        </nav>
        <div class="container">
            <div class="row">
    <div class="col-md-9">
<div id="seealso"></div>
<div class="book">
	<br>
	<br>
    
	<h1 class="h1">5.Mes premières requêtes SQL</h1>
	
	
	
		<h1 class="h2">5.1.Introduction</h1>
		<div>Maintenant que nous avons réussi à nous connecter à notre base de données(après éventuellement l'avoir installée) nous allons pouvoir commencer à "jouer" avec.</div>
	
	
		<h1 class="h2">5.2.Création d'une table [CREATE TABLE]</h1>
		<div>La création d'une table se fait via la commande <i>CREATE TABLE</i> suivi du nom de la table (ici matable) et des paramètres de la table. Ces paramètres consistent en, au minimum, la liste des noms des champs de la table accompagnés du type de champss (entier, date, chaîne de caractères, etc.). Ainsi pour créer une table contenant
			<table cellspacing="0" cellpadding="0" border="0"><tr><td><ul>
				<li>le nom d'une personne sur au maximum 128 caractères</li>
				<li>l'année de naissance</li>
				<li>la taille</li>
			</ul></td></tr></table> 
		   on pourra utiliser la requête suivante
<div class="code_container">
<pre class="sql"><strong>CREATE TABLE matable (nom VARCHAR(128), annee_naissance INTEGER, taille FLOAT)</strong></pre>
<div class="delimiter"></div>
</div>
			<table cellspacing="0" cellpadding="0" border="0" class="rem"><tr>
<td><ul>
				<li>Selon le serveur de base de données et le client utilisé vous devrez peut-être ajouter un point-virgule à la fin de la requête (ce qui est le cas si vous utilisez la commande en ligne MySQL).</li>
			</ul></td>
</tr></table>
			
		</div>
	
	
		<h1 class="h2">5.3.Liste des tables contenues dans la base de données</h1>
		<div>Pour visualiser l'effet de la commande précédente vous devez lister les tables de la base de données. Il n'existe pas de requête SQL standard pour ce type d'opération. La façon de faire dépend de la nature de la base de données.
		<table cellspacing="0" cellpadding="0" border="0"><tr><td><ul>
		  <li>avec MySQL: Cela se fait via la commande
<div class="code_container">
<pre class="sql">SHOW TABLES</pre>
<div class="delimiter"></div>
</div>
		  </li>
		  <li>avec PostgreSQL: Tapez la commande <b>\d</b>
</li>
		</ul></td></tr></table>
		<table cellspacing="0" cellpadding="0" border="0"><tr><td><ul>
			<li>Si vous utilisez un client web de type phpMyAdmin ou PhpPgAdmin, la liste des tables apparait automatiquement dans le descriptif de la base</li>
		</ul></td></tr></table>
		</div>
	
	
		<h1 class="h2">5.4.Lister les champs d'une table</h1>
		<div>La façon de lister les champs d'une table (baptisée ici matable) dépend aussi de la nature de la base de données.
		<table cellspacing="0" cellpadding="0" border="0"><tr><td><ul>
		  <li>avec MySQL: Cela se fait via la commande
<div class="code_container">
<pre class="sql">DESCRIBE TABLE matable</pre>
<div class="delimiter"></div>
</div>
		  </li>
		  <li>avec PostgreSQL: Tapez la commande <b>\d</b> matable</li>
		</ul></td></tr></table>
		<table cellspacing="0" cellpadding="0" border="0"><tr><td><ul>
			<li>Si vous utilisez un client web de type phpMyAdmin ou PhpPgAdmin, il suffit de sélectionner la table et l'onglet "structure" pour obtenir la liste et nature des champs qui la compose</li>
		</ul></td></tr></table>
		</div>
	
	
		<h1 class="h2">5.5.Enregistrement d'une donnée dans une table [INSERT INTO]</h1>
		<div>L'ajout (ou insertion) d'une donnée dans une table se fait via l'instruction SQL <i>INSERT INTO</i> suivi du nom de la table et des valeurs à insérer.</div>
		<div>Il existe plusieurs façons de l'utiliser. La version la plus courte qui n'est pas la plus sure et ne convient pas à toutes les situations consiste à seulement préciser les valeurs (dans l'ordre des champs tels qu'ils ont été créés) après le mot clé <i>VALUES</i>:
<div class="code_container">
<pre class="sql"><strong>INSERT INTO matable VALUES ('Jean DUPONT', 1970, 1.80)</strong></pre>
<div class="delimiter"></div>
</div>
		Il est toutefois préférable de préciser (avant le mot clé <i>VALUES</i>) le nom des champs dont vous précisez les valeurs (ce qui permet de ne pas avoir à se préoccuper de l'ordre dans lequel les champs ont été créés)
<div class="code_container">
<pre class="sql"><strong>INSERT INTO matable (taille, annee_naissance, nom) VALUES (1.80, 1970, 'Jean DUPONT')</strong></pre>
<div class="delimiter"></div>
</div>
		<table cellspacing="0" cellpadding="0" border="0" class="rem"><tr>
<td><ul>
			<li>Les valeurs de type chaîne de caractères doivent être mise entre apostrophes (quotes). Si ces chaines de caractères contiennent des apostrophes il faut que celle-ci doivent être "échappées" en les faisant précéder d'un caractère particulier, généralement un anti-slash '\' (pour certaines bases de données il faut la faire précéder d'une apostrophe). Ex:
<div class="code_container">
<pre class="sql"><strong>INSERT INTO matable VALUES ('Pierre D\'arvors', 1926, 1.70)</strong></pre>
<div class="delimiter"></div>
</div>
			</li>
		</ul></td>
</tr></table>
		</div>
	
	
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
style="display:inline-block;width:728px;height:90px;"
data-ad-client="ca-pub-6434008488247541"
data-ad-slot="1781844108"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({
});
</script>
<h1 class="h2">5.6.Lecture des données d'une table [SELECT ... FROM]</h1>
		<div>Pour lire le contenu d'une table (baptisée ici matable) vous pouvez faire appel à la requête SQL
<div class="code_container">
<pre class="sql"><strong>SELECT * FROM matable</strong></pre>
<div class="delimiter"></div>
</div>
		Cette requête listera tous les champs de tous les enregistrement de la table
		</div>
	
    
        <h1 class="h2">5.7.Filtrer les résultats d'une requête [WHERE]</h1>
        <div>Pour limiter, sur critères, la liste des enregistrements retournés ou affectés par la requête vous pouvez utiliser l'instruction <i>WHERE</i> suivi de la condition (éventuellement une combinaison de conditions avec des opérateurs AND et/ou OR)
<div class="code_container">
<pre class="sql"><strong>SELECT * FROM matable WHERE annee_naissance&lt;1950</strong></pre>
<div class="delimiter"></div>
</div>
        Cette requête listera tous les champs de tous les enregistrement de la table pour lesquels le champ "annee_naissance" contient une valeur strictement inférieure à 1950
        </div>
		<h1 class="h2">5.8.Suppression d'enregistrement(s) dans une table [DELETE FROM]</h1>
		<div>Pour supprimer un ou plusieurs enregistrements d'une table, il existe l'instruction <i>DELETE FROM</i> qui devra être suivie du nom de la table (puis généralement d'une clause <i>WHERE</i> permettant de retrouver le -ou les- enregistrements a supprimer). Exemple pour supprimer les enregistrements correspondant à des personnes nommées 'Jean DUPONT':
<div class="code_container">
<pre class="sql"><strong>DELETE FROM matable WHERE nom='Jean DUPONT'</strong></pre>
<div class="delimiter"></div>
</div>
            En l'absence de clause <i>WHERE</i> se sont l'ensemble des enregistrements de la table qui sont effacés.
		</div>
	
    
        <h1 class="h2">5.9.Mise à jour d'enregistrement(s) dans table [UPDATE]</h1>
    
	
		<h1 class="h2">5.10.Suppression d'une table</h1>
		<div>Pour supprimer de la base de données une table (matable) il faut utiliser à la requête SQL
<div class="code_container">
<pre class="sql"><strong>DROP matable</strong></pre>
<div class="delimiter"></div>
</div>
		</div>
	
</div>
    </div>
<script>
(adsbygoogle = window.adsbygoogle || []).push({
});
</script>
   <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
style="display:inline-block;width:300px;height:250px;"
data-ad-client="ca-pub-6434008488247541"
data-ad-slot="2725777689"></ins>
    </div>
</div>
<div class="row">
<div class="col-md-2">
</div>
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


