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
## Pages SelectAllGeneralFunctions.php
########################################## */

if($dossier = opendir('../functions'))
{
	while(false !== ($fichier = readdir($dossier)))
	{
		if($fichier != '.' && $fichier != '..' && $fichier != 'index.php')
		{
			require_once($fichier);
		} // On ferme le if (qui permet de ne pas afficher index.php, etc.)
	} // On termine la boucle
	
	closedir($dossier);
}
