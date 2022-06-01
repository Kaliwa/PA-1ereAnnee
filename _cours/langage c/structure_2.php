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
            <h1>1 Syntaxe d'un programme simple</h1>
            <br>
            <section>
                <h4 class="list underline">Les constantes</h4>

                <br><br>

                <p>
                    Ce type est utilisé si on veut que la valeur d'une donnée soit toujours la même durant toute
                    l'exécution du programmme.<br>
                    Nous avons déjà vu une méthode pour les déclarer au moyen de la directive de compilation
                    #define.<br>
                    Un autre moyen est d'utiliser le type <span class="italic bold">const</span>.
                </p>

                <p class="important box">
                    La syntaxe est : <br>
                    <span class="bold italic">#define CONSTANTE valeur</span><br>
                    ou<br>
                    <span class="bold italic">const type_de_la_variable nom_de_la_variable valeur_de_la_variable;</span>
                </p>

                <br><br>

                <section class="message exemple">
                    <h3 class="message-title">Exemple</h3>
                    <div class="message-icon fa fa-check"></div>
                    <p class="message-content">
                        Exemples :<br><br>

                        #define MAX 32767<br>
                        ou<br>
                        const int MAX=32767;<br><br>

                        #define un_caratere 'A'<br>
                        ou<br>
                        const char un_caratere='A';<br><br>

                        #define une_chaine "un texte"<br>
                        ou<br>
                        const char une_chaine[]="un texte";<br>
                    </p>
                </section>

            </section>

            <br><br>

            <section>
                <h4 class="list underline">Les fonctions</h4>

                <p>
                    Une fonction en C correspond à un sous-programme. Elle permet de définir un certain nombre d'actions
                    dans une
                    "enveloppe". Cette enveloppe peut être appellée autant de fois que l'on veut dans le programme
                    source sans se soucier
                    de la façon dont sont traitées les données, seul importe le résultat et la syntaxe.<br><br>
                    Elles permettent de clarifier le source en déchargeant le programme principal d'un nombre important
                    de lignes de codes.<br>
                    Les librairies utilisées comportent des fonctions, comme l'affichage des données à l'écran (printf),
                    la lecture des
                    données au clavier (scanf), qui seront utilisées tout au long du programme par simple appel.
                </p>

                <br><br>

                <section class="message syntaxe">
                    <h3 class="message-title">Syntaxe</h3>
                    <div class="message-icon fa fa-bell-o"></div>
                    <p class="message-content">
                        type nom_de_la_fonction(paramètres)<br>
                        type paramètres;<br>
                        {<br>
                        déclarations des variables locales;<br>
                        instructions;<br>
                        }<br>
                    </p>
                </section>

                <br><br>

                <section class="message exemple">
                    <h3 class="message-title">Exemple</h3>
                    <div class="message-icon fa fa-check"></div>
                    <p class="message-content">
                        Exemple :<br><br>
                        Nous voulons obtenir la somme de deux valeurs entières.<br>
                        <br>
                        int resultat;<br><br>
                        int addition(a,b);<br>
                        {<br>
                        int somme;<br>
                        somme = a + b;<br>
                        return(somme);<br>
                        }<br>
                        <br><br>
                        fin de la fonction.<br><br>
                        L'appel de cette fonction retournera la somme des deux éléments.<br>
                        <span class="bold">resultat = addition(c,d);</span><br>
                        où resultat, c et d sont des entiers.
                    </p>
                </section>
            </section>

            <br></br>

            <section>
                <h4 class="list underline">Le programme principal</h4>

                <p>
                    Il est obligatoire si vous voulez un résultat. Il est lélément principal du programme, il peut
                    contenir tout le code
                    source ou contenir une partie et faire alors appel aux fonctions décrites auparavant.
                </p>
                <br><br>

                <section class="message code">
                    <h3 class="message-title">Code</h3>
                    <div class="message-icon fa fa-bell-o"></div>
                    <p class="message-content">
                        main(argc,argv)<br>
                        int argc;<br>
                        char *argv[];<br>
                        {<br>
                        <span class="indent">
                            déclarations;<br>
                            instructions;<br>
                        </span>
                        }<br>
                    </p>
                </section>

                <br><br>

                <section class="message note">
                    <h3 class="message-title">Note</h3>
                    <div class="message-icon fa fa-exclamation"></div>
                    <p class="message-content">
                        La syntaxe est la même que celle d'une fonction, son nom est main.
                        Il est possible de récupérer des données passées en ligne de commande du programme grâce à argc
                        et
                        argv.
                        Leur utilisation n'est pas obligatoire.
                    </p>
                </section>

                <br><br>

                <p>
                    <span class="bold italic">argc</span>
                    <br>
                    <span class="indent">
                        C'est un type entier.<br>
                        Indique le nombre de paramètres passés en argument de la commande.<br>
                        Attention argc == 1 indique qu'aucun argument n'est passé.<br>
                        En effet le nom du programme
                        exécutable<br>
                        est toujours "rangé"<br>
                        dans la case 0 et compte pour un argument.<br>
                    </span>
                    <span class="bold italic">argc</span>
                    <br>
                    <span class="indent">
                        C'est un pointeur sur un vecteur de caractères.<br>
                        argv[0] contient le nom du programme exécutable.<br>
                        argv[1] contient le premier paramètre passé en argument de la commande.<br>
                        argv[2] contient le deuxième paramètre passé en argument de la commande.<br>
                        ......<br>
                    </span>
                </p>

                <br><br>

                <section class="message exemple">
                    <h3 class="message-title">Exemple</h3>
                    <div class="message-icon fa fa-check"></div>
                    <p class="message-content">
                        Exemple d'utilisation :<br>
                        <br>
                        Vous avez un programme source traducteur.c.<br>
                        La compilation a produit le programme exécutable traducteur.exe<br>
                        Pour dérouler votre programme vous pouvez taper :<br>
                        traducteur.exe francais nom_propre<br><br>

                        argc<br>
                        3<br>
                        argv[0]<br>
                        traducteur.exe<br>
                        argv[1]<br>
                        dico_francais<br>
                        argv[2]<br>
                        nom_propre<br>
                        <br>
                        Cela permet de déterminer facilement la langue, les noms communs ou les noms propres qui
                        doivent<br>
                        être utilisés pour le traitement des données.<br><br>
                    </p>
                </section>

            </section>

        </article>

        <br><br>

        <article class="chapitre">
            <section>
                <h1>2 La compilation d'un programme source</h1>
                <br>
                <p>
                    La compilation traduit le programme source en programme exécutable.<br>
                    Elle permet une vérification syntaxique du code que vous avez écrit.<br>
                    Par contre elle n'indique pas que votre programme s'exécutera correctement ni que le résultat sera
                    celui voulu.<br>
                    En effet de nombreuses erreurs peuvent encore perturber le bon déroulement de votre exécution :<br>
                    <span class="indent bold italic">
                        utilisation d'une variable dans un mauvais contexte, utilisation d'une partie de la mémoire non
                        autorisée, ...
                    </span>
                </p>
                <br>

                <section class="message alert">
                    <h3 class="message-title">Attention</h3>
                    <div class="message-icon fa fa-times"></div>
                    <p class="message-content">
                        Plusieurs méthodes sont employées, nous ne verrons que la plus simple qui vous oblige à déclarer
                        tous les fichiers que vous utilisez dans le programme source, celui qui est compilé.<br>
                    </p>
                </section>
                <br><br>

                <section class="message syntaxe">
                    <h3 class="message-title">Syntaxe</h3>
                    <div class="message-icon fa fa-bell-o"></div>
                    <p class="message-content">
                        <span class="underline bold">cc fichier.c</span><br>
                        <br>
                        Vous obtenez alors un fichier a.out qui est le fichier exécutable.<br>
                        <span class="underline bold">cc -o fichier.exe fichier.c</span><br>
                        <br>
                        Vous obtenez alors un fichier fichier.exe qui est le fichier exécutable.<br>
                        <br>
                        <br>
                        Pour obtenir les autres possibilités de compilation tapez juste <span
                            class="bold">cc</span>.<br>
                    </p>
                </section>

                <br><br>

                <p class="bold italic underline">Lors de la compilation vous serrez confronté a plusieurs type
                    d'erreurs, les plus
                    courrantes sont les
                    suivantes : </p>
                <br><br>

                <section class="message alert">
                    <h3 class="message-title">Retenez ces erreurs !!!</h3>
                    <div class="message-icon fa fa-times"></div>
                    <p class="message-content">
                        Erreur due à une fonction non définie :<br>
                        <br>
                        "<br>
                        ld: 0711-317 ERROR: Undefined symbol: .rintf<br>
                        ld: 0711-345 Use the -bloadmap or -bnoquiet option to obtain more information.<br>
                        "<br>
                        La fonction "rintf" n'est pas définie dans le programme source main.c.<br>
                        <br><br>
                        Erreur due à une variable non définie :<br>
                        <br>
                        "<br>
                        "main.c", line 18.2: 1506-045 (S) Undeclared identifier variable.<br>
                        "<br>
                        La variable "variable" n'est pas définie dans le programme source main.c.<br>
                        Cette erreur se situe ligne 18 et commence au deuxième caractère.<br>
                        Erreur due à un crochet oublié :<br>
                        <br>
                        "<br>
                        "main.c", line 19.1: 1506-204 (S) Unexpected end of file.<br>
                        "<br>
                    </p>
                </section>

                <br><br>


                <p>
                    Vous avez bien sûr de nombreux autres problèmes possibles mais ce sont ceux qui reviennent le
                    plus
                    souvent.<br>
                    Dans le cas d'une erreur le programme exécutable n'est pas généré.<br>
                </p>

                <br><br>

                <section class="message warning">
                    <h3 class="message-title">Erreurs Suplémentaires</h3>
                    <div class="message-icon fa fa-times"></div>
                    <p class="message-content">
                        Vous pouvez avoir des messages qui indiquent une possible erreur les "Warning". <br>
                        Ils ne bloquent pas la création du fichier exécutable mais peuvent provoquer une erreur
                        d'exécution
                        avec création d'un fichier d'erreur
                        appellé core.<br>
                        Ces Warning apparaissent souvent lors de déclarations subtiles de variables ou de
                        transformations de
                        type de variables : <br><br>
                        (entier &lt;-&gt; caractère) durant l'exécution du programme. <br><br>
                        "<br>
                        "main.c", line 13.20: 1506-196 (W) Initialization between types "const unsigned char" and<br>
                        "unsigned char*" is not<br>
                        allowed.<br>
                        "<br>
                        Dans ce cas il semble qu'il y ait une mauvaise utilisation de la définition d'une constante
                        de<br>
                        type caractère à la<br>
                        ligne 13 du programme main.c.<br>
                    </p>
                </section>

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

