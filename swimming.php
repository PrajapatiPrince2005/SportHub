<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Layout</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .product-card:hover {
            transform: scale(1.05);
        }
        .product-image {
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }
        .product-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin: 15px 0;
        }
        .product-price {
            font-size: 1.2rem;
            color: #28a745;
            margin-bottom: 10px;
        }
    </style>
</head>
<body><?php
    require "parti/navbar.php";
    ?>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <!-- Product Card -->
                <div class="product-card">
                    <img src="photo/swimming/sw2.jpg" alt="Product Image" class="product-image">
                    <h2 class="product-title"> Swim Training Float</h2>
                    <p class="product-description"> Ideal for beginners, this swim training float provides stability and support while learning to swim.
                    </p>
                    <p class="product-price">₹399</p>
                    <button class="btn btn-primary">Add to Cart</button>
                </div>
            </div>
            <div class="col-md-4">
                <!-- Product Card -->
                <div class="product-card">
                    <img src="photo/swimming/sw5.jpg" alt="Product Image" class="product-image">
                    <h2 class="product-title">Swimming Flippers</h2>
                    <p class="product-description">Comfortable swimming flippers designed to increase speed and improve leg strength while swimming.
                    </p>
                    <p class="product-price">₹599</p>
                    <button class="btn btn-primary">Add to Cart</button>
                </div>
            </div>
            <div class="col-md-4">
                <!-- Product Card -->
                <div class="product-card">
                    <img src="photo/swimming/sw8.png" alt="Product Image" class="product-image">
                    <h2 class="product-title">Swimming Kickboard</h2>
                    <p class="product-description"> Lightweight and durable kickboard to help improve your swimming technique your training sessions.</p>
                    <p class="product-price">₹599</p>
                    <button class="btn btn-primary">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
