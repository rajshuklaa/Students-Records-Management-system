<?php
include "connect.php";

$name = $_POST['name'];
$email = $_POST['email'];
$course = $_POST['course'];

$sql = "INSERT INTO students (name, email, course) VALUES ('$name', '$email', '$course')";

if ($conn->query($sql) === TRUE) {
  echo "Registration successful!";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>