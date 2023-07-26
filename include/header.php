 <?php include "include/bootstrap.php" ?> 
<?php include "include/database.php" ?>

<?php
session_start();




?>

<header class="p-3 text-bg-dark">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
          <use xlink:href="#bootstrap" />
        </svg>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="inde.php" class="nav-link px-2 text-white">Home</a></li>
        <li><a href="product.php" class="nav-link px-2 text-white">Products</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
        <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
        <li><a href="#" class="nav-link px-2 text-white">About Us</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown" aria-expanded="false">Catagories</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Headphone</a></li>
            <li><a class="dropdown-item" href="#">laptops</a></li>
            <li><a class="dropdown-item" href="#">Camera</a></li>
            <li><a class="dropdown-item" href="#">Smart Gadgets</a></li>
          </ul>
        </li>

        <?php


        if (isset($_SESSION['email']))

          echo '<li><a href="#" class="nav-link px-2 text-white">Welcome ' . $_SESSION['email'] . ' </a></li>';




        ?>
      </ul>

      <!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-light" placeholder="Search..." aria-label="Search">
        </form> -->

      <button type="submit" name="admin_panel" class="btn btn-secondary btn-outline-light me-2"><a class="nav-link px-2 " href="admin_panel.php">Admin Panel</a></button>
      <div class="text-end">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> ">
          <?php

          if (isset($_SESSION['email'])) {


            echo   '<button type="submit" name="logout" class="btn btn-outline-light me-2"><a class="nav-link px-2 " href="logout.php">Log out</a></button>';
          } else {
            echo   '<button type="button"  class="btn btn-outline-light me-2"><a class="nav-link px-2 " href="login.php">Login</a></button>';
          }

          ?>

          <?php
          if (!isset($_SESSION['email'])) {

            echo       '<button type="button" class="btn btn-warning" ><a class="nav-link px-2 " href="signup.php">Sign-up</a></button>';
          }

          ?>
        </form>
      </div>
    </div>
  </div>
</header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>