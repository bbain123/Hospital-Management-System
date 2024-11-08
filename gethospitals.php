<?php
    $whichhos = $_POST["pickahospital"];
    
    // Query to get hospital details
    $query = "SELECT hoscode, hosname, city, prov, numofbed, firstname, lastname, speciality FROM hospital, doctor WHERE hoscode =\"" . $whichhos . "\" AND licensenum = headdoc";
    $result = mysqli_query($connection,$query);
    
    if(!$result){
        die("Database query on hospital failed.");
    }

    // Fetch and display hospital details
    while($row = mysqli_fetch_assoc($result)){
        echo "<div class='hospital-details'>";
        echo "<strong>Hospital Name:</strong> " . $row["hosname"] . "<br>";
        echo "<strong>Location:</strong> " . $row["city"] . ", " . $row["prov"] . "<br>";
        echo "<strong>Hospital Code:</strong> " . $row["hoscode"] . "<br>";
        echo "<strong># of Beds:</strong> " . $row["numofbed"] . "<br>";
        echo "<strong>Head Doctor:</strong> " . $row["firstname"] . " " . $row["lastname"] . "<br>";
        echo "</div><hr>";

        echo "<h3>Doctors working at " . $row["hosname"] . ":</h3>";

        // Fetch and display doctors working at this hospital
        $doctorQuery = "SELECT firstname, lastname, speciality FROM doctor WHERE hosworksat = \"" . $whichhos . "\"";
        $doctorResult = mysqli_query($connection, $doctorQuery);

        if(!$doctorResult){
            die("Database query on doctors at hospital failed.");
        }

        // Loop through doctors and display them
        while($doctor = mysqli_fetch_assoc($doctorResult)){
            echo "<div class='doctor-details'>";
            echo "<strong>Doctor:</strong> " . $doctor["firstname"] . " " . $doctor["lastname"] . "<br>";
            echo "<strong>Specialty:</strong> " . $doctor["speciality"] . "<br>";
            echo "</div><br>";
        }
        mysqli_free_result($doctorResult);
    }
    mysqli_free_result($result);
?>
