<html>
<body>

<?php

  session_start();

  // export to csv
function array2csv(array &$array){
  if (count($array) == 0) {
    return null;
  }
  ob_start();
  $df = fopen("php://output", 'w');
  fputcsv($df, array_keys(reset($array)));
  foreach ($array as $row) {
    fputcsv($df, $row);
  }
  fclose($df);
  return ob_get_clean();
}

function download_send_headers($filename) {
  // disable caching
  $now = gmdate("D, d M Y H:i:s");
  header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
  header("Cache-Control: max-age=0, no-cache, must-revalidate, proxy-revalidate");
  header("Last-Modified: {$now} GMT");
  // force download  
  header("Content-Type: application/force-download");
  header("Content-Type: application/octet-stream");
  header("Content-Type: application/download");

  // disposition / encoding on response body
  header("Content-Disposition: attachment;filename={$filename}");
  header("Content-Transfer-Encoding: binary");

}


  include_once("./library.php"); // To connect to the database
  $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
  // Check connection
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " .
    mysqli_connect_error();
  }



  $user_id = $_SESSION["uid"];
  $sql = "SELECT * FROM user_player_roster WHERE userID = '$user_id'";
  $result = mysqli_query($con,$sql);

  // function to see of a variable is empty
  function determineEmpty($var) {
    if ($var == ""){
      return "(empty slot)";
    }
    return $var;
  }



  // create variables to store each player
  $row = mysqli_fetch_array($result);
  $players[] = determineEmpty($row['Player1']);
  $players[] = determineEmpty($row['Player2']);
  $players[] = determineEmpty($row['Player3']);
  $players[] = determineEmpty($row['Player4']);
  $players[] = determineEmpty($row['Player5']);
  mysqli_close($con);



if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  print_r($players);
  download_send_headers("data_export_" . date("Y-m-d") . ".csv");
  echo array2csv($players);
  //die();
  /*
  echo $players[0];
  echo $players[1];
  echo $players[2];
  echo $players[3];
  echo $players[4];
  echo $players[5];
  */
}


?>

</body>
</html>
