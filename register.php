<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="rigi.css">
</head>
<body>
    <div class="background-container">
        <!-- Registration Form Container -->
        <div class="container">
            <h2>Register</h2>
            <form action="register_process.php" method="POST">
                <input type="text" name="username" placeholder="Enter Username" required>
                <input type="email" name="email" placeholder="Enter Email" required>
                <input type="password" name="password" placeholder="Enter Password" required>
                <button type="submit">Register</button>
            </form>
            <p>Already have an account? <a href="index.php">Login Here</a></p>
        </div>
    </div>
</body>
</html>
