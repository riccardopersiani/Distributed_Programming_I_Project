<?php require_once './DesignParts/session.php'; ?>
<?php require_once './DesignParts/data.php'; ?>
<?php require_once './DesignParts/https.php'; ?>
<?php require_once './Functions/function.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <link type="text/css" href="./DesignParts/MyStyle.css" rel="stylesheet">
    <script src="./Functions/graphic.js" type="application/javascript"></script> <!-- WTF?  -->
		<script src="./Functions/function.js" type="text/javascript"></script>
		<title> Home | 3D Printers Center </title>
  </head>
  <body>
    <div id="wrap">
      <?php require_once './DesignParts/header.php'; ?>

      <div id="content-wrap">
        <img class="no-border" width="1000" height="300" alt="" src="./Images/home.jpg">
        <?php require_once './DesignParts/options.php'; ?>

        <div id="main">
					<?php require_once './DesignParts/noscript.php'; ?>

          <h1>Welcome to the 3D Print Centre</h1>
		  		<p>
            The <strong>3D Print Centre</strong>
            Turning ideas into a 3D printed part is a simple and easy process. Get steps on how to make a print.<br>
            <a href="./printers.php">Here</a>  you can see the list of today scheduled printers. For privacy reason you can not see the username of the person who makes the reservation if you are not a registered user.<br>
            After a <a href="./signUp.php"><strong>Free</strong> Registration</a> you can reserve our printers.
          </p>
          <p>
						Each registered user can reserve a printer for 24 hours but unfortunately you can not make more then one registration
						if the two reservations are overlapped.<br>
					</p>
          <p>
						Our team is available for questions, contact us if you need help.
					</p>

          <img class="border: 1px solid" width="500" height="339" style="margin:0 0 0 0;" alt="Entry" src="./Images/entry.jpg">

          <div class="float-left">
            <h2>Printers Reservation</h2>
            <img class="border: 1px solid" width="635" height="400" style="margin:0 0 0 0;" alt="Printer" src="./Images/printer.jpg">
            <p> </p>
          </div>

          <div class="float-left">
            <h2 class="aligh-left">Our Projects</h2>
            <img class="float-left" width="350" height="196" style="margin:0 0 0 0;" alt="Projects" src="./Images/projects.jpg">
						<p>All rights are reserved.<br /></p>
          </div>

          <div class="float-right">
            <h2 class="aligh-right">Meet The Team</h2>
            <img class="float-right" width="300" height="199" style="margin:0 8px 0 0;" alt="Team" src="./Images/team.jpg">
          </div>

        </div>
      </div>
      <?php require_once './DesignParts/footer.php'; ?>
    </div>

    <script type="text/javascript">
    setCurrent(document.getElementById("Home"));
    setSpan(document.getElementById("home"), "Home");
    document.forms[0].Username.focus();
  	</script>

	</body>
</html>
