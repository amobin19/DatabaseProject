
<?php
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
?>

