<?php require_once './DesignParts/session.php'; ?>
<?php require_once './DesignParts/data.php'; ?>
<?php require_once './Functions/function.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
  <link type="text/css" href="./DesignParts/MyStyle.css" rel="stylesheet">
  <script src="./Functions/graphic.js" type="application/javascript"></script> <!-- WTF?  -->
  <script src="./Functions/function.js" type="text/javascript"></script>

  <title> Sending Registration | 3D Printers Center </title>
</head>
<body>
  <div id="wrap">
    <?php require_once './DesignParts/header.php'; ?>

    <div id="content-wrap">
      <img class="no-border" width="1000" height="300" alt="headerphoto" src="./Images/home.jpg">
      <?php require_once './DesignParts/options.php'; ?>

      <div id="main">
		<?php require_once './DesignParts/noscript.php'; ?>

        <?php
        if(count($_POST)===0) {
          if( isset($userLogged) && ($userLogged) ) {
            echo "<h2>You are already <span class='darkgray'>logged in</span>.</h2>";
            echo "<p>If you want to create a <span class='darkgray'>new account</span>, you must do the <a href='./logout.php'>log out</a>.</p>";
          }
          else {
            echo "<h3>Please before visit this page go <a href='signUp.php'>here</a> and enter your data!</h3>";
          }
        }
        $conn = mysqli_connect($server, $user, $pass, $database);
        if($conn == false){
          echo "Connection Error (".mysqli_connect_errno().")".mysqli_connect_error();
        }
        if($conn !== false) {
          $name = sanitizeString($conn, $_POST['name']);
          $lastname = sanitizeString($conn, $_POST['lastname']);
          $user = sanitizeString($conn, $_POST['username']);
          $pass = md5(sanitizeString($conn, $_POST['password']));		/* md5 create the hash of the password */
          $confpass = md5(sanitizeString($conn, $_POST['confirmpwd']));
        }

        if($pass === $confpass){
          $res = mysqli_query($conn, "INSERT INTO users (name, lastname, username, password) VALUES ('$name','$lastname','$user', '$pass')");
                                if (!$res)
                                    throw new Exception("<p style='color:red'>Insertion avoided! It's impossible to register your account!</p>");
                                if(!mysqli_commit($conn))
                                    throw new Exception("<p style='color:red'>Impossible to commit the operation!</p>");
          echo "<h1>User <strong><span class='darkgray'>$user</span></strong> successfully registered!</h1>";
          echo "<h2>Click <a href='./login.php'>here</a> to login!</h2>";
        }
        else {
          echo  "<h1> Registration Failed <br /> Password not confirmed </h1>";
        }
        ?>
        </div>
      </div>
      <?php require_once './DesignParts/footer.php'; ?>
    </div>
    <script type="text/javascript">

      setCurrent(document.getElementById("SignUp"));
      setSpan(document.getElementById("signup"), "Sign Up");
      document.forms[0].Username.focus();

    </script>
 </body>
</html>
