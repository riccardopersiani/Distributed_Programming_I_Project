<?php /** Created by Riccardo Persiani **/ ?>

<div id="header2">
  <h5 id="slogan">Inside 3D Printing</h5>
</div>

<div id="header">
  <h1 id="logo">
    <span class="red">3D</span>
    <span class="white">PrintWorld.com</span>
  </h1>
  <h2 id="slogan">The Elite of 3D Printing Technologies</h2>
  <ul id="MenuAlto">
    <li id="Home"><a href="./home.php"><span>Home</span></a></li>
    <li id="Printers"><a href="./printers.php"><span>Printers</span></a></li>
    <?php
    if( isset($userLogged) && ($userLogged) ) { ?>
      <li id='Reservation'><a href='./reservation.php'><span>Reservation</span></a></li>
      <li id='Logout'><a href='./logout.php'><span>Logout</span></a></li>
      <?php }
    else { ?>
      <li id='SignUp'><a href='./signUp.php'><span>Sign Up</span></a></li>
      <li id='Login'><a href='./login.php'><span>Login</span></a></li>
      <?php } ?>
    <li id='About'><a href='./about.php'><span>About</span></a></li>
      </ul>
    </div>
