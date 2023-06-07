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

// Insert comment into the database
$query = "INSERT INTO comments (username, comment) VALUES ('$username', '$comment')";
if (mysqli_query($conn, $query)) {
  echo "Comment saved successfully!";
} else {
  echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
