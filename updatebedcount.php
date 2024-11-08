<?php
	include "connecttodb.php";
	$hospital = $_POST["updatehospital"];
	$bedcount = $_POST["bedcount"];
	$query = "UPDATE hospital SET numofbed = \"" . $bedcount . "\" WHERE hoscode = \"" . $hospital . "\"";
	
	if(!mysqli_query($connection,$query)){
		die("Error while trying to update bedcount. " . mysqli_error($connection));
	}
	else{
		echo"<script>alert(\"successfully updated bed count\");window.location.replace(\"http://localhost/hospital.php\")</script>";
	}
?>
