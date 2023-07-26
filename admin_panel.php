<?php include "include/bootstrap.php" ?>
<?php include "include/database.php" ?>

<?php

$pname=$ptype=$brand=$pimage=$catagory=$quantity=$price='';
$pnameErr=$ptypeErr=$brandErr=$pimageErr=$catagoryErr=$quantityErr=$priceErr='';
// validate form
if(isset($_POST['submit']))
{
// validate product name
if(empty($_POST['pname']))
{
  $pnameErr="Enter product name";
}
else
{
  $pname= htmlspecialchars($_POST['pname']);
}
// validate product type
if(empty($_POST['ptype']))
{
  $ptypeErr="Enter product name";
}
else
{
  $ptype= htmlspecialchars($_POST['ptype']);
}
// validate product brand
if(empty($_POST['brand']))
{
  $brandErr="Enter product name";
}
else
{
  $brand= htmlspecialchars($_POST['brand']);
}
// validate product catagory
if(empty($_POST['catagory']))
{
  $catagoryErr="Enter product name";
}
else
{
  $catagory= htmlspecialchars($_POST['catagory']);
}
// validate product quantity
if(empty($_POST['quantity']))
{
  $quantityErr="Enter product name";
}
else
{
  $quantity= htmlspecialchars($_POST['quantity']);
}
// validate product price
if(empty($_POST['price']))
{
  $priceErr="Enter product name";
}
else
{
  $price= htmlspecialchars($_POST['price']);
}


if(empty($_FILES['pimage']['name']))
{
  $pimageErr = "Upload product image";
}
else
{
  // Process the uploaded file
  // For example, you can move the uploaded file to a specific directory
  $targetDir = "image/";
  $targetFile = $targetDir . $_FILES['pimage']['name'];
  if (move_uploaded_file($_FILES['pimage']['tmp_name'], $targetFile)) {
    // File upload successful
    $pimage = $targetFile;
  } else {
    // File upload failed
    $pimageErr = "Failed to upload product image";
  }
}

if(empty($pnameErr) && empty($ptypeErr) && empty($brandErr) && empty($pimageErr) && empty($catagoryErr) && empty($quantityErr) && empty($priceErr))

{
  $sql= "INSERT INTO product(product_name,catagory,brand,quantity,product_type,price,img_data) values('$pname','$catagory','$brand','$quantity','$ptype','$price','$pimage')";

  if(mysqli_query($conn,$sql))
  {
  // header("location: inde.php");
  // echo "success"  ;
}
  
  else
  {
    echo "failed";
  }

}
else
{
  echo "$pname $ptype $brand $quantity $price";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body >
<?php include "include/header.php" ?>

<!-- Success massage if Product added successfully -->
<?php
if (isset($_POST['submit'])) {
  $credentialsMatch = false;

   {
    if (empty($pnameErr) && empty($ptypeErr) && empty($brandErr) && empty($pimageErr) && empty($catagoryErr) && empty($quantityErr) && empty($priceErr))  {
      $credentialsMatch = true;
      
    }
  }

  if ($credentialsMatch) {
    echo '<div class="alert alert-primary" role="alert">
    Success! Product Added
  </div>' ;
  }
}
?>

<main class="d-flex flex-row min-vh-90">
<section class="sidebar_admin d-flex flex-column flex-shrink-0 p-3 text-bg-dark " style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-4">Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="#" class="nav-link text-white" aria-current="page">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg>
          Home
        </a>
      </li>
      <li class="nav-item">
        <a href="admin_panel.php" class="nav-link active" aria-current="page">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg>
          Add Product
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
          Dashboard
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"/></svg>
          Orders
        </a>
      </li>
      <li>
        <a href="product.php" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
          Products
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
          Customers
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>mdo</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
  </section>


<section class="add_product container d-flex flex-column min-vh-100">
<!-- <h2 class="text-center">Add Products </h2>  -->
<h3 class="text-center pt-5"> Add products </h3>
<form action="admin_panel.php" method="POST" class="row g-3 mt-4 p-5" enctype="multipart/form-data" >
  
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Product Name</label>
    <input type="text" name="pname" class="form-control" id="validationDefault01" value="" placeholder="Enter Product Name" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">product type</label>
    <select  name="ptype" value="ptype" class="form-select" id="validationDefault04" required>
      <option selected disabled value="">Choose...</option>
      <option>Software</option>
      <option>Hardware</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Brand</label>
    <div class="input-group">
      <!-- <span class="input-group-text" id="inputGroupPrepend2">@</span> -->
      <select name="brand" value="brand" class="form-select" id="validationDefault04" required>
      <option selected disabled value="">Choose...</option>
      <option>Corsair</option>
      <option>Asus</option>

    </select>
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationDefault03" class="form-label">Product Image</label>
    <input name="pimage" value="pimage" type="file" class="form-control" id="validationDefault03" required>
  </div>
  <div class="col-md-3">
    <label for="validationDefault04" class="form-label">Catagory</label>
    <select name="catagory" value="catagory" class="form-select" id="validationDefault04" required>
      <option selected disabled value="">Choose...</option>
      <option>Headphone</option>
      <option>laptops</option>
      <option>Camera</option>
      <option>Smart Gadgets</option>

    </select>
  </div>
  <div class="col-md-3">
    <label for="validationDefault05" class="form-label">Quantity</label>
    <input type="text" class="form-control" name="quantity" value="" placeholder="Enter Quantity" id="validationDefault05" required>
  </div>
  <div class="col-md-3">
    <label for="validationDefault05" class="form-label">Price</label>
    <input type="text" class="form-control" name="price" value="" placeholder="Enter Price" id="validationDefault05" required>
  </div>
  <!-- <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div> -->
  <div class="col-12 ">
    <button class="btn btn-primary mt-3" type="submit" name="submit">Submit form</button>
  </div>
</form>
</section>
</main>



</body>
</html>