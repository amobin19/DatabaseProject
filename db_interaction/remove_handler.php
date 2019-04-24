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

  $user_id = $_SESSION["uid"]; // hardcoded for now

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // formulate the query to update team
    $begin_sql = "UPDATE user_player_roster SET ";
    $iterator = 1;
    $num_loops = 1;
    foreach ($_POST as $key => $value){
      if ($num_loops != 1){
        $begin_sql = $begin_sql . ", ";
      }
      $begin_sql = $begin_sql . $key . " = " . "''";
      $num_loops = $num_loops + 1;
    }
    $end_sql = " WHERE userID = " . (int)$user_id;
    $sql = $begin_sql . $end_sql;

    // send in the query to update the team
    if ($num_loops > 1){ // only want to send the query if the team has been updated.
      if (!mysqli_query($con,$sql)){
        die('Error: ' . mysqli_error($con));
      }
    }
    mysqli_close($con);
  }
?>


<p>Your team has been updatedi!</p><br>
<a href="landing.php" class="button">View Team</a>

</html>
</body>
