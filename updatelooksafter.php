<?php
	include "connecttodb.php";
	$ohip = $_POST["selectpatient"];
	$licensenum = $_POST["selectdoctor"];
	$query = "SELECT * FROM looksafter WHERE ohipnum =\"" . $ohip . "\" AND licensenum = \"" . $licensenum . "\"";
	$result = mysqli_query($connection,$query);
	if(!result){
		die("erorr while trying to find that relation");
	}
	//make sure the relationship doesnt exist
	if(mysqli_num_rows($result) == 0){
		$query = "INSERT INTO looksafter VALUES (\"" . $licensenum . "\", \"" . $ohip . "\")";
		if(!mysqli_query($connection,$query)){
			die("failed to insert that relationship");
		} 
		else{
			echo "<script>alert(\"Successfully added relationship\");window.location.replace(\"http://localhost/manageAssignments.php\");</script>";
		}
	}
	else{
		echo "<script>alert(\"Could not add assignment: relationship exists\");window.location.replace(\"http://localhost/manageAssignments.php\");</script>";
	}	



?>
