<?php
include 'dbconn.php';

// Retrieve the form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone_no = $_POST['phone_no'];
$password = $_POST['password'];

// Prepare SQL statement (with placeholders to avoid SQL injection)
$sql = "INSERT INTO Members (name, email, phone_no, password) VALUES (?, ?, ?, ?)";

// Prepare the SQL statement
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $email, $phone_no, $password); // Bind parameters (s = string)

// Execute the query
if ($stmt->execute()) {
    echo "Form Submitted Successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
