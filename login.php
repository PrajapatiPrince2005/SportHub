<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    
    <div class="background-container">
        <!-- Login Container -->
        <div class="container">
            <h1>Login Now</h1>
            <form action="login_process.php" method="POST">
                <input class="box" type="text" name="username" placeholder="Enter UserEmail-id" required>
                <input class="box" type="password" name="password" placeholder="Enter Password" required>
                <button type="submit">Login</button>
            </form>
            <p>Don't have an account ? <a href="register.php">Register Here</a></p>
        </div>
    </div>
    
</body>
</html>
