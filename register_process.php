<?php
$connection = new mysqli('localhost', 'root', '', 'sportshub');

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $connection->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        echo "Registration successful! <a href='index.php'>Login Here</a>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$connection->close();
?>
