<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
</head>
<body>
  <?php include "include/header.php" ?>

  <main>
    <section >
  <div id="carouselExampleCaptions" class="carousel slide container">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/slide1.jpg" class="caro-image d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/slide2.jpg" class="caro-image d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/slide3.jpg" class="caro-image d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </section>

    <div class="heading bg-dark">
      <h3>Featured Products</h3>
    </div>
   
    <section class="featured-products container">
    <div class="card " style="width: 18rem;">
  <img src="image/product/hp.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Logitech Headphone</h5>
    <p class="card-text">Key Features
Model: Logitech H111
Frequency: 20Hz - 20kHz
Sensitivity: 100dB +/-3dB
Cable Length: 5.90 ft</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Noise-canceling microphone</li>
    <li class="list-group-item">Adjustable headband</li>
    <li class="list-group-item "><strong>4350 TK</strong> <strike> 5000TK</strike></li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link btn btn-primary">Buy Now</a>
    <a href="#" class="card-link btn btn-secondary">Add to Cart</a>
  </div>
</div>

<div class="card " style="width: 18rem;">
  <img src="image/product/hp.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Logitech Headphone</h5>
    <p class="card-text">Key Features
Model: Logitech H111
Frequency: 20Hz - 20kHz
Sensitivity: 100dB +/-3dB
Cable Length: 5.90 ft</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Noise-canceling microphone</li>
    <li class="list-group-item">Adjustable headband</li>
    <li class="list-group-item "><strong>4350 TK</strong> <strike> 5000TK</strike></li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link btn btn-primary">Buy Now</a>
    <a href="#" class="card-link btn btn-secondary">Add to Cart</a>
  </div>
</div>

<div class="card " style="width: 18rem;">
  <img src="image/product/hp.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Logitech Headphone</h5>
    <p class="card-text">Key Features
Model: Logitech H111
Frequency: 20Hz - 20kHz
Sensitivity: 100dB +/-3dB
Cable Length: 5.90 ft</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Noise-canceling microphone</li>
    <li class="list-group-item">Adjustable headband</li>
    <li class="list-group-item "><strong>4350 TK</strong> <strike> 5000TK</strike></li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link btn btn-primary">Buy Now</a>
    <a href="#" class="card-link btn btn-secondary">Add to Cart</a>
  </div>
</div>


    </section>





  </main>




















<footer>
  <?php include "include/footer.php" ?>
 </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>