<!DOCTIME html>
<html><head><meta http-equiv="Content-Type" content ="text/html; charset=UTF-8">
	<title>List of Doctors</title>
	<link rel="stylesheet" type="text/css" href="./home.css"> 
	<link rel="icon" type="image/png" href="images/favicon.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
<div class="container">
    <h1>List of Doctors - Hospital Management System</h1>
    <div class="nav-links">
        <a href="http://localhost/home.php"><i class="fas fa-home"></i> Home</a>
        <a href="http://localhost/doctor.php"><i class="fas fa-user-md"></i> List of Doctors</a>
        <a href="http://localhost/specialist.php"><i class="fas fa-stethoscope"></i> List of Specialists</a>
        <a href="http://localhost/manageDoctor.php"><i class="fas fa-user-plus"></i> Manage Doctors</a>
        <a href="http://localhost/hospital.php"><i class="fas fa-hospital"></i> Hospitals</a>
        <a href="http://localhost/manageAssignments.php"><i class="fas fa-tasks"></i> Manage Assignments</a>
    </div>
    
<script src="doctor.js"></script> 
<?php
	include "connecttodb.php";
?>

<h3>Order by:</h3>
<form action = "" method="post">
<select name="pickOrder" id="pickOrder">
	<option value='1'>select order</option>	
	<option value='lastname'>Last name</option>
	<option value='birthdate'>Birthdate</option>
</select>
<select name="pickDirection" id="pickDirection">
	<option value='1'>select direction</option>
	<option value='ASC'>Ascending</option>
	<option value='DESC'>Descending</option>
</select>
</form>
<hr>

 <!-- Empty Table Structure -->
    <table id="doctorTable" class="doctor-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Hospital Code</th>
                <th>Specialty</th>
                <th>DOB</th>
                <th>License Number</th>
                <th>Date of Licensing</th>
            </tr>
        </thead>
        <tbody>

            <!-- Rows will be added here by getdoctors.php -->

<?php
	if (isset($_POST['pickDirection'])){
		include "connecttodb.php";
		include "getdoctors.php";
	}
?>

</tbody>
</table>
</div>
</body>
</html>
