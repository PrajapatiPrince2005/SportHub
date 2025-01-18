<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Hub</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: rgb(74, 138, 155);
            height: 80px;
            padding: 15px;
        }

        .navbar-brand {
            font-weight: bold;
            color: white;
            font-size: 1.5rem;
        }

        .navbar-nav .nav-link {
            color: white;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
        }

        .navbar-nav .nav-link:hover {
            color: #FFD700;
        }

        .dropdown-menu {
            background-color: rgb(74, 138, 155);
        }

        .dropdown-item {
            color: white;
        }

        .dropdown-item:hover {
            color: #FFD700;
            background-color: rgb(60, 120, 135);
        }

        .search-bar {
            width: 300px;
        }

        .icon {
            margin-right: 5px;
            /* Add space between icon and text */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="bi bi-shop icon"></i>Sport Hub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Search Bar -->
            <form class="d-flex ms-3" action="#" method="GET">
                <input class="form-control search-bar" type="search" placeholder="Search Products" aria-label="Search" name="search">
                <button class="btn btn-outline-light ms-2" type="submit"><i class="bi bi-search"></i></button>
            </form>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house icon"></i>Home</a>
                    </li>
                    <!-- Dropdown for Categories -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-list icon"></i>Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-droplet icon"></i>Swimming</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-circle icon"></i>Football</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-trophy icon"></i>Cricket</a></li>
                            <li><a class="dropdown-item" href="tabletennis.php"><i class="bi bi-award icon"></i>Table Tennis</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-activity icon"></i>Badminton</a></li>
                        </ul>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-cart icon"></i>Add to Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../orders.php"><i class="bi bi-truck icon"></i>Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../contact.php"><i class="bi bi-envelope icon"></i>Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../login.php"><i class="bi bi-box-arrow-right icon"></i>Logout</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
                            <img src="../photo/userphoto/user_photo3.png" alt="User" class="rounded-circle" width="30" height="30">
                            <span class="ms-2">User</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person icon"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear icon"></i> Settings</a></li>
                            <li><a class="dropdown-item" href="logout.php"><i class="bi bi-box-arrow-right icon"></i> Logout</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>