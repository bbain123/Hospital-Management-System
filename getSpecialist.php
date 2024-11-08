<?php
	$whichSpec = $_POST['pickSpec']; //get speciality
	$query = "SELECT * FROM doctor WHERE speciality = \"" . $whichSpec . "\"";
	//echo "<br>" . $query . "<br>";
	$result = mysqli_query($connection,$query);
	
	if(!result){
		die("databases query on doctors speciality failed. ");
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
