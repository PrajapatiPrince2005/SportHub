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
        .background-image{
            background-image: url('home2.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
        }
        li{
            padding:10px 20px ;
            border:1px solid burlywood;
            border-radius: 50px;
        }
        .navbar {
            
            height: 80px;
            padding: 15px;
            gap: 1vw;
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
            color:rgb(219, 246, 123);
        }

        .navbar-nav .nav-link.active {
            color: white !important;
            /* background-color: rgb(142, 138, 138); */
            border-radius: 5px;
        }

        .dropdown-menu {
            background-color: rgb(0, 158, 220);
        }

        .dropdown-item {
            color: white;
        }

        .dropdown-item:hover {
            color:rgb(12, 12, 12);
            /* background-color: rgb(60, 120, 135); */
        }

        .search-bar {
            width: 300px;
        }

        .icon {
            margin-right: 5px;
        }

    
    </style>
</head>

<body class="background-image">
    <!-- <div class="background-image"></div> -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><i class="bi bi-shop icon"></i>Sport Hub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Search Bar -->
            <!-- <form class="d-flex ms-3" action="#" method="GET">
                <input class="form-control search-bar" type="search" placeholder="Search Products" aria-label="Search" name="search">
                <button class="btn btn-outline-light ms-2" type="submit"><i class="bi bi-search"></i></button>
            </form> -->
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
                            <li><a class="dropdown-item" href="#"><i class="bi bi-award icon"></i>Table Tennis</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-activity icon"></i>Badminton</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-cart icon"></i>Add to Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-truck icon"></i>Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-envelope icon"></i>Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><i class="bi bi-box-arrow-right icon"></i>Logout</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
                            <img src="photo/userphoto/user_photo3.png" alt="User" class="rounded-circle" width="30" height="30">
                            <span class="ms-2">User</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="profile.php"><i class="bi bi-person icon"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="settings.php"><i class="bi bi-gear icon"></i> Settings</a></li>
                            <li><a class="dropdown-item" href="logout.php"><i class="bi bi-box-arrow-right icon"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- JavaScript for Click Effect -->
    <script>
        const navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach(link => {
            link.addEventListener('click', (event) => {
                const href = link.getAttribute('href');
                if (href === "#" || !href) {
                    event.preventDefault(); // Prevent default behavior for invalid links
                }
                navLinks.forEach(l => l.classList.remove('active')); // Remove active from all links
                link.classList.add('active'); // Add active to clicked link
            });
        });
    </script>
    <!-- <img  class="background" src="home.jpg" alt="" srcset=""> -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>