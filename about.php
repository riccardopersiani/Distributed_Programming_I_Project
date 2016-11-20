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
    <title> About Us | 3D Printers Center </title>
  </head>
  <body>
    <div id="wrap">
    	<?php require_once './DesignParts/header.php'; ?>

      <div id="content-wrap">
        <img class="no-border" width="1000" height="300" alt="" src="./Images/home.jpg">
        <?php require_once './DesignParts/options.php'; ?>

          <div id="main">
		    <?php require_once './DesignParts/noscript.php'; ?>

      		<h1><span class="darkgray">Additional</span> Informations</h1>
            <p> 3DPrintWorld.com is a news organization dedicated to bringing you up to date on all the <strong>latest features</strong> from the 3D printing industry.
                We pride ourselves on finding interesting and unique services through intensive studying, and extensive preparations.<br />
                Our team of printers are both experienced and dedicated to their work. If you have any questions, comments, suggestions, or news tips, please feel free to contact us.
			</p>
            <p>
              Our 3D Print Centre provides <strong>low cost</strong>, <strong>high quality rapid prototyping</strong> and end use parts to students, staff and faculty, with a focus on undergraduate students and teams.
              The facility has two in-house production grade fused deposition modeling 3D printers as well as access to other 3D printing technologies through our 3D printing partner Hyphen based in Kitchener.
              Let us help turn your ideas into reality.
            </p>
            <br>
            <h2>Circuit board manufacturing</h2>
            <img src="./Images/login.jpg" width="700" height="230" alt="Andora's seascape." class="no-border" style="margin:0 0 30px 0;" />
            <p> The 3D Print Centre now offers <strong>PCB</strong> (Printed Circuit Board) milling and manufacturing. Our equipment is capable of creating precise circuit boards with up to 8 layers. We also have the ability to process plated through-hole connections and vias and provide solder masking, silk screening, and tin-plating for better quality boards.
                PCB manufacturing is open to all faculty, staff and students. If you have any questions or wish to order a board, stop by the 3D Print Centre in E5 room 2002 or e-mail us at riccardo.persiani@polito.it. We accept EAGLE .brd files and Gerber files.
            </p>
            <br>
            <h2>Materials</h2>
            <img src="./Images/signup.jpg" width="700" height="230" alt="Andora's seascape." class="no-border" style="margin:0 0 30px 0;" />
            <p> At the 3D Print Centre, we have the ability to print in four different materials: ABS, PC-ABS, PC (polycarbonate), and nylon. <br /></p>
            <ul style="list-style-type:disc">
              <li> <strong>ABS</strong> is a flexible material, although it is not as strong as PC. It is available in many colours such as white, black, ivory, dark grey, blue and red. <strong>Please inquire to which colours are available at the current time</strong>. </li>
              <li> <strong>PC-ABS</strong>, the most popular material, is a hybrid of PC and ABS which combines the strength of PC with the flexibility of ABS. PC-ABS is only available in black.</li>
              <li> <strong>PC (polycarbonate)</strong> has the greatest heat resistance and strength. It is very accurate and is mostly used for prints with precise moving parts and/or that will be under high temperatures. PC is not a flexible material. PC is only available in white.</li>
              <li> <strong>Nylon</strong>, an incredibly strong and functional FDM material with great chemical resistance properties. This material is only available in black. </li>
            </ul>
            <br />
            <h2>Pricing</h2>
            <p>We offer two choices about resolution.</p>
            <p><strong>Standard Resolution</strong>: $9/inch3</p>
            <p><strong>Enhanced Resolution</strong>: $12.25/inch3</p>
            <p>Any member of the university community can have their parts printed. For more information, visit the 3D Print Centre in E5-2002, email at engsdc3d@gmail.com or call 519-888-4567x33917.</p>
            <br />
			<div class="maps">
			  <h2>Where to find us</h2>
			  <p>3D Print World <br> Via San Paolo - Torino (TO) - Italy</p>
			  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6049.859714908217!2d7.641111380057385!3d45.05970034545173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47886cddc48f7541%3A0x1bc2d5243d4545ae!2sVia+S.+Paolo%2C+Torino!5e0!3m2!1sit!2sit!4v1464877612767" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		    </div>
        	<br />
            <br />
          </div>
	  </div>
	  <?php include_once './DesignParts/footer.php'; ?>
	</div>
    <script type="text/javascript">
        setCurrent(document.getElementById("About"));
        setSpan(document.getElementById("about"), "About");
    </script>
	</body>
</html>
