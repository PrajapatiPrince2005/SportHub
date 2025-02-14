<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background: url('photo/login/login.jpg') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            animation: zoomEffect 10s infinite alternate;
        }

        @keyframes zoomEffect {
            0% {
                background-size: 100%;
            }
            100% {
                background-size: 110%;
            }
        }

        .form-container {
            padding: 20px;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            position: relative;
            z-index: 2;
        }
    </style>
</head>
<body>
    <!-- Login Form -->
    <div class="form-container">
        <h3 class="text-center">Login</h3>
        <form action="login_process.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Email ID</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form><br>
        <p>Don't have an account ? <a href="register.php">Register Here</a></p>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>