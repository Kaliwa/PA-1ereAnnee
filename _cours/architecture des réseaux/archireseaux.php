<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php
$title = 'Cours';
include('../../includes/head.php');
include('../../includes/header.php');
?>

<body data-spy="scroll" data-target="#toc">

	<div class="main">
		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
			<div class="container">
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
						<li class="nav-item dropdown">
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="index.html">Index</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="synthese_reseaux.html">Architecture des réseaux</a>
								<a class="dropdown-item" href="synthese_unix.html">Système</a>
								<a class="dropdown-item" href="cheatsheet.html">Commandes Shell</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="TP1_Reseaux.html">TP1 - Réseaux</a>
								<a class="dropdown-item" href="TP2_Systeme.html">TP2 - Système</a>
								<a class="dropdown-item" href="TP3_Systeme.html">TP3 - Système</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<div class="container">
				<div class="row">
					<div class="col-sm-3"">
						<nav id="toc" data-toggle="toc" class="sticky-top"></nav>
					</div>
					<div class="col-sm-9">
						<h1>Architecture des réseaux</h1>

						<h2 class="numbered">Introduction</h2>
						<p>Les réseaux sont omniprésents dans notre vie quotidienne et partagent un certain nombre de caractéristiques que nous allons tenter d'identifier.</p>
						<h3 class="numbered">Définition</h3>
						<p>Tout d’abord, qu’est-ce qu’un réseau ?
						Et bien on peut proposer plusieurs définitions :</p> 
						<div class="alert alert-info" role="alert">
							<strong>Définition 1 :</strong> Un réseau est un ensemble d’entités interconnectées ou maintenues en liaison pour réaliser l’échange ou la circulation de biens ou de choses.
						</div>
						<div class="alert alert-primary" role="alert">
							<strong>Définition 2 :</strong> Un réseau est un ensemble de nœuds (ou pôles) reliés entre eux par des liens (ou canaux).
						</div>
						<p>Le schéma d'un réseau ressemble donc à un graphe :</p>
						<img src="image/graphe.gif" alt="Graphe">
						<p>Ici on a par exemple le schéma du réseau Orange en Europe :</p>
						<img src="image/orange_eu_backbone.png" alt="Backbone européen d'Orange" width="100%">
						<h3 class="numbered">Exemples de réseaux</h3>
						Des réseaux informatiques mais pas que ! Les types de réseaux sont multiples :
						<ul>
							<li>Les réseaux sociaux : votre cercle familial et amical est un réseau, un réseau de travail dans une entreprise, les réseaux clandestins...</li>
							<li>Les réseaux biologiques : le réseau sanguin, le réseau nerveux, les réseaux métaboliques...</li>
							<li>Les réseaux de transport : ferré, autoroutier...</li>
							<li>Les réseaux de ressources : gaz, électricité, eau, pétrole</li>
							<li>Les réseaux d'information : le réseau informatique mais aussi téléphonique, télévision, la radio...</li>
						</ul>
						<div class="row">
							<div class="col-sm">
								<img src="image/reseau_ferre.png" width="100%" alt="Réseau ferré SNCF">
								<span>Réseau ferré SNCF</span>
							</div>
							<div class="col-sm">
								<img src="image/reseaux_sociaux.jpg" width="100%" alt="Réseau social">
								<span>Réseau social</span>
							</div>
							<div class="col-sm">
								<img src="image/reseaux_metaboliques.png" width="100%" alt="Réseau métabolique">
								<span>Réseau métabolique</span>
							</div>
						</div><br>
						<div class="row">
							<div class="col-sm">
								<img src="image/reseau_local.png" width="100%" alt="Réseau local">
								<span>Réseau domestique</span>
							</div>
							<div class="col-sm">
								<img src="image/orange_submarine_network.png" width="100%" alt="Réseau métabolique">
								<span>Réseau de câbles sous-marins Orange</span>
							</div>
						</div>
						<br>
						<h2 class="numbered">Les réseaux informatiques</h2>
						<h3 class="numbered">Définition</h3>
						<p>Comme on l'a vu sur le schéma du réseau domestique par exemple, un réseau informatique est l'interconnexion de plusieurs entités entre elles. Pour un réseau domestique, les entités peuvent être la box du FAI, des ordinateurs, des imprimantes, téléphones, consoles... Toutes ces entités vont échanger des informations entre elles. Par exemple, l'ordinateur va envoyer un document à l'imprimante.</p>
						<h3 class="numbered">Un réseau informatique, pourquoi faire ?</h3>
						<p>Beaucoup de choses ! En voici quelques unes :</p>
						<ul>
							<li>Permettre le partage des ressources : numériques (fichiers) ou physiques (une imprimante)</li>
							<li>Accroître la résistance aux pannes</li>
							<li>Diminuer les coûts</li>
							<li>Accéder à des services à distance : bases de données, logiciels</li>
							<li>Communication : mail...</li>
						</ul>
						<h3 class="numbered">Catégories de réseaux</h3>
						<p>La catégorisation des réseaux n'est pas chose aisée car il existe de multiples critères :</p>
						<ul>
							<li>La distance couverte : les réseaux locaux, étendus</li>
							<li>Leur topologie</li>
							
							<li>Leur débit : Ethernet 10, 100 Mbits/s, haut débit</li>
							<li>Leur mode de transmission : filaire, sans fil, fibre</li>
						</ul>
						<h4 class="numbered">Distance couverte par un réseau</h4>
						<h5>Le réseau local : LAN</h5>
						<p>Un LAN (en anglais Local Area Network) est un réseau local limité dans l'espace. Il peut couvrir quelques mètres à un kilomètre. L'infrastructure sera gérée localement. Il permet un taux de transfert important tout en connectant jusqu'à plusieurs centaines d'utilisateurs. On peut le retrouver dans des écoles, chez des particuliers, une entreprise, un hôpital..</p>
						<p>Le réseau local peut aussi être sans fil, on parle alors de WLAN (Wireless LAN).</p>
						<p>Il peut fonctionner selon deux modes :</p>
						<ul>
							<li>De pair à pair : les machines communiquent directement entre elles. On parle aussi de connexion ad hoc.</li>
							<li>Client/serveur : une machine centrale va distribuer les ressources aux utilisateurs</li>
						</ul>
						<p>Ce type de réseau peut utiliser des câbles éthernet et/ou le Wifi.</p>
						<h5>Le réseau métropolitain : MAN</h5>
						<p>Les réseaux métropolitains MAN (Metropolitan Area Networks) sont des réseaux s'étendant sur 1 à 100 kilomètres et reliant au moins deux LAN. Ils peuvent connecter plusieurs miliers d'utilisateurs. Ils peuvent être utilisés par des institutions, comme l'université ! ou des entreprises pour relier des pôles situés dans une même zone géographique. Ils utiliseront plutôt des fibres optiques.</p>
						<h5>Le réseau étendu : WAN</h5>
						<p>Les réseaux WAN (Wide Area Networks) qu'on peut traduire par réseaux à longue distance ou réseaux étendus connectent plusieurs réseaux locaux entre des zones géographiques (parfois très !) éloignées. Ils permettent à toutes sortes d'entités de communiquer sur de longues distances. Le plus connu est... Internet ! Les technologies employées sont variées en fonction des lieux et des contraintes : la fibre optique, le câble, le satellite, les réseaux mobiles 3G, 4G.</p>
						<h4 class="numbered">Topologie d'un réseau</h4>
						<p>Les réseaux informatiques ont une architecture particulière qui présente des caractéristiques et des propriétés : on appelle cela la <strong>topologie</strong> d’un réseau. </p>
						<p>Il faut distinguer la topologie physique qui est donc la forme que prend le réseau selon les nœuds et leurs connexions et la topologie logique qui est la manière dont les entités communiquent. Dans le cas des réseaux informatiques, on peut distinguer entre autres les cas suivants.</p>
						
						<div class='row'>
							<div class="col-3">
								<img src="image/bus.png" width="100%" alt="Topologie Bus">
							</div>
							<div class="col-9">
								<h5>Le bus</h5>
								<p>Tous les nœuds sont connectés en parallèle et chaque message est reçu par tous les nœuds. Le mot bus désigne littéralement la ligne physique qui relie les machines. Cette structure a plusieurs avantages : la défaillance d'un nœud n'entraine pas l'interruption de la communication avec les autres et il nécessite moins de connexions. Il est le plus facile à implémenter. 
								En revanche, il y a plusieurs inconvénients :</p>
								<ul>
									<li>Deux machines ne peuvent pas communiquer en même temps</li>
									<li>En cas de panne du câble, le réseau n'existe plus</li>
									<li>La vitesse de transmission est faible</li>
								</ul>
							</div>
						</div>
						
						<div class='row'>
							<div class="col-9">
								<h5>L'étoile</h5> 
								<p>C'est une structure basée sur un élément cental, souvent un switch, d'où partent les connexions. Dans ce cas, deux machines peuvent émettre simultanément. Cette structure permet d'ajouter un nouveau nœud au réseau sans interrompre le service et la défaillance d'un nœud n'interrompt pas la communication entre les autres nœuds. Cependant, si l'élément central ne fonctionne plus, le réseau ne fonctionne plus. </p>
							</div>
							<div class="col-3">
								<img src="image/etoile.png" width="100%" alt="Topologie Etoile">
							</div>
						</div>
						
						<div class='row'>
							<div class="col-3">
								<img src="image/anneau.png" width="100%" alt="Topologie Anneau">
							</div>
							<div class="col-9">
								<h5>L'anneau</h5>
								<p>Cette structure permet de relier en cascade les machines d'un réseau. Elle présente plusieurs avantages : </p>
								<ul>
									<li>Le signal est régénéré à chaque nœud donc on peut couvrir des distances importantes</li>
									<li>Elle permet de mettre en place des priorités</li>
								</ul>
								<p>Mais aussi plusieurs inconvénients :</p>
								<ul>
									<li>On ne peut pas étendre le réseau sans l'interrompre (on rompt le cercle)</li>
									<li>Si l'un des composants ne fonctionne plus, c'est le réseau entier qui est hors service</li>
								</ul>
							</div>
						</div>
						
						<div class='row'>
							<div class="col-9">
								<h5>Topologie maillée</h5>
								<p>Dans cette topologie, chacun des nœuds doit être relié. Il existe donc de multiples chemins entre deux nœuds du réseau. C'est donc une configuration peu sensible aux pannes mais couteuse et difficile à mettre en place.</p>
							</div>
							<div class="col-3">
								<img src="image/maille.png" width="100%" alt="Topologie Maillée">
							</div>
						</div>
						
						<h3 class="numbered">Entités du réseau et liaisons : le matériel</h3>
						<p>Vous avez pu voir sur les schémas de topologie qu’un réseau informatique n’est pas forcément constitué d’entités toutes identiques. Il y avait des nœuds terminaux (des ordinateurs ou des serveurs) et des nœuds du réseau (switchs, hubs). Le lien entre les nœuds peut aussi être de plusieurs natures : filaire ou sans fil. Voyons un peu le matériel nécessaire pour construire un réseau.</p>
						<h4 class="numbered">Les liens</h4>
						<h5>Les câbles</h5>
						<p>Les câbles sont le moyen le plus utilisé pour relier deux nœuds. Il en existe plusieurs que vous connaissez certainement :</p>
						<ul>
							<li><strong>Le câble éthernet</strong> : C'est le plus utilisé pour les réseaux locaux, on l'appelle aussi RJ-45. Il relie alors souvent un ordinateur à un routeur (votre "box"). Il existe des câbles dits droits qui permettent de relier un ordinateur à un autre appareil comme un hub et des câbles croisés qui permettent de relier deux ordinateurs. Ils peuvent être de différentes catégories selon leur débit : le CAT5 atteint 100Mb/s, le CAT6 jusqu'à 1Gb/s.</li>
							<li><strong>Le câble téléphonique</strong> : aussi appelé RJ-11. C'est le câble du téléphone fixe !
							</li>
						</ul>
						<h5>La transmission sans fil</h5>
						<p>On peut aussi se passer de câble et les possibilités sont nombreuses :</p>
						<ul>
							<li><strong>Le Bluetooth</strong> : Il permet l'échange bidirectionnel de données à très courte distance. Il utilise les ondes radio sur la bande de fréquence de 2,4GHz.</li>
							<li><strong>Le Wifi</strong> : On ne le présente plus, c'est le mode de transmission sans fil le plus utilisé. Sa portée atteint 200m et son débit 1 300 Mbit/s pour la norme ac.</li>
						</ul>
						<h4  class="numbered">Les nœuds du réseau</h4>
						<p>Plusieurs outils peuvent être utilisés pour propager l'information entre les nœuds d'un réseau. </p>
						<h5>Les hubs</h5>
						<p>Le hub ou concentrateur permet de relier plusieurs ordinateurs entre eux. Il reçoit des informations du réseau par un port et va les renvoyer à plusieurs nœuds connectés sur les autres ports. Il va permettre de régénérer et amplifier le signal.</p>
						<h5>Les switchs</h5>
						<p>Le switch transmet des données aux destinataires en fonction de leur adresse physiques MAC. Comme le hub, son rôle est donc de renvoyer les données mais de manière sélective, à des destinataires définis par leur adresse.</p>
						<h5>Les routeurs</h5>
						<p>Le routeur permet l'échange d'information entre plusieurs réseaux différents, typiquement votre réseau local et internet. Votre box est un routeur : elle reçoit des données depuis le réseau internet et les transmet sur votre réseau local à votre ordinateur.</p>
						<h5>Les répéteurs ou relais</h5>
						<p>C'est un outil qui permet de renvoyer l'information. Un relais sans-fil par exemple qui permettra d'étendre un réseau Wi-fi.</p>



						<h2 class="numbered">Support physique, représentation et transmission des données</h2>
						<p>Maintenant que vous savez tout de l'organisation et la structure des réseaux informatiques, voyons comment l'information est transmise.</p>
						<p>On a vu que les réseaux peuvent utiliser des technologiques de transport de l'information différentes et donc utiliser différents types de media physiques (câble électrique, fibre optique, ondes radio etc).</p>
						<p>Cette couche physique assurant la liaison entre les entités est chargée de la transmission effective des signaux entre les interlocuteurs. Il peut alors être nécessaire de transformer les données de l'analogique au numérique et vice versa.</p>
						<p>C'est par exemple ce qui se passe quand vous envoyez et recevez des données depuis votre ordinateur à la maison. Vos informations numériques sont transformées en impulsions électriques pour passer sur la ligne téléphonique et vice versa (modulation et démodulation de fréquences : modem).</p>
						<p>Les réseaux informatiques peuvent transmettre différents types d'information : du texte, du son, des images, de la vidéo... Sur les ordinateurs, ces données sont binaires, codées à l'aide de 0 et de 1. Sur le réseau électrique, elles correspondent à des signaux.</p>
						<h3 class="numbered">Représentation binaire des données</h3>
						<p>Les données informatiques sont donc représentées par des suites de nombres binaires, c'est la base 2. En base 2, on utilise que des 0 et des 1 qui correspondent à un état sur le support physique.</p>
						<!--  -->			<h4  class="numbered">Comment compter en binaire ?</h4>
						<p>Dans le système décimal, on dispose de 9 chiffres pour compter : 0, 1, 2, 3, 4, 5, 6, 7, 8 et 9. Au delà de 9, on ajoute 1 au rang des dizaines et on remet les unités à 0 et ainsi de suite : 10, 11, 12, 13, 14, 15, 16, 17, 18, 19. Ça doit vous rappeler des souvenirs d'école primaire ! Chaque rang est égal au précédent multiplié par 10 : une dizaine vaut dix unités, une centaine vaut dix dizaines etc. Chaque rang : unité, dizaine, centaine etc représente donc une puissance de 10. Chaque nombre peut donc être décomposé en puissance de 10. Exemple avec 23 qui correspond à 2&times;10<sup>1</sup> + 3&times;10<sup>0</sup>.</p>
						<p>Et bien en base 2, cela fonctionne de la même façon mais avec des puissances de 2 !</p>
						<p>En binaire, le rang s'appelle un bit (binary digit : le rang binaire). Là où un rang pouvait prendre 10 valeurs dans le système décimal, en base 2, chaque rang, chaque bit ne peut prendre que 2 valeurs : 0 ou 1 représentant une puissance de 2.</p>
						<p>Comment compter jusqu'à 10 en binaire alors ?</p>
						<table class="table">
							<thead>
								<tr>
									<td>Valeur décimale</td>
									<td>Valeur binaire</td>
									<td></td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style='text-align: right'>0</td>
									<td style='text-align: right'>0</td>
									<td>Jusque là tout va bien : premier rang à 0</td>
								</tr>
								<tr>
									<td style='text-align: right'>1</td>
									<td style='text-align: right'>1</td>
									<td>On ajoute 1 au premier rang</td>
								</tr>
								<tr>
									<td style='text-align: right'>2</td>
									<td style='text-align: right'>10</td>
									<td>On a atteint la fin de premier rang, on ajoute donc un second rang à 1 et on repasse le premier rang à 0</td> 
								</tr>
								<tr>
									<td style='text-align: right'>3</td>
									<td style='text-align: right'>11</td>
									<td>On ajoute 1 au premier rang</td> 
								</tr>
								<tr>
									<td style='text-align: right'>4</td>
									<td style='text-align: right'>100</td>
									<td>On a atteint la fin du second rang, on ajoute donc un troisième rang à 1 et on repasse les deux premiers rangs à 0</td> 
								</tr>
								<tr>
									<td style='text-align: right'>5</td>
									<td style='text-align: right'>101</td>
									<td>On ajoute 1 au premier rang</td> 
								</tr>
								<tr>
									<td style='text-align: right'>6</td>
									<td style='text-align: right'>110</td>
									<td>On ajoute 1 au second rang et on repasse le premier à 0</td> 
								</tr>
								<tr>
									<td style='text-align: right'>7</td>
									<td style='text-align: right'>111</td>
									<td>On ajoute 1 au premier rang. Les trois rangs sont remplis</td> 
								</tr>
								<tr>
									<td style='text-align: right'>8</td>
									<td style='text-align: right'>1000</td>
									<td>Pour continuer on entame donc le rang 4</td> 
								</tr>
								<tr>
									<td style='text-align: right'>9</td>
									<td style='text-align: right'>1001</td>
									<td>On recommence du début</td> 
								</tr>
								<tr>
									<td style='text-align: right'>10</td>
									<td style='text-align: right'>1010</td>
									<td>Et on arrive à 10 !</td> 
								</tr>
							</table>
							<p>Vous avez compris : on remplit un rang d'un 0 puis d'un 1, et dès que le rang atteint 1, on ajoute un nouveau rang qu'on remplit d'un 0 puis d'1 etc etc. Bon c'est fantastique tout ça, mais vous vous doutez bien que pour écrire 1 987 en binaire, on ne va pas remplir des pages et des pages de tableau. Il existe des méthodes pour convertir un nombre de la base 10 vers la base 2 : en utilisant les puissances de 2 ou en utilisant des divisions par 2.</p>
							<h4 class="numbered">Conversion d'un nombre décimal en binaire</h4>
							<h5>Méthode des puissances de 2</h5>
							<p>Dans cette méthode, le principe est de décomposer le nombre décimal en puissances de 2. Reprenons 23 :</p>
							<div class="alert alert-success" role="alert">
								<p><strong>Exemple 1 : 23<sub>10</sub> en binaire</strong></p>

								<p>23 = 16 + 4 + 2 + 1 : On décompose en puissances de 2</p>
<!-- 					  <p>23 = 1&times;16 + 1&times;4 + 1&times;2 + 1</p>
					  <p>23 = 1&times;2<sup>4</sup> + 1&times;2<sup>2</sup> + 1&times;2<sup>1</sup> + 1&times;2<sup>0</sup> : On écrit les puissances de 2</p>
					  <p> 23 = 1&times;2<sup>4</sup> + 0&times;2<sup>3</sup> + 1&times;2<sup>2</sup> + 1&times;2<sup>1</sup> + 1&times;2<sup>0</sup> : On écrit les puissances de 2 qui manquent</p>
					  <p> 23 = <span style="color:orangeRed">1</span>&times;2<sup>4</sup> + <span style="color:orangeRed">0</span>&times;2<sup>3</sup> + <span style="color:orangeRed">1</span>&times;2<sup>2</sup> + <span style="color:orangeRed">1</span>&times;2<sup>1</sup> + <span style="color:orangeRed">1</span>&times;2<sup>0</sup> : On obtient le nombre dans le système binaire !</p> -->
					  <hr>
					  <table class="example">
					  	<tr>
					  		<td> </td><td> </td><td> </td><td style="color:orangeRed"> 1 </td><td> </td><td style="color:orangeRed"> 1</td><td style="color:orangeRed"> 1</td><td style="color:orangeRed">1 </td><td></td>
					  	</tr>
					  	<tr>
					  		<td>2<sup>7</sup></td><td>2<sup>6</sup></td><td>2<sup>5</sup></td><td>2<sup>4</sup></td><td>2<sup>3</sup></td><td>2<sup>2</sup></td><td>2<sup>1</sup></td><td>2<sup>0</sup></td><td>On place un 1 devant chaque puissance de 2 qui compose le nombre</td>
					  	</tr>
					  	<tr>
					  		<td>128</td><td>64</td><td>32</td><td>16</td><td>8</td><td>4</td><td>2</td><td>1</td><td></td>
					  	</tr>
					  </table>
					  <hr>
					  <table class="example">
					  	<tr>
					  		<td style="color:orangeRed"></td><td style="color:orangeRed"> </td><td style="color:orangeRed"> </td><td> 1 </td><td style="color:orangeRed">0 </td><td> 1</td><td> 1</td><td>1 </td><td></td>
					  	</tr>
					  	<tr>
					  		<td>2<sup>7</sup></td><td>2<sup>6</sup></td><td>2<sup>5</sup></td><td>2<sup>4</sup></td><td>2<sup>3</sup></td><td>2<sup>2</sup></td><td>2<sup>1</sup></td><td>2<sup>0</sup></td><td>On remplit d'un 0 pour les puissances de 2 non trouvées</td>
					  	</tr>
					  	<tr>
					  		<td>128</td><td>64</td><td>32</td><td>16</td><td>8</td><td>4</td><td>2</td><td>1</td><td></td>
					  	</tr>
					  </table>
					  <hr>
					  <p>On a donc : 23<sub>10</sub> = <span style="color:orangered">10111</span><sub>2</sub></p>
					</div>

					<div class="alert alert-secondary" role="alert">
						<p><strong>Exemple 2 : 242<sub>10</sub> en binaire</strong></p>

						<p>242 = 128 + 64 + 32 + 16 + 2 : On décompose en puissances de 2</p>
						<hr>
						<table class="example">
							<tr>
								<td style="color:orangeRed"> 1</td><td style="color:orangeRed">1 </td><td style="color:orangeRed">1 </td><td style="color:orangeRed">1  </td><td> </td><td> </td><td style="color:orangeRed">1 </td><td style="color:orangeRed"> </td><td></td>
							</tr>
							<tr>
								<td>2<sup>7</sup></td><td>2<sup>6</sup></td><td>2<sup>5</sup></td><td>2<sup>4</sup></td><td>2<sup>3</sup></td><td>2<sup>2</sup></td><td>2<sup>1</sup></td><td>2<sup>0</sup></td><td>On place un 1 devant chaque puissance de 2 qui compose le nombre</td>
							</tr>
							<tr>
								<td>128</td><td>64</td><td>32</td><td>16</td><td>8</td><td>4</td><td>2</td><td>1</td><td></td>
							</tr>
						</table>
						<hr>
						<table class="example">
							<tr>
								<td> 1</td><td>1 </td><td>1 </td><td>1  </td><td style="color:orangeRed">0 </td><td style="color:orangeRed">0 </td><td>1 </td><td style="color:orangeRed">0 </td><td></td>
							</tr>
							<tr>
								<td>2<sup>7</sup></td><td>2<sup>6</sup></td><td>2<sup>5</sup></td><td>2<sup>4</sup></td><td>2<sup>3</sup></td><td>2<sup>2</sup></td><td>2<sup>1</sup></td><td>2<sup>0</sup></td><td>On remplit d'un 0 pour les puissances de 2 non trouvées</td>
							</tr>
							<tr>
								<td>128</td><td>64</td><td>32</td><td>16</td><td>8</td><td>4</td><td>2</td><td>1</td><td></td>
							</tr>
						</table>
						<hr>
<!-- 					  <p>382 = 1&times;256 + 1&times;64 + 1&times;32 + 1&times;16 + 1&times;8 + 1&times;4 + 1&times;2</p>
					  <p>382 = 1&times;2<sup>8</sup> + 1&times;2<sup>6</sup> + 1&times;2<sup>5</sup> + 1&times;2<sup>4</sup> + 1&times;2<sup>3</sup> + 1&times;2<sup>2</sup> + 1&times;2<sup>1</sup> : On écrit les puissances de 2</p>
					  <p>382 = 1&times;2<sup>8</sup> + 0&times;2<sup>7</sup> + 1&times;2<sup>6</sup> + 1&times;2<sup>5</sup> + 1&times;2<sup>4</sup> + 1&times;2<sup>3</sup> + 1&times;2<sup>2</sup> + 1&times;2<sup>1</sup> + 0&times;2<sup>0</sup> : On écrit les puissances de 2 qui manquent</p>
					  <p>382 = <span style="color:orangeRed">1</span>&times;2<sup>8</sup> + <span style="color:orangeRed">0</span>&times;2<sup>7</sup> + <span style="color:orangeRed">1</span>&times;2<sup>6</sup> + <span style="color:orangeRed">1</span>&times;2<sup>5</sup> + <span style="color:orangeRed">1</span>&times;2<sup>4</sup> + <span style="color:orangeRed">1</span>&times;2<sup>3</sup> + <span style="color:orangeRed">1</span>&times;2<sup>2</sup> + <span style="color:orangeRed">1</span>&times;2<sup>1</sup> + <span style="color:orangeRed">0</span>&times;2<sup>0</sup> : On obtient le nombre dans le système binaire !</p> -->
					  <p>On a donc : 242<sub>10</sub> = <span style="color:orangered">11110010</span><sub>2</sub></p>
					</div>
					<p>Comme vous voyez, pour les grands nombres, cette méthode est assez fastidieuse : il faudrait faire un long tableau, et on risque de se tromper en décomposant. Il existe une autre méthode qui convient mieux.</p>

					<h5>Méthode des divisions par 2</h5> 
					<p>Dans cette méthode, le principe est de diviser le nombre à convertir successivement par 2 en notant le reste de la division jusqu'à atteindre un quotient égal à 0.</p>
					<div class="alert alert-success" role="alert">
						<p><strong>Exemple : 382<sub>10</sub> en binaire</strong></p>

						<table class="example">
							<tr>
								<td>382</td><td>&divide;</td><td>2</td><td>=</td><td>191</td><td>+</td><td style="color:orangered">0</td>
							</tr>
							<tr>
								<td>191</td><td>&divide;</td><td>2</td><td>=</td><td>95</td><td>+</td><td style="color:orangered">1</td>
							</tr>
							<tr>
								<td>95</td><td>&divide;</td><td>2</td><td>=</td><td>47</td><td>+</td><td style="color:orangered">1</td>
							</tr>
							<tr>
								<td>47</td><td>&divide;</td><td>2</td><td>=</td><td>23</td><td>+</td><td style="color:orangered">1</td>
							</tr>
							<tr>
								<td>23</td><td>&divide;</td><td>2</td><td>=</td><td>11</td><td>+</td><td style="color:orangered">1</td>
							</tr>
							<tr>
								<td>11</td><td>&divide;</td><td>2</td><td>=</td><td>5</td><td>+</td><td style="color:orangered">1</td>
							</tr>
							<tr>
								<td>5</td><td>&divide;</td><td>2</td><td>=</td><td>2</td><td>+</td><td style="color:orangered">1</td>
							</tr>
							<tr>
								<td>2</td><td>&divide;</td><td>2</td><td>=</td><td>1</td><td>+</td><td style="color:orangered">0</td>
							</tr>
							<tr>
								<td>1</td><td>&divide;</td><td>2</td><td>=</td><td>0</td><td>+</td><td style="color:orangered">1</td>
							</tr>
						</table>
						<p>On voit apparaître notre nombre en binaire : on lit les restes des divisions de bas en haut, et on obtient bien 382<sub>10</sub> = <span style="color:orangered">101111110</span><sub>2</sub>.</p>
					</div>

					<h4 class="numbered">Conversion d'un nombre binaire en décimal</h4>
					<p>Comment faire l'inverse maintenant ?</p>
					<p>Et bien c'est beaucoup plus simple : il suffit d'additionner la valeur de la puissance de 2 de chaque rang</p>
					<div class="alert alert-success" role="alert">
						<p><strong>Exemple : 110 0011<sub>2</sub> en décimal</strong></p>

						<table class="example">
							<tr>
								<td></td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>1</td>
							</tr>
							<tr>
								<td>2<sup>7</sup></td><td>2<sup>6</sup></td><td>2<sup>5</sup></td><td>2<sup>4</sup></td><td>2<sup>3</sup></td><td>2<sup>2</sup></td><td>2<sup>1</sup></td><td>2<sup>0</sup></td>
							</tr>
							<tr>
								<td>128</td><td>64</td><td>32</td><td>16</td><td>8</td><td>4</td><td>2</td><td>1</td>
							</tr>
						</table>
						<hr>
						<p>On a donc 64 + 32 + 2 + 1 = 99.</p> 
						<p>110 0011<sub>2</sub> = 99<sub>10</sub></p>
					</div>
					<h3 class="numbered">Les unités en informatique</h3>
					<h4 class="numbered">Le bit</h4>
					<p>En informatique, on utilise donc le bit qui permet de coder l'état 0 et l'état 1.</p>

					<h4 class="numbered">L'octet</h4>
					<p>L'octet est une suite de 8 bits. Par exemple : 0011 1100. Un octet permet de coder 2<sup>8</sup> possibilités, soit 256.</p>
					<p>Attention, en anglais, un octet est appelé <strong>byte</strong>, à ne pas confondre avec le bit !</p>
					<p>Pour convertir un octet en nombre décimal, vous savez maintenant faire :</p>
					<table class="example">
						<tr>
							<td>0</td><td>0</td><td>1</td><td>1</td><td>1</td><td>1</td><td>0</td><td>0</td>
						</tr>
						<tr>
							<td>2<sup>7</sup></td><td>2<sup>6</sup></td><td>2<sup>5</sup></td><td>2<sup>4</sup></td><td>2<sup>3</sup></td><td>2<sup>2</sup></td><td>2<sup>1</sup></td><td>2<sup>0</sup></td>
						</tr>
						<tr>
							<td>128</td><td>64</td><td>32</td><td>16</td><td>8</td><td>4</td><td>2</td><td>1</td>
						</tr>
					</table>
					<p>On additionne 32 + 16 + 8 + 4 = 60</p>
					<p>Et pour convertir un nombre décimal en octet, vous le convertissez en binaire et si besoin ajoutez des rangs à 0 pour arriver à 8 rangs.</p>
					<p>Tout à l'heure, on avait trouvé 23<sub>10</sub> = 10111<sub>2</sub>. L'octet correspondant s'écrit donc 0001 0111.</p>

					<h4 class="numbered">kbit, kB, ko, kio...</h4>
					<p>Dans les multiples des bits et des octets, on a malheureusement l'embarras du choix et il n'est pas facile de s'y retrouver.</p>
					<h5>Les multiples des bits</h5>
					<p>Les unités multiples de bits sont surtout utilisés dans le domaine des transmissions et leur mesure, comme les mesures de débit. 
					</p>
					<p>Dans le système décimal, il existe plusieurs préfixes comme kilo-, méga-, giga-. Un kilobit (abrégé kbit ou kb, k minuscule) correspond à 10<sup>3</sup> bits, un mégabit (Mbit ou Mb) à 10<sup>6</sup> bits, un gigabit (Gbit ou Gb) à 10<sup>9</sup> bits. </p>
					<p>Dans le système binaire, on utilise les préfixes kibi-, mebi-, gibi-. Un kibibit (Kibit) correspond à 2<sup>10</sup> bits. Un mebibit (Mibit) correspond à 2<sup>20</sup> bits. Un gibibit (Gibit) correspond à 2<sup>30</sup> bits.</p> 
					<p>Un petit tableau pour synthétiser :</p>
					<table class="table unites table-striped">
						<thead>
							<tr>
								<td colspan="3">Système décimal</td>
								<td colspan="3">Système binaire</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Unité</td>
								<td>Symbole</td>
								<td>Valeur</td>
								<td>Unité</td>
								<td>Symbole</td>
								<td>Valeur</td>
							</tr>
							<tr>
								<td>bit</td><td>bit</td><td>1 bit</td><td>bit</td><td>bit</td><td>1 bit</td>
							</tr>
							<tr>
								<td>kilobit</td><td>	kbit	</td><td>10<sup>3</sup> bits	</td><td>kibibit</td><td>	Kibit</td><td>	2<sup>10</sup> bits</td>
							</tr>
							<tr>	
								<td>mégabit</td><td>	Mbit</td><td>	10<sup>6</sup> bits	</td><td>mébibit	</td><td>Mibit</td><td>	2<sup>20</sup> bits</td>
							</tr>
							<tr>
								<td>gigabit	</td><td>Gbit</td><td>	10<sup>9</sup> bits	</td><td>gibibit	</td><td>Gibit</td><td>	2<sup>30</sup> bits</td>
							</tr>
							<tr>
								<td>térabit</td><td>	Tbit</td><td>	10<sup>12</sup> bits	</td><td>tébibit</td><td>	Tibit</td><td>	2<sup>40</sup> bits</td>
							</tr>
							<tr>
								<td>pétabit</td><td>	Pbit	</td><td>10<sup>15</sup> bits</td><td>	pébibit</td><td>	Pibit	</td><td>2<sup>50</sup> bits</td>
							</tr>
							<tr>
								<td>exabit	</td><td>Ebit	</td><td>10<sup>18</sup> bits</td><td>	exbibit	</td><td>Eibit</td><td>	2<sup>60</sup> bits</td>
							</tr>
							<tr>
								<td>zettabit</td><td>	Zbit	</td><td>10<sup>21</sup> bits</td><td>	zébibit	</td><td>Zibit</td><td>	2<sup>70</sup> bits</td>
							</tr>
							<tr>
								<td>yottabit</td><td>	Ybit	</td><td>10<sup>24</sup> bits</td><td>	yobibit</td><td>	Yibit</td><td>	2<sup>80</sup> bits</td>
							</tr>
						</tbody>
					</table>

					<h5>Les multiples des octets</h5>
					<p>Le symbole de l'octet est la lettre "o" minuscule. En anglais, on parle de byte, abrégé avec un "B" majuscule. Comme on l'a vu, un octet correspond à 8 bits. Il ne faut pas confondre le bit et le byte donc !</p>
					<p>En informatique, les capacités en mémoire sont usuellement exprimées en octets et ses multiples. Les mêmes préfixes que les bits sont utilisés pour exprimer les multiples dans le système décimal (kilo, méga, giga etc.) et le système binaire (kibi, mebi, gibi etc.). </p>
					<p>Dans le système décimal, les symboles sont donc ko, Mo, Go... en français et kB, MB, GB en anglais. Dans le système binaire, on a kio, Mio, Gio en français et KiB, MiB, GiB en anglais.</p> 

				Voici la table correspondante :</p>
				<table class="table unites table-striped">
					<thead>
						<tr>
							<td colspan="3">Système décimal</td>
							<td colspan="3">Système binaire</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Unité</td>
							<td>Symbole</td>
							<td>Valeur</td>
							<td>Unité</td>
							<td>Symbole</td>
							<td>Valeur</td>
						</tr>
						<tr>
							<td>kilooctet</td><td>	ko	</td><td>10<sup>3</sup></td><td>kibioctet</td><td>	Kio</td><td>	2<sup>10</sup></td>
						</tr>
						<tr>	
							<td>mégaoctet</td><td>	Mo</td><td>	10<sup>6</sup></td><td>mébioctet	</td><td>Mio</td><td>	2<sup>20</sup></td>
						</tr>
						<tr>
							<td>gigaoctet	</td><td>Go</td><td>	10<sup>9</sup></td><td>gibioctet	</td><td>Gio</td><td>	2<sup>30</sup></td>
						</tr>
						<tr>
							<td>téraoctet</td><td>	To</td><td>	10<sup>12</sup></td><td>tébioctet</td><td>	Tio</td><td>	2<sup>40</sup></td>
						</tr>
						<tr>
							<td>pétaoctet</td><td>	Po	</td><td>10<sup>15</sup></td><td>	pébioctet</td><td>	Pio	</td><td>2<sup>50</sup></td>
						</tr>
						<tr>
							<td>exaoctet	</td><td>Eo	</td><td>10<sup>18</sup></td><td>	exbioctet	</td><td>Eio</td><td>	2<sup>60</sup></td>
						</tr>
						<tr>
							<td>zettaoctet</td><td>	Zo	</td><td>10<sup>21</sup></td><td>	zébioctet	</td><td>Zio</td><td>	2<sup>70</sup></td>
						</tr>
						<tr>
							<td>yottaoctet</td><td>	Yo	</td><td>10<sup>24</sup></td><td>	yobioctet</td><td>	Yio</td><td>	2<sup>80</sup></td>
						</tr>
					</tbody>
				</table>
				<p>Un kilooctet correspond donc à 1000 octets, soit 1000 &times; 8 = 8000 bits.</p>
				<p>Un kibioctet correspond à 1024 octets, soit 1024 &times; 8 = 8192 bits.</p>
				<p>Un kilobit correspond à 1000 bits, soit 1000/8 = 125 octets.</p>
				<p>Un kibibit correspond à 1024 bits, soit 1024/8 = 128 octets.</p>

				<h3 class="numbered">La transmission des données</h3>
				<p>Quand une application doit envoyer des données sur le réseau, c'est une succession de bits qui correspondront à des impulsions sur le réseau électrique qui transiteront.</p>
				<p>Il existe plusieurs méthodes permettant de transférer des données d'un nœud émetteur à un nœud récepteur :</p>
				<ul>

					<li><strong>La commutation de circuits</strong> est une méthode de transfert de données consistant à établir un circuit dédié au sein d'un réseau entre l'émetteur et le récepteur. Dans ce type de scénario, la ligne de communication peut être assimilé à un tuyau ! C'est la méthode utilisée dans le réseau téléphonique.</li>
					<li><strong>La commutation de message</strong> consiste à transmettre le message séquentiellement d'un nœud à un autre. Chaque nœud attend d'avoir reçu l'intégralité du message avant de le transmettre au suivant.</li>
					<li><strong>La commutation de paquets</strong> consiste à découper l'information en morceaux plus petits, d'une longueur de <em>n</em> bits : les <strong>paquets</strong>. 
					</li>
				</ul>
				<h4 class="numbered">La commutation de paquets</h4>
				<p>Dans la commutation de paquets, les nœuds du réseau sont libres de déterminer la route de chaque paquet individuellement. Les paquets ainsi émis peuvent emprunter des routes différentes et sont réassemblés à l'arrivée par le nœud destinataire.</p>

				<p>Chaque paquet est transmis indépendamment sur le réseau et les nœuds du réseau détermineront sa route en fonction de leur table de routage. Lors de la transmission, un nœud reçoit ainsi un paquet. Ce paquet devra être entièrement reçu avant d'être transmis au nœud suivant. Une fois le paquet entièrement reçu, le nœud déterminera sa route en fonction de la table de routage et déplacera le paquet de l'entrée du nœud à la sortie appropriée : c'est l'étape de forwarding. </p>

				<p>Dans ce type de scénario, les paquets peuvent arriver dans un ordre différent de l'ordre d'envoi et peuvent éventuellement se perdre. Des mécanismes sont ainsi intégrés dans les paquets pour permettre un réassemblage ordonné et une réémission en cas de perte de paquets.</p>


				<p>Il s'agit du mode de transfert utilisé sur internet. C'est un mode qui résiste bien aux pannes des nœuds intermédiaires et permet d'utiliser efficacement les lignes de transmission.</p>

				<h4 class="numbered">Le débit d'un réseau</h4>
				<p>Le débit d’un réseau mesure la quantité d’information que le réseau peut transmettre par unité de temps. Il est exprimé en bits par seconde (b/s), ou plus habituellement aujourd'hui, en Mb/s. </p>
				<h4 class="numbered">Les délais</h4>
				<p>Le calcul du délai de bout en bout d’un message (délai de transfert) dans un réseau se compose de 4 parties :</p>
				<h5>Le délai de traitement</h5> 
				<p>C'est le temps requis pour analyser un en-tête de paquets et décider où l’envoyer. Ceci peut inclure la vérification d’erreurs.</p>

				<h5>Le délai de la file d'attente</h5>
				<p>C'est le temps écoulé entre la mise en file d’attente d’un paquet et sa transmission</p>
				
				<h5>Le délai de transmission</h5>
				<p>C'est le temps requis pour faire passer tous les bits d’un paquet sur le support de transmission utilisé</p>
				<p>Pour <em>N</em> le débit de la liaison, <em>T</em> la taille du paquet :</p>
				<p style="text-align: center;"><em>d</em><sub>transmission</sub> = <em>T</em>/<em>N</em></p>
				<h5>Le délai de propagation</h5>
				<p>Une fois un bit émis sur le support de transmission, c'est le temps requis pour qu’il se propage jusqu’à la fin de sa trajectoire physique. La vitesse de propagation du circuit dépend principalement de la longueur du circuit physique.</p>
				<p>Dans la majorité des cas, cette vitesse est proche de celle de la lumière.</p>
				<p>Pour <em>d</em> la distance, <em>v</em> la vitesse de propagation :</p>
				<p style="text-align: center;"><em>d</em><sub>propagation</sub> = <em>d</em>/<em>v</em></p>
				
				<div class="alert alert-primary" role="alert">
					<p><strong>Exemple </strong></p>
					<ul>
						<li>Un terminal envoie un fichier MP3 de 30 Mbits à destination d’un autre terminal.</li>
						<li> Tous les liens sur le chemin des paquets ont un débit de transmission <em>N</em> de 10 Mbps.</li>
						<li>Nous supposons que la vitesse de propagation est de 2&times;10<sup>8</sup> m/s et que la distance entre les deux terminaux est de 10 km.</li>
					</ul>
					<p>En supposant que nous disposons d’un lien unique entre la source et la destination et que le fichier est envoyé en un seul paquet, sans délai de traitement et d'attente :</p>
					<p style="text-align: left; width:30%; margin:auto;"><em>d</em><sub>transmission</sub> = <em>T</em>/<em>N</em></p> 
					<p style="text-align: left; width:30%; margin:auto;"><em>d</em><sub>transmission</sub> = 30 / 10</p> 
					<p style="text-align: left; width:30%; margin:auto;"><em>d</em><sub>transmission</sub> = 3 secondes</p> 
					<hr>
					<p style="text-align: left; width:30%; margin:auto;"><em>d</em><sub>propagation</sub> = <em>d</em>/<em>v</em></p>
					<p style="text-align: left; width:30%; margin:auto;"><em>d</em><sub>propagation</sub> = 10&times;10<sup>3</sup>/(2 &times; 10<sup>8</sup>)</p>
					<p style="text-align: left; width:30%; margin:auto;"><em>d</em><sub>propagation</sub> = 0,00005 secondes</p>
					<hr>
					<p style="text-align: left; width:30%; margin:auto;"><em>d</em><sub>total</sub> = <em>d</em><sub>transmission</sub> + <em>d</em><sub>propagation</sub></p>
					<p style="text-align: left; width:30%; margin:auto;"><em>d</em><sub>total</sub> = 3 + 0,00005</p>
					<p style="text-align: left; width:30%; margin:auto;"><em>d</em><sub>total</sub> = 3,00005 secondes</p>
				</div>

				<h3 class="numbered">Synthèse : Le modèle OSI</h3>
				<p>Les différentes étapes que nous venons de voir : l'émission des bits, l'adressage vers le destinataire, l'émission d'un paquet sur le réseau et son transport correspondent aux quatre premières couches du modèle <strong>OSI</strong> (Open Systems Interconnection).</p>
				<p>Le modèle décrit les fonctionnalités nécessaires à la communication et l'organisation de ces tâches en "couches". Chaque couche gère les paramètres qu'elle prend en compte avant de passer l'information à la couche suivante dans le traitement. Le modèle OSI complet comprend 7 couches.</p>

				<img src="image/osi.png" width="50%" alt="Le modèle OSI">

				<p>Chaque couche correspond à un <strong>service</strong>, une fonctionnalité, qui suit un <strong>protocole</strong>, un ensemble de règles d'échange.</p>
				<p>Les couches hautes sont plus proches de l'utilisateur et gèrent des données plus abstraites, en utilisant les services des couches basses qui mettent en forme ces données afin qu'elles puissent être émises sur un médium physique.</p>
				<h2 class="numbered">Internet</h2>
				<p>Internet prend son nom de Interconnexion de réseaux (net en anglais). C'est le regroupement d'un ensemble de réseaux : locaux, métropolitains, régionaux, nationaux. C'est le plus grand réseau informatique du monde. C'est un réseau à commutation de paquets, géré de manière décentralisée.</p>

				<h3 class="numbered">Historique</h3>
				<ul>
					<li>ARPANET (1969) : l'ancêtre, le premier réseau à transfert de paquets développé aux États-Unis par la DARPA</li>
					<li>TCP/IP (1977) : Protocoles de transfert de données</li>
					<li>1983 : ARPANET adopte TCP/IP, c'est la naissance d'Internet</li>
					<li>1987-1992 : Expansion du réseau, les entreprises privées se connectent</li>
					<li>1993 : Mise en ligne du World Wide Web inventé par Tim Berners-Lee au CERN à Genève</li>
				</ul>
				<p>La première page web :</p>
				<img src="image/www1.png" width="100%" alt="Première page du web">
				<h3 class="numbered">Définitions</h3>
				<p><strong>Internet</strong> est donc le réseau mondial. <strong>Le World Wide Web</strong>, ou plus simplement Web, est le système hypertexte fonctionnant sur internet. Le Web permet de consulter, avec un navigateur, des pages accessibles sur des sites grâce à des liens hypertexte. Ce sont donc deux choses différentes !</p> 

				<h3 class="numbered">Protocoles</h3>
				<p>Un protocole est un ensemble de conventions réglant les échanges entre des entités qui coopèrent pour rendre un service. Autrement dit, ce sont des règles sur lesquelles s'entendent tous les acteurs pour pouvoir se comprendre.</p>
				<p>Ils permettent notamment d'identifier les interfaces (donc les machines), de s'assurer de la réception des données envoyées, et de l'interopérabilité.</p>
				<p>L'ensemble des protocoles utilisés par Internet est appelé TCP/IP, du nom de ses deux premiers protocoles, TCP et IP. </p>
				<p>Le modèle TCP/IP (appelé aussi modèle Internet), qui date de 1977, a été stabilisé bien avant la publication du modèle OSI en 1984. Il présente aussi une approche en couches mais en contient uniquement quatre : la couche physique, la couche réseau, la couche transport et la couche services.</p>
				<p><strong>La couche physique</strong> décrit les caractéristiques physiques de la communication : quels sont les liens utilisés (câbles, sans fil) et les détails (connecteurs..). Elle désigne par exemple la ligne ADSL.</p>
				<p><strong>La couche réseau</strong> décrit l'acheminement de paquets à travers un seul réseau. C'est le protocole <strong>IP</strong> (Internet Protocol). Pour pouvoir envoyer une information d’un ordinateur à un autre, il est nécessaire de pouvoir identifier les entités. L'adresse utilisée pour identifier le destinataire d'un paquet est l'adresse IP.</p>
				<p><strong>La couche transport</strong> se charge de la la fiabilité des échanges, de l'ordre d'arrivée des données et de déterminer à quelle application le paquet de données doit être délivré. Les protocoles utilisés sont entre autre <strong>TCP</strong> (Transmission Control Protocol) et <strong>UDP</strong> (User Datagram Protocol).</p>
				<p><strong>La couche services ou applications</strong> représente le point d'accès aux services réseaux. 
				Ces applications fonctionnent au-dessus de TCP ou d'UDP, et sont  associées à un port. Vous connaissez sûrement quelques unes de ces applications et protocoles :</p>
				<ul>
					<li>HTTP, Hypertext Transfer Protocol (port TCP 80) : protocole du Web</li>
					<li>DNS, Domain Name System : protocole permettant de faire correspondre nom d'un site et adresse IP</li>
					<li>FTP, File Transfer Protocol : protocole permettant le transfert de fichiers</li>
					<li>SMTP, Simple Mail Transfer Protocol : protocole de transfert du courrier électronique</li>
					<li>POP, Post Office Protocol : protocole de récupération du courrier électronique</li>
					<li>SSH, Secure Shell : protocole de connexion à distance sécurisée</li>
				</ul>
				<img src="image/Network-Protocols-Map-Poster.jpg" width="100%" alt="Protocoles de communication">
				<br><br>
				<p>Et oui !</p>
				<h2 class="numbered">Services Internet</h2>
				<p>On a vu qu'il y avait beaucoup de services internet. On va en voir quelques uns que vous utiliserez en développement en détail.</p>
				<h3 class="numbered">Le web</h3>
				<p>On en a déjà parlé. Le web est un système hypertexte qui permet de consulter des pages dans un navigateur. Les pages web sont des documents contenant des images, du son, du texte, parfois des petits morceaux de programme, mais surtout des liens vers d'autres pages : des liens hypertextes.</p>
				<p>Cette adresse pointée par un lien est l'URL (Uniform Resource Locator). Elle se compose de plusieurs parties :</p>
				<img src="image/google.png" width="50%" alt="Description d'une URL">
				<p>L'ordinateur hôte qui contient les pages web et nous les met à disposition est un <strong>serveur</strong>. Quand on tape une adresse dans son navigateur, on demande au serveur de nous l'envoyer. Le serveur l'envoie à notre navigateur qui l'affiche.</p>
				<img src="image/clientserveur.png" width="40%" alt="Configuration de serveurs mail">
				<h3 class="numbered">Le mail</h3>
				<p>Le mail utilise plusieurs protocoles :</p>
				<ul>
					<li>POP (Post Office Protocole) : c'est le protocole qui vous permet de rapatrier votre courrier sur votre machine. Votre courrier est transféré du serveur sur votre machine et il ne reste pas de copie sur le serveur. Il n'est plus trop utilisé aujourd'hui.</li>
					<li>IMAP (Internet Message Access Protocol) : c'est le protocole qui permet d'accéder directement au serveur de messagerie. Les messages sont conservés sur le serveur. Il permet donc d'accéder à ses mails depuis plusieurs terminaux. </li>
					<li>SMTP (Simple Message Transfert Protocole) : c'est le protocole d'envoi des messages.</li>
				</ul> 
				<img src="image/mail.png" width="50%" alt="Configuration de serveurs mail">
				<h3 class="numbered">Le transfert de fichiers</h3>
				<p>Le protocole d'échanges de fichiers sur internet est le FTP. Le serveur hébergeant des fichier et les mettant à disposition via ce protocole est un serveur FTP. Le FTP est généralement utilisé pour télécharger un dossier présent sur un serveur ou au contraire pour envoyer un dossier vers un serveur.</p>

				<p>Il n'est pas conseillé de s'en servir pour autre chose que le transfert de fichiers car vous ne pouvez généralement pas lire, ni modifier un fichier sans l'avoir téléchargé entièrement.</p>

				<p>Avec le protocole FTP les données transitent en clair sur le réseau. Les protocoles FTPS (FTP sur SSL) SFTP (SSH) implémentent le protocole FTP avec un chiffrement des données / de la connexion.</p>
				<img src="image/ftp.png" width="50%" alt="Configuration de serveurs mail">
				<h3 class="numbered">Le travail à distance</h3>
				<p>SSH est une application et un protocole de connexion sécurisée à distance. Les usages de base de SSH sont :</p>
				<ul>
					<li>Accéder à distance à la console en ligne commande (shell), ce qui permet, entre autres, d'effectuer la totalité des opérations courantes et/ou d'administration sur la machine distante.</li>
					<li>Déporter l'affichage graphique de la machine distante.</li>
					<li>Transferts de fichiers en ligne de commande.</li>
					<li>Montage ponctuel de répertoire distants, soit en ligne de commande, soit via Nautilus, sous Gnome par exemple.</li>
					<li>Montage automatique de répertoires distants.</li>
				</ul>
				<p> SSH chiffre tout le trafic (mots de passe y compris), via une combinaison astucieuse de chiffrement symétrique et asymétrique. SSH fournit également d'autres méthodes d'authentification alternatives au traditionnel mot de passe. </p>
				<img src="image/ssh.png" width="50%" alt="Configuration de serveurs mail">
			</div>
		</div>
	</div>
</div>

<!-- Footer -->



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

