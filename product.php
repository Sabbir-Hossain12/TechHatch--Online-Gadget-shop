<?php include "include/header.php" ?>
<?php
// fetch products from database
$sql= "SELECT * from product";

$result= mysqli_query($conn,$sql);
$products= mysqli_fetch_all($result,MYSQLI_ASSOC);

foreach($products as $product)
{
  // session_start();

  // echo $product['id'];
  // echo $product['product_name'];
  // echo $product['catagory'];
  // echo $product['brand'];
  // echo $product['quantity'];
  // echo $product['price'];
  // echo $product['product_type'];
  // $_SESSION['img_data'] = $product['img_data'];
 
}



?>

<main>
<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row  row-gap-4">

      <?php foreach($products as $product): ?>
      <div class="d-flex flex-1 col-md-8 col-lg-6 col-xl-4">
        <div class="card" style="border-radius: 15px;">
          <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
            data-mdb-ripple-color="light">
            <a href="product_details.php?id=<?php echo $product['id']; ?>"> <img src="<?php echo $product['img_data'] ?>"
              style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"
              alt="Laptop" /></a>
            <a href="product_details.php">
              <div class="mask"></div>
            </a>
          </div>
          <div class="card-body pb-0">
            <div class="d-flex justify-content-between">
              <div>
                <p><a href="#!" class="text-dark text-decoration-none"><?php echo $product['product_name'] ?></a></p>
                <p class="small text-muted"><?php echo $product['catagory'] ?></p>
              </div>
              <div>
                <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="small text-muted">Rated 4.0/5</p>
              </div>
            </div>
          </div >
          <div class="opacity-50">
          <hr class="" />
          </div>
          
          <div class="card-body pb-0">
            <div class="d-flex justify-content-between">
              <p><a href="#!" class="text-dark text-decoration-none">$<?php echo $product['price'] ?></a></p>
              <p class="text-dark"></p>
            </div>
            <p class="small text-muted">0% EMI</p>
          </div>
          <div class="opacity-50">
           <hr class="" /> 
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
              <a href="#!" class="text-dark fw-bold">Cancel</a>
              <button type="button" class="btn btn-primary">Buy now</button>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
      
    
    
    </div>
  </div>
</section>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<?php include "include/footer.php" ?>