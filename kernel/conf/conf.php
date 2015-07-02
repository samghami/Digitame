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
## Pages conf.php
########################################## */

	/**
	 * This file was construct for select information in sql database
	 * @param Information SQL
	 * @return array with conf line 1
	 */
require_once('BDD/bdd.php');
	$req = $cnx->prepare('SELECT * FROM conf WHERE id = :id');
	$req->execute(array(
		'id' => 1
		));
	$conf = $req->fetch();
	$req->closeCursor();

	define('PATH_TO_ROOT', '/'.htmlspecialchars($conf[6]));
	define('PATH_TO_OFFICE', PATH_TO_ROOT.'/back-office/');
	define('PATH_TO_TPL', PATH_TO_ROOT.'/kernel/templates/'.htmlspecialchars($conf[3]));
	define('TITRE_SITE', htmlspecialchars($conf[1]));
	define('SLOGAN_SITE', htmlspecialchars($conf[2]));
	define('SEP_SITE', htmlspecialchars($conf[5]));
	define('TEMPLATES_SITE', htmlspecialchars($conf[3]));
	define('DESC_SITE', htmlspecialchars($conf[4]));




//	$conf = SelectSQL($champs, $table, $cond);
