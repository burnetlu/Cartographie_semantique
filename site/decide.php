<?php 
	// On v�rifie la valeur de langue et en fonction de sa valeur, on inclut soit lang/fr (si == 'fran�ais') soit lang/en (si == 'anglais')
	if($_GET['langue'] == 'fran�ais')
		include('lang/fr.php'); 
	else if ($_GET['langue'] == 'anglais')
		include('lang/en.php'); 
	else
		include('lang/fr.php'); 
 ?> 