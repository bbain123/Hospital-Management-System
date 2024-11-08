<?php
	$query = "SELECT * FROM doctor";
	$result = mysqli_query($connection,$query);
	if(!$result){
		die("database query on doctor names failed");
	}
	while($row = mysqli_fetch_assoc($result)){
		echo "<option value =\"" . $row["licensenum"] . "\">" . $row["firstname"] . " " . $row["lastname"] . "</option>";
	}
	mysqli_free_result($result);
?>	
