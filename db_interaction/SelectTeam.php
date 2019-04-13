<?php
  require_once('./library.php');
  $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
  // Check connection
  if (mysqli_connect_errno()) {
    echo("Can't connect to MySQL Server. Error code: " . mysqli_connect_error());
    return null;
  }
  // Form the SQL query (a SELECT query)
  //$sql="SELECT * FROM user_player_roster ORDER BY userID";
  $user_id = $_POST['uid'];
  $sql="SELECT * FROM user_player_roster WHERE userID = '$user_id'";
  $result = mysqli_query($con,$sql);

  // Print the data from the table row by row
  while($row = mysqli_fetch_array($result)) {
    echo "Your Team: ";
    echo $row['Player1'];
    echo ", " . $row['Player2'];
    echo ", " . $row['Player3'];
    echo ", " . $row['Player4'];
    echo ", " . $row['Player5'];
    echo "<br>";
  }
  mysqli_close($con);
?>
