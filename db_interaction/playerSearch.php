
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
     $output1 = "Rank: " . $rk;
     $output2 = "Class: " . $class;
     $output3 = "Minutes Played: " . $mp;
     $output4 = "Total Rebounds: " . $trb;
     $output5 = "Assists: " . $ast;
     $output6 = "Steals: " . $stl;
     $output7 = "Blocks: " . $blk;
     $output8 = "Turnovers: " . $tov;
     $output9 = "Personal Fouls: " . $pf;
     $output10 = "Points: " . $pts;
     $output11 = "Field Goal: " . $fg;
     $output12 = "2 Points: " . $twop;
     $output13 = "3 Points: " . $threep;
     $output14 = "Free Throws: " . $ft;
     $output15 = "Points/Game: " . $pts_pg;
     $output16 = "Rebounds/Game: " . $trb_pg;
     $output17 = "Assists/Game: " . $ast_pg;
     $output18 = "Steals/Game: " . $stl_pg;
     $output19 = "Blocks/Game: " . $blk_pg;
     $output20 = "Player Efficiency Rating: " . $per;
     $output21 = "Win Shares: " . $ws;
     $output22 = "Box Per Minus: " . $bpm;

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

<?php 
echo $output1;
echo $output2; 
echo $output3; 
echo $output4; 
echo $output5; 
echo $output6; 
echo $output7; 
echo $output8; 
echo $output9; 
echo $output10;
echo $output11;
echo $output12; 
echo $output13; 
echo $output14; 
echo $output15; 
echo $output16; 
echo $output17; 
echo $output18; 
echo $output19; 
echo $output20;
echo $output21; 
echo $output22;   

?>

</body>
</html>
