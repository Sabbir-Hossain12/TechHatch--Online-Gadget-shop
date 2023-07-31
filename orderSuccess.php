<?php include "include/header.php" ?>

<?php

// echo $_SESSION['product_id'];
  // Fetch product details from the database using $product_id
  // if this id and database product id mathes, we the fetch the product info from database.
  $sql = "SELECT * FROM orders WHERE product_id = {$_SESSION['product_id']}";

  $result = mysqli_query($conn, $sql);
  $order = mysqli_fetch_assoc($result);
  
  // echo $order['order_id'];
  // echo $order['address'];

?>

<div class="container mt-4 mb-4">
  <div class="row d-flex justify-content-center">
   <div class="col-md-8">

      <div class="card">

        <div class="invoice p-5">

          <h5>Your order Confirmed!</h5>

          <span class="font-weight-bold d-block mt-4">Hello, <?php echo $_SESSION['first_name']; ?></span>
          <span>You order has been confirmed and will be shipped soon!</span>

          <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">

            <table class="table table-borderless">

              <tbody>
                <tr>
                  <td>
                    <div class="py-2">

                      <span class="d-block text-muted">Order Date</span>
                      <span><?php echo $order['order_date']; ?></span>

                    </div>
                  </td>

                  <td>
                    <div class="py-2">

                      <span class="d-block text-muted">Order Id</span>
                      <span><?php echo $order['order_id']; ?></span>

                    </div>
                  </td>

                  <td>
                    <div class="py-2">

                      <span class="d-block text-muted">Payment</span>
                      <span>Cash on Delivery</span>

                    </div>
                  </td>

                  <td>
                    <div class="py-2">

                      <span class="d-block text-muted">Shiping Address</span>
                      <span><?php echo $order['address']; ?></span>

                    </div>
                  </td>
                </tr>
              </tbody>

            </table>





          </div>




          <div class="product border-bottom table-responsive">

            <table class="table table-borderless">

              <tbody>
                <tr>
                  <td width="20%">

                    <img src="<?php echo $_SESSION['img_data']; ?>" width="90">

                  </td>

                  <td width="60%">
                    <span class="font-weight-bold"><?php echo $order['product_name']; ?></span>
                    <div class="product-qty">
                      <span class="d-block">Quantity: <?php echo $_SESSION['order_quantity'] ?></span>
                      <span>Brand: <?php echo $_SESSION['brand']; ?></span>

                    </div>
                  </td>
                  <td width="20%">
                    <div class="text-right">
                      <span class="font-weight-bold"><?php echo $_SESSION['totalPrice']; ?> TK</span>
                    </div>
                  </td>
                </tr>


                <!-- <tr>
                  <td width="20%">

                    <img src="https://i.imgur.com/SmBOua9.jpg" width="70">

                  </td>

                  <td width="60%">
                    <span class="font-weight-bold">Men's Collar T-shirt</span>
                    <div class="product-qty">
                      <span class="d-block">Quantity:1</span>
                      <span>Color:Orange</span>

                    </div>
                  </td>
                  <td width="20%">
                    <div class="text-right">
                      <span class="font-weight-bold">$77.50</span>
                    </div>
                  </td>
                </tr> -->
              </tbody>

            </table>



          </div>



          <div class="row d-flex justify-content-end">

            <div class="col-md-5">

              <table class="table table-borderless">

                <tbody class="totals">
<!-- 
                  <tr>
                    <td>
                      <div class="text-left">

                        <span class="text-muted">Subtotal</span>

                      </div>
                    </td>
                    <td>
                      <div class="text-right">
                        <span>$168.50</span>
                      </div>
                    </td>
                  </tr> -->


                  <tr>
                    <td>
                      <div class="text-left">

                        <span class="text-muted">Shipping Fee</span>

                      </div>
                    </td>
                    <td>
                      <div class="text-right">
                        <span>80 TK</span>
                      </div>
                    </td>
                  </tr>


                  <tr>
                    <td>
                      <div class="text-left">

                        <span class="text-muted">Tax Fee</span>

                      </div>
                    </td>
                    <td>
                      <div class="text-right">
                        <span>0</span>
                      </div>
                    </td>
                  </tr>


                  <tr>
                    <td>
                      <div class="text-left">

                        <span class="text-muted">Discount</span>

                      </div>
                    </td>
                    <td>
                      <div class="text-right">
                        <span class="text-success">0</span>
                      </div>
                    </td>
                  </tr>


                  <tr class="border-top border-bottom">
                    <td>
                      <div class="text-left">

                        <span class="font-weight-bold">Subtotal</span>

                      </div>
                    </td>
                    <td>
                      <div class="text-right">
                        <span class="font-weight-bold"><?php echo 80+$_SESSION['totalPrice']; ?> TK</span>
                      </div>
                    </td>
                  </tr>

                </tbody>

              </table>

            </div>



          </div>


          <p>We will be sending shipping confirmation email when the item shipped successfully!</p>
          <p class="font-weight-bold mb-0">Thanks for shopping with us!</p>
          <span>Team TechHatch</span>





        </div>


        <div class="d-flex justify-content-between footer p-3">

          <span>Need Help? visit our <a href="#"> help center</a></span>
          <span>12 June, 2020</span>

        </div>




      </div>

    </div>

  </div>
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</div>

<?php include "include/footer.php" ?>