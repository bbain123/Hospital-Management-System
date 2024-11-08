<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Manage Assignments</title>
    <link rel="stylesheet" type="text/css" href="./home.css"> 
	<link rel="icon" type="image/png" href="images/favicon.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<script src="manageAssignments.js"></script>
<?php
    include "connecttodb.php";
?>

<div class="container">
    <h1>Manage Assignments - Hospital Management System</h1>
    <div class="nav-links">
        <a href="http://localhost/home.php"><i class="fas fa-home"></i> Home</a>
        <a href="http://localhost/doctor.php"><i class="fas fa-user-md"></i> List of Doctors</a>
        <a href="http://localhost/specialist.php"><i class="fas fa-stethoscope"></i> List of Specialists</a>
        <a href="http://localhost/manageDoctor.php"><i class="fas fa-user-plus"></i> Manage Doctors</a>
        <a href="http://localhost/hospital.php"><i class="fas fa-hospital"></i> Hospitals</a>
        <a href="http://localhost/manageAssignments.php"><i class="fas fa-tasks"></i> Manage Assignments</a>
    </div>
    <hr>

    <h3>Assign doctor to patient</h3>
    <form action="updatelooksafter.php" method="post">
        <div class="form-row">
            <div class="form-group">
                <label for="selectpatient">Select patient:</label>
                <select name="selectpatient" id="selectpatient">
                    <?php include "getpatients.php"; ?>
                </select>
            </div>
            
            <div class="form-group">
                <label for="selectdoctor">Select doctor:</label>
                <select name="selectdoctor" id="selectdoctor">
                    <?php include "getdoctornames.php"; ?>
                </select>
            </div>
        </div>
        
        <input type="submit" value="Assign patient to doctor">
    </form>

    <hr>

    <h3>View doctor's assignments</h3>
    <form action="" method="post">
        <label for="choosedoctor">Select a doctor:</label><br>
        <select name="choosedoctor" id="choosedoctor">
            <option value="1">Select here</option>
            <?php include "getdoctornames.php"; ?>
        </select>
    </form>

    <?php
        if(isset($_POST['choosedoctor'])){
            include "connecttodb.php";
            include "getAssignments.php";
        }
    ?>

</div>
</body>
</html>
