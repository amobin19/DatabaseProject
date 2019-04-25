<?php
	require "dbutil2.php";
	$db = DbUtil::loginConnection();
	
	$stmt = $db->stmt_init();
	
	//replace ? with $searchString
	if($stmt->prepare("select * from Conference_Champ where Conference like ?") or die(mysqli_error($db))) {
		$searchString = '%' . $_GET['searchIP'] . '%';
		$stmt->bind_param(s, $searchString);
		$stmt->execute();
		$stmt->bind_result($Conference, $Dates, $Champ, $Runnerup);
		echo "<table border=1><th>Conference</th><th>Dates</th><th>Champ</th><th>Runnerup</th>\n";
		while($stmt->fetch()) {
			echo "<tr><td>$Conference</td><td>$Dates</td><td>$Champ</td><td>$Runnerup</td></tr>";
		}
		echo "</table>";
	
		$stmt->close();
	}
	
	$db->close();


?>

