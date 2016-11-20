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
	  <title> Login Expired | 3D Printers Center </title>
  </head>
	<body>
		<div id="wrap">
      <?php require_once './DesignParts/header.php'; ?>

      <div id="content-wrap">
        <img class="no-border" width="1000" height="300" alt="" src="./Images/home.jpg">
        <?php require_once './DesignParts/options.php'; ?>


        <div id="main">
			  	<?php require_once './DesignParts/noscript.php'; ?>

      		<h1><span class="darkgray">Login</span> Expired</h1>
          <p>
            2 minutes are passed since your last action on this website.<br />You need to <strong>login </strong>again if you want to reserve a printer and manage your reservations.
          </p>
        </div>
			</div>
			<?php include_once './DesignParts/footer.php'; ?>
		</div>

    <script type="text/javascript">
        setCurrent(document.getElementById("Login"));
        setSpan(document.getElementById("login"), "Login");
    </script>

	</body>
</html>
