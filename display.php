<?php

// Include the database configuration file
include 'db.php';

// Fetch the last inserted patient record
$sql = "SELECT * FROM PatientRecords ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of the last patient record
    $row = $result->fetch_assoc();
    echo "<h1>Patient Profile</h1>";
    echo "<p><strong>First Name:</strong> " . htmlspecialchars($row['firstName']) . "</p>";
    echo "<p><strong>Last Name:</strong> " . htmlspecialchars($row['lastName']) . "</p>";
    echo "<p><strong>Date of Birth:</strong> " . htmlspecialchars($row['dob']) . "</p>";
    echo "<p><strong>Contact Number:</strong> " . htmlspecialchars($row['contact']) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($row['email']) . "</p>";
    echo "<p><strong>Insurance Provider:</strong> " . htmlspecialchars($row['insurance']) . "</p>";
    echo "<p><strong>Allergies:</strong> " . htmlspecialchars($row['allergies']) . "</p>";
    echo "<p><strong>Chronic Conditions:</strong> " . htmlspecialchars($row['chronicConditions']) . "</p>";
    echo "<p><strong>Current Medications:</strong> " . htmlspecialchars($row['medications']) . "</p>";
    echo "<p><strong>Past Surgeries:</strong> " . htmlspecialchars($row['surgeries']) . "</p>";
    echo "<p><strong>Family Medical History:</strong> " . htmlspecialchars($row['familyHistory']) . "</p>";
} else {
    echo "No records found.";
}

// Close the connection
$conn->close();
?>
