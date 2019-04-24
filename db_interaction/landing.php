<html>
<body>

<head>

  <link rel="stylesheet" href="../styles.css">

</head>

<div class="topnav">
  <a class="active" href="/~efw5xb/DatabaseProject/php_pages/login.php">Home</a>
  <a href="../db_interaction/landing.php">My Team</a>
  <a href="">Stats Lab</a>
</div>

<?php
  session_start();

  include_once("./library.php"); // To connect to the database
  $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
  // Check connection
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " .
    mysqli_connect_error();
  }

  $user_id = $_SESSION["uid"];
  $sql = "SELECT * FROM user_player_roster WHERE userID = '$user_id'";
  $result = mysqli_query($con,$sql);

  // function to see of a variable is empty
  function determineEmpty($var) {
    if ($var == ""){
      return "(empty slot)";
    }
    return $var;
  }

  // create variables to store each player
  $row = mysqli_fetch_array($result);
  $player1 = determineEmpty($row['Player1']);
  $player2 = determineEmpty($row['Player2']);
  $player3 = determineEmpty($row['Player3']);
  $player4 = determineEmpty($row['Player4']);
  $player5 = determineEmpty($row['Player5']);
  mysqli_close($con);
?>

<h2>Your Team:</h2><br><br>
<p>1. <?php echo $player1; ?></p><br><br>
<p>2. <?php echo $player2; ?></p><br><br>
<p>3. <?php echo $player3; ?></p><br><br>
<p>4. <?php echo $player4; ?></p><br><br>
<p>5. <?php echo $player5; ?></p><br><br>

<a href="add_replace.php" class="button"> Add/Replace Players </a>
<a href="remove.php" class="button"> Remove Players </a>

</body>
</html>
