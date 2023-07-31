
<?php include "include/bootstrap.php" ?>
<?php include "include/database.php" ?>

<?php


  
  // unset($_SESSION['email']);
   session_start();
echo "you are logging out";
  unset($_SESSION['email']);
  // session_destroy();
  header("location:inde.php");
  



?>
