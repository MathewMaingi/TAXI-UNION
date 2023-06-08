<?php
session_start();

// Establish database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "taxiunion";

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$username = $_POST['username'];
$comment = $_POST['comment'];

$stmt = $conn->prepare("INSERT INTO members (username, comments) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $comments);
$stmt->execute();


// Close the database connection
mysqli_close($conn);
?>
