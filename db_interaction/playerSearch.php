
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

$output = NULL;

include_once("./library.php"); // To connect to the database
$host=$SERVER;
$user=$USERNAME;
$password=$PASSWORD;
$db=$DATABASE;

	
if(isset($_POST['submit'])){
	$mysqli = new mysqli($host, $user, $password, $db);
	$search = $mysqli->real_escape_string($_POST['search']);
	$resultSet = $mysqli->query("SELECT * FROM PlayerStats WHERE player = '$search'");
	if($resultSet->num_rows > 0){
				while($rows = $resultSet->fetch_assoc()){
					      $rk = $rows['Rk'];
					      $class = $rows['Class'];
					      $output = "Rank " . $rk . "" ;
					      	    	   }
	 }	
	  else{
		echo "No Results";
		}

}
?>

</br>
</br>
<form method="POST">
<input type="TEXT" name="search"/>
<input type="SUBMIT" name="submit" value="Search"/>
</form>

<?php echo $output; ?>

</body>
</html>
