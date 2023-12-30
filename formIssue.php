<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $defect_id = $_POST["defect_id"];
    $aircraft_id = $_POST["aircraft_id"];
    $defect_type = $_POST["defect_type"];
    $issue_date = $_POST["issue_date"];
    $issue_time = $_POST["issue_time"];
    $status = $_POST["status"];
    $defect_description = $_POST["defect_description"];

    // Combine issue date and time
    $issueDateTime = $issue_date . ' ' . $issue_time;


    // Insert data into the database
    $sql = "INSERT INTO defects (defect_id, aircraft_id, defect_type, issueDateTime, status, defect_description) 
            VALUES ('$defect_id', '$aircraft_id', '$defect_type', '$issueDateTime', '$status', '$defect_description')";

    if ($mysqli->query($sql) === TRUE) {
        echo "Record inserted successfully";

        // Redirect to managePart.php
        header("Location: raiseIssue.php");
        exit(); // Ensure that no further code is executed after the redirection
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}

// Close the database connection
$mysqli->close();
?>
