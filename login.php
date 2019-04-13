<?php

include("config.php");
session_start();

if(isset($_POST['username'])){

    $uname=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from Users where name='".$uname."'AND password='".$password."' limit 1";

    $result=mysqli_query($db, $sql);

    if(mysqli_num_rows($result)==1){

         $_SESSION['login_user'] = $uname;
         header("location: index.php");




        echo " You Have Successfully Logged in";
        // exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        // exit();
    }

}
?>
