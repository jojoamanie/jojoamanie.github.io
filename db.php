<?php
$servername = "localhost"; // Your server name
$username = "your_username"; // Your database username
$password = "your_password"; // Your database password
$dbname = "portfolio"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$email = $_POST['email'];
$name = $_POST['name'];
$message = $_POST['message'];

// Prepare and bind the SQL statement
$sql = "INSERT INTO form (email, name, message) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $name, $message);

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();
?>

