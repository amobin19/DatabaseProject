<html>
  <body>
<head>

  <link rel="stylesheet" href="../styles.css">

</head>

<div class="topnav">
  <a class="active" href="../php_pages/login.php">Home</a>
  <a href="../db_interaction/landing.php">My Team</a>
  <a href="">Stats Lab</a>
  <a href="../html_pages/add_entry.html">Add Players</a>

</div>

    <h2>Add a Player!</h2>
    <BR>
<?php
	session_start();
	if($_SESSION["admin"] ==1){
	include_once("./library.php"); // To connect to the database
	$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
	// Check connection
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	// Form the SQL query (an INSERT query)
	$sql="INSERT INTO PlayerInfo (Player, No, Class, Pos, Ht, Wt, Hometown, HS, HS_Rk, Summary)VALUES('$_POST[Player]','$_POST[No]','$_POST[Class]','$_POST[Pos]','$_POST[Ht]', '$_POST[Wt]', '$_POST[Hometown]', '$_POST[HS]', NULL, NULL)";
	if (!mysqli_query($con,$sql)){
		die('Error: ' . mysqli_error($con));
		}
	echo "1 record added"; // Output to user
	mysqli_close($con);
	}
        else {
	header('Location: /login.php');
}
?>
</body>
</html>
