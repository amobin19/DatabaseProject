<html>
<body>

<style>
.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;

    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 5px;
    padding-right: 5px;
}
</style>

<?php

  // This block is used to get the names of players on the user's team

  require_once('./library.php');
  $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
  // Check connection
  if (mysqli_connect_errno()) {
    echo("Can't connect to MySQL Server. Error code: " . mysqli_connect_error());
    return null;
  }

  $user_id = 5; // hardcoded for now

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    // formulate the query to update team
    $begin_sql = "UPDATE user_player_roster SET ";
    $iterator = 1;
    $num_loops = 1;
    foreach ($_POST as $key => $value){
      if ($value != ""){
        $player_slot = "Player" . $iterator;
        $player_name = $value;
        if ($num_loops != 1){
          $begin_sql = $begin_sql . ", ";
        }
        $begin_sql = $begin_sql . $player_slot . " = " . "'$value'";
        $num_loops = $num_loops + 1;
      }
      $iterator = $iterator + 1;
    }
    $end_sql = " WHERE userID = " . $user_id;
    $sql = $begin_sql . $end_sql;

    // send in the query to update the team
    if (!mysqli_query($con,$sql)){
      die('Error: ' . mysqli_error($con));
    }
    mysqli_close($con);
  }
?>


<p>Your team has been updatedi!</p><br>
<a href="landing.php" class="button">View Team</a>

</html>
</body>
