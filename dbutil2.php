<?php
class DbUtil{
	public static $loginUser = "oz5ed"; 
	public static $loginPass = "password";
	public static $host = "mysql.cs.virginia.edu"; // DB Host
	public static $schema = "oz5ed_...NCAA_Conferences"; // DB Schema
	
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

