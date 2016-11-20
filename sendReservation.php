<?php require_once './DesignParts/session.php';?>
<?php require_once './DesignParts/data.php';?>
<?php require_once './Functions/function.php'; ?>
<?php
/* Int convertion for time variables */
$hour = intval($_POST['hour']);
$minute = intval($_POST['minute']);
$duration = intval($_POST['duration']);
/* mktime for timing rappresentation in seconds */
$start_time = mktime($hour,$minute);
$end_time = $start_time + $duration * 60;
/* Convertion from seconds to standard time rappresentation */
$start=date('H:i', $start_time);
$end=date("H:i", $end_time);

/* DB Connection */
$conn = mysqli_connect($server, $user, $pass, $database);
if($conn == false){
  die("Connection Error");
}
/* Select occupated printersID */
$query = mysqli_query($conn, "SELECT DISTINCT PID
                              FROM  printers
                              WHERE (START >= '$start' AND START < '$end')
                              OR    (END > '$start' AND END <= '$end')
                              OR    (START <= '$start' AND END >= '$end');" );
if($query == null){ die("Connection Error"); }

/* Create an array with the ID of occupated printers */
for( $k=0; $k<$MAX_PRINTERS_AVAILABLE; $k++){
  $arrayOccupatedPID = mysqli_fetch_array($query, MYSQLI_NUM);
  $occupatedPID[$k] = $arrayOccupatedPID[0];
}
/* Count how many printers are occupied */
$numOccupatedPID = mysqli_num_rows($query);
/* If all printers are available select the first one for reservation */
if($numOccupatedPID == 0){
	$time=date("H:i");
  $insert = mysqli_query($conn, "INSERT INTO printers(PID, START, END, DURATION, USERNAME, RESERVATION_START) VALUES (1 ,'$start', '$end', $duration, '$username', '$time'); ");
  if($insert == false){
    die("Connection Error (".mysqli_connect_errno().")".mysqli_connect_error());
  }
  header("Location: reservation.php");
}
/* If NOT all printers are available... */
else{
    /* Check if there are available printers */
    if ($numOccupatedPID < $MAX_PRINTERS_AVAILABLE){
        /* If yes, find the first printer available */
        for($i=1; $i <= $MAX_PRINTERS_AVAILABLE; $i++){
          $printerOccupated=false;
          /* Find the occupated printers */
          for($j=0; $j<$numOccupatedPID; $j++){
                if($occupatedPID[$j] == $i){
                  /* When occupated printers is founded discard it from the available printers */
                  $printerOccupated = true;
                  break;
                }
          }
          /* If the i-Printer is free exit from the cycle and make the INSERT */
          if($printerOccupated == false){
            $freePrinter=$i;
            break;
          }
        }
				$time=date("H:i");
        $insert = mysqli_query($conn, "INSERT INTO printers(PID, START, END, DURATION, USERNAME, RESERVATION_START) VALUES ($freePrinter,'$start', '$end', $duration, '$username','$time')");
        if($insert==false){
          die( "Connection Error (".mysqli_connect_errno().")".mysqli_connect_error());
        }
        /* Redirect to reservtion page so the user can easily make another reservation*/
        header("Location: reservation.php");
    }
    /* else there are no printers Available -> User can't reserve */
    else {
      header("Location: notReserved.php");
    }
} ?>
