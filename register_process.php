<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'sporthub_db');
if ($conn->connect_error) die("Connection Failed: " . $conn->connect_error);

$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$confirm_password = $_POST['confirm_password'];

if (!password_verify($confirm_password, $password)) {
    die("<script>alert('Passwords do not match!'); window.location='register.php';</script>");
}

$stmt = $conn->prepare("INSERT INTO user (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $password);
if ($stmt->execute()) {
    $_SESSION['user'] = $username;
    echo "<script>alert('Registration Successful!'); window.location='login.php';</script>";
    
} else {
    echo "<script>alert('Error: Email already exists!'); window.location='register.php';</script>";
}
$stmt->close();
$conn->close();
?>


