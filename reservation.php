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
		<title> Reserve Our Printers | 3D Printers Center </title>
  </head>
  <body>
    <div id="wrap">
      <?php require_once './DesignParts/header.php'; ?>

      <div id="content-wrap">
        <img class="no-border" width="1000" height="300" alt="" src="./Images/home.jpg">
        <?php require_once './DesignParts/options.php'; ?>

        <div id="main">
					<?php require_once './DesignParts/noscript.php'; ?>
          <h1>Manage Your Reservation</h1>
          <p>
            You can <strong>reserve</strong> or <strong>delete</strong> your reservations of our professional 3D printers only if your are logged in.
            <br /> Here there is a list of the actual reservations you made.
          </p>
          <p>Select the checkbox if you want to <strong>delete</strong> your reservation.</p>
          <blockquote>
           <form id="DeleteForm" action="./sendDelete.php" method="post">
            <table id="t01">
              <tr>
                <th>PID</th>
                <th>START TIME</th>
                <th>END TIME</th>
                <th>DURATION</th>
                <th>USERNAME</th>
                <th>DELETE</th>
              </tr>
              <?php
                /* DB Connection */
                $conn = mysqli_connect($server, $user, $pass, $database);
                if($conn == false){ die("Connection Error(1)"); }

                /* Select every reservation made by the user logged in */
                $query = mysqli_query($conn, "SELECT ID, PID, START, END, DURATION, USERNAME
                                              FROM  printers
                                              WHERE USERNAME='$username'
                                              ORDER BY START;" );
                if($query == false){ die( "Connection Error (".mysqli_connect_errno().")".mysqli_connect_error()); }

                /* Print every field from the DB to the table (PID,START,END,DURATION,USERNAME,DELETE) */
                while($field = mysqli_fetch_array($query)):;?>
                    <tr>
                      <td><?php echo $field[1];?></td>
                      <td><?php echo $field[2];?></td>
                      <td><?php echo $field[3];?></td>
                      <td><?php echo $field[4];?> min </td>
                      <td><?php echo $field[5];?></td>
                      <td><input id="Checkbox" type="checkbox" name="checkbox[]" value="<?php echo $field[0];?>"></td>
                    </tr>
                <?php endwhile;?>
              </table>
              <button class="button" type="submit">Delete</button>
            </form>
          </blockquote>

          <p>Here you can <strong>reserve</strong> your printer.</p>

          <blockquote>
            <form id="ReservationForm" action="./sendReservation.php" method="post">
              <label for="Hour"> Hour: </label>
              <input id="Hour" type="text" style="width: 200px;" placeholder="Insert hour time here" maxlength="2" name="hour">
              <label for="Minute"> Minute: </label>
              <input id="Minute" type="text" style="width: 200px;" placeholder="Insert minutes time here" maxlength="2" name="minute">
              <label for="Duration"> Duration: </label>
              <input id="Duration" type="text" style="width: 200px;" placeholder="Insert duration here" maxlength="4" name="duration">
              <br>
              <br>
              <input type="button" class="button" onclick="checkReservationValues()" value="Reserve">
            </form>
          </blockquote>

        </div>
      </div>
      <?php require_once './DesignParts/footer.php'; ?>
    </div>

    <script type="text/javascript">
    setCurrent(document.getElementById("Reservation"));
    setSpan(document.getElementById("reservation"), "Reservation");
    document.forms[0].Username.focus();
    </script>

  </body>
</html>
