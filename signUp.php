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
  <title> Sign Up | 3D Printers Center</title>
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
        if(!$loggedIn) echo " <h1><span class='darkgray'> Enter Your Data</span></h1>";
        ?>
        <blockquote>
          <?php
          if($loggedIn){
            echo " <h2>You are already <span class='darkgray'>logged in</span>.</h2> ";
            echo " <p>If you want to create a <span class='darkgray'>new account</span>, you must do the <a href='./logout.php'><span class='darkgray'>log out</span></a>.</p> ";
          }
          else{
             ?>
            <form id='RegistrationForm' action="./sendSignup.php" method='post'>
              <label for='Name'> Name: </label>
              <input id='Name' type='text' style='width: 200px;' placeholder='Insert your name here' maxlength='36' name='name'>

              <label for='Lastname'> Lastname: </label>
              <input id='Lastname' type='text' style='width: 200px;' placeholder='Insert your lastname here' maxlength='36' name='lastname'>

              <label for='Username'> Username: </label>
              <input id='Username' type='email' style='width: 200px;' placeholder='Insert your email here' maxlength='36' name='username'>

              <label for='Password'> Password: </label>
              <input id='Password' type='password' style='width: 200px;' placeholder='Insert your password here' maxlength='36' name='password'>

              <label for='ConfirmPassword'> Confirm Password: </label>
              <input id='ConfirmPassword' type='password' style='width: 200px;' placeholder='Insert your password again' maxlength='36' name='confirmpwd'>

              <br><br>
              <input type="button" class="button" onclick="checkRegistrationValues()" value="Sign Up">
            </form>
        <?php  } ?>
        </blockquote>
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
