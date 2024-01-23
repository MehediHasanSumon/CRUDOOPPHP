<?php 
$dbhost = 'localhost';  // Hostname where your MySQL server is running
$dbname = 'object_project';  // Database name
$dbuser = 'root';  // Database username
$dbpass = '';  // Database password

try {
    // Create a new mysqli connection
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
} catch (PDOException $e) {
    // If an exception occurs (e.g., connection failure), catch it and display an error message
    echo "Error: " . $e->getMessage();
    die();  // Exit the script
}
?>
