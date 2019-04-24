$SERVER = 'mysql.cs.virginia.edu';
    $USERNAME = 'am8wc';
    $PASSWORD = 'Aymo19@cs';
    $DATABASE = 'am8wc_DBproj';


<?php
class DbUtil{
	public static $loginUser = "am8wc"; 
	public static $loginPass = "Aymo19@cs";
	public static $host = "mysql.cs.virginia.edu"; // DB Host
	public static $schema = "am8wc_DBproj"; // DB Schema
	
	public static function loginConnection(){
		$db = new mysqli(DbUtil::$host, DbUtil::$loginUser, DbUtil::$loginPass, DbUtil::$schema);
	
		if($db->connect_errno){
			echo("Could not connect to db");
			$db->close();
			exit();
		}
		
		return $db;
	}
	
}
?>

