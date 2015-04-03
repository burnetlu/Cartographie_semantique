<?php
require('decide.php');
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8"></meta>
  <link rel="stylesheet" type="text/css" href="accueil.css" />
  <title>Documentation</title>
  <script language="javascript" type="text/javascript" src="menu.js"></script>
</head>

<body>


<!-- Changer langue -->
<a href = "Documentation.php?langue=anglais"> <img src = "DrapeauA.png" border="0" width = "3%" align="right"></img></a>
<a href = "Documentation.php?langue=français"> <img src = "DrapeauF.png" border="0" width = "3%" align="right"></img></a>

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


<!-- Explication pour remplir une requête -->
<p><br></p>
<h3><?php echo TITRE_DOC;?></h3><br>
<p align= left><?php echo CORPS_DOC;?><br></p>

<!-- Image du DataCrawler -->
<div> <img src="DataCrawler.png" border="0" width="30%" align="center"> </div>
<br><!-- Name -->

<h4><b><?php echo SOUS_TITRE1_DOC;?></b></h4>
<p align = left><?php echo CORPS1_DOC;?><br></p>
<h5><em><?php echo EXEMPLE1_DOC;?><br></em></h5>

<!-- Target -->
<h4><b><?php echo SOUS_TITRE2_DOC;?></b></h4>
<p align = left><?php echo CORPS2_DOC;?><br></p>
<h5><em><?php echo EXEMPLE2_DOC;?><br></em></h5>

<!-- Field -->
<h4><b><?php echo SOUS_TITRE3_DOC;?></b></h4>
<p align = left><?php echo CORPS3_DOC;?><br></p>
<h5><em><?php echo EXEMPLE3_DOC;?><br></em></h5>

<!-- Rule -->
<h4><b><?php echo SOUS_TITRE4_DOC;?></b></h4>
<p align = left><?php echo CORPS4_DOC;?><br></p>
<h5><em><?php echo htmlspecialchars (EXEMPLE4_DOC);?><br></em></h5>

<!-- Lien de la video -->
<p><?php echo EXEMPLE_VIDEO;?><br></p>

</body>

</html>