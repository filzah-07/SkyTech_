<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $defect_id = $_POST["defect_id"];
    $defect_type = $_POST["defect_type"];
    $issue_date = $_POST["issue_date"];
    $issue_time = $_POST["issue_time"];
    $defect_description = $_POST["defect_description"];
    $action_id = $_POST["action_id"];
    $action_date = $_POST["action_date"];
    $action_time = $_POST["action_time"];
    $action_description = $_POST["action_description"];
    $status = $_POST["status"];
    $closed_date = $_POST["closed_date"];
    $closed_time = $_POST["closed_time"];

    // Combine issue date and time
    $issueDateTime = $issue_date . ' ' . $issue_time;

    // Combine action date and time
    $actionStartTime = $action_date . ' ' . $action_time;

    // Combine closed date and time
    $closedDateTime = $closed_date . ' ' . $closed_time;

    // Insert data into the database
    $sql = "INSERT INTO defects (defect_id, defect_type, issueDateTime, defect_description, action_id, action_start_time, action_description, status, closedDateTime) 
            VALUES ('$defect_id', '$defect_type', '$issueDateTime', '$defect_description', '$action_id', '$actionStartTime', '$action_description', '$status', '$closedDateTime')";

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
