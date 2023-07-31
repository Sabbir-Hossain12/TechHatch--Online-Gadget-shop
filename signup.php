<?php include "include/header.php" ?>


<?php
$name = $email = $password = $repassword = $check = '';
$nameErr = $emailErr = $passwordErr = $repass = $checkErr = '';

if (isset($_POST['submit'])) {
  // validate name
  if (empty($_POST['name'])) {
    $nameErr = "name is required";
  } else {
    $name = htmlspecialchars($_POST['name']);
  }

  // validate email
  if (empty($_POST['email'])) {
    $emailErr = "email is required";
  } else {
    $email = htmlspecialchars($_POST['email']);
  }

  // validate password

  if (empty($_POST['password'])) {
    $passwordErr = "password is required";
  } else {
    $password = htmlspecialchars($_POST['password']);
  }

  // validate repeat pass
  if (empty($_POST['repassword'])) {
    $repasswordErr = "password is required";
  } else {
    $repassword = htmlspecialchars($_POST['repassword']);
  }

  // validate checkbox
  if (empty($_POST['check'])) {
    $checkErr = "check is required";
  } else {
    $check = htmlspecialchars($_POST['check']);
  }

  if (empty($nameErr) && empty($emailErr) && empty($passwordErr) && empty($checkErr) && ($password == $repassword)) {

    $checkEmailQuery = "SELECT COUNT(*) as count FROM signup WHERE email = '$email'";
    $result = mysqli_query($conn, $checkEmailQuery);
    $row = mysqli_fetch_assoc($result);
    if ($row['count'] > 0) 
    {
      // If the email already exists, display an error message
      $email_Err = "Email address is already registered.";
      echo '<div class="alert alert-warning" role="alert">
      Email address is already registered!
          </div>';
    } else {
      $sql = "INSERT INTO signup (name,email,password) values ('$name','$email', '$password') ";

      if (mysqli_query($conn, $sql)) {

        header("location: login.php");
        exit;
      } else {
        echo "error" . mysqli_error($conn);
      }
    }
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

<body>


  <main>
    <?php
    if (isset($_POST['submit'])) {
      $credentialsMatch = false; {
        if ($password == $repassword) {
          $credentialsMatch = true;
        }
      }

      if (!$credentialsMatch) {
        echo '<div class="alert alert-warning" role="alert">
            Password and Repeat password must match!
          </div>';
      }
    }
    ?>
    <section class="vh-100 sign-up">

      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-lg-12 col-xl-11">
            <div class="card text-black" style="border-radius: 25px;">
              <div class="card-body p-md-5">
                <div class="row justify-content-center">
                  <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="mx-1 mx-md-4">

                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          <label class="form-label" for="form3Example1c">Your Name</label>
                          <input type="text" id="form3Example1c validationServer01" name="name" class="form-control" required>

                          <div id="validationServerUsernameFeedback" class=" <?php echo $name ? 'valid-feedback' : 'invalid-feedback'; ?>">
                            <?php echo $name ? 'Looks good!' : 'Please choose a username.'; ?>
                          </div>
                        </div>
                      </div>

                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          <label class="form-label" for="form3Example3c">Your Email</label>
                          <input type="email" id="form3Example3c" name="email" class="form-control " required>

                          <div id="validationServerUsernameFeedback" class=" <?php echo $email ? 'valid-feedback' : 'invalid-feedback'; ?>">
                            <?php echo $email ? 'Looks good!' : 'Please choose a Email.'; ?>
                          </div>
                        </div>
                      </div>

                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          <label class="form-label" for="form3Example4c">Password</label>
                          <input type="password" id="form3Example4c" name="password" class="form-control" required />
                          <div id="validationServerUsernameFeedback" class=" <?php echo $password && ($password == $repassword) ? 'valid-feedback' : 'invalid-feedback'; ?>">
                            <?php echo ($password && ($password == $repassword)) ? 'Looks good!' : 'Invalid Password '; ?>
                          </div>
                        </div>
                      </div>

                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          <label class="form-label" for="form3Example4cd">Repeat your password</label>
                          <input type="password" id="form3Example4cd" name="repassword" class="form-control " required />
                          <div id="validationServerUsernameFeedback" class=" <?php echo $repassword && ($password == $repassword) ? 'valid-feedback' : 'invalid-feedback'; ?>">
                            <?php echo $repassword && ($password == $repassword) ? 'Looks good!' : 'Invalid Password '; ?>
                          </div>
                        </div>
                      </div>

                      <div class="form-check d-flex justify-content-center mb-5">
                        <input class="form-check-input me-2" type="checkbox" value="check" name="check" id="form2Example3c" required />
                        <label class="form-check-label" for="form2Example3">
                          I agree all statements in <a href="#!">Terms of service</a>
                        </label>

                      </div>


                      <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg bg-dark">Register</button>
                      </div>

                    </form>

                  </div>
                  <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                    <img src="image/signup.jpg" class="img-signup" alt="Sample image">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include "include/footer.php" ?>

</body>

</html>