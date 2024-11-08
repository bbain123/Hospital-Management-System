<?php
	include "connecttodb.php";
	echo "<script>if (!window.confirm(\"Do you really want to delete this doctor?\")){window.location.replace(\"http://localhost/manageDoctor.php\")}</script>";
	$dellicensenum = $_POST["dellicensenum"];
	$query = "DELETE FROM doctor WHERE licensenum = \"" . $dellicensenum . "\"";
	$result = mysqli_query($connection, $query);
	
	//if there is a foreign key violation
	if (mysqli_errno($connection) == 1451){
		die("Cannot delete doctor: doctor is treating a patient or head of a hospital");
	}
	if(!result){
		die("Error trying to delete a doctor");
	}
	//if nothing is deleted
	if(mysqli_affected_rows($connection) == 0){
		echo "No such doctor exists with license number " . $dellicensenum;
	}
	else{
		echo "Successfully deleted doctor.";
	}
?>
