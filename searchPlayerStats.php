<?php
	require "dbutil2.php";
	$db = DbUtil::loginConnection();
	
	$stmt = $db->stmt_init();
	
	//replace ? with $searchString
	if($stmt->prepare("select * from PlayerStats ORDER BY Player") or die(mysqli_error($db))) {
		$searchString = '%' . $_GET['searchIP'] . '%';
		$stmt->bind_param(s, $searchString);
		$stmt->execute();
		$stmt->bind_result($Rk, $Player, $Class, $Pos, $School, $G, $MP, $TRB, $AST, $STL, $BLK, $TOV, $PF, $PTS, $FG, $_2P, $_3P, $FT, $PTS_PG, $TRB_PG, $AST_PG, $STL_PG, $BLK_PG, $PER,$WS,$BPM);
		echo "<table border=1><th>Rk</th><th>Player</th><th>Class</th><th>Pos</th><th>School</th><th>G</th><th>MP</th><th>TRB</th><th>AST</th><th>STL</th><th>BLK</th><th>TOV</th><th>PF</th><th>PTS</th><th>FG</th><th>2P</th><th>3P</th><th>FT</th><th>PTS_PG</th><th>TRB_PG</th><th>AST_PG</th><th>STL_PG</th><th>BLK_PG</th><th>PER</th><th>WS</th><th>BPM</th>\n";
		while($stmt->fetch()) {
			echo "<tr><td>$Rk</td><td>$Player</td><td>$Class</td><td>$Pos</td><td>$School</td><td>$G</td><td>$MP</td><td>$TRB</td><td>$AST</td><td>$STL</td><td>$BLK</td><td>$TOV</td><td>$PF</td><td>$PTS</td><td>$FG</td><td>$_2P</td><td>$_3P</td><td>$FT</td><td>$PTS_PG</td><td>$TRB_PG</td><td>$AST_PG</td><td>$STL_PG</td><td>$BLK_PG</td><td>$PER</td><td>$WS</td><td>$BPM</td></tr>";
		}
		echo "</table>";
	
		$stmt->close();
	}
	
	$db->close();


?>

