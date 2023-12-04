<?php
session_start();
include "connect.php";

if (isset($_GET['defect_id'])) {
    $part_id = $_GET['defect_id'];

    // Prepare the SQL statement with a parameter
    $sql = "DELETE FROM `defects` WHERE defect_id = ?";
    $stmt = $mysqli->prepare($sql);

    if ($stmt) {
        // Bind the parameter and execute the statement
        $stmt->bind_param("s", $part_id);
        $stmt->execute();
        $stmt->close();

        // Set the success message in a session variable
        $_SESSION['message'] = "Part successfully deleted!";
    }
}

// Redirect to the glossary page
header("Location: mainMenu.php");
exit;
?>