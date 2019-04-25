<?php
	require "dbutil2.php";
	$db = DbUtil::loginConnection();
	
	$stmt = $db->stmt_init();
	
	//replace ? with $searchString
	if($stmt->prepare("select * from headCoach where Coach like ?") or die(mysqli_error($db))) {
		$searchString = '%' . $_GET['searchIP'] . '%';
		$stmt->bind_param(s, $searchString);
		$stmt->execute();
		$stmt->bind_result($Coach, $School, $Conference, $Sea_W, $Sea_L, $Sea_WL, $AP_Pre, $AP_Post, $NCAA_Tournament, $Since, $Sk_W, $Sk_L, $Sk_WL, $Sk_NCAA, $Sk_S16, $Sk_FF, $Sk_Chmp, $W, $L, $WL, $NCAA, $S16, $FF, $Chmp);
		echo "<table border=1><th>Coach</th><th>School</th><th>Conference</th><th>Sea_W</th><th>Sea_L</th><th>Sea_WL</th><th>AP_Pre</th><th>AP_Post</th><th>NCAA_Tournament</th><th>Since</th><th>Sk_W</th><th>Sk_L</th><th>Sk_WL</th><th>Sk_NCAA</th><th>Sk_S16</th><th>Sk_FF</th><th>Sk_Chmp</th><th>W</th><th>L</th><th>WL</th><th>NCAA</th><th>S16</th><th>FF</th><th>Chmp</th>\n";
		while($stmt->fetch()) {
			echo "<tr><td>$Coach</td><td>$School</td><td>$Conference</td><td>$Sea_W</td><td>$Sea_L</td><td>$Sea_WL</td><td>$AP_Pre</td><td>$AP_Post</td><td>$NCAA_Tournament</td><td>$Since</td><td>$Sk_W</td><td>$Sk_L</td><td>$Sk_WL</td><td>$Sk_NCAA</td><td>$Sk_S16</td><td>$Sk_FF</td><td>$Sk_Chmp</td><td>$W</td><td>$L</td><td>$WL</td><td>$NCAA</td><td>$S16</td><td>$FF</td><td>$Chmp</td></tr>";
		}
		echo "</table>";
	
		$stmt->close();
	}
	
	$db->close();


?>

