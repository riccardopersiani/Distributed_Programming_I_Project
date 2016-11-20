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
  <title> Login | 3D Printers Center </title>
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
          if( isset($userLogged) && ($userLogged) ) {
            echo "<h2>You are already <span class='darkgray'>logged in</span>.</h2>";
            echo "<p>If you want to create a <span class='darkgray'>new account</span>, you must do the <a href='./logout.php'>log out</a>.</p>";
          }
          if(count($_POST)==0) {
            echo "<h3>Please before visit this page go <a href='signUp.php'>here</a> and enter your data!</h3>";
        }
        $conn = mysqli_connect($server, $user, $pass, $database);
        if($conn == false){
          echo "Connection Error (".mysqli_connect_errno().")".mysqli_connect_error();
        }
        else {
          $user = $_POST['username'];
          $pass = $_POST['password'];
          $passMd5 = md5($pass);	      	/* md5 create the hash of the password */
        }

        $query = mysqli_query($conn, "SELECT username FROM users WHERE username = '$user' AND password = '$passMd5' ");
        $rows = mysqli_num_rows($query);
        if(!isset($query)){
            session_destroy();          /* Always better destroy session if unused */
            echo "<h1>Login failed!</h1>";
        }
        else{
          if ($rows == 1) {
            header("Location: home.php"); // Redirecting To Other Page
            $_SESSION['user'] = $user;
            $_SESSION['time'] = time();
            $userLogged = TRUE;
            $TimeoutExpired = TRUE;
          }
          else {?>
              <h1> Invalid Password or Username </h1>
              <p>If you want to try <span class='darkgray'>try again</span>, you must go the <a href='./login.php'>login</a>.</p>

          <?php }
        }
        ?>
        </div>

      </div>
      <?php require_once './DesignParts/footer.php'; ?>
    </div>

    <script type="text/javascript">

    setCurrent(document.getElementById("Login"));
    setSpan(document.getElementById("login"), "Login");
    document.forms[0].Username.focus();

    </script>
 </body>
</html>
