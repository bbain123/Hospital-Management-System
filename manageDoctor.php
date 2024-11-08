<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Manage Doctors</title>
    <link rel="stylesheet" type="text/css" href="./home.css">
	<link rel="icon" type="image/png" href="images/favicon.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	
</head>
<body>
<?php include "connecttodb.php"; ?>
<div class="container">
    <h1>Manage Doctors - Hospital Management System</h1>
    <div class="nav-links">
        <a href="http://localhost/home.php"><i class="fas fa-home"></i> Home</a>
        <a href="http://localhost/doctor.php"><i class="fas fa-user-md"></i> List of Doctors</a>
        <a href="http://localhost/specialist.php"><i class="fas fa-stethoscope"></i> List of Specialists</a>
        <a href="http://localhost/manageDoctor.php"><i class="fas fa-user-plus"></i> Manage Doctors</a>
        <a href="http://localhost/hospital.php"><i class="fas fa-hospital"></i> Hospitals</a>
        <a href="http://localhost/manageAssignments.php"><i class="fas fa-tasks"></i> Manage Assignments</a>
    </div>
    <hr>

    <h3>Insert a new doctor:</h3>
    <form action="addthedoctor.php" method="post">
        <div class="form-row">
            <label for="licensenum">License number:</label>
            <input type="text" name="licensenum" id="licensenum" placeholder="4 digit alphanumeric code (e.g. AB12)">
        </div>

        <div class="form-row">
            <label for="firstname">First name:</label>
            <input type="text" name="firstname" id="firstname">
        </div>

        <div class="form-row">
            <label for="lastname">Last name:</label>
            <input type="text" name="lastname" id="lastname">
        </div>

        <div class="form-row">
            <label for="typedhosworksat">Hospital code:</label>
            <input type="text" name="typedhosworksat" id="typedhosworksat" placeholder="3 letter existing hospital code (e.g. ABC)">
            Or select a hospital:
            <select name="pickhosworksat">
                <?php include "getHospital.php"; ?>
            </select>
        </div>

        <div class="form-row">
            <label for="birthdate">Birthdate:</label>
            <input type="date" name="birthdate" id="birthdate">
        </div>

        <div class="form-row">
            <label for="licensedate">License date:</label>
            <input type="date" name="licensedate" id="licensedate">
        </div>

        <div class="form-row">
            <label for="speciality">Speciality:</label>
            <input type="text" name="speciality" id="speciality">
        </div>

        <div class="form-row">
            <input type="submit" value="Click here to add doctor">
        </div>
    </form>

    <hr>

    <h3>Delete a doctor:</h3>
    <form action="deletethedoctor.php" method="post">
        <div class="form-row">
            <label for="dellicensenum">License number of doctor to delete:</label>
            <input type="text" name="dellicensenum" id="dellicensenum">
        </div>

        <div class="form-row">
            <input type="submit" value="Click here to delete doctor">
        </div>
    </form>

</div>
</body>
</html>
