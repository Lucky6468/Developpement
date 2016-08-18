<?php

/* 
Là c'est un tableau des pages admises mais renvoyant par défaut "home"
*/
/*
$page = 'home';
$access = ["home", "login", "register"];
if (in_array($_GET['page'], $access))
{
	$page = $_GET['page'];
}

require('apps/skel.php');
?>
*/

/*

	Là on vérifie l'existence de la case du tableau associatif 
	pointé par GET (et toujours renvoyant par défaut "acceuil")
	On obtient avec cette technique une bonne sécurité à 40%
	Un rajout ou soustraction de page impose l'actualisation de
	$access

*/

$page = 'home';
$access = ["home", "register", "login"];
if (isset($_GET['page']) && in_array($_GET['page'], $access))
{
	$page = $_GET['page'];
}
require('apps/skel.php');
//	var_dump($_POST)
?>


