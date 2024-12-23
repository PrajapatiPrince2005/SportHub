<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Hub</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      
    .navbar {
        background-color: rgb(74, 138, 155);
        height: 80px; /* Increase height */
        padding: 15px; /* Adjust padding for more space */
    }
    .navbar-brand {
        font-weight: bold;
        color: white;
        font-size: 1.5rem; /* Increase font size */
    }
    .navbar-nav .nav-link {
        color: white;
        font-size: 1.2rem; /* Increase font size of links */
    }
    .navbar-nav .nav-link:hover {
        color: #FFD700;
    }
</style>

    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sport Hub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="swimming.php">Swimming</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Football</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cricket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Badminton</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Table Tennis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
