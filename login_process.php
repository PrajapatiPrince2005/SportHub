<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'sporthub_db');
$email = $_POST['email'];
$password = $_POST['password'];

$result = $conn->query("SELECT * FROM user WHERE email='$email'");
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['user'] = $row['username'];
        echo "<script>alert('Login Successful!'); window.location='include/header.php';</script>";
    } else {
        echo "<script>alert('Incorrect Password!'); window.location='dasbord.php';</script>";
    }
} else {
    echo "<script>alert('User Not Found!'); window.location='login.php';</script>";
}
$conn->close();
?>