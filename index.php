<?php
session_start();
if(!isset($_SESSION['login_user'])){
      header("location:login.html");
      die();
   }

   ?>


<html>
<head>
  <link href="./style.css" rel="stylesheet">
</head>
<body>

<div class="topnav">
  <a class="active">FanatasyHoos</a>
  <a href="#contact">Contact</a>
  <a href="./logout.php">Logout</a>
</div>

<div style="padding-left:16px">
  <h2>My Team</h2>
  
  <?php

echo $_SESSION['login_user'];

     ?>


</div>

</body>
</html>
