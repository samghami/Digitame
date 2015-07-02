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
## Pages errors.functions.php
########################################## */

	/**
	 *	This function was construct for display many errors in the site web
	 *	@param name (string)
	 *	@param type (string)
	 *	@param message (string)
	 *	@param link (string)
	 *	@return Display errors with jquery Alert (http://getbootstrap.com/javascript/#alerts)
	 */

	function setErrors($name, $type, $message, $timeout = 5000)
	{
		$_SESSION['errors'] = array(
			'name'    => $name,
			'message' => $message,
			'type'    => $type,
			'timeout' => $timeout
			);
	} 
	function Errors()
	{
		if(isset($_SESSION['errors']))
			{ ?>
				<script>
					$('body').notif({title:"<?php echo $_SESSION['errors']['name']; ?>", content:"<?php echo $_SESSION['errors']['message']; ?>", cls:"<?php echo $_SESSION['errors']['type']; ?>", timeout:'<?php echo $_SESSION['errors']['timeout']; ?>'});
				</script>
		<?php 
		unset($_SESSION['errors']);
		}		

	}
