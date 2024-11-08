<?php
	include "connecttodb.php";
	$licensenum = $_POST["licensenum"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$licensedate = $_POST["licensedate"];
	$birthdate = $_POST["birthdate"];
	$typedhos = $_POST["typedhosworksat"];
	$hosworksat = $_POST["pickhosworksat"];
	$speciality = $_POST["speciality"];
	
//check if license num is unique 
$query = "SELECT licensenum FROM doctor WHERE licensenum = \"" . $licensenum . "\"";
$result = mysqli_query($connection, $query);

if(mysqli_num_rows($result) == 0){
	//check if user entered a hospital code
	if ($typedhos != ''){ 
		$query = "SELECT hoscode FROM hospital WHERE hoscode = \"" . $typedhos . "\"";
		$result = mysqli_query($connection, $query);
		//check if hospital code is invalid
		if (mysqli_num_rows($result) == 0){
			echo "<script>alert(\"invalid hospital code\");window.location.replace(\"http://localhost/manageDoctor.php\")</script>";
		}
		else{
			$query = "INSERT INTO doctor VALUES (\"" . $licensenum . "\", \"" . $firstname . "\", \"" . $lastname . "\", \"" . $licensedate . "\", \"" . $birthdate . "\", \"" . $typedhos . "\", \"" . $speciality . "\")";
			if(!mysqli_query($connection, $query)){
				die("Error while trying to add new doctor" . mysqli_error($connection));
			}
			else{
				//successfully added, go back to page
				echo "<script>alert(\"successfully added doctor\");window.location.replace(\"http://localhost/manageDoctor.php\")</script>";
			}
		}
	}
	//user has not provided hoscode, use selected hospital
	else{
		$query = "INSERT INTO doctor VALUES (\"" . $licensenum . "\", \"" . $firstname . "\", \"" . $lastname . "\", \"" . $licensedate . "\", \"" . $birthdate . "\", \"" . $hosworksat . "\", \"" . $speciality . "\")";
		if(!mysqli_query($connection, $query)){
			die("Error while trying to add new doctor" . mysqli_error($connection));
		}
		else{
			echo "<script>alert(\"successfully added doctor\");window.location.replace(\"http://localhost/manageDoctor.php\")</script>";
		}
	}
}
else{
	echo "<script>alert(\"invalid license num: already in use\")</script>";
}

?>
