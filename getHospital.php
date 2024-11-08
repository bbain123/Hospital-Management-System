<?php
	$query = "SELECT * FROM hospital";
	$result = mysqli_query($connection,$query);
	if(!$result){
		die("database failed getting hospitals");
	}
	while($row = mysqli_fetch_assoc($result)){
		echo "<option value='" . $row["hoscode"] . "'>" . $row["hosname"] . " - " . $row["city"] . ",  " . $row["prov"] . "</option>";
	}
	mysqli_free_result($result);
?>
