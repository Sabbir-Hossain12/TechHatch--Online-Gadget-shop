<?php include "include/header.php"  ?>

<?php
// if there is id in the URL & it is a number.
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
  $product_id = $_GET['id'];
  $_SESSION['product_id']= $product_id;
  // Fetch product details from the database using $product_id
  // if this id and database product id mathes, we the fetch the product info from database.
  $sql = "SELECT * FROM product WHERE id = $product_id";
  $result = mysqli_query($conn, $sql);
  $product = mysqli_fetch_assoc($result);
  
}


// insert order details into the database.
$shipping=80;
$fname = $lname = $address = $email = $phone = $info = $pname = '';
$fnameErr = $lnameErr = $addressErr = $emailErr = $phoneErr = $infoErr = '';

if (isset($_POST['submit'])) {


  // Insert first name
  if (empty($_POST['fname'])) {
    $fnameErr = "Enter first name";
  } else {
    $fname = htmlspecialchars($_POST['fname']);
  }
  // Insert last name
  if (empty($_POST['lname'])) {
    $lnameErr = "Enter first name";
  } else {
    $lname = htmlspecialchars($_POST['lname']);
  }

  // Insert address name
  if (empty($_POST['address'])) {
    $addressErr = "Enter address";
  } else {
    $address = htmlspecialchars($_POST['address']);
  }
  // Insert Phone
  if (empty($_POST['phone'])) {
    $phoneErr = "Enter phone";
  } else {
    $phone = htmlspecialchars($_POST['phone']);
  }
  // Insert Email
  if (empty($_POST['email'])) {
    $emailErr = "Enter email";
  } else {
    $email = htmlspecialchars($_POST['email']);
  }
  // Insert additional Information
  if (empty($_POST['info'])) {
    $infoErr = "Enter info";
  } else {
    $info = htmlspecialchars($_POST['info']);
  }
  $pId= $_POST['pId'];
  $pname = $_POST['pname'];
  $quantity= htmlspecialchars($_POST['quantity']);
  $totalPrice=$shipping+htmlspecialchars($_POST['totalPrice']);

  if (empty($fnameErr) && empty($lnameErr) &&  empty($addressErr) && empty($emailErr) && empty($phoneErr) && empty($infoErr)) 
  {
    $sql = "INSERT INTO orders (product_id,f_name,l_name,feedback,address,email,phone,product_name,quantity,total_price) values ('$pId','$fname','$lname','$info','$address', '$email','$phone','$pname','$quantity','$totalPrice')";
    if (mysqli_query($conn, $sql)) {
      session_start();
      $_SESSION['product_id']=$pId;
      $_SESSION['first_name']= $fname;
      $_SESSION['product_name']= $pname ;
      // $_SESSION['product_quantity']= $quantity;
      // $_SESSION['total_price']= $totalPrice;

      header("location: orderSuccess.php");
    } else {
      echo "Error";
    }
  }
  // $sql= "SELECT order_id from orders";
  // $result=mysqli_query($conn,$sql);
  // $order_id= mysqli_fetch_assoc($result);

  // echo $order_id['order_id'];
}


// echo $order_id['order_id'];
// echo $_SESSION['product_id'];
?>



<section>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-8 mb-4">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0 text-center">Biling details</h5>
          </div>
          <div class="card-body">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
              <div class="d-flex justify-content-between gap-5">
                 <!-- read only product name and quantity -->
                 <div class="form-outline mb-4">
                  <input type="text" id="form7Example7" class="form-control" name="pId" value="<?php echo $_SESSION['product_id'] ?>" readonly />
                  <label class="form-label" for="form7Example7">Product ID</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" id="form7Example7" class="form-control" name="pname" value="<?php echo $product['product_name']; ?>" readonly />
                  <label class="form-label" for="form7Example7">Product Name</label>
                </div>
                
                <div class="form-outline mb-4">
                  <input type="text" id="form7Example7" class="form-control" name="quantity" value="<?php echo $_SESSION['order_quantity']; ?>" readonly />
                  <label class="form-label" for="form7Example7">Quantity</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" id="form7Example7" class="form-control" name="totalPrice" value="<?php echo $_SESSION['totalPrice'] ?>" readonly />
                  <label class="form-label" for="form7Example7">Product Price</label>
                </div>
              </div>
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row mb-4">
                <div class="col">
                  <div class="form-outline">
                    <input type="text" id="form7Example1" class="form-control" name="fname" />
                    <label class="form-label" for="form7Example1">First name</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-outline">
                    <input type="text" id="form7Example2" class="form-control" name="lname" />
                    <label class="form-label" for="form7Example2">Last name</label>
                  </div>
                </div>
              </div>

              <!-- Text input -->
              <!-- <div class="form-outline mb-4">
                <input type="text" id="form7Example3" class="form-control" />
                <label class="form-label" for="form7Example3">Company name</label>
              </div> -->

              <!-- Text input -->
              <div class="form-outline mb-4">
                <input type="text" id="form7Example4" class="form-control" name="address" />
                <label class="form-label" for="form7Example4">Address</label>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="form7Example5" class="form-control" name="email" />
                <label class="form-label" for="form7Example5">Email</label>
              </div>

              <!-- Number input -->
              <div class="form-outline mb-4">
                <input type="number" id="form7Example6" class="form-control" name="phone" required />
                <label class="form-label" for="form7Example6">Phone</label>
              </div>

              <!-- Message input -->
              <div class="form-outline mb-4">
                <textarea class="form-control" id="form7Example7" rows="4" name="info"></textarea>
                <label class="form-label" for="form7Example7">Additional information</label>
              </div>

              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-center mb-2">
                <input class="form-check-input me-2" type="checkbox" value="" id="form7Example8" checked />
                <label class="form-check-label" for="form7Example8">
                  Create an account?
                </label>
              </div>
              <!-- </form> -->
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Summary</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                <?php echo $product['product_name']; ?>
                <span><?php echo $_SESSION['order_quantity'].'X'.$product['price']; ?></span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                Shipping
                <span>80 TK</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Total amount</strong>
                  <strong>
                    <p class="mb-0">(including VAT)</p>
                  </strong>
                </div>
                <span><strong><?php echo $shipping+$_SESSION['totalPrice']; ?></strong></span>
              </li>
            </ul>

           <a href="orderSuccess.php?id=<?php echo $_SESSION['product_id'];  ?>">   <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit"> 
              Confirm Order
            </button>  </a>

          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</section>



<?php include "include/footer.php"  ?>