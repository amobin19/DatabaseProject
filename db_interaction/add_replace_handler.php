<html>
<body>

<head>

  <link rel="stylesheet" href="../styles.css">

</head>

<div class="topnav">
  <a class="active" href="login.php">Home</a>
  <a href="../db_interaction/landing.php">My Team</a>
  <a href="">Stats Lab</a>
</div>

<?php
  session_start();
  // This block is used to get the names of players on the user's team

  require_once('./library.php');
  $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
  // Check connection
  if (mysqli_connect_errno()) {
    echo("Can't connect to MySQL Server. Error code: " . mysqli_connect_error());
    return null;
  }

  $user_id = $_SESSION["uid"];

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    // formulate the query to update team
    $begin_sql = "UPDATE user_player_roster SET ";
    $iterator = 1;
    $num_loops = 1;

    foreach ($_POST as $key => $value){
      if ($value != ""){
        $player_slot = "Player" . $iterator;
        $player_name = $value;
        $players[] = strtolower($value); // add each name to an array of players
        if ($num_loops != 1){
          $begin_sql = $begin_sql . ", ";
        }
        $begin_sql = $begin_sql . $player_slot . " = " . "'$value'";
        $num_loops = $num_loops + 1;
      }
      $iterator = $iterator + 1;
    }
    $end_sql = " WHERE userID = " . (int)$user_id;
    $sql = $begin_sql . $end_sql;

    // function to determine if their entry is a real player
    function playersExist($playerArray, $connection){
      $query = "SELECT Player FROM PlayerInfo WHERE 1";
      //$query = "CALL testing_again();";
      $result = mysqli_query($connection,$query);
      while ($row = $result->fetch_array()){
        $valid_players[] = strtolower($row["Player"]);
      }
      $valid = true;

      foreach ($playerArray as $player){
          if (!in_array($player, $valid_players)){
            $valid = false;
          }
        }

      //echo $valid;
      return $valid;
    }

    $v = playersExist($players, $con);

    // send in the query to update the team
    if ($num_loops > 1 and $v){ // We only want to send a query if they've updated something
      $response = "Your team has been updated!";
      if (!mysqli_query($con,$sql)){
        die('Error: ' . mysqli_error($con));
      }
    }
    else {
      $response = "Invalid Submission Error: Either you did not fill in any of the fields, or one or more entries were not valid NCAA players.";
    }

    mysqli_close($con);
  }
?>


<p><?php echo $response; ?></p><br>
<a href="landing.php" class="button">View Team</a>

</html>
</body>
