<?php
	require "dbutil.php";
	$db = DbUtil::loginConnection();
	
	$stmt = $db->stmt_init();
	
	//replace ? with $searchString
	if($stmt->prepare("select * from ACC where School like ?") or die(mysqli_error($db))) {
		$searchString = '%' . $_GET['searchIP'] . '%';
		$stmt->bind_param(s, $searchString);
		$stmt->execute();
		$stmt->bind_result($Rk, $School, $Con_W, $Con_L,$Con_WL,$W,$L,$WL,$Own,$Opp,$SRS,$SOS,$Notes);
		echo "<table border=1><th>Rk</th><th>School</th><th>Con_W</th><th>Con_L</th><th>Con_WL</th><th>W</th><th>L</th><th>WL</th><th>Own</th><th>Opp</th><th>SRS</th><th>SOS</th><th>Notes</th>\n";
		while($stmt->fetch()) {
			echo "<tr><td>$Rk</td><td>$School</td><td>$Con_W</td><td>$Con_L</td><td>$Con_WL</td><td>$W</td><td>$L</td><td>$WL</td><td>$Own</td><td>$Opp</td><td>$SRS</td><td>$SOS</td><td>$Notes</td></tr>";
		}
		echo "</table>";
	
		$stmt->close();
	}
	
	


?>

