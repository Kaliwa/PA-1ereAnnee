<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php
$title = 'Cours';
include('../../includes/head.php');
include('../../includes/header.php');
?>
<body>

   
    <main>

        <article class="chapitre">
            <section>
                <h3 class="list underline">1 Identification d'un fichier</h3>

                <br>

                <p>Un fichier s'identifie par son nom, précédé ou non de son chemin d'accès, et d'un pointeur vers une
                    structure
                    contenant des informations relatives à ce fichier.
                    <br>
                    La fin d'un fichier est signifiée par EOF.
                    <br>
                    Comme tout objet utilisé dans un programme source, il faut le déclarer.
                </p>
                <br>
                <br>

                <section class="message syntaxe">
                    <h3 class="message-title">Syntaxe</h3>
                    <div class="message-icon fa fa-bell-o"></div>
                    <p class="message-content">
                        <span class="bold">file *nom_du_pointeur</span>
                        file est le mot clé indiquant le type.
                        <br>
                        <span class="bold">Le '*'</span>
                        Il indique que nousdéfinissons un pointeur.
                        <br>
                        <span class="bold">nom_du_pointeur</span>
                        Il s'agit du nom de ce pointeur
                        <br>
                        <br>
                    </p>
                </section>
            </section>

            <br><br>

            <h3 class=" list underline">2 Les fichiers</h3>

            <p>Une fois déclaré, il faut ouvrir le fichier afin de pouvoir y effectuer des opérations.
                <br>
                Ce fichier peut être ouvert suivant différents modes d'accès qui correspondent aux opérations que
                vous
                voudrez
                réaliser (lecture, écriture ou ajout de données). Nous ne travaillerons que sur des fichiers de type
                texte.
            </p>
            <br>
            <br>
            <section class="message syntaxe">
                <h3 class="message-title">Syntaxe</h3>
                <div class="message-icon fa fa-bell-o"></div>
                <p class="message-content">
                    <span class="bold underline">nom_du_pointeur</span><br>
                    nom_du_pointeur=fopen(nom,mode_d_ouverture);
                    <br>
                    <span class="bold underline">fopen</span><br>
                    Il s'agit le mot clé indiquant l'ouverture du fichier. Si l'ouverture ne se fait pas
                    correctemment,
                    la valeur NULL est retournée.<br>
                    <span class="bold underline">nom</span><br>
                    C'est le nom réel du fichier contenu sur votre compte.
                    <br>
                    <span class="bold underline">mode_d_ouverture</span>
                    Autorise certaines opérations sur ce fichier
                </p>
            </section>
            <br>
            <br>
            <table>
                <tbody>
                    <tr>
                        <th>Mode d'accès</th>
                        <th>Syntaxe</th>
                        <th>Déscription</th>
                    </tr>
                    <tr>
                        <td>
                            <h4>lecture</h4>
                        </td>
                        <td>
                            <h4>"r"</h4>
                        </td>
                        <td>
                            <h4>La seule opération permise est la lecture</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>écriture</h4>
                        </td>
                        <td>
                            <h4>"w"</h4>
                        </td>
                        <td>
                            <h4>On écrit des données dans le fichier soit en le créant soit en écrasant les données
                                déjà
                                existantes</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>ajout</h4>
                        </td>
                        <td>
                            <h4>"a"</h4>
                        </td>
                        <td>
                            <h4>On peut lire ou ajouter des données en fin de fichier</h4>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>
            <br>
            <section class="message exemple">
                <h3 class="message-title">Exemple</h3>
                <div class="message-icon fa fa-check"></div>
                <p class="message-content">Si le fichier n'existe pas lorsque vous tentez de l'ouvrir en lecture la
                    valeur
                    NULL
                    est renvoyée.</p>
            </section>
            <br>
            <br>
            <h3 class="list underline">3 Fermeture d'un fichier</h3>
            <br>
            <p>Lorsque vous ne faites plus d'opérations sur le fichier ou que vous voulez modifier le mode d'accès,
                vous
                devez
                le fermer.
            </p>

            <br>

            <section class="message  syntaxe">
                <h2 class="message-title">Syntaxe</h2>
                <div class="message-icon fa fa-bell-o"></div>
                <p class="message-content">close(nom_du_pointeur);</p>
                <br>
            </section>

            <br><br>

        </article>


    </main>

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
 background-color: #E74C3C;
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