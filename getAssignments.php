<?php
    $licensenum = $_POST['choosedoctor'];
    
    // Query to get the doctor's name
    $doctorQuery = "SELECT firstname, lastname FROM doctor WHERE licensenum = \"" . $licensenum . "\"";
    $doctorResult = mysqli_query($connection, $doctorQuery);
    
    if (!$doctorResult) {
        die("Database query on doctor details failed.");
    }

    // Fetch the doctor's name
    $doctorRow = mysqli_fetch_assoc($doctorResult);
    $doctorFullName = $doctorRow['firstname'] . " " . $doctorRow['lastname'];

    // Free the result from the doctor's query
    mysqli_free_result($doctorResult);
    
    // Query to get the assigned patients
    $query = "SELECT p.firstname, p.lastname, p.ohipnum FROM patient as p, looksafter as L, doctor as d WHERE p.ohipnum = L.ohipnum AND d.licensenum = L.licensenum AND d.licensenum = \"" . $licensenum . "\"";
    $result = mysqli_query($connection,$query);
    
    if(!$result){
        die("Database query on assignments failed.");
    }
    
    // Output the doctor's name in the heading
    echo "<h3>Patients assigned to Dr. " . htmlspecialchars($doctorFullName) . ":</h3>";
    echo "<table class='patient-table'>";
    echo "<thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>OHIP Number</th>
            </tr>
          </thead>";
    echo "<tbody>";
    
    // Display patient information
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>
                <td>" . htmlspecialchars($row["firstname"]) . "</td>
                <td>" . htmlspecialchars($row["lastname"]) . "</td>
                <td>" . htmlspecialchars($row["ohipnum"]) . "</td>
              </tr>";
    }
    
    echo "</tbody>";
    echo "</table>";
    
    mysqli_free_result($result);
?>
