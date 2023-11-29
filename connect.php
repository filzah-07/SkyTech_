<?php
$host = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'fyp';

// Create a database connection
$mysqli = new mysqli($host, $dbUsername, $dbPassword, $dbName);

// Check if the connection was successful
if ($mysqli->connect_error) {
    die('Connection Error: ' . $mysqli->connect_error);
}
?>