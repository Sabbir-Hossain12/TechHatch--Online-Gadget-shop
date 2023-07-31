<?php include "include/header.php" ?>

<?php

// if (isset($_GET['id']) && is_numeric($_GET['id'])) {
//   $product_id = $_GET['id'];
//   // echo $product_id;
//   // Fetch product details from the database using $product_id
//   // For example, you can use a SQL query like this:
//   $sql = "SELECT * FROM product WHERE id = $product_id";
//   $result = mysqli_query($conn, $sql);
//   $product = mysqli_fetch_assoc($result);
// }


if(isset($_POST['orderQuantiry']))
{
  $_SESSION['order_quantity']= $_POST['orderQuantiry'];
  // echo $_SESSION['order_quantity'];

  $_SESSION['totalPrice']= $_SESSION['order_quantity']*$_SESSION['product_price'];
}
?>




<section class="h-100 h-custom" ">
  <div class=" container py-5 h-100">
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-12">
      <div class="card card-registration card-registration-2" style="border-radius: 15px;">
        <div class="card-body p-0">
          <div class="row g-0">
            <div class="col-lg-8">
              <div class="p-5">
                <div class="d-flex justify-content-between align-items-center mb-5">
                  <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                  <h6 class="mb-0 text-muted">3 items</h6>
                </div>
                <hr class="my-4">

                <div class="row mb-4 d-flex justify-content-between align-items-center">
                  <div class="col-md-2 col-lg-2 col-xl-2">
                    <img src="<?php echo $_SESSION['img_data']; ?>" class="img-fluid rounded-3" alt="Cotton T-shirt">
                  </div>
                  <div class="col-md-3 col-lg-3 col-xl-3">
                    <h6 class="text-black mb-0"><?php echo $_SESSION['product_name'] ?></h6>
                    <h6 class="text-muted"><?php echo $_SESSION['brand'] ?></h6>

                  </div>
                  <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                    <!-- <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <i class="fas fa-minus"></i>
                    </button> -->

                    <input id="quantityInput" min="1" name="quantity" value="<?php echo $_SESSION['order_quantity'] ?>" type="number" class="form-control form-control-sm quantityInput quantity_input" readonly />

                    <!-- <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                      <i class="fas fa-plus"></i>
                    </button> -->
                  </div>
                  <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                    <h6 id="totalPrice " class="mb-0 toPrice "><?php echo $_SESSION['order_quantity']. ' X ' . $_SESSION['product_price']. ' TK'?></h6>
                  </div>
                  <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                    <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                  </div>
                </div>



                <hr class="my-4">

                <div class="pt-5">
                  <h6 class="mb-0"><a href="product.php" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                </div>
              </div>
            </div>
            <div class="col-lg-4 bg-grey ">
              <div class="p-5">
                <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                <hr class="my-4">

                <div class="d-flex justify-content-between mb-4">
                  <h5 class="text-uppercase"><?php echo $_SESSION['product_name']?></h5>
                  <h5 id="totalPrice" class="mb-0"><?php echo $_SESSION['order_quantity']. ' X ' . $_SESSION['product_price']. ' TK'?></h5>
                </div>

                <h5 class="text-uppercase mb-3">Shipping</h5>

                <div class="mb-4 pb-2">
                  <select class="select">
                    <option value="1">Inside Dhaka- 80 TK</option>
                    <!-- <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option> -->
                  </select>
                </div>

                <h5 class="text-uppercase mb-3">Give code</h5>

                <div class="mb-5">
                  <div class="form-outline">
                    <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Examplea2">Enter your code</label>
                  </div>
                </div>

                <hr class="my-4">

                <div class="d-flex justify-content-between mb-5">
                  <h5 id="totalPriceElement" class="text-uppercase">Total price</h5>
                  <h5><?php echo 80+$_SESSION['totalPrice']?> TK</h5>
                </div>

                <a href="billing_adress.php?id=<?php echo $_SESSION['product_id'];  ?>"> <button type="button" class="btn btn-dark btn-block btn-lg click" data-mdb-ripple-color="dark">Proceed to Checkout</button></a>



                <script>
                  // JavaScript
                  'use strict';

                  // Get the quantity input and total price element
                  const quantityInput = document.getElementById('quantityInput');
                  const totalPriceElement = document.getElementById('totalPriceElement');
                  let toPrice= document.querySelector('.toPrice');
                  // Get the initial product price from PHP
                  let productPrice = <?php echo $product['price']; ?>;

                  // Function to update the total price based on the quantity
                  function updateTotalPrice() {
                    // Get the current quantity value
                    const quantity = parseInt(quantityInput.value);

                    // Calculate the total price by multiplying the quantity with the product price
                    const totalPrice = productPrice * quantity;

                    // Update the total price element with the new value
                    totalPriceElement.textContent = `Total Price: $${totalPrice.toFixed(2)}`;
                    toPrice.textContent= totalPrice.toFixed(2);
                  }

                  // Add an event listener to the quantity input to listen for changes
                  quantityInput.addEventListener('input', updateTotalPrice);

                  // Call the updateTotalPrice function initially to show the total price for the default quantity
                  updateTotalPrice();
                </script>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</section>








<?php include "include/footer.php" ?>