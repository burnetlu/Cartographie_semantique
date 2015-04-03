<?php
require('decide.php');
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="accueil.css" />
  <title>APropos</title>
  <script language="javascript" type="text/javascript" src="menu.js"></script>
</head>

<body>

<!-- Changer langue -->
<a href = "APropos.php?langue=anglais"> <img src = "DrapeauA.png" border="0" width = "3%" align="right"></img></a>
<a href = "APropos.php?langue=français"> <img src = "DrapeauF.png" border="0" width = "3%" align="right"></img></a>

<!-- Image Condillac -->
<a href="http://www.condillac.org/accueil/"><img src="Condillac.jpg" border="0" width="19%" align="right"></a>			
	
<!-- Image Univ Savoie -->
<a href="http://www.univ-savoie.fr/â€Ž"><img src="univ-savoie.jpg" border="0" width="19%" align="left"></a>			
	
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
<br>
<h2><?php echo TITRE_PROPOS;?></h2>

<br>
<h3><?php echo TITRE0_PROPOS;?></h3>
<p align = left><?php echo CORPS0_PROPOS;?></p>

<!--Images -->
<div> 
<img src = "EyeTree.jpg" border="1" width = "25%" align="center"></img>
<img src = "RadialTree.png" border="1" width = "35.8%" align="center"></img><br>
<div>

<br><p align = left><?php echo CORPS1_PROPOS;?></p>

<!-- Logos langages -->
<br>
<div>
<img src = "json.png" border="0" width = "15%" align="center"></img>
<img src = "Jit.png" border="0" width = "25%" align="center"></img>
<img src = "Javascript.png" border="0" width = "10%" align="center"></img>
<img src = "jquery.gif" border="0" width = "20%" align="center"></img>
<img src = "php.png" border="0" width = "10%" align="center"></img>
</div>

</body>
</html>

