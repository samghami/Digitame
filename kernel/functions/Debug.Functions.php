<?php 
/* ##########################################
##    (c) 2015 Depaule Julien              ##
##        Alias samghami                   ##
##                                         ##
##        contact@samghami.fr.nf           ##
##        http://www.samghami.fr.nf/       ##
##                                         ##
##        CMS de système de comptabilité   ##
##        Delamare Deboutteville           ##
##        Il est sous licence GNU          ##
########################################## */

/* ##########################################
## Pages debug.functions.php
########################################## */

	/**
	 *	This function was construct juste for the debugging
	 *	@param $vars; Are necessary a variable
	 *	@return Array(); Return the debugging of your variable 
	 *	@example debug($_SERVER);
	 *	@exec 
	 */
	function debug($vars)
	{
		$debug = debug_backtrace();
		echo '<p>&nbsp;</p><p><a href="#" onclick="$(this).parent().next(\'ol\').slideToggle(); return false;"><strong>'.$debug[0]['file'].'</strong> l.'.$debug[0]['line'].'</a></p>';
		echo '<ol style="display:none;">';
		foreach($debug as $k=>$v){ if($k>0)
		{
			echo '<li><strong>'.$v['file'].'</strong> l.'.$v['line'].'</li>'; 
		}}
		echo '</ol>';
		echo '<pre>';
		print_r($vars);
		echo '</pre>';
	}