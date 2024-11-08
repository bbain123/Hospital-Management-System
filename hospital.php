<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Hospitals</title>
    <link rel="stylesheet" type="text/css" href="./home.css"> 
	<link rel="icon" type="image/png" href="images/favicon.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<script src="hospital.js"></script>
<?php
    include "connecttodb.php";  
?>
<div class="container">
    <h1>Hospitals - Hospital Management System</h1>
    <div class="nav-links">
        <a href="http://localhost/home.php"><i class="fas fa-home"></i> Home</a>
        <a href="http://localhost/doctor.php"><i class="fas fa-user-md"></i> List of Doctors</a>
        <a href="http://localhost/specialist.php"><i class="fas fa-stethoscope"></i> List of Specialists</a>
        <a href="http://localhost/manageDoctor.php"><i class="fas fa-user-plus"></i> Manage Doctors</a>
        <a href="http://localhost/hospital.php"><i class="fas fa-hospital"></i> Hospitals</a>
        <a href="http://localhost/manageAssignments.php"><i class="fas fa-tasks"></i> Manage Assignments</a>
    </div>
    <hr>

<br><h3>Select hospital to view:</h3>
<form action="" method="post">
    <select name="pickahospital" id="pickahospital">
        <option value="ABC">Select here</option>
        <?php include "getHospital.php"; ?>
    </select>
</form>
<br>

<hr>

<?php
    if(isset($_POST['pickahospital'])){
        include "gethospitals.php";
    }
?>

<form action="updatebedcount.php" method="post">
    <br><h3>Select a hospital to update:</h3>
    <select name="updatehospital" id="updatehospital">
        <?php include "getHospital.php" ?>
    </select>
    Update bed count: <input type="text" name="bedcount">
    <input type="submit" value="Update">
</form>

</div>
</body>
</html>
