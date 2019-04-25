
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
                                              $mp = $rows['MP'];               
                                              $trb = $rows['TRB'];
                                              $ast = $rows['AST'];            
                                              $stl = $rows['STL'];                                                           
                                              $blk = $rows['BLK'];  
                                              $tov = $rows['TOV'];             
                                              $pf = $rows['PF'];               
                                              $pts = $rows['PTS'];                                                           
                                              $fg = $rows['FG'];              
                                              $twop = $rows['2P'];               
                                              $threep = $rows['3P'];                                         
                                              $ft = $rows['FT'];                                        
                                              $pts_pg = $rows['PTS_PG'];                                 
                                              $trb_pg = $rows['TRB_PG'];                                 
                                              $ast_pg = $rows['AST_PG'];                                 
                                              $stl_pg = $rows['STL_PG'];                                 
                                              $blk_pg = $rows['BLK_PG'];                                 
                                              $per = $rows['PER'];                                       
                                              $ws = $rows['WS'];                                         
                                              $bpm = $rows['BPM'];
					      $output = "Rank: " . $rk . " Class: " . $class . " " ;
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
