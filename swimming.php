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
                    <img src="photo/swimming/sw5.jpg" alt="Product Image" class="product-image">
                    <h2 class="product-title">Amazing Product</h2>
                    <p class="product-description">This is a high-quality product that offers great value for your money. Don't miss out!</p>
                    <p class="product-price">₹999</p>
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
