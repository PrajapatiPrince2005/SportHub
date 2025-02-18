<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <!-- Hover Effect CSS -->
<style>
    .footer-item {
        transition: transform 0.3s ease;
    }
    .footer-item:hover {
        transform: scale(1.05); /* Slightly enlarges the section */
    }
    .footer-link {
        transition: color 0.3s ease, transform 0.3s ease;
    }
    .footer-link:hover {
        color: #FFD700; /* Change to a gold color */
        transform: scale(1.1); /* Slightly enlarges the text or icon */
    }
</style>
</head>
<body>
<footer class="bg-dark text-white pt-4">
    <div class="container">
        <div class="row">
            <!-- About Section -->
            <div class="col-md-4 footer-item">
                <h5>About Sport Hub</h5>
                <p>
                    Sport Hub is your one-stop destination for all sports-related news, products, live scores, and events. We are committed to bringing the best experience for sports enthusiasts.
                </p>
            </div>

            <!-- Quick Links Section -->
            <div class="col-md-4 footer-item">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white text-decoration-none footer-link">Home</a></li>
                    <li><a href="#" class="text-white text-decoration-none footer-link">Shop</a></li>
                    <li><a href="#" class="text-white text-decoration-none footer-link">Contact Us</a></li>
                    <li><a href="#" class="text-white text-decoration-none footer-link">About Us</a></li>
                </ul>
            </div>

            <!-- Contact Info Section -->
            <div class="col-md-4 footer-item">
                <h5>Contact Us</h5>
                <p>
                    <strong>Email:</strong> support@sporthub.com<br>
                    <strong>Phone:</strong> +91-9876543210<br>
                    <strong>Address:</strong> Sport Hub HQ, Gujarat, India
                </p>
                <div>
                    <a href="#" class="text-white me-3 footer-link"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white me-3 footer-link"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-white me-3 footer-link"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white footer-link"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
        </div>

        <div class="text-center mt-4 footer-item">
            <p>&copy; 2024 Sport Hub. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</body>
</html>