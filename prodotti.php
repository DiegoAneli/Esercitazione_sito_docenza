<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./node_modules/bootswatch/dist/brite/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
   
</head>
<body>

<?php

    include 'header.php';


?>

<!-- Main Product Details Container -->
<div class="container py-5">
  
  <!-- a. Page Title / Breadcrumb Section -->
  <div class="mb-4 bg-light p-3 rounded-3 shadow-sm">
    <h2 class="fw-bold text-dark mb-0">Premium Wireless Headphones</h2>
  </div>

  <!-- Product Main Info Row -->
  <div class="row g-5 mb-5">
    
    <!-- b. Product Image Gallery Section -->
    <div class="col-12 col-md-6">
      <div class="d-flex flex-column gap-3">
        <!-- Main Large Image -->
        <div class="border rounded-3 overflow-hidden bg-white shadow-sm text-center p-3">
          <img id="mainProductImg" src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=600&auto=format&fit=crop&q=80" class="img-fluid" alt="Main Product Image" style="max-height: 400px; object-fit: contain;">
        </div>
        
     
        <div class="d-flex gap-2 justify-content-center">
          <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=150&auto=format&fit=crop&q=80" class="img-thumbnail cursor-pointer border-warning" style="width: 80px; height: 80px; object-fit: cover;" onclick="document.getElementById('mainProductImg').src=this.src">
          <img src="https://images.unsplash.com/photo-1484704849700-f032a568e944?w=150&auto=format&fit=crop&q=80" class="img-thumbnail cursor-pointer" style="width: 80px; height: 80px; object-fit: cover;" onclick="document.getElementById('mainProductImg').src=this.src">
          <img src="https://images.unsplash.com/photo-1583394838336-acd977736f90?w=150&auto=format&fit=crop&q=80" class="img-thumbnail cursor-pointer" style="width: 80px; height: 80px; object-fit: cover;" onclick="document.getElementById('mainProductImg').src=this.src">
        </div>
      </div>
    </div>


    <div class="col-12 col-md-6">
      <div class="d-flex flex-column h-100 justify-content-center">
        
       
        <div class="mb-3">
          <span class="badge bg-success mb-2"><i class="bi bi-check-circle me-1"></i> In Stock</span> <!-- Availability -->
          <div class="d-flex align-items-center gap-3">
            <h2 class="fw-bold text-dark mb-0">$99.00</h2>
            <span class="text-muted text-decoration-line-through small">$149.00</span>
            <span class="badge bg-danger rounded-pill">Save 33%</span>
          </div>
        </div>

        <div class="mb-4">
          <h5 class="fw-bold text-dark mb-2">Product Description</h5>
          <p class="text-muted leading-relaxed">
            Experience premium sound quality with our ultra-comfortable wireless headphones. Featuring active noise cancellation, 40-hour battery life, and crystal-clear microphone clarity for your everyday calls and musical journeys.
          </p>
          <ul class="text-muted small ps-3">
            <li>Bluetooth 5.2 with 10m range</li>
            <li>Hi-Res Audio Certified</li>
            <li>Soft memory foam earcups</li>
          </ul>
        </div>

        <div class="d-flex flex-column gap-3">
       
          <div class="d-flex gap-3 align-items-center flex-wrap">
            <div style="width: 120px;">
              <label class="form-label small fw-semibold text-muted mb-1">Quantity:</label>
              <select class="form-select">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
            
            <div class="flex-grow-1 pt-4">
              <a href="cart.html">
            <button class="btn btn-warning btn-lg w-100 fw-bold py-3 shadow-sm"><i class="bi bi-cart-plus me-2"></i>Add to Cart</button>
              </a>
            </div>
          </div>
          
          <button class="btn btn-outline-dark btn-sm w-100"><i class="bi bi-heart me-2"></i>Add to Wishlist</button>
        </div>

      </div>
    </div>

  </div>

  <hr class="my-5 text-muted">

 
  <section class="py-4">
    <h3 class="fw-bold text-dark mb-4"><i class="bi bi-box-seam text-warning me-2"></i>Related Products</h3>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
      
      <!-- Related Item 1 -->
      <div class="col">
        <div class="card product-card h-100 shadow-sm">
          <img src="https://ix-marketing.imgix.net/global.jpg?auto=format,compress&w=1946" class="card-img-top" alt="Watch">
          <div class="card-body text-center">
            <h6 class="fw-bold text-dark mb-1">Minimalist Smart Watch</h6>
            <p class="text-muted small mb-2">$149.00</p>
            <a href="contact.php" class="btn btn-warning btn-sm w-100 fw-semibold">Add To Cart</a>
          </div>
        </div>
      </div>

      <!-- Related Item 2 -->
      <div class="col">
        <div class="card product-card h-100 shadow-sm">
          <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=500&auto=format&fit=crop&q=80" class="card-img-top" alt="Shoes">
          <div class="card-body text-center">
            <h6 class="fw-bold text-dark mb-1">Sports Running Shoes</h6>
            <p class="text-muted small mb-2">$79.00</p>
            <a href="contact.php" class="btn btn-warning btn-sm w-100 fw-semibold">Add To Cart</a>
          </div>
        </div>
      </div>

      <!-- Related Item 3 -->
      <div class="col">
        <div class="card product-card h-100 shadow-sm">
          <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?w=500&auto=format&fit=crop&q=80" class="card-img-top" alt="Camera">
          <div class="card-body text-center">
            <h6 class="fw-bold text-dark mb-1">Vintage Polaroid Camera</h6>
            <p class="text-muted small mb-2">$120.00</p>
            <a href="contact.php" class="btn btn-warning btn-sm w-100 fw-semibold">Add To Cart</a>
          </div>
        </div>
      </div>

      <!-- Related Item 4 -->
      <div class="col">
        <div class="card product-card h-100 shadow-sm">
          <img src="https://cdn.pixabay.com/photo/2019/05/05/18/27/glasses-4181316_1280.jpg" class="card-img-top" alt="Sunglasses">
          <div class="card-body text-center">
            <h6 class="fw-bold text-dark mb-1">Classic Sunglasses</h6>
            <p class="text-muted small mb-2">$45.00</p>
            <a href="contact.php" class="btn btn-warning btn-sm w-100 fw-semibold">Add To Cart</a>
          </div>
        </div>
      </div>

    </div>
  </section>

</div>


<?php

    include 'footer.php';
    

?>

    
</body>
</html>