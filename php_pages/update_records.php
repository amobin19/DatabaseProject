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
  <a href="../html_pages/update_record.html">Update Records</a>
</div>
<?php
        session_start();
        if($_SESSION["admin"] ==1){
        include_once("./library.php"); // To connect to the database
        $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
        // Check connection
        if (mysqli_connect_errno()){
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        // Form the SQL query (an UPDATE query)
        $sql="UPDATE ACC SET W='".$_POST['W']."', L='".$_POST['L']."' WHERE School='".$_POST['School']."'";
        if (!mysqli_query($con,$sql)){
                die('Error: ' . mysqli_error($con));
                }
	$school = $_POST['School'];
        echo "Record Updated for ".$_POST['School']."!"; // Output to user
        mysqli_close($con);
        }
        else {
        header('Location: /login.php');
}
?>
</body>
</html>
