<?php
include '__db_connect__.php';

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Perform authentication
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  // Successful login
  session_start();
  $_SESSION['username'] = $username;
  echo "success";
} else {
  // Invalid login
  echo "error";
}

$conn->close();
?>
