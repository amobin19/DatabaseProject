<?php
	require "dbutil2.php";
	$db = DbUtil::loginConnection();
	
	$stmt = $db->stmt_init();
	
	//replace ? with $searchString
	if($stmt->prepare("select * from tournament_mvp ORDER BY Season desc") or die(mysqli_error($db))) {
		$searchString = '%' . $_GET['searchIP'] . '%';
		$stmt->bind_param(s, $searchString);
		$stmt->execute();
		$stmt->bind_result($Season, $Player, $School, $G, $GS, $PTS, $TRB, $AST, $STL, $BLK, $FG);
		echo "<table border=1><th>Season</th><th>Player</th><th>School</th><th>G</th><th>GS</th><th>PTS</th><th>TRB</th><th>AST</th><th>STL</th><th>BLK</th><th>FG</th>\n";
		while($stmt->fetch()) {
			echo "<tr><td>$Season</td><td>$Player</td><td>$School</td><td>$G</td><td>$GS</td><td>$PTS</td><td>$TRB</td><td>$AST</td><td>$STL</td><td>$BLK</td><td>$FG</td></tr>";
		}
		echo "</table>";
	
		$stmt->close();
	}
	
	$db->close();


?>

