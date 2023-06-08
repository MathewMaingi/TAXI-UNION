<?php
// Establish database connection
$conn = new mysqli("localhost", "root", "", "taxiunion");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Process form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
// Encrypt the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Insert data into the database
$query = "INSERT INTO members (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";
if (mysqli_query($conn, $query)) {
  echo "Sign up successful!";
}
 else {
  echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

// Close the database connection
$stmt->close();
$conn->close();
?>
