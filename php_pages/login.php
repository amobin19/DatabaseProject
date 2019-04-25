<html>
<body>

<head>

  <link rel="stylesheet" href="../styles.css">

</head>


<?php 

//$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

 
include_once("./library.php"); // To connect to the database
$host=$SERVER;
$user=$USERNAME;
$password=$PASSWORD;
$db=$DATABASE;
 
//mysql_connect($host,$user,$password);
//mysql_select_db($db);

$con = new mysqli($host, $user, $password, $db);

session_start();
 
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $password_hash = sha1($password);
    // commenting out anna's stuff because it's not working now.
    

    $sql="select * from Users where email='".$uname."'AND password='".$password_hash."' limit 1";
    
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    // Note: for some reason, the $row variable contains 10 elements, where
    // each of the 5 attributed is repeated. I can't figure out why this is.
    
    if(count($row) > 0){
        $_SESSION["uid"] = $row["userID"] . "<br>";
        $_SESSION["verified"] = True;
        $_SESSION["username"] = $_POST["username"];
	$admin_bit = $row["admin"];
	$login_true = 1;
	$sql_create_user = "CREATE USER 'testuser'@'localhost' IDENTIFIED BY '" .$password_hash."';";
	$result = mysqli_query($con,$sql_create_user);
	if($admin_bit == 1){
		$sql_grant = "GRANT ALL ON am8wc_DBproj TO 'testuser'@'localhost'";
	}  	
        //exit();
    }
    else{
        header("Location: ../html_pages/loginFail.html");
        //exit();
    }
        
}
else {
  if (isset($_SESSION["verified"]) && $_SESSION["verified"] == True){
    // user has already logged in and is returning to this page
    echo "<div class='a'>";
    echo "<h1>Welcome, " . $_SESSION["username"] . "</h1>";
    echo "</div>";

  }
}
?>

<div class="topnav">
  <a class="active" href="login.php">Home</a>
  <a href="../db_interaction/landing.php">My Team</a>
  <a href="">Stats Lab</a>
<?php if($admin_bit == 1) : ?>
  <a href="../html_pages/add_entry.html">Add Players</a>
<?php endif; ?>
</div>
<?php if($login_true == 1){
	echo "<div class='a'>";
        echo "<h1>Welcome, " . $uname . "</h1>";
        echo "</div>";
}
?>
</body>
</html>
