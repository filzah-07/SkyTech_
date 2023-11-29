<?php
include 'connect.php';


// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $part_no = $_POST["part_no"];
    $part_match = $_POST["part_match"];
    $description = $_POST["description"];
    $material_class = $_POST["material_class"];

    // Insert data into the database
    $sql = "INSERT INTO parts (part_no, part_match, description, material_class)
            VALUES ('$part_no', '$part_match', '$description', '$material_class')";

    if ($mysqli->query($sql) === TRUE) {
        echo "Record inserted successfully";

        // Redirect to managePart.php
        header("Location: managePart.php");
        exit(); // Ensure that no further code is executed after the redirection
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}


// Close the database connection
$mysqli->close();
?>


