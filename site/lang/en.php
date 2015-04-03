<?php

//--------------------------------------------------------
// Menu horizontal
//--------------------------------------------------------

// Menu
define('ACCUEIL_MENU','Welcome');
define('VUES_MENU','DataCrawler');
define('DOCUMENTATION_MENU', 'Documentation');
define('PROPOS_MENU','Conveniently');
define('GLOSSAIRE_MENU', 'Glossary');
define('BIBLIO_MENU','Bibliography');
define('CONTACT_MENU','Contact');

// Sous Menu
define('DOC_PROJET', 'Project Documentation');
define('DOC_REQUETE', 'Application Documentation');
define('VIDEO_EXEMPLE', 'Application Example Video');

define('ETUDE_MENU', 'State of the art');
define('PROJET_MENU', 'The Project');

//---------------------------------------------------------
// accueil.php
//--------------------------------------------------------- 

define('TITRE_INDEX','Cartography of the semantic networks');
define('SOUS_TITRE_INDEX','Project-L3');
define('CORPS_INDEX','"The semantic mapping is the appeal to graphic representations of a set of information (maps) to share and create knowledge. The objective of maps is to help to arrest easily complex sets of information."');

//---------------------------------------------------------
// documentation.php
//--------------------------------------------------------- 

define('TITRE_DOC','What are the rules for filing an application properly ? ');
define('CORPS_DOC','A query is made four fields as we image below to fill shows :<br>
		-	The field <strong>NAME</strong><br>
		-	The field <strong>TARGET</strong><br>
		-	The field <strong>FIELD</strong><br>
		-	The field <strong>RULE</strong>'
		);

define ('SOUS_TITRE1_DOC', '* Purview NAME :');
define('CORPS1_DOC','Display name of the root node ');
define('EXEMPLE1_DOC', 'Example : car');

define ('SOUS_TITRE2_DOC', '* Purview Target :');
define('CORPS2_DOC','Give the target of the root node ');
define('EXEMPLE2_DOC', 'Example : car');

define ('SOUS_TITRE3_DOC', '* Purview Field :');
define('CORPS3_DOC','Field of the root node. URL with the string $TARGET. The next node will replace $TARGET by it is node field ');
define('EXEMPLE3_DOC', 'Example : http://wordnetweb.princeton.edu/perl/webwn?o2=&o0=&o8=1&o1=&o7=&o5=&o9=&o6=&o3=&o4=&s=$TARGET');

define ('SOUS_TITRE4_DOC', '* Purview Rule :');
define('CORPS4_DOC','Give Regular Expression with two named groups : <br>	- Node : next Target <br>	- Name : Name of the next Target');
define('EXEMPLE4_DOC', 'Example : #<a href="[^s]*s=(?<node>[^"&]*)">(?<data>[^<]*)"></a>#');

define('EXEMPLE_VIDEO', '<a href="Exemple_Video.php">Easy to use example through a video</a>');

//---------------------------------------------------------
// documentation projet.php
//--------------------------------------------------------- 

define('TITRE_DOC_PROJ','Principle');
define('CORPS_DOC_PROJ','He was chosen to separate the software into two parts, the client and server to
		deploying more easily.');

define('SOUS_TITRE1_DOC_PROJ','Client part');
define('CORPS1_DOC_PROJ','The client part is dedicated to the display of structured data visualization data from the server.
		It will display the data in graph form two-dimensional data visualization and link these data.');

define('SOUS_TITRE2_DOC_PROJ','Server Environment');
define('CORPS2_DOC_PROJ','The server part is dedicated to the recovery and processing of data, structured.
		It will focus on the analysis of raw data for structuring.');

define('SOUS_TITRE3_DOC_PROJ','Technologies');
define('CORPS3_DOC_PROJ','The technologies chosen are :<br><br>
		-	<strong>HTML5/CSS/JavaScript/JQuery/AJAX :</strong> Display and Recovery Client side data.<br>
		-	<strong>PHP5 :</strong> Recovery and server side processing of data.<br>
		-	<strong>Json :</strong> Data transfer between the client and the server.<br>
		-	<strong>Curl :</strong> Retrieving data from external sources.');

define('SOUS_TITRE4_DOC_PROJ','Standard exchange format');
define('CORPS4_DOC_PROJ','All exchanges of data between the client and the server will be in JSON.
		It will nevertheless be a standard developed in collaboration with other groups working on the project in order to ensure interoperability between our applications.');

define('TITRE1_DOC_PROJ','Study of existing');
define('CORPS5_DOC_PROJ','On the field of semantic mapping, we reference the thesis of TRICOT Christophe');
define('LIEN_TH', '<a href="http://www.polytech.univ-savoie.fr/fileadmin/polytech_autres_sites/sites/listic/Theses/TheseTricot.pdf"> (Link). <br></a>');

define('TITRE2_DOC_PROJ','Constraints');
define('CORPS6_DOC_PROJ','Various constraints must be taken into account in the development of this project :<br><br>
		-	<strong>Technical constraint :</strong> Independent learning different programming languages.<br>
		-	<strong>Human constraint :</strong> All project members do not have the same knowledge of various programming languages. Indeed, members from many different studies.<br>
		-	<strong>Time constraint :</strong> The project takes place over an entire semester, which is about 15 weeks. Each week, four hours are dedicated to the project. We must find the time off to be able to fully meet our specifications.');

define('TITRE1_DOC_PROJ', 'Project documentation ');

define('DOC_GITHUB', '<a href="https://github.com/p02030507111317/ProjetL3">Detailed explanation of how our project thanks to the library Github</a>');


//---------------------------------------------------------
// APropos.php
//--------------------------------------------------------- 

define('TITRE_PROPOS','MAPPING DATA STRUCTURED <br> "Development of a toolkit for data visualization"');

define('TITRE0_PROPOS','Why this project?'); 
define('CORPS0_PROPOS','"The growth of online data (open data, big data, semantic web, geolocation ...)
		or produced by social networks, databases, etc.., has created tools "Data visualization" for decision support,
		communication and easier to understand and effectively communicate a message, a phenomenon <em> a story. </ em> " 
	<br>
	<br>
	<a href="http://www.scenario-interactif.com/pages/visualisation-de-donnees.php"> http://www.scenario-interactif.com/pages/visualisation-de-donnees.php</a>
	<br>
	<br>
	<p align=left> "The visualization of your data is not limited to their presentation.
	It is also a way to explore and understand them. "</p>
	<a href="http://www.tableausoftware.com/fr-fr" style="float:left;">http://www.tableausoftware.com/fr-fr</a>
	<br>
	<br>
	<p align=left> "In other words, the semantic mapping is the use of graphical representations of a set of information (maps) to share and create knowledge.
	The purpose of the cards is to help easily understand complex sets of information. "</p>
	<a href="http://www.cartographie-semantique.fr" style="float:left;">http://www.cartographie-semantique.fr</a>
	<br>
	<br>
	');

define('CORPS1_PROPOS','<p align=left> <strong> The requested work will take place in three stages :  </strong>
	<br>
	<br>
	<ol>
		<li><strong> Study </strong> (short bibliography) <strong> field</strong> mapping and data visualization :
		<ol>
			<li>Definition of the domain of the problem ;</li>
			<li>Study of different modes of visualization and mapping.</li>
		</ol>
		</li>
		<br>
		<li><strong> State of the art </ strong> (not exhaustive) <strong> libraries </ strong> open source visualization and mapping :
		<ol>
			<li> Types of data processed ; </li>
			<li> Type of visualization. </li>
		</ol>
		</li>
		<br>
		<li><strong> Making a toolbox </ strong> for editing and visualization of data. This toolkit will allow the use of different paradigms of visualization.
		Structured data that can be edited will be preferred. </li>
	</ol>
	');

//---------------------------------------------------------
// EtatArt.php
//---------------------------------------------------------

define('CORPS_ETAT','<em> « A picture is worth a thousand words ».</em>
		<br>
		<br>
		This finding on the value of visualization is especially true when working with a lot of information.
		The synthesis of work on mapping and visualization can consider maps as an ideal medium between a large number of information and mind.
		Each card then acts as the outer support thought to amplify the cognition of its users. "
		Indeed, the treatment of a large amount of data is a complex task if these data are not structured.
		The best structure for the human being visual, it is legitimate to want to develop an application able to recover, organize and display in map form a large amount of data to better treat them. <br> visualization of your data is not limited to their presentation.
		It is also a way to explore and understand.
		');

define('TITRE1_ETAT','Cartography');
define('CORPS1_ETAT','
		Mapping refers to the construction and study of maps. <br>
		The main principle of the mapping is the representation of data on a small carrier
		Souvant representing real space. <br>
		<strong> Its objective is to make a concise and effective representation to enable a rapid and relevant understanding. </ strong>
		<br>
		<br>
		Since the creation of writing in Mesopotamia in 3500 BC, most civilizations have early signs
		using a map. At first, these cards are engraved sketches that have a reminder function.
		It is as representations of elements of the territory, the environment "close", as men perceive.
		');

define('CORPS2_ETAT','
		Quickly, the cards will be used for navigation at sea, to improve trade.
		Many Greek scientists (Eratosthenes (275-194 BC), Ptolemy (90-168), ...) will be willing to map the entire Earth.
		Over the centuries will elapse and the cards will become clear. <br>
		In the seventeenth, eighteenth centuries will nary <strong> topographic mapping. </ Strong>
		');

define('CORPS3_ETAT','
		A topographic map is a map scaled representing the relief determined by altimetry and human developments in a geographical area in a precise and detailed manner on a horizontal plane.
		<br>
		<br>
		From the nineteenth century appear new maps with data view that is no longer geographical locations but qualitative and quantitative data.
		<br> This is the beginning of <strong> thematic mapping. </ strong> <br> It aims to represent all phenomena to their spatial distribution and correlations.
		');

define('CORPS4_ETAT','
		Mapping thus expanding rapidly over time.
		<strong> Its evolution begins with the treatment of physical data (mainly geographical) to move towards the treatment of abstract data. It becomes a critical issue in many areas. </ Strong>
		');


define('TITRE2_ETAT','Semantic Mapping');
define('CORPS5_ETAT','"The semantic mapping is the mapping of an information space based on its semantics. In other words, the semantic mapping is the use of graphical representations of a set of information (in the form of cards) to share and create knowledge.
		The goal of each card is then to help easily understand complex sets of information. Semantic mapping is an essential activity to knowledge management, which takes advantage of the wealth of information organizations. "
		');

define('CORPS6_ETAT','In this case, view (map view) a set of abstract data mapping has the purpose. As we described earlier in this paper, visualization is an excellent medium between a large number of information and mind.
		However, it is possible to construct an almost infinite number of cards for the same information space.
		');
//---------------------------------------------------------
// Glossaire.php
//--------------------------------------------------------- 

define('CORPS1_GLO','<strong>Semantic Mapping : </strong>Semantic mapping is the use of graphical representations of a set of information (in the form of cards) to share and create knowledge.
		<br>
		<br>
		<strong>Open Data : </strong>Represents both a movement, access to information and practical publishing freely accessible and usable data philosophy.
		<br>
		<br>
		<strong>Big Data : </strong>Refers to datasets that become so large that they become difficult to work with conventional management tools database or information management.
		<br>
		<br>
		<strong>Semantic Web : </strong>This is a project of the World Wide Web Consortium (W3C) that promotes two common methods for exchanging data collaborative movement.
		<br>
		<br>
		<strong>Server : </strong>This is a hardware or software that provides computing device to different customers.
		<br>
		<br>
		<strong>Regular Expression : </strong>This computer is a character string that is sometimes called a pattern that describes a set of strings of possible characters according to a specific syntax.
		<br>
		<br>
		<strong>Nodes : </strong>Vertices.
		<br>
		<br>
		<strong>WordNet : </strong>It is a lexical database developed by linguists Laboratory of Cognitive Science at Princeton University.
		<br>
		<br>
		<strong>Steam : </strong>This is a platform for distribution of online content, rights management and communication.
		<br>
		<br>
		<strong>Debian : </strong> It is a community and democratic organization whose purpose is the development of systems based exclusively on free software operating systems.
		
		');

//---------------------------------------------------------
// BiBlio.php
//--------------------------------------------------------- 

define('TITRE1_BIBLIO','Books :');

define('CORPS1_BIBLIO_O','Literary works that we used are :<br>
		<ul style="list-style-type:disc;">
			<li> The thesis of Mr. Christophe Tricot (2006) : <a href="http://www.polytech.univ-savoie.fr/fileadmin/polytech_autres_sites/sites/listic/Theses/TheseTricot.pdf"> TheseTricot. <br></a>
			<li> Negrino.T, Smith.D (2008) : <strong>JavaScript & AJAX </strong> </li>
		</ul>');

define('TITRE2_BIBLIO','Websites :');

define('CORPS1_BIBLIO_I','The websites that we used are :<br><br>
		-	For making the graph that models the semantic search :<br>
		<ul style="list-style-type:disc;">
			<li><a href="https://github.com/philogb/jit"> Jit <br></a></li>
			<li><a href="http://d3js.org/"> d3 library <br></a></li>
			<li><a href="http://sigmajs.org/"> Sigmajs <br></a></li>
		</ul>

		<p align = left>-	To better understand some programming languages :<br></p>
		<ul style="list-style-type:disc;">
			<li><a href="http://stackoverflow.com/tags/javascript/info"> Stackoverflow.com/JavaScript <br></a></li>
			<li><a href="http://stackoverflow.com/tags/jquery/info"> Stackoverflow.com/JQuery <br></a></li>
			<li><a href="http://www.php.net/"> Php <br></a></li>
			<li><a href="http://stackoverflow.com/tags/css/info"> Stackoverflow.com/CSS <br></a></li>
			<li><a href="www.json.org"> JSon.org <br></a></li>
			<li><a href="http://fr.openclassrooms.com/informatique/cours/serialisez-vos-objets-au-format-json"> OpenClassRooms/Json <br></a></li>
		</ul>

		<p align=left>-	To help us in some problems (forums) :</p>
		<ul style="list-style-type:disc;">
			<li><a href="http://stackoverflow.com/"> Stackoverflow.com</a></li>
			<li><a href="http://fr.openclassrooms.com/"> OpenClassRooms.com <br></a></li>
			<li><a href="http://www.developpez.net/forums/"> Développer.com <br></a></li>
		</ul>

		<p align=left>-	Documenting us on semantic mapping and semantic search :</p>
		<ul style="list-style-type:disc;">
			<li><a href="http://fr.wikipedia.org/wiki/Cartographie_s%C3%A9mantique"> Wikipédia : Semantic mapping </a></li>
			<li><a href="http://fr.wikipedia.org/wiki/Web_s%C3%A9mantique"> Wikipédia : semantic web </a></li>
			<li><a href="www.cartographie-semantique.fr/"> Cartographie-Semantique.fr <br></a></li>
			<li><a href="http://www.thesaurus.gouv.qc.ca/tag/terme.do?id=MDL150"> Thesaurus.gouv.qc.ca <br></a></li>
		</ul>
		
		');

//---------------------------------------------------------
// Contact.php
//--------------------------------------------------------- 


define('CORPS1_CONTACT', 'This site is offered by students L3-STIC-INFO of the University of Savoie, in the context of their project.');
define('CORPS2_CONTACT', 'Project Manager :');
define('CORPS3_CONTACT', 'Project Team :');
define('CORPS4_CONTACT', 'Project Tutor:');


//---------------------------------------------------------
// Exemple_Video.php
//--------------------------------------------------------- 

define('TITRE_VIDEO', 'Example of use');


//---------------------------------------------------------
// Fin
//--------------------------------------------------------- 

?>


