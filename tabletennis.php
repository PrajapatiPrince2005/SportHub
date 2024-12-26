<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Tennis Products</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .product-card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            transition: transform 0.2s;
        }
        .product-card:hover {
            transform: scale(1.05);
        }
        .product-img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .product-details {
            padding: 15px;
        }
        .product-title {
            font-size: 18px;
            font-weight: bold;
        }
        .product-price {
            color: #28a745;
            font-size: 16px;
            margin: 5px 0;
        }
        .product-description {
            font-size: 14px;
            color: #6c757d;
        }
        .add-to-cart {
            margin-top: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .add-to-cart:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php require"parti/navbar.php"?>
    <div class="container py-5">
        <h1 class="text-center mb-4">Table Tennis Products</h1>
        <div class="row g-4">
            <!-- Product 1 -->
            <div class="col-md-4">
                <div class="product-card">
                    <img src="photo/tebletennis/tt3.jpg" alt="Table Tennis Bat" class="product-img">
                    <div class="product-details">
                        <h5 class="product-title">Table Tennis Bat</h5>
                        <p class="product-price">₹1,200</p>
                        <p class="product-description">High-quality wooden bat with ergonomic grip, suitable for professional and recreational players.</p>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col-md-4">
                <div class="product-card">
                    <img src="photo/tebletennis/tt2.jpg" alt="Table Tennis Ball" class="product-img">
                    <div class="product-details">
                        <h5 class="product-title">Table Tennis Ball (Pack of 6)</h5>
                        <p class="product-price">₹250</p>
                        <p class="product-description">Durable and lightweight balls designed for fast and accurate gameplay.</p>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col-md-4">
                <div class="product-card">
                    <img src="https://m.media-amazon.com/images/I/61srLP8GPsL._AC_UL320_.jpg" alt="Table Tennis Net" class="product-img">
                    <div class="product-details">
                        <h5 class="product-title">Table Tennis Net</h5>
                        <p class="product-price">₹800</p>
                        <p class="product-description">Adjustable and durable net for quick and easy setup on any standard table.</p>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product 4 -->
            <div class="col-md-4">
                <div class="product-card">
                    <img src="photo/tebletennis/tt.jpg" alt="Table Tennis Table" class="product-img">
                    <div class="product-details">
                        <h5 class="product-title">Table Tennis Table</h5>
                        <p class="product-price">₹15,000</p>
                        <p class="product-description">Foldable table with high-quality finish, ideal for indoor and outdoor use.</p>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product 5 -->
            <div class="col-md-4">
                <div class="product-card">
                    <img src="photo/tebletennis/tt9.jpeg" alt="Table Tennis Paddle Cover" class="product-img">
                    <div class="product-details">
                        <h5 class="product-title">Table Tennis Paddle Cover</h5>
                        <p class="product-price">₹350</p>
                        <p class="product-description">Protects your paddle from dust and damage while traveling or in storage.</p>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product 6 -->
            <div class="col-md-4">
                <div class="product-card">
                    <img src="https://m.media-amazon.com/images/I/41fiibEzyfL._AC_UL480_FMwebp_QL65_.jpg" alt="Table Tennis Paddle Cover" class="product-img">
                    <div class="product-details">
                        <h5 class="product-title">Table Tennis Table</h5>
                        <p class="product-price">₹1,50,000</p>
                        <p class="product-description">STEP OVER TOURNAMENT PR0||Laminated Top 25 mm||For High Performance </p>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- require use to add footer -->
    <?php
    require "parti/footer.php";
    ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
