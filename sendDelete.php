<?php
require_once './DesignParts/session.php';
require_once './DesignParts/data.php';
require_once './Functions/function.php';


/* Vector of checkbox */
$checkbox = $_POST['checkbox'];

if ($checkbox == true) {
	for ($i=0; $i<count($checkbox); $i++) {
		/* Catching every ID to be deleted*/
		$id = $checkbox[$i];

		/* DB Connection */
		$conn = mysqli_connect($server, $user, $pass, $database);
		if($conn == false){ die("Connection Error(1)");}

		/* Selecting the reservation start time */
		$select = mysqli_query($conn, "SELECT RESERVATION_START
			FROM printers
			WHERE (ID = $id);" );
		if($select == false){ die("Connection Error(2)"); }
		$reservationStart = mysqli_fetch_array($select);

		/* Variable used for check if a minute is passed since the reservation */
		$oneMinutePassed = date('H:i',time()-60);

		/* Check if a minute is passed*/
		if ($reservationStart[0] < $oneMinutePassed) {
			/* If yes, Delete selected reservations */
			$query = mysqli_query($conn, "DELETE
										  FROM printers
										  WHERE (ID = $id)
											AND RESERVATION_START<'$oneMinutePassed';" );
			if ($query == false) {
				die("Connection Error(3)");
			}
		}else {
			  die("<h1>Error(): You can't delete! A Minute is not passed!! </h1>");
		}
		/* Close DB Connection */
		mysqli_close();
		header("Location: reservation.php");
	}
}
else {
		header("Location: reservation.php");
}?>
