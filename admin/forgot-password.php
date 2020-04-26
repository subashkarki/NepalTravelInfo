<!-- program to send users a unique url to reset new password which is linked with unique token -->

<?php


  if (isset($_POST["reset-request-submit"])) {
      require 'includes/dbh.inc.php';
      $email = $conn->real_escape_string($_POST["email"]);

      $data = $conn->query("SELECT idUsers FROM users WHERE emailUsers='$email'");

      if ($data->num_rows > 0) {
          // generating random strings for token
          $str = "0123456789qertyuiiopasdfghjklzxcvbnm";
          $str = str_shuffle($str);
          // generating 10 digit randomly shuffled token for unique values
          $str = substr($str, 0, 10);
          $url = "http://subash-subkar16655255.codeanyapp.com:3000/Nepal%20Travel%20Info/admin/resetPassword.php?token=$str&email=$email";
          
          // sending email along with subject and body message with URL to reset the user password
          mail($email, "Reset Password For Travel Nepal Info", "To reset your password, please visit this: $url", "From: karkisubash122@gmail.com\r\n");

          // updating the database with new randomly generated token for validating the reset password URL
          $conn->query("UPDATE users SET token='$str' WHERE emailUsers='$email'");

          $error = "Please Check your email!";
      } else {
          $error = "Please check your inputs!";
      }
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Forgot Password</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                    <p class="mb-4">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
                  </div>
                  <form class="user" action="forgot-password.php" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block" name="reset-request-submit">
                      Reset Password
                    </button>

                    <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
                  </form>
                  
                  <hr>
                  <div class="text-center">
                    <a class="small" href="signup.php">Create an Account!</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="index.php">Already have an account? Login!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
