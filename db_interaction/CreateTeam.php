<?php
  include_once("./library.php"); // To connect to the database
  $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
  // Check connection
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " .
    mysqli_connect_error();
  }
  $values = array("NULL", "NULL", "NULL", "NULL", "NULL", "NULL");
  $i = 0;
  foreach ($_POST as $key => $value){
    if ($value != NULL){
      //$values[$i] = "'" . $value . "'";
      $values[$i] = $value;
    }
    $i = $i + 1;
  }
  echo $values[5];
  // Form the SQL query (an INSERT query)
  $sql="INSERT INTO user_player_roster (userID, Player1, Player2, Player3, Player4, Player5)
  VALUES
  ('$values[0]', '$values[1]', '$values[2]', '$values[3]', '$values[4]', '$values[5]')";

  if (!mysqli_query($con,$sql)){
    die('Error: ' . mysqli_error($con));
  }
  echo "Your team has been created!"; // Output to user
  mysqli_close($con);
?>
