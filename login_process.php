
<?php

$connection = new mysqli('localhost', 'root', '', 'sportshub');

echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Sports Hub</title>';
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">';
echo '</head>';
echo '<body>';
echo '</body>';
echo '</html>';
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $connection->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            header("location:view.php");
            
        } else {
            // Failure alert
            echo '<div class="alert alert-danger" role="alert">';
            echo "Login failed! Please check your credentials.";
            echo '</div>';
        }

    } else {
        echo "No user found!";
    }

    $stmt->close();
}
$connection->close();
?>
