<?php /** Created by Riccardo Persiani **/ ?>

<div id="sidebar">
  <?php
  if( isset($goodbye) && ($goodbye) ) { ?>
    <blockquote style='padding: 0 0 0 1px;'><h6>Goodbye:</h6>
    <p style='padding: 0 0 0 5px;'><?php echo $username ?></p></blockquote>
    <?php
    $userLogged   = FALSE;
    $goodbye    = FALSE;
  }
  elseif( isset($userLogged) && ($userLogged) ){?>
      <blockquote style='padding: 0 0 0 1px;'><h6>Welcome:</h6>
      <p style='padding: 0 0 0 5px;'><?php echo $username ?></p></blockquote>
  <?php } ?>
  <h2> Options </h2>
  <ul class="sidemenu">
    <li><a id="home" href="./home.php"> Home </a></li>
    <li><a id="printers" href="./printers.php"> Printers </a></li>
    <?php
    if( isset($userLogged) && ($userLogged) ) {?>
      <li><a id='reservation' href='./reservation.php'> Reservation </a></li>
      <li><a id='logout' href='./logout.php'> Logout </a></li>
      <?php  }
      else {?>
        <li><a id='signup' href='./signUp.php'> Sign Up </a></li>
        <li><a id='login' href='./login.php'> Login </a></li>
        <?php    }  ?>
        <li><a id="about" href="./about.php"> About </a></li>
      </ul>
    </div>
