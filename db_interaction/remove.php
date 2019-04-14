<html>
<body>
<?php

  include_once("./library.php"); // To connect to the database
  $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
  // Check connection
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " .
    mysqli_connect_error();
  }

  $user_id = 5;
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

<p>Check the boxes corresponding to the players you'd like to remove from your team.</p>
<p>When a player is removed, the slot they previously occupied becomes empty.</p>
<br><br>
<form action="remove_handler.php" method="post">
  1. <input type="checkbox" name="Player1"><?php echo $player1; ?><br>
  2. <input type="checkbox" name="Player2"><?php echo $player2; ?><br>
  3. <input type="checkbox" name="Player3"><?php echo $player3; ?><br>
  4. <input type="checkbox" name="Player4"><?php echo $player4; ?><br>
  5. <input type="checkbox" name="Player5"><?php echo $player5; ?><br>
  <input type="Submit">
</form>

</html>
</body>
