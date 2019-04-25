
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
     $name = $rows['Player']; 
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
     $output0 = "Player: " . $name;
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
<div class="SearchBar">
<form method="POST">
  <input type="TEXT" name="search"/>
  <input type="SUBMIT" name="submit" value="Search"/>
</form>
</div>

<?php
echo $output0;
echo "<br>"; 
echo $output1;
echo "<br>"; 
echo $output2;
echo "<br>"; 
echo $output3;
echo "<br>"; 
echo $output4;
echo "<br>"; 
echo $output5;
echo "<br>"; 
echo $output6;
echo "<br>"; 
echo $output7;
echo "<br>"; 
echo $output8;
echo "<br>"; 
echo $output9;
echo "<br>"; 
echo $output10;
echo "<br>";
echo $output11;
echo "<br>";
echo $output12;
echo "<br>"; 
echo $output13;
echo "<br>"; 
echo $output14;
echo "<br>"; 
echo $output15;
echo "<br>"; 
echo $output16;
echo "<br>"; 
echo $output17;
echo "<br>"; 
echo $output18;
echo "<br>"; 
echo $output19;
echo "<br>"; 
echo $output20;
echo "<br>";
echo $output21;
echo "<br>"; 
echo $output22;
echo "<br>";   
?>

</body>
</html>