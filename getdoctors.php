<?php
	$whichOrder = $_POST["pickOrder"]; //get order by lastname or birthdate
	$whichDirection = $_POST["pickDirection"]; //get direction (asc or desc)
	$query = "SELECT * FROM doctor ORDER BY " . $whichOrder . " " . $whichDirection;
	//echo "<br>" . $query . "<br>"; //debug line
	
	$result = mysqli_query($connection, $query);
	if (!$result) {
		die("databases query on doctors failed. ");
	}
	
	while ($row = mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>" . htmlspecialchars($row["firstname"]) . " " . htmlspecialchars($row["lastname"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["hosworksat"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["speciality"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["birthdate"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["licensenum"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["licensedate"]) . "</td>";
		echo "</tr>";
	}
    
	
	mysqli_free_result($result);
?>
