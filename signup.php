<?php
// Establish database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "taxiunion";

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Process form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Encrypt the password

// Insert data into the database
$query = "INSERT INTO members (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";
if (mysqli_query($conn, $query)) {
  echo "Sign up successful!";
} else {
  echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
