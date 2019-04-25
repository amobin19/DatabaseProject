<?php
    include_once("./library.php"); // To connect to the database
    $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    if ($_POST["password"] === $_POST["password2"]) {
        // Form the SQL query (an INSERT query)
     $password_hash = sha1($_POST["password"]);
     $sql = "INSERT INTO Users (userID, name, password, email, birthday, admin)
     VALUES
     ('$_POST[idnum]','$_POST[name]','$password_hash','$_POST[email]','$_POST[birthday]',0);";
     $sql .= "INSERT INTO user_player_roster (userID, Player1, Player2, Player3, Player4, Player5) VALUES('$_POST[idnum]','NULL','NULL','NULL','NULL','NULL')";

     if (!(mysqli_multi_query($con,$sql)))
     {
        die('Error: ' . mysqli_error($con));
    }
    header("Location: ../html_pages/successReg.html");
    mysqli_close($con);
}
else{
    header('Location: ../html_pages/confirmFail.html');
    exit;
}
?>