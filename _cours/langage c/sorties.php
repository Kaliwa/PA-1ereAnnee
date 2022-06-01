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
                <h3>1 Les entrees/sorties simple</h3>
                <br>

                <section class="message note">
                    <h3 class="message-title ">Note</h3>
                    <div class="message-icon fa fa-exclamation"></div>
                    <p class="message-content">
                        Nous parlerons d'entrées et sorties simples dans les cas où nous ne manipulons pas les fichiers
                        mais
                        uniquement le clavier et l'écran.
                    </p>
                </section>

                <p>
                    <br>
                    Plusieurs fonctions sont utilisées et définies dans la librairie stdio.h. Nous allons voir les
                    principales, en associant les fonctions d'entrée et de sortie. Il est possible d'obtenir des données
                    grâce à une fonction et les afficher grâce à une autre qui n'est pas forcèment celle qui lui est
                    associée dans le tableau suivant et inversemment (getchar avec printf ...).
                    <br><br>
                </p>

                <table>
                    <tr>
                        <th>Fonction</th>
                        <th>Déscription</th>
                    </tr>
                    <tr>
                        <td>getchar & putchartd</td>
                        <td>Ces fonctions permettent de lire et d'afficher un caractère.
                            Syntaxe :
                            c = getchar();
                            putchar(c);
                            c'est de type entier</td>
                    </tr>
                    <tr>

                        <td>gets & puts</td>
                        <td>Ces fonctions permettent de lire et d'afficher une chaîne de caractère.
                            Syntaxe :
                            suite = gets(chaine);
                            puts(suite);
                            suite est un pointeur de caractères char *suite;
                            chaine est un vecteur de caractères char chaine[20]</td>
                    </tr>
                    <tr>
                        <td>gets & puts</td>
                        <td>Ces fonctions permettent de lire et d'afficher tous types de données avec possibilité de
                            formatage (nombre de virgule après le zéro, longueur de l'élément saisi ...).
                            <br>Syntaxe :
                            <br>scanf("%c",c);
                            <br>scanf("%d",&entier);
                            <br>scanf("%s",chaine);
                            <br>printf("%c %d %s",c,entier,chaine);
                            <br>c'est un caractère char c;
                            <br>entier est un entier int entier;
                            <br>chaine est un vecteur de caractères char chaine[30];
                            Le & est utilisé afin d'affecter un nombre à une variable . Pour les chaînes de caractères
                            la
                            manipulation est la même mais elle est transparente pour l'utilisateur.
                            Il est possible de mettre une phrase entre les "" du printf
                            <br>printf("Le caractère lu est : %c",c);
                            C'est fonctions peuvent manipuler tous les types de données (%d int; %f float; %c caractère;
                            %s
                            chaîne).
                        </td>
                    </tr>
                </table>
            </section>

            <br><br>

            <section>
                <h3>2 Les entrees/sorties plus élaborées</h3>
                <br>
                <p>Elles ont pour cible les fichiers. Nous pouvons ainsi récupérer des données ou en stocker.
                    Pour cela il faut indiquer aux fonctions sur quel fichier nous travaillons. Comme tout objet la
                    variable
                    qui
                    référence un fichier doit être déclarée <a href="fichiers.html" class="bold">(voir la page sur les
                        fichiers)</a>
                </p>
                <br>
                <table>
                    <tr>
                        <th>FONCTION D'ENTREE</th>
                        <th>Déscription</th>

                    </tr>
                    <tr>
                        <td>fgets & fputs</td>
                        <td>Ces fonctions permettent de lire et d'afficher une chaîne de caractère dans un fichier.
                            Syntaxe :
                            fgets(chaine,Taille,nom_du_pointeur);
                            fputs(chaine,nom_du_pointeur);

                            <br>chaine vecteur de caractères contenant les données lues
                            Taille taille de la chaîne lue, valeur entière
                            nom_du_pointeur nom du pointeur référençant le fichier
                        </td>

                    </tr>
                    <tr>
                        <td>fscanf & fprint</td>
                        <td>Ces fonctions permettent de lire et d'afficher tous types de données avec possibilité de
                            formattage
                            (nombre de virgule après le zéro, longueur de l'élément saisi ...).
                            <br>Syntaxe :
                            <br>fscanf(nom_du_pointeur,"%c",c);
                            <br>fscanf(nom_du_pointeur,"%d",&entier);
                            <br>fscanf(nom_du_pointeur,"%s",chaine);
                            <br>fprintf(nom_du_pointeur,"%c %d <br>%s",c,entier,chaine);
                            <br>c est un caractère char c;
                            <br>entier est un entier int entier;
                            <br>Le & est utilisé afin d'affecter un nombre à une variable . Pour les chaînes de
                            caractères
                            la
                            manipulation est la même mais elle est transparente pour l'utilisateur.
                            nom_du_pointeur est le nom du pointeur référençant le fichier
                            C'est fonctions peuvent manipuler tous les types de données (%d int; %f float; %c caractère;
                            %s
                            chaîne).
                        </td>

                    </tr>
                </table>
                <p>Le fichier de travail par défaut
                    était
                    le
                    flux d'entrée (stdin) et le flux de sortie (stdout). Nous pourrions donc réaliser les mêmes
                    opérations
                    que
                    dans ce paragraphe en indiquant à la place de nom_du_pointeur les flux stdin et stdout.
                    fscanf(stdin,"%s",chaine);

                    Lecture au clavier d'une chaîne de caractères

                    fprintf(stdout,"%s",chaine);

                    Affichage à l'écran d'une chaîne de caractères</p>


            </section>

        </article>

        <br><br>

        <article class="chapitre">
            <h3>3 Les instructions conditionnelles</h3>
            <br>

            <p>Elles permettent d'effectuer des tests de validité sur des variables, des expressions, permettant
                ensuite, de
                réaliser des opérations en fonction de ces cas.
                Les tests utilisent les opérateurs logiques vus au <a href="operateurs.html">voir la page sur les
                    opérateurs</strong></a>
            </p>

            <br>

            <h3 class="list underline">3.1 L'instruction IF</h3>
            <br>
            <p>
                Cette instruction permet de réaliser une opération si le test retourne la valeur vraie ou une
                autre
                opération si le test retourne la valeur fausse.
                L'instruction if peut se traduire de la façon suivante :
                si expression est vraie alors je réalise ces opérations sinon je réalise celles-ci fin

            <section class="message syntaxe">
                <h3 class="message-title ">Syntaxe</h3>
                <div class="message-icon fa fa-bell-o"></div>
                <p class="message-content">
                    <br>if(expression)
                    <br>{
                    <br>instruction1;
                    <br>
                    <br> Partie déroulée si expression est vraie.
                    <br>
                    <br>else
                    <br>{
                    <br>instruction2;
                    <br>}
                    <br>
                    Partie déroulée si expression est fausse. Cette partie n'est pas obligatoire.
                </p>
            </section>

            <br>

            <h3 class="list underline">3.2 L'instruction SWITCH </h3>

            <p><br>Cette instruction complète l'instruction if. En effet si vous testez une variable et que vous
                devez
                ensuite réaliser autant d'actions différentes, les imbrications de if vont vite devenir
                illisibles
                et
                lourdes.
            </p>

            <section class="message code">
                <h3 class="message-title">Code</h3>
                <div class="message-icon fa fa-bell-o"></div>
                <p class="message-content">
                    <br>if(i==1)
                    <br>{
                    <br>.....
                    <br>}
                    <br>else
                    <br>{
                    <br>if(i=2)
                    <br>{
                    <br>...
                    <br>}
                    <br>else
                    <br>{
                    <br>....
                    <br>}
                </p>
            </section>

            <br>Vous pouvez donc mieux structurer vos imbrication grâce au switch.
            </p>

            <section class="message syntaxe">
                <h3 class="message-title">Syntaxe </h3>
                <div class="message-icon fa fa-bell-o"></div>
                <p class="message-content">
                    <br>switch(expression)
                    <br>{
                    <br>case valeur 1 :
                    <br> instructions 1;<br>
                    break;<br>

                    <br>case valeur 2 :<br>
                    instructions 2;<br>
                    break;<br>

                    <br>...<br>

                    <br>case valeur n :<br>
                    instructions n;<br>
                    break;<br>

                    <br>default :<br>
                    instructions autre;<br>
                    break;<br>

                    <br>}
                </p>

            </section>

            <br>expression
            <br>est la variable dont on teste la valeur
            valeur
            sont les valeurs que peut prendre expression et pour lesquelles une instruction doit être
            effectuée.
            <br>default
            propose une instruction a effectuer dans le cas où expression n'a pris aucune des valeurs
            proposées
            dans
            les case successifs. Cette partie n'est pas obligatoire.
            break
            renvoie à la fin du switch. Si le break n'est pas mis, le programme exécutera le case
            suivant.
            <br><br>

            <span class="bold underline list">Cet exemple permet d'indiquer quel est le mois correspondant aux
                chiffres.</span><br>
            </p>
            <section class="message exemple">
                <h3 class="message-title">Exemple</h3>
                <div class="message-icon fa fa-check"></div>
                <p class="message-content">
                    <br>switch(mois)
                    <br>{
                    <br>case 1 :printf("Janvier");break;
                    <br>case 2 :printf("Fevrier");break;
                    <br>...
                    <br>case 12: printf("Decembre");break;
                    <br>default : printf("Le mois n'est pas reference");break;
                    <br>}

                    <br>Vous pouvez aussi faire des tests sur des caractères le case est alors de la forme suivante
                    :
                    <br>case 'a' : instructiona;break;
                </p>
            </section>

        </article>
        <br><br>

        <article class="chapitre">
            <section>

                <h2>4 Les instructions répétitives</h2>

                <p>
                    Ces instructions permettent de répéter un ensemble d'instructions.
                </p>


                <h3 class="list underline">4.1 L'instruction WHILE</h3>

                <section class="message exemple">
                    <h3 class="message-title">Exemple</h3>
                    <div class="message-icon fa fa-check"></div>
                    <p class="message-content">
                        <br> Syntaxe :
                        <br>while(expression)
                        <br>{
                        <br>instructions;
                        <br>}
                    </p>
                </section>

                <p>
                    <br>L' expression
                    est la partie qui est évaluée, tant qu'elle a la valeur vraie, le contenu de la boucle est
                    exécuté.<br><br>

                    <br>Le déroulement est le suivant :
                    L'expression est évaluée
                    Si elle est vraie, les instructions sont exécutées et on recommence l'évaluation de expression.
                    Si l'expression est fausse le programme continue son exécution après la boucle <span
                        class="bold">while</span>.

                </p>

                <section class="message alert">
                    <h3 class="message-title">Attention</h3>
                    <div class="message-icon fa fa-times"></div>
                    <p class="message content">
                        <br>Attention :
                        la boucle ne se termine que si l'expression est fausse donc vérifiez bien que cette condition
                        puisse
                        se
                        réaliser sinon votre programme "bouclera" et ne se terminera jamais.
                        les instructions dans la boucle ne sont prises en compte que si l'expression est vraie,
                        n'oubliez
                        donc
                        pas de bien initialiser les variables contenues dans expression.
                    </p>

                </section>
                <p>
                    <br>L'erreur la plus souvent rencontrée est de faire un test sur une valeur maximale d'une
                    variable
                    qui
                    s'incrémente dans la boucle mais d'oublier d'effectuer cette incrémentation, dans ce cas la
                    limite
                    n'est
                    jamais atteinte, votre programme ne se termine jamais.<br>

                </p>

                <section class="message exemple">
                    <h3 class="message-title"> Exemple</h3>
                    <div class="message-icon fa fa-check"></div>
                    <p class="message-content">
                        <br>while(!feof(nom_du_pointeur)
                        <br>{
                        <br>fscanf(nom_du_pointeur,"%s",chaine);
                        <br>printf("chaîne lue : %s\n",chaine);
                        <br>}
                        <br>Nous lisons et affichons ainsi le contenu de tout le fichier référencé par
                        nom_du_pointeur.
                    </p>
                </section>

                <h3 class="list underline">4.2 L'instruction FOR</h3>

                <section class="message syntaxe">
                    <h3 class="message-title">Syntaxe</h3>
                    <div class="message-icon fa fa-bell-o"></div>
                    <p class="message-content">
                        <br>for(expression1;expression2;expression3)
                        <br>{
                        <br>instructions;
                        <br>}
                        <br>

                        <br><span class="bold underline list">expression1 :</span>
                        permet de donner la valeur initiale aux variables contenues dans les expressions.<br>

                        <br><span class="bold underline list">expression2 :</span>
                        permet de définir la condition d'arrêt de la boucle.<br>

                        <br><span class="bold underline list">expression3 :</span>
                        permet de modifier les valeurs des variables contenues dans les expressions afin d'aboutir à la
                        condition d'arrêt.

                        <br><br>

                        Cette boucle est utilisée lorsque l'on connaît à l'avance le nombre de fois que les
                        instructions
                        doivent être exécutées.
                        Vous devez là aussi faire attention aux limites de votre boucle.<br><br>

                        for(compteur=0;compteur&lt;=10;compteur=compteur+1) <br>{
                        <br>compteur=compteur+1;
                        <br>}
                        <br>
                        <br>Le résultat final sera la valeur 11 affectée à la variable compteur.
                    </p>
                </section>

                <br>
                <h3 class="underline list">3 L'instruction DO...WHILE</h3>

                <section class="message syntaxe">
                    <h3 class="message-title">Syntaxe :</h3>
                    <div class="message-icon fa fa-bell-o"></div>
                    <p class="message-content">
                        <br>do
                        <br> {
                        <br>instruction;
                        <br>}while(expression);
                        <br>
                        <br>Le fonctionnement est le même que pour le while sauf que dans ce cas instruction serait
                        exécutée
                        au
                        moins une fois, l'évaluation de expression n'étant éffectuée qu'après le premier passage dans la
                        boucle.
                    </p>
                </section>

                <br>

                <section>
                    <h2 class="list underline">Autres éléments</h2>
                    <br>
                    <table>
                        <tr>
                            <th>Fonctions ou caractères</th>
                            <th>Syntaxe</th>
                            <th>Déscription</th>

                        </tr>
                        <tr>
                            <td>feof</td>
                            <td>feof(nom_du_pointeur)</td>
                            <td>Si la valeur retournée par cette fonction est vraie, la fin du fichier est atteinte
                            </td>
                        </tr>
                        <tr>
                            <td>NULL</td>
                            <td>NULL</td>
                            <td>Indique que le pointeur référencé ne pointe sur rien</td>
                        </tr>
                        <tr>
                            <td>\n</td>
                            <td>printf("blablabla \n")</td>
                            <td>Effectue un saut de ligne après l'affichage de blablabla</td>
                        </tr>

                        <tr>
                            <td>strcat</td>
                            <td>strcat(s,t)</td>
                            <td>Cancatène la chaîne t à la chaîne s</td>
                        </tr>
                        <tr>
                            <td>strcmp</td>
                            <td>strcmp(s,t)</td>
                            <td>Compare deux chaînes s et t
                                <br>Renvoie une valeur négative si s < t <br>Renvoie la valeur NULL si s == t
                                    <br>Renvoie une valeur positive si s > t
                            </td>
                        </tr>
                        <tr>
                            <td>strcpy</td>
                            <td>strcpy(s,t)</td>
                            <td>Copie la chaîne t dans la chaîne s</td>
                        </tr>
                        <tr>
                            <td>strlen</td>
                            <td>strlen(s)</td>
                            <td>Retourne la longueur de la chaîne s</td>
                        </tr>

                        </tr>
                        <tr>
                            <td>toupper</td>
                            <td>toupper(c)</td>
                            <td>Convertit le caractère c en majuscule</td>
                        </tr>
                        <tr>
                            <td>tolower</td>
                            <td>tolower(c)</td>
                            <td>Convertit le caractère c en minuscule</td>
                        </tr>
                        <tr>
                            <td>system</td>
                            <td>system(commande)</td>
                            <td>Permet d'exécuter une commande système au cours du programme et de continuer ce
                                dernier
                                ensuite</td>
                        </tr>
                        <tr>
                            <td>sprintf</td>
                            <td>sprintf(s,"données",arg1,arg2 ...)</td>
                            <td>Fonction similaire à printf à la différence près que le résultat est mis dans la
                                chaîne
                                s
                            </td>
                        </tr>
                    </table>

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
