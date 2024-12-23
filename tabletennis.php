<?php
session_start();

// Simulated Product Data
$product = [
    'id' => 1,
    'name' => 'Compact Product',
    'description' => 'This product is small in size and easy to handle.',
    'price' => 499,
    'image' => 'images/product.jpg'
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Small Product Layout</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .product-card {
        width: 200px;
        /* Smaller card width */
        border: 1px solid #ddd;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin: 15px auto;
        padding: 10px;
        font-size: 0.9rem;
        /* Smaller font size */
    }

    .product-card img {
        width: 100%;
        height: 150px;
        /* Smaller image height */
        object-fit: cover;
        border-radius: 10px;
    }

    .product-title {
        font-size: 1rem;
        /* Smaller title */
        margin: 10px 0;
    }

    .product-price {
        font-size: 0.9rem;
        color: #28a745;
        margin-bottom: 10px;
    }

    .btn {
        font-size: 0.8rem;
        /* Smaller button size */
    }
    </style>
</head>

<body>
    <?php require "parti/navbar.php";?>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-auto">
                <div class="product-card">
                    <img src="<?php echo $product['image']; ?>" alt="Product Image">
                    <h5 class="product-title"><?php echo $product['name']; ?></h5>
                    <p class="product-description"><?php echo $product['description']; ?></p>
                    <p class="product-price">₹<?php echo $product['price']; ?></p>
                    <form method="POST" action="cart.php">
                        <button type="submit" class="btn btn-primary btn-sm">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>