<?php
require('decide.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ForceDirected - Force Directed Static Graph</title>

<!-- CSS Files -->
<link type="text/css" href="accueil.css" rel="stylesheet" />
<link type="text/css" href="vues.css" rel="stylesheet" />
<link type="text/css" href="ForceDirected.css" rel="stylesheet" />

<!-- JIT Library File -->
<script language="javascript" type="text/javascript" src="jit.js"></script>

<!-- Example File -->
<script language="javascript" type="text/javascript" src="vues.js"></script>
<script language="javascript" type="text/javascript" src="menu.js"></script>
</head>

<body onload="init();">

<!-- Changer langue -->
<a href = "Vues.php?langue=anglais"> <img src = "DrapeauA.png" border="0" width = "3%" align="right"></img></a>
<a href = "Vues.php?langue=français"> <img src = "DrapeauF.png" border="0" width = "3%" align="right"></img></a>

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


<div id="infovis"></div>    
				
<!-- Affiche le graphe -->
<div id="log"></div>
					
</body>
</html>