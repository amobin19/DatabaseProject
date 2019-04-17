<?php 
 
$host="mysql.cs.virginia.edu";
$user="am8wc";
$password="Aymo19@cs";
$db="am8wc_DBproj";
 
mysql_connect($host,$user,$password);
mysql_select_db($db);
 
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $password_hash = sha1($password);
    
    $sql="select * from Users where name='".$uname."'AND password='".$password_hash."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>
