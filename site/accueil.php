<?php
require('decide.php');
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8"></meta>
  <link rel="stylesheet" type="text/css" href="accueil.css" />
  <title>Accueil</title>
  <script language="javascript" type="text/javascript" src="menu.js"></script>
</head>

<body>


<!-- Changer langue -->
<a href = "accueil.php?langue=anglais"> <img src = "DrapeauA.png" border="0" width = "3%" align="right"></img></a>
<a href = "accueil.php?langue=français"> <img src = "DrapeauF.png" border="0" width = "3%" align="right"></img></a>

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

<!-- Contenu -->
<h1> <?php echo TITRE_INDEX;?></h1>
<h2> <?php echo SOUS_TITRE_INDEX;?> </h2>
 
<p><em> <?php echo CORPS_INDEX;?> </em><br></p>
<a href=" http://www.cartographie-semantique.fr " style="float:right;"> "www.cartographie-semantique.fr"</a><br><br><br><br>

<!-- Logos cartographie sémantique -->
<div> 	<img src="cartographie.jpg" border="0" width="25%" align="center" >
		<img src="carto.gif" border="0" width="30%" align="left" >
		<img src="carto1.jpg" border="0" width="25%" align="right" >
</div>
	

				
</body>
</html>