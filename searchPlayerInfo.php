<?php
	require "dbutil2.php";
	$db = DbUtil::loginConnection();
	
	$stmt = $db->stmt_init();
	
	//replace ? with $searchString
	if($stmt->prepare("select * from PlayerInfo where Player like ?") or die(mysqli_error($db))) {
		$searchString = '%' . $_GET['searchIP'] . '%';
		$stmt->bind_param(s, $searchString);
		$stmt->execute();
		$stmt->bind_result($Player, $No, $Class, $Pos, $Ht, $Wt, $Hometown, $HS, $HS_Rk, $Summary);
		echo "<table border=1><th>Player</th><th>No</th><th>Class</th><th>Pos</th><th>Ht</th><th>Wt</th><th>Hometown</th><th>HS</th><th>HS_Rk</th><th>Summary</th>\n";
		while($stmt->fetch()) {
			echo "<tr><td>$Player</td><td>$No</td><td>$Class</td><td>$Pos</td><td>$Ht</td><td>$Wt</td><td>$Hometown</td><td>$HS</td><td>$HS_Rk</td><td>$Summary</td></tr>";
		}
		echo "</table>";
	
		$stmt->close();
	}
	
	$db->close();


?>

