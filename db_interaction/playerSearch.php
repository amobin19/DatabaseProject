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

      $table = $_POST["category"];

      $mysqli = new mysqli($host, $user, $password, $db);
      // grab the column names
      $query = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '$table'";
      $result = mysqli_query($mysqli, $query);

      while ($row = $result->fetch_array()){
        $stat_labels[] = $row["COLUMN_NAME"];
      }

      $nada_badassit = array("ACC"=>"School", "headCoach"=>"Coach", "PlayerInfo"=>"Player", "PlayerStats"=>"Player", "venue"=>"Name");

      // deal with the user's search field input
      $search = $mysqli->real_escape_string($_POST['search']);
      $resultSet = $mysqli->query("SELECT * FROM $table WHERE $nada_badassit[$table] = '$search'");
      if($resultSet->num_rows > 0){
        $iterator = 0;
        $row = $resultSet->fetch_assoc();
        foreach ($row as $val){
          echo "<p>" . $stat_labels[$iterator] . ": " . $val . "</p>";
          $iterator = $iterator + 1;
        }
      }
      else {
        echo "<br>";
        echo "No results.";
      }
    }	
    else {
      echo "<br>";
      echo "Choose a search category and enter text in the fields below.";
    } 
  ?>

</br>
</br>
<div class="SearchBar">
<form method="POST">
  <label for="categories">Search Category:</label>
  <select id="categories" name="category">
    <option value="ACC">ACC Schools</option>
    <option value="headCoach">Head Coaches</option>
    <option value="PlayerInfo">Players (information)</option>
    <option value="PlayerStats">Players (statistics)</option>
    <option value="venue">Venues</option>
  </select>
  </br>
  </br>
  <input type="TEXT" name="search"/>
  <input type="SUBMIT" name="submit" value="Search"/>
</form>
</div>

</body>
</html>
