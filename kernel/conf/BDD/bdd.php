<?php
/* ##########################################
##    (c) 2015 Tout droit réservé          ##
##        Create by samghami               ##
##                                         ##
##        contact@samghami.fr.nf           ##
##        http://www.samghami.fr.nf/       ##
##                                         ##
##        CMS de système de comptabilité   ##
##        He is on GNU licence             ##
########################################## */

/* ##########################################
## Pages bdd.php
########################################## */


	//Definition des variable prive de connexion sql
	$sql_server = 'localhost';
	$sql_bdd    = 'Digitame';
	$sql_user   = 'root';
	$sql_mdp    = '';

	//Connexion a la bdd
	try 	// On essais de se connecter
	{
		$cnx = new PDO('mysql:host='.$sql_server.';dbname='.$sql_bdd, $sql_user, $sql_mdp);
	}
	catch (Exception $e) 	//Si cela ne fonctionne pas
	{
		die('Erreur : '. $e->getMessage());
	}

