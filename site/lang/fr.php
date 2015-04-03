<?php

//--------------------------------------------------------
// Menu horizontal
//--------------------------------------------------------

//Menu
define('ACCUEIL_MENU','Accueil');
define('VUES_MENU','DataCrawler');
define('DOCUMENTATION_MENU', 'Documentation');
define('PROPOS_MENU','A Propos');
define('GLOSSAIRE_MENU', 'Glossaire');
define('BIBLIO_MENU','Bibliographie');
define('CONTACT_MENU','Contact');

// Sous-Menu
define('DOC_PROJET', 'Documentation Projet');
define('DOC_REQUETE', 'Documentation Requete');
define('VIDEO_EXEMPLE', 'Video Exemple Requete');

define('ETUDE_MENU', 'Etat de l\'art');
define('PROJET_MENU', 'Le Projet');

//---------------------------------------------------------
// accueil.php
//--------------------------------------------------------- 

define('TITRE_INDEX','Cartographie des réseaux sémantiques');
define('SOUS_TITRE_INDEX','Projet-L3');
define('CORPS_INDEX','“La cartographie sémantique est le recours à des représentations graphiques d’un ensemble d’informations (des cartes) pour partager et créer des connaissances. L’objectif des cartes est d’aider à facilement appréhender des ensembles d’informations complexes.”');

//---------------------------------------------------------
// documentation.php
//--------------------------------------------------------- 

define('TITRE_DOC','Quelles sont les règles pour remplir correctement une requête ? ');
define('CORPS_DOC','Une requête est composé de quatre champs à remplir, comme nous le montre l\'image ci-dessous :<br>
		-	Le champ <strong>NOM</strong><br>
		-	Le champ <strong>CIBLE</strong><br>
		-	Le champ <strong>DOMAINE</strong><br>
		-	Le champ <strong>REGLE</strong>'
		);

define ('SOUS_TITRE1_DOC', '* Champs NOM :');
define('CORPS1_DOC','Donnez le nom du noeud racine ');
define('EXEMPLE1_DOC', 'Exemple : car');

define ('SOUS_TITRE2_DOC', '* Champs Cible :');
define('CORPS2_DOC','Donnez la cible du noeud racine ');
define('EXEMPLE2_DOC', 'Exemple : car');

define ('SOUS_TITRE3_DOC', '* Champs Domaine :');
define('CORPS3_DOC','Domaine du noeud racine. URL avec la chaine $TARGET. Le noeud suivant remplacera $TARGET par son champ de noeud ');
define('EXEMPLE3_DOC', 'Exemple : http://wordnetweb.princeton.edu/perl/webwn?o2=&o0=&o8=1&o1=&o7=&o5=&o9=&o6=&o3=&o4=&s=$TARGET');

define ('SOUS_TITRE4_DOC', '* Champs Règle :');
define('CORPS4_DOC','Donnez une Expression régulière avec deux groupes nommés: <br>	- Noeud : Cible suivante <br>	- Nom : Nom de la cible suivante');
define('EXEMPLE4_DOC', 'Exemple : #<a href="[^s]*s=(?<node>[^"&]*)">(?<data>[^<]*)"></a>#');

define('EXEMPLE_VIDEO', '<a href="Exemple_Video.php">Exemple simple d\'utilisation au travers d\'une video</a>');

//---------------------------------------------------------
// documentation projet.php
//--------------------------------------------------------- 

define('TITRE_DOC_PROJ','Principe');
define('CORPS_DOC_PROJ','Il a été choisi de séparer le logiciel en deux parties, le client et le serveur afin 
		de le déployer plus facilement.');

define('SOUS_TITRE1_DOC_PROJ','Partie Client');
define('CORPS1_DOC_PROJ','La partie client est dédiée a l’affichage de la visualisation de données structurées données par le serveur. 
		Elle permettra l’affichage de ces données sous forme de graphe en deux dimensions, la visualisation des données et des liens entre ces données.');

define('SOUS_TITRE2_DOC_PROJ','Partie Serveur');
define('CORPS2_DOC_PROJ','La partie serveur est dédiée à la récupération et le traitement de données, structurées.
		Elle se concentrera plus sur une analyse de données brutes pour une structuration.');

define('SOUS_TITRE3_DOC_PROJ','Technologies');
define('CORPS3_DOC_PROJ','Les technologies choisies sont:<br><br>
		-	<strong>HTML5/CSS/JavaScript/JQuery/AJAX :</strong> Affichage et récupération des données côté Client.<br>
		-	<strong>PHP5 :</strong> Récupération et traitement des données côté Serveur.<br>
		-	<strong>Json :</strong> Transfert des données entre le client et le serveur.<br>
		-	<strong>Curl :</strong> Récupération des données depuis des sources extérieures.');

define('SOUS_TITRE4_DOC_PROJ','Format d\'échange standard');
define('CORPS4_DOC_PROJ','Tous les échanges de données entre le client et le serveur se feront en  JSON.
		Il sera néanmoins développé un standard en collaboration avec l’autre groupe travaillant sur le projet afin d’assurer l’interopérabilité entre nos applications.');

define('TITRE1_DOC_PROJ','Etude de l\'existant');
define('CORPS5_DOC_PROJ','Sur le domaine de la cartographie sémantique, nous avons comme référence la thèse de Monsieur TRICOT Christophe');
define('LIEN_TH', '<a href="http://www.polytech.univ-savoie.fr/fileadmin/polytech_autres_sites/sites/listic/Theses/TheseTricot.pdf"> (Lien). <br></a>');

define('TITRE2_DOC_PROJ','Contraintes');
define('CORPS6_DOC_PROJ','Différentes contraintes sont à prendre en compte dans l’élaboration de ce projet :<br><br>
		-	<strong>Contrainte technique :</strong> Apprentissage autonome de différents langages de programmation.<br>
		-	<strong>Contrainte humaine :</strong> Tous les membres du projet n’ont pas les même connaissances des différents langages de programmation. En effet, les membres sont issus de nombreux cursus différents.<br>
		-	<strong>Contrainte de temps :</strong> Le projet se déroule sur un semestre entier, ce qui représente environ 15 semaines. Chaque semaine, 4 heures sont dédiées au projet. Il faut donc trouver du temps à côté pour pouvoir répondre totalement à notre cahier des charges.');

define('TITRE3_DOC_PROJ','Comment fonctionne précisement notre recherche sémantique ?');

define('DOC_GITHUB', '<a href="https://github.com/p02030507111317/ProjetL3">Explication détaillée du fonctionnement de notre projet grâce à la bibliothèque GithHub</a>');


//---------------------------------------------------------
// APropos.php
//--------------------------------------------------------- 

define('TITRE_PROPOS','CARTOGRAPHIE DE DONNEES STRUCTUREES <br> "Développement d\'une boite à outils pour la visualisation de données"');

define('TITRE0_PROPOS','Pourquoi un tel projet ?'); 
define('CORPS0_PROPOS','"L\'accroissement des données disponibles en ligne (open data, big data, web sémantique, géolocalisation...)
		 ou produites par les réseaux sociaux, bases de données, etc., a fait naître des outils de "Data visualisation" pour l\'aide à la décision,
		  la communication et plus simplement pour mieux comprendre et transmettre efficacement un message, un phénomène, <em>une histoire.</em>" 
	<br>
	<br>
	<a href="http://www.scenario-interactif.com/pages/visualisation-de-donnees.php"> http://www.scenario-interactif.com/pages/visualisation-de-donnees.php</a>
	<br>
	<br>
	<p align=left> "La visualisation de vos données ne se limite pas à leur présentation.
	Il s\'agit également d\'un moyen de les explorer et de les comprendre."</p>
	<a href="http://www.tableausoftware.com/fr-fr" style="float:left;">http://www.tableausoftware.com/fr-fr</a>
	<br>
	<br>
	<p align=left> "En d’autres termes, la cartographie sémantique est le recours à des représentations graphiques d’un ensemble d’informations (des cartes) pour partager et créer des connaissances. 
	L’objectif des cartes est d’aider à facilement appréhender des ensembles d’informations complexes."</p>
	<a href="http://www.cartographie-semantique.fr" style="float:left;">http://www.cartographie-semantique.fr</a>
	<br>
	<br>
	');

define('CORPS1_PROPOS','<p align=left> <strong> Le travail demandé se déroulera en trois temps : </strong>
	<br>
	<br>
	<ol>
		<li><strong> Etude </strong> (courte bibliographie) <strong> du domaine</strong> de la cartographie et de la visualisation de données :
		<ol>
			<li>Défintion du domaine, de la problématique ;</li>
			<li>Etude des différents modes de visualisation et de cartographie.</li>
		</ol>
		</li>
		<br>
		<li><strong> Etat de l\'art </strong> (non exhaustif) <strong> des bibliothèques</strong> open source de visualisation et de cartographie :
		<ol>
			<li> Types de données traitées ; </li>
			<li> Type de visualisation. </li>
		</ol>
		</li>
		<br>
		<li> <strong> Réalisation d\'une boite à outils</strong> pour l\'édition et la visualisation de données. Cette boite à outils permettra l\'utilisation de différents paradigmes de visualisation.
			On privilégiera des données structurées qui pourront être éditées.</li>
	</ol>
	');

//---------------------------------------------------------
// EtatArt.php
//--------------------------------------------------------- 

define('CORPS_ETAT','<em>« Une image vaut mille mots ».</em>
		<br>
		<br>
		Cette constatation sur la valeur de la visualisation est d’autant plus vraie si l’on travaille avec un grand nombre d’informations.
		La synthèse des travaux sur la cartographie et sur la visualisation permet de considérer les cartes comme un médium idéal entre un grand nombre d’informations et l’esprit.
		Chaque carte joue alors le rôle de support externe de la pensée pour amplifier la cognition de ses utilisateurs.”
		En effet, le traitement d’une grande quantité de données est une tâche complexe si ces données ne sont pas structurées. 
		La meilleure structuration pour l’humain étant visuelle, il est légitime de vouloir développer une application capable de récupérer, structurer et afficher sous forme de carte une grande quantité de données afin de mieux les traiter. <br><br> La visualisation de vos données ne se limite pas à leur présentation.
		Il s\'agit également d\'un moyen de les explorer et de les comprendre.
		');

define('TITRE1_ETAT','Cartographie');
define('CORPS1_ETAT','La cartographie désigne la réalisation et l\'étude des cartes.<br>
		Le principe majeur de la cartographie est la représentation de données sur un support réduit
		représentant souvant un espace réel.<br>
		<strong>Son objectif est de faire une représentation concise et efficace afin de permettre une compréhension rapide et pertinente.</strong>
		<br>
		<br>
		Depuis la création de l\'écriture en Mésopotamie en 3500 avant JC, la plupart des civilisations possèdent les premiers signes
		de l\'utilisation de carte. Au début, ces cartes sont des esquisses gravées qui ont fonction d\'aide-mémoire. 
		Il ne s\'agit alors que de représentations d\'éléments constitutifs du territoire, de l\'environnement « proche », comme les hommes le percevaient.
		');

define('CORPS2_ETAT','Rapidement, les cartes vont être utilisées pour la navigation en mer, afin d\'améliorer le commerce.
		De nombreux scientifiques grecs (Eratosthène(275-194 avant JC), Ptolémée(90-168),...) vont avoir la volonté de cartographier la Terre entière.
		Plus les siècles vont s\'écouler et plus les cartes vont devenir précises.<br>
		C\'est au XVIIe, XVIIIe siècles que va naire <strong>la cartographie topographique.</strong>
		');

define('CORPS3_ETAT','Une carte topographique est une carte à échelle réduite représentant le relief déterminé par altimétrie et les aménagements humains d\'une région géographique de manière précise et détaillée sur un plan horizontal.
		<br>
		<br>
		Dès le XIXe siècle apparaissent de nouvelles cartes avec des données à visualiser qui ne sont plus des localisations géographiques mais des données qualitatives et quantitatives.
		<br>C\'est le début de la <strong>cartographie thématique.</strong><br> Elle a pour but de représenter tous les phénomènes à distribution spatiale et leurs corrélations.
		');

define('CORPS4_ETAT','La cartographie connaît donc un développement rapide au fil du temps.
		<strong>Son évolution débute par le traitement de données physiques (essentiellement géographiques) pour tendre vers le traitement de données abstraites. Elle devient un enjeu primordial dans de nombreux domaines.</strong>
		');


define('TITRE2_ETAT','Cartographie sémantique');
define('CORPS5_ETAT','“La cartographie sémantique correspond à la cartographie d’un espace informationnel basée sur sa sémantique. En d’autres termes, la cartographie sémantique est le recours à des représentations graphiques d’un ensemble d’informations (sous forme de cartes) pour partager et créer des connaissances.
		L’objectif de chaque carte est alors d’aider à facilement appréhender des ensembles d’informations complexes. La cartographie sémantique est une activité essentielle à la gestion des connaissances, qui permet de tirer parti de toute la richesse des informations des organisations.” ');

define('CORPS6_ETAT','Dans notre cas, la cartographie a pour finalité de visualiser (sous forme de carte) un ensemble de données abstraites. Comme nous l’avons décrit précédemment dans ce document, la visualisation constitue un excellent médium entre un grand nombre d’informations et l’esprit.
		Cependant, il est possible de construire un nombre quasiment infini de cartes pour un même espace informationnel.
		');

//---------------------------------------------------------
// Glossaire.php
//--------------------------------------------------------- 

define('CORPS1_GLO','<strong>Cartographie sémantique : </strong>La cartographie sémantique est le recours à des représentations graphiques d’un ensemble d’informations (sous forme de cartes) pour partager et créer des connaissances.
		<br>
		<br>
		<strong>Open Data : </strong>Représente à la fois un mouvement, une philosophie d\'accès à l\'information et une pratique de publication de données librement accessibles et exploitables.
		<br>
		<br>
		<strong>Big Data : </strong>Désigne des ensembles de données qui deviennent tellement volumineux qu\'ils en deviennent difficiles à travailler avec des outils classiques de gestion de base de données ou de gestion de l\'information.
		<br>
		<br>
		<strong>Web Sémantique : </strong>C\'est un mouvement collaboratif mené par le World Wide Web Consortium (W3C)2 qui favorise des méthodes communes pour échanger des données.
		<br>
		<br>
		<strong>Serveur : </strong>C\'est un dispositif informatique matériel ou logiciel qui offre des services, à différents clients.
		<br>
		<br>
		<strong>Expressions Régulières : </strong>C\'est en informatique une chaîne de caractères que l’on appelle parfois un motif et qui décrit un ensemble de chaînes de caractères possibles selon une syntaxe précise.
		<br>
		<br>
		<strong>Nœuds : </strong>Sommets du graphe.
		<br>
		<br>
		<strong>WordNet : </strong>C\'est une base de données lexicale développée par des linguistes du laboratoire des sciences cognitives de l\'université de Princeton.
		<br>
		<br>
		<strong>Steam : </strong>C\'est une plate-forme de distribution de contenu en ligne, de gestion des droits et de communication.
		<br>
		<br>
		<strong>Debian : </strong>C\'est une organisation communautaire et démocratique, dont le but est le développement de systèmes d\'exploitation basés exclusivement sur des logiciels libres.
		
		');

//---------------------------------------------------------
// BiBlio.php
//--------------------------------------------------------- 

define('TITRE1_BIBLIO','Ouvrages :');

define('CORPS1_BIBLIO_O','Les ouvrages littéraires que nous avons utilisés sont les suivants :<br>
		<ul style="list-style-type:disc;">
			<li> La thèse de Monsieur Tricot Christophe (2006) : <a href="http://www.polytech.univ-savoie.fr/fileadmin/polytech_autres_sites/sites/listic/Theses/TheseTricot.pdf"> TheseTricot. <br></a>
			<li> Negrino.T, Smith.D (2008) : <strong>JavaScript & AJAX </strong> </li>
		</ul>');

define('TITRE2_BIBLIO','Sites Internet :');

define('CORPS1_BIBLIO_I','Les sites internet que nous avons utilisés sont les suivants :<br><br>
		-	Pour la confection du graphe qui modélise la recherche sémantique :<br>
		<ul style="list-style-type:disc;">
			<li><a href="https://github.com/philogb/jit"> Jit <br></a></li>
			<li><a href="http://d3js.org/"> Bibliothèque d3 <br></a></li>
			<li><a href="http://sigmajs.org/"> Sigmajs <br></a></li>
		</ul>

		<p align = left>-	Pour mieux comprendre certains langages de programmation :<br></p>
		<ul style="list-style-type:disc;">
			<li><a href="http://stackoverflow.com/tags/javascript/info"> Stackoverflow.com/JavaScript <br></a></li>
			<li><a href="http://stackoverflow.com/tags/jquery/info"> Stackoverflow.com/JQuery <br></a></li>
			<li><a href="http://www.php.net/"> Php <br></a></li>
			<li><a href="http://stackoverflow.com/tags/css/info"> Stackoverflow.com/CSS <br></a></li>
			<li><a href="www.json.org"> JSon.org <br></a></li>
			<li><a href="http://fr.openclassrooms.com/informatique/cours/serialisez-vos-objets-au-format-json"> OpenClassRooms/Json <br></a></li>
		</ul>

		<p align=left>-	Pour nous aider lors de certains problèmes (forums) :</p>
		<ul style="list-style-type:disc;">
			<li><a href="http://stackoverflow.com/"> Stackoverflow.com</a></li>
			<li><a href="http://fr.openclassrooms.com/"> OpenClassRooms.com <br></a></li>
			<li><a href="http://www.developpez.net/forums/"> Développer.com <br></a></li>
		</ul>

		<p align=left>-	Pour nous documenter sur la cartographie et la recherche sémantique :</p>
		<ul style="list-style-type:disc;">
			<li><a href="http://fr.wikipedia.org/wiki/Cartographie_s%C3%A9mantique"> Wikipédia : Cartographie sémantique </a></li>
			<li><a href="http://fr.wikipedia.org/wiki/Web_s%C3%A9mantique"> Wikipédia : Web sémantique </a></li>
			<li><a href="www.cartographie-semantique.fr/"> Cartographie-Semantique.fr <br></a></li>
			<li><a href="http://www.thesaurus.gouv.qc.ca/tag/terme.do?id=MDL150"> Thesaurus.gouv.qc.ca <br></a></li>
		</ul>
		
		');


//---------------------------------------------------------
// Contact.php
//--------------------------------------------------------- 

define('CORPS1_CONTACT', 'Ce site vous est proposé par les élèves de L3-STIC-INFO de l\'Université de Savoie, dans le cadre de leur projet.');
define('CORPS2_CONTACT', 'Chef de projet :');
define('CORPS3_CONTACT', 'Equipe de projet :');
define('CORPS4_CONTACT', 'Tuteur de projet :');


//---------------------------------------------------------
// Exemple_Video.php
//--------------------------------------------------------- 

define('TITRE_VIDEO', 'Exemple d\'utilisation');


//---------------------------------------------------------
// Fin
//--------------------------------------------------------- 

?>