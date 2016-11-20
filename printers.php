<?php require_once './DesignParts/session.php'; ?>
<?php require_once './DesignParts/data.php'; ?>
<?php require_once './Functions/function.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <link type="text/css" href="./DesignParts/MyStyle.css" rel="stylesheet">
	<script src="./Functions/graphic.js" type="application/javascript"></script> <!-- WTF?  -->
	<script src="./Functions/function.js" type="text/javascript"></script>
    <title> Reservation Sum Up | 3D Printers Center </title>
  </head>

  <body>
    <div id="wrap">
      <?php require_once './DesignParts/header.php'; ?>

      <div id="content-wrap">
        <img class="no-border" width="1000" height="300" alt="" src="./Images/home.jpg">
        <?php require_once './DesignParts/options.php'; ?>

        <div id="main">
					<?php require_once './DesignParts/noscript.php'; ?>
          <h1>Printer Reservations</h1>
          <p>
            You can <strong>reserve</strong> our professional 3D printers only if your are logged in.
            Now we have 4 machines in our labs.<br />
            Here there is a list of the actual reservation.
          </p>
          <blockquote>
            <table id="t01">
              <tr>
                <th>PID</th>
                <th>START TIME</th>
                <th>END TIME</th>
                <th>DURATION<br />min</th>
                <th>USERNAME</th>
              </tr>
              <?php
                $conn = mysqli_connect($server, $user, $pass, $database);
                if($conn == false){
                  die("Connection Error");
                }
                $query = mysqli_query($conn, "SELECT PID, START, END, DURATION, USERNAME
                                              FROM  printers
                                              ORDER BY START;" );
                if($query == false){
                  echo "Connection Error (".mysqli_connect_errno().")".mysqli_connect_error();
                  exit();
                }

                while($field = mysqli_fetch_array($query)):;?>
                  <tr>
                    <td><?php echo $field[0];?></td>
                    <td><?php echo $field[1];?></td>
                    <td><?php echo $field[2];?></td>
                    <td><?php echo $field[3];?></td>
                    <td><?php echo $field[4];?></td>
                  </tr>
                <?php endwhile;?>
            </table>
          </blockquote>
          <?php mysqli_close(); ?>
          <p>
            Each registered user can reserve a printer for max 24 hours.<br>
          </p>
          <p>Our team is available for questions, contact us if you need help.</p>
        </div>
      </div>
      <?php require_once './DesignParts/footer.php'; ?>
    </div>

		<script type="text/javascript">
    	setCurrent(document.getElementById("Printers"));
    	setSpan(document.getElementById("printers"), "Printers");
    	document.forms[0].Username.focus();
    </script>

  </body>
</html>
