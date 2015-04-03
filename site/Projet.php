<?php
require('decide.php');
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8"></meta>
  <link rel="stylesheet" type="text/css" href="accueil.css" />
  <title>Documentation_Projet</title>
  <script language="javascript" type="text/javascript" src="menu.js"></script>
</head>

<body>


<!-- Changer langue -->
<a href = "Projet.php?langue=anglais"> <img src = "DrapeauA.png" border="0" width = "3%" align="right"></img></a>
<a href = "Projet.php?langue=français"> <img src = "DrapeauF.png" border="0" width = "3%" align="right"></img></a>

<!-- Image Condillac -->
<a href="http://www.condillac.org/accueil/"><img src="Condillac.jpg" border="0" width="19%" align="right"></img></a>			
	
<!-- Image Univ Savoie -->
<a href="http://www.univ-savoie.fr/‎"><img src="univ-savoie.jpg" border="0" width="19%" align="left"></img></a>			

<!-- Menu horizontal -->	
<div class="exemple" id="ex2">
	<ul class="nav">
		<li><a href="accueil.php?langue=<?php echo $_GET['langue']; ?>"> <?php echo ACCUEIL_MENU;?> </a></li> 
		<li><a href="Vues.php?langue=<?php echo $_GET['langue']; ?>"> <?php echo VUES_MENU;?> </a></li>
		<li>
				<a href=""> <?php echo PROPOS_MENU;?> </a>
				<ul>
						<li><a href="APropos.php?langue=<?php echo $_GET['langue']; ?>"><?php echo PROJET_MENU;?></a></li>
						<li><a href="EtudeArt.php?langue=<?php echo $_GET['langue']; ?>"><?php echo ETUDE_MENU;?></a></li>
				</ul>
		</li>	
		<li>
				<a href=""> <?php echo DOCUMENTATION_MENU;?> </a>
				<ul>
						<li><a href="Projet.php?langue=<?php echo $_GET['langue']; ?>"> <?php echo DOC_PROJET;?> </a> </li>
						<li><a href="Documentation.php?langue=<?php echo $_GET['langue']; ?>"> <?php echo DOC_REQUETE;?> </a> </li>
						<li><a href="Exemple_Video.php?langue=<?php echo $_GET['langue']; ?>"> <?php echo VIDEO_EXEMPLE;?> </a> </li>

				</ul>
		</li>					
		<li><a href="Glossaire.php?langue=<?php echo $_GET['langue']; ?>"> <?php echo GLOSSAIRE_MENU;?> </a> </li>
		<li><a href="BiBlio.php?langue=<?php echo $_GET['langue']; ?>"><?php echo BIBLIO_MENU;?></a></li>
		<li><a href="contact.php?langue=<?php echo $_GET['langue']; ?>"><?php echo CONTACT_MENU;?></a></li>
	</ul>  
</div>

<!-- Explication du fonctionnement de nos recherches sémantiques -->
<br>

<!-- Principe du projet -->
<h3><?php echo TITRE_DOC_PROJ;?></h3>
<p align = left><?php echo CORPS_DOC_PROJ;?><br></p>

<h4><?php echo SOUS_TITRE1_DOC_PROJ;?><br></h4>
<p align = left><?php echo CORPS1_DOC_PROJ;?><br></p>

<h4><?php echo SOUS_TITRE2_DOC_PROJ;?><br></h4>
<p align = left><?php echo CORPS2_DOC_PROJ;?><br></p>

<h4><?php echo SOUS_TITRE3_DOC_PROJ;?><br></h4>
<p align = left><?php echo CORPS3_DOC_PROJ;?><br></p>

<h4><?php echo SOUS_TITRE4_DOC_PROJ;?><br></h4>
<p align = left><?php echo CORPS4_DOC_PROJ;?><br></p>

<!-- Schéma récapitulatif du fonctionnement -->
<br><div> <img src="Schéma.png" border="1" width="80%" align="center" ></div>

<!--Etude de l'existant -->
<br><h3><?php echo TITRE1_DOC_PROJ;?></h3>
<p align = left><?php echo CORPS5_DOC_PROJ;?>
<?php echo LIEN_TH;?><br></p>


<!--Contraintes -->
<h3><?php echo TITRE2_DOC_PROJ;?></h3>
<p align = left><?php echo CORPS6_DOC_PROJ;?><br></p>

<!-- Fonctionnement détaillé de la recherche sémantique -->
<h3><?php echo TITRE3_DOC_PROJ;?></h3>
<!-- Lien vers GitHub -->
<p align=left><?php echo DOC_GITHUB;?><br></p>

</body>

</html>