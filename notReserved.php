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
          <h1>At the moment there are NO PRINTER Available!!!</h1>
        </div>
      </div>

       <?php require_once './DesignParts/footer.php'; ?>
      </div>
    </div>

    <script type="text/javascript">
    setCurrent(document.getElementById("Printers"));
    setSpan(document.getElementById("printers"), "Printers");
    document.forms[0].Username.focus();
    </script>

  </body>
</html>
