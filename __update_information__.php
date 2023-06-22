<?php
include '__db_connect__.php';

session_start();
$username = $_SESSION['username'];
$name = $_POST['name'];
$email = $_POST['email'];

// Update user information
$sql = "UPDATE users SET name = '$name', email = '$email' WHERE username = '$username'";
if ($conn->query($sql) === TRUE) {
  echo "success";
} else {
  echo "error";
}

$conn->close();
?>
