
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php
$title = 'Cours';
include('../../includes/head.php');
include('../../includes/header.php');
?>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    
                </div>
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
    <h3 class="h1">1.Introduction aux base de données</h3>
  
        <h1 class="h2">1.1.Présentation</h1>
        
            <h1 class="h3">1.1.1.A quoi ça sert?</h1>
            <div>Une base de données sert essentiellement à stocker des informations (comme des noms, prénoms, adresses, numéros de téléphone ou autre) pour ensuite être capable de les traiter, les filtrer, les trier, etc. afin d'en extraire des statistiques, de récupérer les données d'un individu à partir de son nom, etc.</div>
        
        
            <h1 class="h3">1.1.2.Comment ça marche?</h1>
            <div>Une base de données peut-être assimilée à un ensemble de fichiers (dans lesquels sont stockées les informations). Ces fichiers sont gérés par un logiciel <b>serveur</b> aussi appelé démon ou service (qui doit donc tourner pour pouvoir accéder à la base). L'utilisateur quant à lui, devra utiliser un programme <b>client</b> (qui s'adressera au serveur) pour pouvoir manipuler les données.</div>
            <div><center><img src="images/schemabd1.gif" alt="Schéma d'une base de données" title="Schéma d'une base de données"></center></div>
            <div>C'est donc cet ensemble fonctionnel que fournissent les logiciels suivant MySQL, PostgreSQL, Oracle, ...</div>
            <div>D'autres proposent un sous-ensemble comme SQLite ou Access, pour lesquels la notion de serveur n'existe pas.</div>
        
        
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
style="display:inline-block;width:728px;height:90px;"
data-ad-client="ca-pub-6434008488247541"
data-ad-slot="1781844108"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({
});
</script>
<h1 class="h3">1.1.3.Comment manipuler les données de la base de données?</h1>
            <div>Pour accéder aux données, l'utilisateur devra soumettre une requête au programme client en utilisant le langage SQL (que nous présentons plus loin).</div>
        
        
            <h1 class="h3">1.1.4.Comment sont rangées les données?</h1>
            <div>La base de données travaille avec des tables (que l'on peut assimiler à des fichiers). Chaque table est composée de champs (la table étant assimilable à un tableau, un champ est une colonne de ce tableau). Chaque table contient de 0 à plusieurs enregistrements (les informations) pour lesquels les champs de la table prennent telle ou telle valeur (les enregistrements sont donc les lignes du tableau).</div>
            <div>Schéma d'une structure d'une table:<table class="table table-sm table-bordered">
<tr>
<td></td>
<td><b>Champ 1</b></td>
<td><b>Champ 2</b></td>
<td>...</td>
<td>Champ N</td>
</tr>
<tr>
<td><b>Enregistrement 1</b></td>
<td>Valeur 1,1</td>
<td>Valeur 1,2</td>
<td>...</td>
<td>Valeur 1,N</td>
</tr>
<tr>
<td><b>Enregistrement 2</b></td>
<td>Valeur 2,1</td>
<td>Valeur 2,2</td>
<td>...</td>
<td>Valeur 2,N</td>
</tr>
<tr>
<td>...</td>
<td>...</td>
<td>...</td>
<td>...</td>
<td>...</td>
</tr>
<tr>
<td><b>Enregistrement M</b></td>
<td>Valeur M,1</td>
<td>Valeur M,2</td>
<td>...</td>
<td>Valeur M,N</td>
</tr>
</table>
</div>
        
        
            <h1 class="h3">1.1.5.Mais encore?</h1>
  <div>Chaque champ est typé, c'est a dire que pour chaque champ d'une table, on doit définir si celui-ci prends des valeurs de type numérique ,alphanumérique (texte),date ou autre...</div>
    <div>On pourra également définir des contraintes pour certains champs (par exemple, on pourra refuser que certains champs ne soient pas renseignés) voire des contraintes entre les tables. On parle alors de contraintes d'intégrité.
</div>
        
  
    
        <h1 class="h2">1.2.Les différents serveurs de bases de données</h1>
        <div>Il existe de nombreux type de serveurs de bases de données, parmi eux:
            <table cellspacing="0" cellpadding="0" border="0"><tr><td><ul>
                <li>
MYSQL: Sous licence GPL (gratuite) performante quoique légèrement incomplète</li>
                <li>
PostgreSQL: Egalement Open Source performante et offrant de nombreuses fonctionnalités</li>
                <li>Oracle: La base de données professionnelle</li>
                <li>DB2 (IBM): Une autre base de données professionnelle</li>
                <li>SQL Server (MS): La solution proposée par Microsoft (A ne pas confondre avec SQL : Le langage!!)</li>
                <li>etc..</li>
           </ul></td></tr></table>
       </div>
        <div>Et quelques bases de données sans serveur, dont:
            <table cellspacing="0" cellpadding="0" border="0"><tr><td><ul>
                <li>SQLite</li>
                <li>Access</li>
                <li>etc..</li>
           </ul></td></tr></table>
       </div>
    
</div>
    </div>
<ins class="adsbygoogle"
style="display:inline-block;width:234px;height:60px;"
data-ad-client="ca-pub-6434008488247541"
data-ad-slot="9461718104"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({
});
</script>
    </div>
</div>
<div class="row">
<div class="col-md-2">
<ul class="pager">
<li class="previous text-left"></li>
</ul>
</div>
<div class="col-md-8">
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
    padding: 10px 10px;
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

