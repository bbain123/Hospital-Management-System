<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Home - Hospital Management System</title>
    <link rel="stylesheet" type="text/css" href="./home.css">
	<link rel="icon" type="image/png" href="images/favicon.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<div class="container">
    <h1>Home - Hospital Management System</h1>
    <div class="nav-links">
        <a href="http://localhost/home.php"><i class="fas fa-home"></i> Home</a>
        <a href="http://localhost/doctor.php"><i class="fas fa-user-md"></i> List of Doctors</a>
        <a href="http://localhost/specialist.php"><i class="fas fa-stethoscope"></i> List of Specialists</a>
        <a href="http://localhost/manageDoctor.php"><i class="fas fa-user-plus"></i> Manage Doctors</a>
        <a href="http://localhost/hospital.php"><i class="fas fa-hospital"></i> Hospitals</a>
        <a href="http://localhost/manageAssignments.php"><i class="fas fa-tasks"></i> Manage Assignments</a>
    </div>
    
	
<div class="container">
    <h1>Welcome to the Hospital Management System</h1>
    <p>This platform allows administrators to manage hospital data, doctor information, and patient assignments with ease. Below is a detailed description of how each page works and its functionalities.</p>
    
    <div class="description">
        <h2>1. List of Doctors</h2>
        <p>The List of Doctors page displays a comprehensive list of doctors currently registered in the system. On this page, you can view essential details about each doctor, such as their name, specialty, and assigned hospital.</p>
        <h3>Key Features:</h3>
        <ul>
            <li><strong>Search & Filter:</strong> Allows users to search for doctors by name or specialty.</li>
            <li><strong>View Doctor Details:</strong> Clicking on a doctor’s name displays more information about their qualifications and patient assignments.</li>
        </ul>

        <h2>2. List of Specialists</h2>
        <p>The List of Specialists page provides a filtered view of doctors based on their specialty, such as cardiologists and surgeons.</p>
        <h3>Key Features:</h3>
        <ul>
            <li><strong>Filter by Specialty:</strong> Users can filter doctors by specialty to view specialists within a specific field.</li>
            <li><strong>Doctor Details:</strong> Clicking on a specialist's name provides further details about their expertise.</li>
        </ul>

        <h2>3. Manage Doctors</h2>
        <p>This page allows administrators to add new doctors to the system or delete existing ones, ensuring that all staff details are up-to-date.</p>
        <h3>Key Features:</h3>
        <ul>
            <li><strong>Add New Doctor:</strong> Form to input details like license number, name, and specialty.</li>
            <li><strong>Delete Doctor:</strong> Option to remove a doctor by license number.</li>
            <li><strong>Edit Doctor Info:</strong> Possible future expansion for editing a doctor’s details.</li>
        </ul>

        <h2>4. Hospitals</h2>
        <p>This page displays hospital information, including location, bed count, and head doctor.</p>
        <h3>Key Features:</h3>
        <ul>
            <li><strong>View Hospital Info:</strong> Displays details such as name, location, bed count, and head doctor.</li>
            <li><strong>Update Bed Count:</strong> Administrators can update the bed count for capacity management.</li>
            <li><strong>Doctors at the Hospital:</strong> Lists doctors working at each hospital.</li>
        </ul>

        <h2>5. Manage Assignments</h2>
        <p>Used to assign doctors to patients and view existing assignments.</p>
        <h3>Key Features:</h3>
        <ul>
            <li><strong>Assign Patients to Doctors:</strong> Allows selection of a patient and doctor to assign.</li>
            <li><strong>View Doctor’s Patients:</strong> Displays the patient list for each doctor.</li>
            <li><strong>Patient-Doctor Lookup:</strong> Search for assignments by doctor to track responsibility.</li>
        </ul>

        <h2>Tech Stack: LAMP (Linux, Apache, MySQL, PHP)</h2>
        <p>The Hospital Management System is built on the LAMP stack, a powerful technology stack for web applications.</p>

        <h3>1. Linux</h3>
        <p>Linux serves as the operating system that hosts the web application, providing a stable and secure environment.</p>

        <h3>2. Apache</h3>
        <p>Apache is the web server responsible for handling HTTP requests and serving pages to users.</p>

        <h3>3. MySQL</h3>
        <p>MySQL stores all the system data, including information about doctors, hospitals, patients, and assignments.</p>

        <h3>4. PHP</h3>
        <p>PHP handles dynamic content, form submissions, database queries, and user actions, powering the system’s logic.</p>
    </div>
</div>

</html>


