<?php session_start();
	/* 5. Authentication by means of username and password must be done when requested by the user and must
	* remain valid if no more than 2 minutes elapse between one page load and the next one.
	* If a user requests one of the operations that require authentication after the deadline of 2 minutes since the previous page load,
	* he operation has no effect and the user is forced to re-authenticate with username and password.
	* Using HTTPS is mandatory during authentication and whenever the user is accessing a part of
	* the application that is available only with authentication.
	**/
	$SessionTime = 120;	#time in seconds (the requirement is 2 minutes)

	/** Check if the user is already loggedIn,
		if the timeout was expired the session is destroyed **/
	if( isset($_SESSION['user']) ) {
		$username = $_SESSION['user'];
		$userLogged = TRUE;

		if( isset($_SESSION['time']) ) {
			$diff = time() - $_SESSION['time'];	#difference between actual time and last interaction time
			if($diff > $SessionTime) {
				$userLogged = FALSE;
				$TimeoutExpired = TRUE;
				session_destroy();
				header('Location: redirect.php');
			}
			else
				$_SESSION['time'] = time();
		}
		else
			$_SESSION['time'] = time();
	}
	else{
		$userLogged = FALSE;
	}

?>
