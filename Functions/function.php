<?php
	function sanitizeString($conn, $var) {
    /* Return a string with all NULL bytes, HTML and PHP tags stripped from a given str */
		$var = strip_tags($var);
    /*  This function is identical to htmlspecialchars() in all ways */
		$var = htmlentities($var);
    /* Returns a string with backslashes stripped off. */
		$var = stripslashes($var);
    /* Escapes special characters in a string for use in an SQL statement */
    $var = mysqli_real_escape_string($conn, $var);
		return $var;
	}
?>
