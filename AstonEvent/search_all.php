<?php 
include "db_connect.php";
?>
<!DOCTYPE html>
<html>
	<table width="70%">
		<tr>
			<th>ID</th>
			<th>EVENT NAME</th>
			<th>USER ID</th>
			<th>DESCRIPTION</th>
			<th>TIME</th>
			<th>VENUE</th>
			<th>ORGANISER</th>
		</tr>
<?php
$sql = "SELECT id,name,user_id, description, TIME, VENUE, ORGANISER FROM events";
$result = $mysqli->query($sql);

if ($result-> num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {  
  // echo "id: " . $row["id"]. " - Event name: " . $row["name"]. " Created by: ".$row['user_id']." Description: " . $row["description"]. "<br>";
	
	echo "<tr> ";
								echo "<td>". $row["id"]. "</td>";	
								echo "<td>". $row["name"]."</td>"	;
								echo "<td>".$row['user_id']."</td>";
								echo "<td>".$row["description"]."</td>";	
								echo "<td>".$row["TIME"]."</td>"	;
								echo "<td>".$row["VENUE"]."</td>"	;
								echo "<td>".$row["ORGANISER"]."</td>"	;
								echo " <td style='text-align: center;'> <a href='event_details.php? id=".$row["id"]."'><input id='btnDetails' type='button' value='Details' '></a>  </td>";

  }
} else {
  echo "0 results";
}
?>

	<?php
$mysqli->close();
?>
	</body>
</html>
