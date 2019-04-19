<html>
<body>

<style>
a.button {
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

//$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

 
$host="mysql.cs.virginia.edu";
$user="am8wc";
$password="Aymo19@cs";
$db="am8wc_DBproj";
 
//mysql_connect($host,$user,$password);
//mysql_select_db($db);

$con = new mysqli($host, $user, $password, $db);

session_start();
 
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from Users where name='".$uname."'AND password='".$password."'";
    
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    // Note: for some reason, the $row variable contains 10 elements, where
    // each of the 5 attributed is repeated. I can't figure out why this is.
    
    if(count($row) > 0){
        $_SESSION["uid"] = $row["userID"] . "<br>";
        echo "<p>Welcome, " . $uname . "<p>";
        echo '<a href="../db_interaction/landing.php" class="button"> View Fantasy Team </a>';
        //exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        //exit();
    }
        
}
?>

</body>
</html>
