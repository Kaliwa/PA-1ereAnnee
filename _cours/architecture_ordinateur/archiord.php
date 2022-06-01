<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php
$title = 'Cours';
include('../../includes/head.php');
include('../../includes/header.php');
?>
<body class="mediawiki ltr sitedir-ltr mw-hide-empty-elt ns-0 ns-subject mw-editable page-Fonctionnement_d_un_ordinateur_L_architecture_de_base_d_un_ordinateur rootpage-Fonctionnement_d_un_ordinateur skin-vector action-view skin-vector-legacy"><div id="mw-page-base" class="noprint"></div>
<div id="mw-head-base" class="noprint"></div>
<div id="content" class="mw-body" role="main">
	<a id="top"></a>
	<div id="siteNotice"><!-- CentralNotice --></div>
	<div class="mw-indicators">
	</div>
	<br>
	<br>
	<br>
	<h1 id="firstHeading" class="firstHeading" >Fonctionnement d'un ordinateur/L'architecture de base d'un ordinateur</h1>
	<div id="bodyContent" class="vector-body">
		<div id="contentSub2"></div>
		
		<div id="jump-to-nav"></div>
		<div id="mw-content-text" class="mw-body-content mw-content-ltr" lang="fr" dir="ltr"><div class="mw-parser-output"><p>Un ordinateur n'est pas qu'un amoncellement de circuits et est organisé d'une manière bien précise. Il est structuré autour de trois circuits principaux&#160;:
</p>
<ul><li>les <b>entrées/sorties</b>, qui permettent à l'ordinateur de communiquer avec l'extérieur&#160;;</li>
<li>une <b>mémoire</b> qui mémorise les données à manipuler&#160;;</li>
<li>un <b>processeur</b>, qui manipule l'information et donne un résultat.</li></ul>
<div class="center"><div class="thumb tnone"><div class="thumbinner" style="width:442px;"><a href="/wiki/Fichier:Architecture_Von_Neumann.png" class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/51/Architecture_Von_Neumann.png/440px-Architecture_Von_Neumann.png" decoding="async" width="440" height="247" class="thumbimage" srcset="//upload.wikimedia.org/wikipedia/commons/5/51/Architecture_Von_Neumann.png 1.5x" data-file-width="466" data-file-height="262" /></a>  <div class="thumbcaption"><div class="magnify"><a href="/wiki/Fichier:Architecture_Von_Neumann.png" class="internal" title="Agrandir"></a></div>Architecture d'un système à mémoire.</div></div></div></div>
<p>Pour faire simple, le processeur est un circuit qui s'occupe de faire des calculs et de traiter des informations. La mémoire s'occupe purement de la mémorisation des informations. Les entrées-sorties permettent au processeur et à la mémoire de communiquer avec l'extérieur et d'échanger des informations avec des périphériques. Tout ce qui n'appartient pas à la liste du dessus est obligatoirement connecté sur les ports d'entrée-sortie et est appelé <b>périphérique</b>. Ces composants communiquent via un <b>bus</b>, un ensemble de fils électriques qui relie les différents éléments d'un ordinateur.
</p>
<div class="center"><div class="thumb tnone"><div class="thumbinner" style="width:442px;"><a href="/wiki/Fichier:Architecture_minimale_d%27un_ordinateur.png" class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/29/Architecture_minimale_d%27un_ordinateur.png/440px-Architecture_minimale_d%27un_ordinateur.png" decoding="async" width="440" height="144" class="thumbimage" srcset="//upload.wikimedia.org/wikipedia/commons/2/29/Architecture_minimale_d%27un_ordinateur.png 1.5x" data-file-width="601" data-file-height="197" /></a>  <div class="thumbcaption"><div class="magnify"><a href="/wiki/Fichier:Architecture_minimale_d%27un_ordinateur.png" class="internal" title="Agrandir"></a></div>Architecture minimale d'un ordinateur.</div></div></div></div>
<p>Parfois, on décide de regrouper la mémoire, les bus, le CPU et les ports d'entrée-sortie dans un seul composant électronique nommé <b>microcontrôleur</b>. Dans certains cas, qui sont plus la règle que l'exception, certains périphériques sont carrément inclus dans le microcontrôleur&#160;! On peut ainsi trouver dans ces microcontrôleurs, des compteurs, des générateurs de signaux, des convertisseurs numériques-analogiques... On trouve des microcontrôleurs dans les disques durs, les baladeurs mp3, dans les automobiles, et tous les systèmes embarqués en général. Nombreux sont les périphériques ou les composants internes à un ordinateur qui contiennent des microcontrôleurs.
</p>

<h2>Les entrées-sorties</h2>
<p>Tous les circuits vus précédemment sont des circuits qui se chargent de traiter des données codées en binaire. Ceci dit, les données ne sortent pas de n'importe où&#160;: l'ordinateur contient des composants électroniques qui se chargent de traduire des informations venant de l’extérieur en nombres. Ces composants sont ce qu'on appelle des <b>entrées</b>. Par exemple, le clavier est une entrée&#160;: l'électronique du clavier attribue un nombre entier (scancode) à une touche, nombre qui sera communiqué à l’ordinateur lors de l'appui d'une touche. Pareil pour la souris&#160;: quand vous bougez la souris, celle-ci envoie des informations sur la position ou le mouvement du curseur, informations qui sont codées sous la forme de nombres. La carte son évoquée il y a quelques chapitres est bien sûr une entrée&#160;: elle est capable d'enregistrer un son, et de le restituer sous la forme de nombres.
</p><p>Si il y a des entrées, on trouve aussi des <b>sorties</b>, des composants électroniques qui transforment des nombres présents dans l'ordinateur en quelque chose d'utile. Ces sorties effectuent la traduction inverse de celle faite par les entrées&#160;: si les entrées convertissent une information en nombre, les sorties font l'inverse&#160;: là où les entrées encodent, les sorties décodent. Par exemple, un écran LCD est un circuit de sortie&#160;: il reçoit des informations, et les transforme en image affichée à l'écran. Même chose pour une imprimante&#160;: elle reçoit des documents texte encodés sous forme de nombres, et se permet de les imprimer sur du papier. Et la carte son est aussi une sortie, vu qu'elle transforme les sons d'un fichier audio en tensions destinées à un haut-parleur&#160;: c'est à la fois une entrée, et une sortie.
</p>
<h2>La mémoire</h2>
<p>La mémoire est le composant qui mémorise des informations, des données. Bien évidemment, une mémoire ne peut stocker qu'une quantité finie de données. Et à ce petit jeu, certaines mémoires s'en sortent mieux que d'autres et peuvent stocker beaucoup plus de données que les autres. La <b>capacité</b> d'une mémoire correspond à la quantité d'informations que celle-ci peut mémoriser. Plus précisément, il s'agit du nombre de bits que celle-ci peut contenir. Dans la majorité des cas, la mémoire est découpée en plusieurs <b>bytes</b>, des blocs de mémoire qui contiennent chacun un nombre fini et constant de bits. Le plus souvent, ces bytes sont composés de plusieurs groupes de 8 bits, appelés des <b>octets</b>.
</p>
<h3>L'adressage</h3>
<div class="thumb tright"><div class="thumbinner" style="width:222px;"><a href="/wiki/Fichier:Adressage_m%C3%A9moire.png" class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/43/Adressage_m%C3%A9moire.png/220px-Adressage_m%C3%A9moire.png" decoding="async" width="220" height="178" class="thumbimage" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/43/Adressage_m%C3%A9moire.png/330px-Adressage_m%C3%A9moire.png 1.5x, //upload.wikimedia.org/wikipedia/commons/4/43/Adressage_m%C3%A9moire.png 2x" data-file-width="365" data-file-height="296" /></a>  <div class="thumbcaption"><div class="magnify"><a href="/wiki/Fichier:Adressage_m%C3%A9moire.png" class="internal" title="Agrandir"></a></div>Exemple&#160;: on demande à notre mémoire de sélectionner le byte d'adresse 1002 et on récupère son contenu (ici, 17).</div></div></div>
<p>Une mémoire peut être vue comme un rassemblement de "registres" de même taille (qui ont tous une même quantité de bits). Cette description simpliste décrit parfaitement certaines mémoires RWM électroniques, dans le sens où chaque byte correspond bien à un registre dans la mémoire. Cette description est à nuancer quelque peu pour d'autres mémoires RWM et pour les mémoires ROM, qui implémentent leur contenu avec d'autres composants que des bascules.
</p><p>Quoiqu'il en soit, on ne peut modifier qu'un byte, qu'un registre à la fois&#160;: une lecture ou écriture ne peut lire ou modifier qu'un seul byte. Techniquement, le processeur doit préciser à quel byte il veut accéder à chaque lecture/écriture. Pour cela, chaque byte se voit attribuer un nombre binaire unique, l'<b>adresse</b>, qui va permettre de le sélectionner et de l'identifier celle-ci parmi tout les autres. En fait, on peut comparer une adresse à un numéro de téléphone (ou à une adresse d'appartement)&#160;: chacun de vos correspondants a un numéro de téléphone et vous savez que pour appeler telle personne, vous devez composer tel numéro. Les adresses mémoires en sont l'équivalent pour les bytes. Il existe des mémoires qui ne fonctionnent pas sur ce principe, mais passons&#160;: ce sera pour la suite.
</p>
<h3>Lecture et écriture&#160;: mémoires ROM et RWM</h3>
<p>Pour simplifier grandement, on peut grossièrement classer nos mémoire en deux types&#160;: les Read Only Memory, et les Read Write Memory. Pour les <b>mémoires ROM</b> (les Read Only Memory), on ne peut pas modifier leur contenu. On peut récupérer une donnée ou une instruction dans notre mémoire&#160;: on dit qu'on y accède en lecture. Mais on ne peut pas modifier les données qu'elles contiennent. On utilise de telles mémoires pour stocker des programmes ou pour stocker des données qui ne peuvent pas varier. Par exemple, votre ordinateur contient une mémoire ROM spéciale qu'on appelle le BIOS, qui permet de démarrer votre ordinateur, le configurer à l'allumage, et démarrer votre système d'exploitation. Quant aux <b>mémoires RWM</b> (les Read Write Memory), on peut y accéder en lecture (récupérer une donnée stockée en mémoire), mais aussi en écriture&#160;: on peut stocker une donnée dans la mémoire, ou modifier une donnée existante. On trouve forcément au moins une mémoire RWM dans notre ordinateur. Pour l'anecdote, il n'existe pas de Write Only Memory.
</p><p>Tout ordinateur contient au moins une mémoire ROM et une mémoire RWM (souvent une RAM). La mémoire ROM stocke un programme, alors que la mémoire RWM sert essentiellement pour maintenir des résultats de calculs.
</p>
<div class="center"><div class="thumb tnone"><div class="thumbinner" style="width:442px;"><a href="/wiki/Fichier:CPT-System-Architecture-gapfill1-ANS.svg" class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f1/CPT-System-Architecture-gapfill1-ANS.svg/440px-CPT-System-Architecture-gapfill1-ANS.svg.png" decoding="async" width="440" height="181" class="thumbimage" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f1/CPT-System-Architecture-gapfill1-ANS.svg/660px-CPT-System-Architecture-gapfill1-ANS.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f1/CPT-System-Architecture-gapfill1-ANS.svg/880px-CPT-System-Architecture-gapfill1-ANS.svg.png 2x" data-file-width="696" data-file-height="287" /></a>  <div class="thumbcaption"><div class="magnify"><a href="/wiki/Fichier:CPT-System-Architecture-gapfill1-ANS.svg" class="internal" title="Agrandir"></a></div>Architecture avec une ROM et une RAM.</div></div></div></div>
<p>Mais si tout ordinateur contient au minimum une ROM et une RWM (souvent une mémoire RAM), les deux n'ont pas exactement le même rôle. Sur de nombreux ordinateurs, l'ensemble de la mémoire est séparée en deux gros blocs spécialisés&#160;: la mémoire programme et la mémoire travail. Le premier contient le programme à exécuter et parfois les constantes&#160;: ce sont des données qui peuvent être lues mais ne sont jamais accédées en écriture durant l'exécution du programme. Elle ne sont donc jamais modifiées et gardent la même valeur quoi qu'il se passe lors de l'exécution du programme. La mémoire travail mémorise les variables du programme à exécuter, qui sont des données que le programme va manipuler. Vu que les variables du programme sont des données qui sont fréquemment mises à jour et modifiées, elles sont naturellement stockées dans une mémoire RWM. Pour ce qui est du programme, c'est autre chose&#160;: ceux-ci sont stockés soit totalement en ROM, soit en partie dans la ROM et en partie dans la RWM. C'est notamment le cas sur le PC que vous êtes en train d'utiliser&#160;: les programmes sont mémorisés sur le disque dur de votre ordinateur et sont copiés en mémoire RAM à chaque fois que vous les lancez. On peut préciser que le système d'exploitation ne fait pas exception à la règle, vu qu'il est lancé par le BIOS.
</p>
<div class="center"><div class="thumb tnone"><div class="thumbinner" style="width:662px;"><a href="/wiki/Fichier:R%C3%A9partition_des_donn%C3%A9es_et_du_programme_entre_la_ROM_et_les_RWM.png" class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e0/R%C3%A9partition_des_donn%C3%A9es_et_du_programme_entre_la_ROM_et_les_RWM.png/660px-R%C3%A9partition_des_donn%C3%A9es_et_du_programme_entre_la_ROM_et_les_RWM.png" decoding="async" width="660" height="199" class="thumbimage" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e0/R%C3%A9partition_des_donn%C3%A9es_et_du_programme_entre_la_ROM_et_les_RWM.png/990px-R%C3%A9partition_des_donn%C3%A9es_et_du_programme_entre_la_ROM_et_les_RWM.png 1.5x, //upload.wikimedia.org/wikipedia/commons/e/e0/R%C3%A9partition_des_donn%C3%A9es_et_du_programme_entre_la_ROM_et_les_RWM.png 2x" data-file-width="1125" data-file-height="339" /></a>  <div class="thumbcaption"><div class="magnify"><a href="/wiki/Fichier:R%C3%A9partition_des_donn%C3%A9es_et_du_programme_entre_la_ROM_et_les_RWM.png" class="internal" title="Agrandir"></a></div>Répartition des données et du programme entre la ROM et les RWM.</div></div></div></div>
<p>Il y a toujours, dans tous les ordinateurs, une petite mémoire ROM qui contient un programme. Certains ordinateurs très simples s'en contentent. Sur les PC modernes, ce programme est un programme de démarrage nommé le <b>BIOS</b>, qui va charger le système d’exploitation dans la mémoire RWM. Les autres programmes, système d'exploitation compris, sont stockés sur un périphérique dédié au stockage, connecté sur une entrée-sortie&#160;: un disque dur, par exemple. Dans ce cas, la mémoire programme n'est pas intégralement stockée dans une ROM, mais l'est en grande partie sur un périphérique. Les programmes sont chargés en mémoire RWM pour être exécutés. L'avantage, c'est qu'on peut modifier le contenu d'un périphérique assez facilement, tandis que ce n'est pas vraiment facile de modifier le contenu d'une ROM (et encore, quand c'est possible). On peut ainsi facilement installer ou supprimer des programmes sur notre périphérique, en rajouter, en modifier, les mettre à jour sans que cela ne pose problème. C'est cette solution qui est utilisée dans nos PC actuels, et la petite mémoire ROM en question s'appelle le BIOS.
</p>
<h3>La hiérarchie mémoire</h3>
<p>Outre leurs capacités respectives, touts les mémoires ne sont pas aussi rapides. La rapidité d'une mémoire se mesure grâce à deux paramètres&#160;:
</p>
<ul><li>Le <b>temps de latence</b> correspond au temps qu'il faut pour effectuer une lecture ou une écriture&#160;: plus celui-ci est bas, plus la mémoire sera rapide.</li>
<li>Le <b>débit mémoire</b> correspond à la quantité d'informations qui peut être récupéré ou enregistré en une seconde dans la mémoire&#160;: plus celui-ci est élevé, plus la mémoire sera rapide.</li></ul>
<p>La lenteur d'une mémoire dépend de sa capacité&#160;: plus la capacité est importante, plus la mémoire est lente. Le fait est que si l'on souhaitait utiliser une seule grosse mémoire dans notre ordinateur, celle-ci serait trop lente et l'ordinateur serait inutilisable. Pour résoudre ce problème, il suffit d'utiliser plusieurs mémoires de taille et de vitesse différentes, qu'on utilise suivant les besoins. Des mémoires très rapides de faible capacité seconderont des mémoires lentes de capacité importante. On peut regrouper ces mémoires en niveaux&#160;: toutes les mémoires appartenant à un même niveau ont grosso modo la même vitesse. Pour simplifier, il existe quatre grandes niveaux de hiérarchie mémoire, indiqués dans le tableau ci-dessous.
</p>
<table class="wikitable">

<tbody><tr>
<th>Type de mémoire
</th>
<th>Temps d'accès
</th>
<th>Capacité
</th></tr>
<tr>
<td>Registres
</td>
<td>1 nanosecondes
</td>
<td>Entre 1 et 512 bits
</td></tr>
<tr>
<td>Caches
</td>
<td>10 - 100 nanosecondes
</td>
<td>Milliers ou millions de bits
</td></tr>
<tr>
<td>Mémoire RAM
</td>
<td>1 microsecondes
</td>
<td>Milliards de bits
</td></tr>
<tr>
<td>Mémoires de masse
</td>
<td>1 millisecondes
</td>
<td>Centaines de milliards de bits
</td></tr></tbody></table>
<div class="center"><div class="thumb tnone"><div class="thumbinner" style="width:442px;"><a href="/wiki/Fichier:Hi%C3%A9rarchie_m%C3%A9moire.png" class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Hi%C3%A9rarchie_m%C3%A9moire.png/440px-Hi%C3%A9rarchie_m%C3%A9moire.png" decoding="async" width="440" height="343" class="thumbimage" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Hi%C3%A9rarchie_m%C3%A9moire.png/660px-Hi%C3%A9rarchie_m%C3%A9moire.png 1.5x, //upload.wikimedia.org/wikipedia/commons/a/aa/Hi%C3%A9rarchie_m%C3%A9moire.png 2x" data-file-width="843" data-file-height="657" /></a>  <div class="thumbcaption"><div class="magnify"><a href="/wiki/Fichier:Hi%C3%A9rarchie_m%C3%A9moire.png" class="internal" title="Agrandir"></a></div>Hiérarchie mémoire</div></div></div></div>
<p>Le but de cette organisation est de placer les données accédées souvent, ou qui ont de bonnes chances d'être accédées dans le futur, dans une mémoire qui soit la plus rapide possible. Le tout est de faire en sorte de placer les données intelligemment, et les répartir correctement dans cette hiérarchie des mémoires. Ce placement se base sur deux principes qu'on appelle les principes de localité spatiale et temporelle&#160;:
</p>
<ul><li>un programme a tendance à réutiliser les instructions et données accédées dans le passé&#160;: c'est la <b>localité temporelle</b>&#160;;</li>
<li>et un programme qui s'exécute sur un processeur a tendance à utiliser des instructions et des données consécutives, qui sont proches, c'est la <b>localité spatiale</b>.</li></ul>
<p>On peut exploiter ces deux principes pour placer les données dans la bonne mémoire. Par exemple, si on a accédé à une donnée récemment, il vaut mieux la copier dans une mémoire plus rapide, histoire d'y accéder rapidement les prochaines fois&#160;: on profite de la localité temporelle. On peut aussi profiter de la localité spatiale&#160;: si on accède à une donnée, autant précharger aussi les données juste à coté, au cas où elles seraient accédées. Ce placement des données dans la bonne mémoire peut être géré par le matériel de notre ordinateur, mais aussi par le programmeur.
</p>
<h4>Les mémoires de masse</h4>
<p>Les <b>mémoires de masse</b> servent à stocker de façon permanente des données ou des programmes qui ne doivent pas être effacés (on dit qu'il s'agit de mémoires non-volatiles). Les mémoires de masse servent toujours à stocker de grosses quantités de données: elles ont une capacité énorme comparée aux autres types de mémoires, et sont donc très lentes. Parmi ces mémoires de masse, on trouve notamment&#160;:
</p>
<ul><li>les mémoires magnétiques, comme disques durs ou les fameuses disquettes (totalement obsolètes de nos jours)&#160;;</li>
<li>les mémoires électroniques, comme les mémoires Flash utilisées dans les clés USB et disques durs SSD&#160;;</li>
<li>les disques optiques, comme les CD-ROM, DVD-ROM, et autres CD du genre&#160;;</li>
<li>mais aussi quelques mémoires très anciennes et rarement utilisées de nos jours, comme les rubans perforés et quelques autres.</li></ul>
<h4>La mémoire principale</h4>
<p>La mémoire principale est appelée, par abus de langage, <b>la mémoire RAM</b>. Il s'agit d'une mémoire qui stocke temporairement des données que le processeur doit manipuler (on dit qu'elle est volatile). Elle sert donc essentiellement pour maintenir des résultats de calculs, contenir temporairement des programmes à exécuter, etc.  Avec cette mémoire, chaque donnée ou information stockée se voit attribuer un nombre binaire unique, l'<b>adresse mémoire</b>, qui va permettre de la sélectionner et de l'identifier parmi toutes les autres. On peut comparer une adresse à un numéro de téléphone ou à une adresse d'appartement&#160;: chaque correspondant a un numéro de téléphone et vous savez que pour appeler telle personne, vous devez composer tel numéro. Les adresses mémoires, c'est pareil, mais avec des données.
</p>
<h4>Les caches et local stores</h4>
<div class="thumb tright"><div class="thumbinner" style="width:222px;"><a href="/wiki/Fichier:Scratch-Pad-Memory.jpg" class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Scratch-Pad-Memory.jpg/220px-Scratch-Pad-Memory.jpg" decoding="async" width="220" height="134" class="thumbimage" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Scratch-Pad-Memory.jpg/330px-Scratch-Pad-Memory.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Scratch-Pad-Memory.jpg/440px-Scratch-Pad-Memory.jpg 2x" data-file-width="811" data-file-height="495" /></a>  <div class="thumbcaption"><div class="magnify"><a href="/wiki/Fichier:Scratch-Pad-Memory.jpg" class="internal" title="Agrandir"></a></div>Illustration des mémoires caches et des <i>local stores</i>. Le cache est une mémoire spécialisée, de type SRAM, intercalée entre la RAM et le processeur. Les <i>local stores</i> sont dans le même cas,  mais ils sont composées du même type de mémoire que la mémoire principale (ce qui fait qu'ils sont abusivement mis au même niveau sur ce schéma).</div></div></div>
<p>Le troisième niveau est intermédiaire entre les registres et la mémoire principale. Il regroupe deux types distincts de mémoires&#160;: les mémoires caches (du moins, certains caches) et les <i>local stores</i>.
</p><p>Dans la majorité des cas, la mémoire intercalée entre les registres et la mémoire RAM/ROM est ce qu'on appelle une <b>mémoire cache</b>. Celle-ci a quelques particularités qui la rendent vraiment différente d'une mémoire RAM ou ROM. Premièrement, et aussi bizarre que cela puisse paraitre, elle n'est jamais adressable&#160;! Le contenu du cache est géré par un circuit qui s'occupe des échanges avec les registres et la mémoire principale&#160;: le programmeur ne peut pas gérer directement ce cache. Si cela peut paraitre contre-intuitif, tout s'éclairera dans le chapitre dédié à ces mémoires. De nos jours, ce cache est intégré dans le processeur. Dans le détail, le cache contient une copie de certaines données présentes en RAM. La copie présente dans le cache est accessible bien plus rapidement que celle en RAM, le cache étant beaucoup plus rapide que la RAM. Mais seule une faible partie de ces données sont présentes dans le cache, les autres données devant être lues ou écrites dans la RAM. Tout accès mémoire provenant du processeur est intercepté par le cache, qui vérifie si la donnée demandée est présente ou non dans le cache. Si c'est le cas, la donnée voulue est présente dans le cache&#160;: on a un <b>succès de cache</b> (cache hit) et on accède à la donnée depuis le cache. Sinon, c'est un <b>défaut de cache</b> (cache miss)&#160;: on est obligé d’accéder à la RAM ou de recopier notre donnée de la RAM dans le cache.
</p><p>Sur certains processeurs, les mémoires caches sont remplacées par des mémoires RAM appelées des <b>local stores</b>. Ce sont des mémoires RAM, identiques à la mémoire RAM principale, mais qui sont plus petites et plus rapides. Contrairement aux mémoires caches, il s'agit de mémoires adressables, ce qui fait qu'elles ne sont plus gérées automatiquement par le processeur&#160;: c'est le programme en cours d'exécution qui prend en charge les transferts de données entre local store et mémoire RAM. Ces local stores consomment moins d'énergie que les caches à taille équivalente&#160;: en effet, ceux-ci n'ont pas besoin de circuits compliqués pour les gérer automatiquement, contrairement aux caches. Côté inconvénients, ces local stores peuvent entrainer des problèmes de compatibilité&#160;: un programme conçu pour fonctionner avec des local stores ne fonctionnera pas sur un ordinateur qui en est dépourvu.
</p>
<h4>Les registres du processeur</h4>
<p>Enfin, le dernier niveau de hiérarchie mémoire est celui des <b>registres</b>, de petites mémoires très rapides et de faible capacité. Celles-ci sont intégrées à l'intérieur du processeur. La capacité des registres dépend fortement du processeur. Au tout début de l'informatique, il n'était pas rare de voir des registres de 3, 4, voire 8 bits. Par la suite, la taille de ces registres a augmenté, passant rapidement de 16 à 32 bits, voire 48 bits sur certaines processeurs spécialisés. De nos jours, les processeurs de nos PC utilisent des registres de 64 bits. Il existe toujours des processeurs de faible performance qui utilisent des registres relativement petits, de 8 à 16 bits.
</p><p>Certains processeurs disposent de <b>registres spécialisés</b>, dont la fonction est prédéterminée une bonne fois pour toutes&#160;: un registre est conçu pour stocker, uniquement des nombres entiers, ou seulement des flottants, quand d'autres sont spécialement dédiés aux adresses mémoires. Par exemple, les processeurs présents dans nos PC séparent les registres entiers des registres flottants. Pour plus de flexibilité, certains processeurs remplacent les registres spécialisés par des <b>registres généraux</b>, utilisables pour tout et n'importe quoi. Pour reprendre notre exemple du dessus, un processeur peut fournir 12 registres généraux, qui peuvent stocker 12 entiers, ou 10 entiers et 2 flottants, ou 7 adresses et 5 entiers, etc. Dans la réalité, les processeurs utilisent à la fois des registres généraux et quelques registres spécialisés.
</p>
<h2>Le processeur</h2>
<p>L'<b>unité de traitement</b> est un circuit qui s'occupe de faire des calculs et de manipuler l'information provenant des entrées-sorties ou récupérée dans la mémoire. Dans les ordinateurs, l'unité de traitement porte le nom de <b>processeur</b>, ou encore de <i><b>Central Processing Unit</b></i>, abrévié en CPU. Tout processeur est conçu pour effectuer un nombre limité d'opérations bien précises, comme des calculs, des échanges de données avec la mémoire, etc. Ces opérations sont appelées des <b>instructions</b>. Elles se classent en quelques grands types très simples&#160;:
</p>
<ul><li>Les instructions arithmétiques font des calculs. Un ordinateur peut ainsi additionner deux nombres, les soustraire, les multiplier, les diviser, etc.</li>
<li>Les instructions de test comparent deux nombres entre eux et agissent en fonction.</li>
<li>Les instructions d'accès mémoire échangent des données entre la mémoire et le processeur.</li>
<li>Les instructions d'entrée-sortie communiquent avec les périphériques.</li>
<li>Etc.</li></ul>
<h3>Les logiciels et programmes</h3>
<p>Tout processeur est conçu pour exécuter une suite d'instructions dans l'ordre demandé, cette suite s'appelant un <b>programme</b>. Ce que fait le processeur est défini par la suite d'instructions qu'il exécute, par le programme qu'on lui demande de faire. La totalité des logiciels présents sur un ordinateur sont des programmes comme les autres. Ce programme est stocké dans la mémoire de l'ordinateur, comme les données&#160;: sous la forme de suites de bits dans notre mémoire. Le programme est donc dans une mémoire, volatile, de type RWM, qui est donc modifiable à loisir. C'est ainsi que notre ordinateur est rendu programmable&#160;: on peut parfaitement modifier le contenu de la mémoire (ou la changer, au pire), et donc changer le programme exécuté par notre ordinateur. Mine de rien, cette idée d'automate stockant son programme en mémoire est ce qui a fait que l’informatique est ce qu'elle est aujourd’hui. C'est la définition même d'ordinateur&#160;: appareil programmable qui stocke son programme dans une mémoire modifiable.
</p><p>En théorie, il est impossible de faire la différence entre donnée et instruction. Il arrive assez rarement que le processeur charge et exécute des données, qu'il prend par erreur pour des instructions, mais cela est rare. Cela peut même être un effet recherché&#160;: par exemple, on peut créer des programmes qui modifient leurs propres instructions&#160;: cela s'appelle du <b>code auto-modifiant</b>. Ce genre de choses servait autrefois à écrire certains programmes sur des ordinateurs rudimentaires (pour gérer des tableaux et autres fonctionnalités de base utilisées par les programmeurs), pouvait aussi permettre de rendre nos programmes plus rapides, servait à compresser un programme, ou pire&#160;: permettait de cacher un programme et le rendre indétectable dans la mémoire (les virus informatiques utilisent beaucoup ce genre de procédés). Mais passons&#160;! Ce qu'il faut retenir est que le fait que le programme soit stocké comme les données est ce qui permet à l'ordinateur d'être reprogrammable, et non simplement reconfigurable.
</p>
<h3>Le <i>Program Counter</i></h3>
<p>Pour exécuter une suite d'instructions dans le bon ordre, le processeur détermine à chaque cycle savoir quelle est la prochaine instruction à exécuter. Il faut donc que notre processeur se souvienne de cette information quelque part, dans une petite mémoire. C'est le rôle du registre d'adresse d'instruction, aussi appelé <b>Program Counter</b>. Ce registre stocke l'adresse de la prochaine instruction à exécuter, adresse qui permet de localiser la prochaine instruction en mémoire. Cette adresse ne sort pas de nulle part&#160;: on peut la déduire de l'adresse de l'instruction en cours d’exécution par divers moyens plus ou moins simples qu'on verra dans la suite de ce tutoriel. Généralement, on profite du fait que ces instructions sont exécutées dans un ordre bien précis, les unes après les autres. Sur la grosse majorité des ordinateur, celles-ci sont placées les unes à la suite des autres dans l'ordre où elles doivent être exécutées. L'ordre en question est décidé par le programmeur. Un programme informatique n'est donc qu'une vulgaire suite d'instructions stockée quelque part dans la mémoire de notre ordinateur. En faisant ainsi, on peut calculer facilement l'adresse de la prochaine instruction en ajoutant la longueur de l'instruction juste chargée (le nombre de case mémoire qu'elle occupe) au contenu du registre d'adresse d'instruction. Dans ce cas, l'adresse de la prochaine instruction est calculée par un petit circuit combinatoire couplé à notre registre d'adresse d'instruction, qu'on appelle le compteur ordinal.
</p><p>Mais certains processeurs n'utilisent pas cette méthode. Sur de tels processeurs, chaque instruction va devoir préciser quelle est la prochaine instruction. Pour ce faire, une partie de la suite de bit représentant notre instruction à exécuter va stocker cette adresse. Dans ce cas, ces processeurs utilisent toujours un registre pour stocker cette adresse, mais ne possèdent pas de compteur ordinal, et n'ont pas besoin de calculer une adresse qui leur est fournie sur un plateau. Les processeurs de ce type contiennent toujours un registre d'adresse d'instruction&#160;: la partie de l'instruction stockant l'adresse de la prochaine instruction est alors recopiée dans ce registre, pour faciliter sa copie sur le bus d'adresse. Mais le compteur ordinal n'existe pas. Sur des processeurs aussi bizarres, pas besoin de stocker les instructions en mémoire dans l'ordre dans lesquelles elles sont censées être exécutées. Mais ces processeurs sont très très rares et peuvent être considérés comme des exceptions qui confirment la règle.
</p>
<div class="center"><div class="thumb tnone"><div class="thumbinner" style="width:442px;"><a href="/wiki/Fichier:Encodage_d%27une_instruction_sur_un_processeur_sans_Program_Counter.png" class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/15/Encodage_d%27une_instruction_sur_un_processeur_sans_Program_Counter.png/440px-Encodage_d%27une_instruction_sur_un_processeur_sans_Program_Counter.png" decoding="async" width="440" height="45" class="thumbimage" srcset="//upload.wikimedia.org/wikipedia/commons/1/15/Encodage_d%27une_instruction_sur_un_processeur_sans_Program_Counter.png 1.5x" data-file-width="575" data-file-height="59" /></a>  <div class="thumbcaption"><div class="magnify"><a href="/wiki/Fichier:Encodage_d%27une_instruction_sur_un_processeur_sans_Program_Counter.png" class="internal" title="Agrandir"></a></div>Encodage d'une instruction sur un processeur sans Program Counter.</div></div></div></div>
<h2>Le bus de communication</h2>
<p>Le processeur est relié à la mémoire ainsi qu'aux entrées-sorties par un ou plusieurs <b>bus de communication</b>. Ce bus n'est rien d'autre qu'un ensemble de fils électriques sur lesquels on envoie des zéros ou des uns.
</p>
<div class="center"><div class="thumb tnone"><div class="thumbinner" style="width:281px;"><a href="/wiki/Fichier:Elektronische_bus_beginsel.png" class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/c/c4/Elektronische_bus_beginsel.png" decoding="async" width="279" height="104" class="thumbimage" data-file-width="279" data-file-height="104" /></a>  <div class="thumbcaption"><div class="magnify"><a href="/wiki/Fichier:Elektronische_bus_beginsel.png" class="internal" title="Agrandir"></a></div>Bus électronique.</div></div></div></div>
<p>Tout ordinateur contient au moins un  bus, qui relie le processeur, la mémoire, les entrées et les sorties&#160;; et leur permet d’échanger des données ou des instructions. Pour permettre au processeur (ou aux périphériques) de communiquer avec la mémoire, il y a trois prérequis que ce bus doit respecter&#160;: pouvoir sélectionner la case mémoire (ou l'entrée-sortie) dont on a besoin, préciser à la mémoire s'il s'agit d'une lecture ou d'une écriture, et enfin pouvoir transférer la donnée. Pour cela, on doit donc avoir trois bus spécialisés, bien distincts, qu'on nommera le bus de commande, le bus d'adresse, et le bus de donnée. Le <b>bus de données</b> est un ensemble de fils par lequel s'échangent les données entre les composants. Le <b>bus de commande</b> permet au processeur de configurer la mémoire et les entrées-sorties. Le <b>bus d'adresse</b>, facultatif, permet au processeur de sélectionner l'entrée, la sortie ou la portion de mémoire avec qui il veut échanger des données. Chaque composant possède des entrées séparées pour le bus d'adresse, le bus de commande et le bus de données. Par exemple, une mémoire RAM possédera des entrées sur lesquelles brancher le bus d'adresse, d'autres sur lesquelles brancher le bus de commande, et des broches d'entrée-sortie pour le bus de données.
</p>
<div class="center"><div class="thumb tnone"><div class="thumbinner" style="width:442px;"><a href="/wiki/Fichier:Architecture_Von_Neumann_avec_les_bus.png" class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Architecture_Von_Neumann_avec_les_bus.png/440px-Architecture_Von_Neumann_avec_les_bus.png" decoding="async" width="440" height="254" class="thumbimage" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Architecture_Von_Neumann_avec_les_bus.png/660px-Architecture_Von_Neumann_avec_les_bus.png 1.5x, //upload.wikimedia.org/wikipedia/commons/7/7e/Architecture_Von_Neumann_avec_les_bus.png 2x" data-file-width="680" data-file-height="393" /></a>  <div class="thumbcaption"><div class="magnify"><a href="/wiki/Fichier:Architecture_Von_Neumann_avec_les_bus.png" class="internal" title="Agrandir"></a></div>Architecture Von Neumann avec les bus.</div></div></div></div>
<p>Il faut noter que certaines architectures utilisent plusieurs bus. Cela vient du fait que les périphériques peuvent être nombreux et avoir chacun droit à des bus dédiés. Mais une autre raison est la présence d'au moins deux mémoires&#160;: une ROM et une ou plusieurs RWM/RAM.
</p>
<h3>L'architecture Von Neumann</h3>
<p>Si ces deux mémoires sont reliées au processeur par un bus unique, on a une <b>architecture Von Neumann</b>. Avec l'architecture Von Neumann, tout se passe comme si les deux mémoires étaient fusionnées en une seule mémoire. Une adresse bien précise va ainsi correspondre soit à la mémoire RAM, soit à la mémoire ROM, mais pas aux deux.
</p>
<div class="center"><div class="thumb tnone"><div class="thumbinner" style="width:442px;"><a href="/wiki/Fichier:Vision_de_la_m%C3%A9moire_par_un_processeur_sur_une_architecture_Von_Neumann.png" class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a6/Vision_de_la_m%C3%A9moire_par_un_processeur_sur_une_architecture_Von_Neumann.png/440px-Vision_de_la_m%C3%A9moire_par_un_processeur_sur_une_architecture_Von_Neumann.png" decoding="async" width="440" height="351" class="thumbimage" srcset="//upload.wikimedia.org/wikipedia/commons/a/a6/Vision_de_la_m%C3%A9moire_par_un_processeur_sur_une_architecture_Von_Neumann.png 1.5x" data-file-width="479" data-file-height="382" /></a>  <div class="thumbcaption"><div class="magnify"><a href="/wiki/Fichier:Vision_de_la_m%C3%A9moire_par_un_processeur_sur_une_architecture_Von_Neumann.png" class="internal" title="Agrandir"></a></div>Vision de la mémoire par un processeur sur une architecture Von Neumann.</div></div></div></div>
<p>Quand une adresse est envoyée sur le bus, les deux mémoires vont la recevoir mais une seule va répondre.
</p>
<div class="center"><div class="thumb tnone"><div class="thumbinner" style="width:442px;"><a href="/wiki/Fichier:Architecture_Von_Neumann,_avec_deux_bus_s%C3%A9par%C3%A9s.png" class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Architecture_Von_Neumann%2C_avec_deux_bus_s%C3%A9par%C3%A9s.png/440px-Architecture_Von_Neumann%2C_avec_deux_bus_s%C3%A9par%C3%A9s.png" decoding="async" width="440" height="234" class="thumbimage" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Architecture_Von_Neumann%2C_avec_deux_bus_s%C3%A9par%C3%A9s.png/660px-Architecture_Von_Neumann%2C_avec_deux_bus_s%C3%A9par%C3%A9s.png 1.5x, //upload.wikimedia.org/wikipedia/commons/d/d2/Architecture_Von_Neumann%2C_avec_deux_bus_s%C3%A9par%C3%A9s.png 2x" data-file-width="708" data-file-height="376" /></a>  <div class="thumbcaption"><div class="magnify"><a href="/wiki/Fichier:Architecture_Von_Neumann,_avec_deux_bus_s%C3%A9par%C3%A9s.png" class="internal" title="Agrandir"></a></div>Architecture Von Neumann, avec deux bus séparés.</div></div></div></div>
<h3>L'architecture Harvard</h3>
<p>Si ces deux mémoires sont reliées au processeur par deux bus séparés, on a une <b>architecture Harvard</b>. L'avantage de cette architecture est qu'elle permet de charger une instruction et une donnée simultanément&#160;: une instruction chargée sur le bus relié à la mémoire programme, et une donnée chargée sur le bus relié à la mémoire de données.
</p>
<div class="center"><div class="thumb tnone"><div class="thumbinner" style="width:442px;"><a href="/wiki/Fichier:Vision_de_la_m%C3%A9moire_par_un_processeur_sur_une_architecture_Harvard.png" class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/36/Vision_de_la_m%C3%A9moire_par_un_processeur_sur_une_architecture_Harvard.png/440px-Vision_de_la_m%C3%A9moire_par_un_processeur_sur_une_architecture_Harvard.png" decoding="async" width="440" height="303" class="thumbimage" srcset="//upload.wikimedia.org/wikipedia/commons/3/36/Vision_de_la_m%C3%A9moire_par_un_processeur_sur_une_architecture_Harvard.png 1.5x" data-file-width="494" data-file-height="340" /></a>  <div class="thumbcaption"><div class="magnify"><a href="/wiki/Fichier:Vision_de_la_m%C3%A9moire_par_un_processeur_sur_une_architecture_Harvard.png" class="internal" title="Agrandir"></a></div>Vision de la mémoire par un processeur sur une architecture Harvard.</div></div></div></div>
<p>Sur ces architectures, une adresse peut correspondre soit à la ROM, soit à la RAM&#160;: le processeur voit bien deux mémoires séparées.
</p>
<div class="center"><div class="thumb tnone"><div class="thumbinner" style="width:442px;"><a href="/wiki/Fichier:Harvard_Architecture.png" class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Harvard_Architecture.png/440px-Harvard_Architecture.png" decoding="async" width="440" height="260" class="thumbimage" srcset="//upload.wikimedia.org/wikipedia/commons/f/f4/Harvard_Architecture.png 1.5x" data-file-width="482" data-file-height="285" /></a>  <div class="thumbcaption"><div class="magnify"><a href="/wiki/Fichier:Harvard_Architecture.png" class="internal" title="Agrandir"></a></div></div></div></div></div>
<p><br />
</p>

<!-- 
NewPP limit report
Parsed by mw1333
Cached time: 20210527133116
Cache expiry: 1814400
Reduced expiry: false
Complications: []
CPU time usage: 0.076 seconds
Real time usage: 0.123 seconds
Preprocessor visited node count: 124/1000000
Post‐expand include size: 1826/2097152 bytes
Template argument size: 402/2097152 bytes
Highest expansion depth: 10/40
Expensive parser function count: 0/500
Unstrip recursion depth: 0/20
Unstrip post‐expand size: 0/5000000 bytes
Number of Wikibase entities loaded: 0/400
-->
<!--
Transclusion expansion time report (%,ms,calls,template)
100.00%   13.745      1 Modèle:NavChapitre
100.00%   13.745      1 -total
 69.38%    9.536      1 Modèle:AutoCat
 34.08%    4.685      1 Modèle:FULLBOOKNAME
-->

<!-- Saved in parser cache with key frwikibooks:pcache:idhash:65780-0!canonical and timestamp 20210527133116 and revision id 653311. Serialized with JSON.
 -->
</div></div>
	</div>
</div>

</div>

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
