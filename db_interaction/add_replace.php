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

<p>Enter, in each of the fields, the name of the new player(s) you wish to add.</p>
<p>The current player for each slot is shown. Not all of the fields need to be filled.</p>
<br><br>
<form action="add_replace_handler.php" method="post">
  1. <?php echo $player1; ?><br><input type="text" name="p1"><br>
  2. <?php echo $player2; ?><br><input type="text" name="p2"><br>
  3. <?php echo $player3; ?><br><input type="text" name="p3"><br>
  4. <?php echo $player4; ?><br><input type="text" name="p4"><br>
  5. <?php echo $player5; ?><br><input type="text" name="p5"><br>
  <input type="Submit">
</form>

</html>
</body>
