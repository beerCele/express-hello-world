<?php
// Database configuration
$host = 'localhost';
$username = 'persis_website';
$password = 'Persiswebsite123@';
$database = 'id20886772_persis_database1';

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
