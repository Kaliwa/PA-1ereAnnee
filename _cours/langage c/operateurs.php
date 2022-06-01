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

            <ul>
                <h3 class="list underline">1 Les opérateurs arithmétiques</h3>
                <br>
                <br>
                <table>
                    <tbody>
                        <th>Opérateur</th>
                        <th>Signification</th>
                        <tr>
                            <td>+</td>
                            <td>Addition</td>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>Soustraction</td>
                        </tr>
                        <tr>
                            <td>*</td>
                            <td>Multiplication</td>
                        </tr>
                        <tr>
                            <td>/</td>
                            <td>Division</td>
                        </tr>
                        <tr>
                            <td>%</td>
                            <td>Reste de la division entière</td>
                        </tr>
                        <tr>
                            <td>++</td>
                            <td>Incrémentation (+1)</td>
                        </tr>
                        <tr>
                            <td>--</td>
                            <td>Décrémentation (-1)</td>
                        </tr>
                        <tr>
                            <td>=</td>
                            <td>Assignation (variable = expression)</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <h3 class="list underline">2 Les opérateurs relationnels</h3>
                <br>
                <table>
                    <tbody>
                        <th>Opérateur</th>
                        <th>Signification</th>
                        <tr>
                            <td>0</td>
                            <td>Valeur faux</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Valeur vrai</td>
                        </tr>
                        <tr>
                            <td>&gt;</td>
                            <td>Strictement plus grand</td>
                        </tr>
                        <tr>
                            <td>&gt;=</td>
                            <td>Plus grand ou égal</td>
                        </tr>
                        <tr>
                            <td>&lt;</td>
                            <td>Strictement plus petit</td>
                        </tr>
                        <tr>
                            <td>&lt;=</td>
                            <td>Plus petit ou égal</td>
                        </tr>
                        <tr>
                            <td>==</td>
                            <td>Egal</td>
                        </tr>
                        <tr>
                            <td>!=</td>
                            <td>Différent</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <h3 class="list underline">3 Les opérateurs logiques</h3>
                <br>
                <table>
                    <tbody>
                        <th>
                            Opérateur
                        </th>
                        <th>Signification</th>
                        <tr>
                            <td>&amp;&amp;
                            </td>
                            <td>Et logique; vrai si les 2 expressions sont vraies</td>
                        </tr>
                        <tr>
                            <td>||</td>
                            <td>Ou logique; vrai si une des 2 expressions est vraie</td>
                        </tr>
                        <tr>
                            <td>!</td>
                            <td>Négation logique; vrai devient faux et inversemment</td>
                        </tr>
                    </tbody>
                </table>
                <br>

                <section class="message exemple">
                    <h3 class="message-title">Exemples :</h3>
                    <div class="message-icon fa fa-check"></div>
                    <ul class="message-content">
                        <li class="liMaha">(a &gt; 10)&amp;&amp;(a &lt;= 20) sera vrai si la valeur de a E
                            ]10,20]
                        </li>
                        <li class="liMaha">(a &gt; 10)||(b &lt;= 20) sera vrai si la valeur de a E ]10,oo[ ou si
                            b E
                            ]-oo,20]</li>
                        <li class="liMaha">!(a &gt; 10) sera vrai si a E ]-oo,10]</li>
                    </ul>
                </section>

            </ul>
            <br>
            <br>

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