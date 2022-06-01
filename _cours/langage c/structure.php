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
                <h1>1 Syntaxe d'un programme simple</h1>
                <br>
                <p>Dans notre cas nous ferons du C standard. Vos fichiers sources doivent avoir l'extension .c.
                    Les commentaires doivent être délimités par /* pour indiquer le début et */ pour indiquer la fin. /*
                    Commentaires */
                    Un programme C se compose de différentes parties qui sont :
                </p>

            </section>

            <br>
            <section>
                <h3 class="list underline">Les directives de compilation</h3>
                <br>
                <section class="message note">
                    <h3 class="message-title">Note</h3>
                    <div class="message-icon fa fa-exclamation"></div>
                    <p class="message-content">Elles indiquent au compilateur de procéder à des opérations préalables au
                        début
                        de
                        la
                        compilation.
                        Ces directives se situent en tout début du programme source.
                    </p>
                </section>
                <br>
                <h4 class="list">Include</h4>
                <br>
                <p>
                    Les plus importantes de ces directives sont l'inclusion des librairies dont les éléments seront
                    utilisés dans le
                    programme source.
                    Une librairie est composée de fonctions, d'objets prédéfinis prêt à l'emploi, facilitant ainsi le
                    travail du programmeur
                    qui n'aura pas à tout recréer de a à z.
                    Ces librairies sont fournies par le logiciel mais peuvent très bien avoir été créées par vos soins.

                    La syntaxe pour qu'elles soient reconnues et utilisées lors de la compilation est la suivante :
                </p>
                <br>
                <p>
                    <span class="bold italic">#include &lt;fichier&gt;</span><br>
                    ou<br>
                    <span class="bold italic">#include "fichier"</span>
                </p>
                <br>

                <section class="message alert">
                    <h3 class="message-title">Attention</h3>
                    <div class="message-icon fa fa-times"></div>
                    <p class="message-content">
                        <span class="bold underline italic">#include</span>
                        <br>
                        Est la directive de compilation indiquant que l'on va utiliser un fichier contenant les
                        informations
                        utiles pour le
                        programme.
                        <br>
                        <br>
                        <span class="bold underline italic">&lt;fichier&gt;</span>
                        <br>
                        Indique l'utilisation d'une librairie, fournie par le logiciel C, se trouvant dans un répertoire
                        particulier du système
                        /usr/include.
                    </p>
                </section>
                <br>
                Les librairies les plus utilisées sont généralement :
                <br><br>
                <ul>
                    <li><span class="bold underline italic">sdtio.h</span> qui contient les définitions des fonctions
                        d'Entrée/Sortie (io pour Input/Output).
                    </li>
                    <li><span class="bold underline italic">string.h</span> qui contient les définitions des fonctions
                        traitant
                        des chaînes de caractères.</li>
                    <li><span class="bold underline italic">stdlib.h</span> qui contient les définitions de fonctions
                        traitant
                        la conversion de nombres
                        l'allocation de mémoire.</li>
                    <li><span class="bold underline italic">ctype.h</span> qui contient les définitions de fonctions
                        traitant la conversion de caractères</li>
                </ul>

                <br>

                <p><span class="bold">"fichier"</span><br>
                    Indique l'utilisation d'une librairie contenue dans <span class="bold">"fichier"</span>. Cette
                    librairie est souvent un
                    ensemble de fonctions
                    propres au programmeur ou un fichier de déclaration des variables du programme.
                    <span class="bold">"fichier"</span> peut contenir juste le nom de la librairie ou le chemin d'accès
                    et le nom si elle ne
                    se trouve pas au même
                    niveau que le programme source.
                    <br><br>
                </p>
                <br>
                <section class="message syntaxe">
                    <h3 class="message-title">Syntaxe</h3>
                    <div class="message-icon fa fa-bell-o"></div>
                    <p class="message-content">#include &lt;stdio.h&gt;<br>
                        #include "../LIBRAIRIES/definitions.h"
                    </p>
                </section>
            </section>

            <br>

            <h4 class="list">Define</h4>
            <p>#define nom_de_subtitution suite_de_caractères</p>
            <br><br>
            <section class="message note">
                <h3 class="message-title">Note</h3>
                <div class="message-icon fa fa-exclamation"></div>
                <p class="message-content">#define
                    Est la directive de compilation indiquant que l'on va utiliser un nom de substitution pour remplacer
                    une suite de
                    caractères.
                </p>
            </section>

            <br><br>

            <p>
                <span class="italic bold ">nom_de_subsitution</span>
                <br>
                Est le nom qui sera utilisé tout au long du programme source afin de remplacer la suite de
                caractères
                "suite_de_caractères".
            </p>

            <br><br>

            <p>
                <span class="italic bold">suite_de_caractères</span>
                <br>
                Est la suite de caractères à substituer. Ce peut être des caractères alphabétiques comme des
                chiffres ou les deux.
            </p>

            <br><br>

            <section class="message exemple">
                <h3 class="message-title">Exemple</h3>
                <div class="message-icon fa fa-check"></div>
                <p class="message-content">
                    #define VRAI 1<br>
                    Le nom VRAI sera utilisé en remplacement du chiffre 1 dans le programme source ce qui est plus
                    parlant.<br>
                    Mais rien ne vous empêche d'utiliser le chiffre 1.

                    <br><br>

                    #define max(a,b) if(a > b) \
                    <br><br>
                    printf("a est plus grand que b : %d > %d",a,b); \
                    <br>
                    else printf("b est plus grand que a : %d > %d",b,a);

                </p>
            </section>

            <br><br>

            <p>
                Le nom max(a,b) sera utilisé en remplacement de if(a > b) printf("a est plus grand que b : %d >
                %d",a,b); else printf("b
                est plus grand que a : %d > %d",b,a); qui permet d'afficher à l'écran quel est l'élément le plus
                grand de a ou de b.<br>
                Le caractère \ indique que le texte qui se trouve à la ligne suivante fait partie de la
                "suite_de_caractères".
            </p>

            <br><br>

            <h4 class="list">#IF</h4>

            <p>
                Cette directive permet de ne pas prendre en compte certaines lignes de votre programme source lors
                de la compilation.<br>
                Elle permet notamment de faire des traces en affichant le contenu des variables utilisées et ainsi
                de vérifier la bonne
                exécution de votre programme.<br>
                Pour supprimer la trace il suffit de donner la valeur faux à la constante testée par le if.
            </p>

            <br><br>

            <section class="message syntaxe">
                <h3 class="message-title">Syntaxe</h3>
                <div class="message-icon fa fa-bell-o"></div>
                <p class="message-content">Syntaxe de la direction :
                    <br>
                    #if CONSTANTE<br>
                    ...<br>
                    #else<br>
                    ....<br>
                    #endif<br>
                </p>
            </section>

            <br><br>

            <section class="message code">
                <h3 class="message-title">Code</h3>
                <div class="message-icon fa fa-bell-o"></div>
                <p class="message-content">

                    <br><br>
                    #define TRACE 1<br>
                    /*instructions*/<br>
                    #if TRACE<br>
                    printf("la variable nom contient : %s\n",nom);<br>
                    #endif<br>
                </p>
            </section>
            <br><br>

            </section>
            <p>
                Lors de la compilation si TRACE a la valeur vraie (1) le printf sera pris en compte et sera affiché
                lors de l'exécution.
                Pour supprimer cet affichage donnez la valeur fausse (0) à TRACE (#define TRACE 0).
            </p>
            </p>

            </section>

            <br><br>

            <section>
                <h3 class="list underline">Les définitions de variables et de constantes</h3>
                <br>
                <p>
                    Chaque donnée, chaque objet utilisé dans un programme source doit posséder un type et donc doit être
                    déclaré afin que le
                    compilateur puisse connaître toutes les valeurs que peut prendre cet objet lors de l'exécution.
                    <br><br>
                    <span class="bold italic">Les déclarations peuvent être :</span><br><br>
                    <span class="indent">
                        global au programme
                        Ce qui permet de rendre visible la valeur d'une variable à tous les niveaux du programme, de la
                        modifier et de la
                        réutiliser autre part avec cette nouvelle valeur. A la pratique, cela facilite l'utilisation des
                        fonctions en n'étant
                        pas obligé de passer ces variables en paramètre (partie souvent assez délicate).
                        Donc il faut déclarer les variables en début du programme source, au niveau des directives de
                        programmation ou dans un
                        fichier que l'on inclura grâce à la directive #include.
                    </span>
                    <br><br>

                    <span class="bold italic">local à une fonction :</span>
                    <br><br>
                    <span class="indent">
                        La variable, une fois que nous sommes sortis de la fonction, n'est plus visible et ne peut plus
                        être
                        utilisée.
                        Donc il vous faut déclarer les variables dans une fonction une fois le '{' ouvert.
                    </span>

                </p>

                <br>

                <section>
                    <h4 class="list">Les variables</h4>
                    <br>
                    <p>
                        Les données qui sont utilisées dans un programme peuvent varier au cours de l'exécution. C'est
                        pourquoi ce type de
                        données se nomme les variables.
                        Toutes les variables doivent avoir un type, pour savoir quel élément peut être "rangé" à
                        l'intérieur.
                        <br><br>
                        La syntaxe utilisée est :<br>

                    <section class="message syntaxe">
                        <h3 class="message-title">Syntaxe</h3>
                        <div class="message-icon fa fa-bell-o"></div>
                        <p class="message-content">Type_de_la_variable nom_de_la_variable</p>
                    </section>
                    </p>
                    <br><br>
                    <section class="message note">
                        <h3 class="message-title">Note</h3>
                        <div class="message-icon fa fa-exclamation"></div>
                        <p class="message-content">
                            Nous ne parlerons que des types simples. Les pointeurs, même s'ils sont utilisés dans les
                            chaînes de caractères de
                            manière transparente, ne seront pas détaillés dans ce cours.<br>
                            Les structures de données ne seront pas abordées.
                        </p>
                    </section>
                    <br><br>
                </section>
            </section>
        </article>


        <br><br>
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