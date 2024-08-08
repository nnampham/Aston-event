<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title> Aston Event Search</title>
	</head>

<?php
include "db_connect.php";
$keyword = $_GET["keyword"];

echo "<h2>Search results of $keyword: </h2>";

$keyword= "%".$keyword."%";

$stmt = $mysqli->prepare("SELECT events.id,name, description, user_id, username FROM events JOIN user ON user.id = events.user_id WHERE name LIKE ? ");
$stmt->bind_param("s", $keyword);

$stmt->execute();
$stmt->store_result();

$stmt->bind_result($events_id,$name,$description, $user_id, $username);

//$sql = "SELECT events.id,name, description, user_id, username FROM events JOIN user ON user.id = events.user_id WHERE name LIKE '%".$keyword."%' ";
//$result = $mysqli->query($sql);
if ($stmt->num_rows > 0) {
  // output data of each row
  while($stmt->fetch()) {
    echo "id: " . $events_id. " - Event name: " .$name."--Created by: ".$username. " Description: " . $description. "<br>";
  }
} else {
  echo "0 results";
}
?>

</html>