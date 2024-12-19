<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SportHub</title>
</head>
<body><?php
    require "parti/navbar.php";

    echo '<div id="successAlert" class="alert alert-success" role="alert">';
            echo "Login successful! Welcome , SportsHub";
            echo '</div>';
        
            
            // JavaScript to hide the success alert after 3 seconds
            echo '<script>
                    setTimeout(function() {
                        document.getElementById("successAlert").style.display = "none";
                    }, 3000);  // Hide after 3 seconds
                  </script>';
    ?>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="photo/login6.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="photo/login5.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="photo/login4.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</body>
</html>