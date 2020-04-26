<!-- Checking the email and token in order to send the users the reset password url -->

<?php
    if (isset($_GET["email"]) && isset($_GET["token"])) {
        require 'includes/dbh.inc.php';

        $email = $conn->real_escape_string($_GET["email"]);
        $token = $conn->real_escape_string($_GET["token"]);

        $data = $conn->query("SELECT idUsers FROM users WHERE emailUsers='$email' AND token='$token'");

        if ($data->num_rows > 0) {
            // creating random strings for new password
            $str = "0123456789qwertyuiopasdfghjklzxcvbnm";
            // shuffle the random strings for unique password
            $str = str_shuffle($str);
            // creating the random shuffled password of 15 character for users
            $str = substr($str, 0, 15);

            $password = sha1($str);
            // updating the user password with generated password and removing the token to null to prevent further passowrd request
            $conn->query("UPDATE users SET pwdUsers = '$password', token='' WHERE emailUsers='$email'");
        // echo "Your new password is : $str";
        } else {
            $error = "Please check your link!";
        }
    } else {
        header("Location: index.php");
        exit();
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

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Please Keep your new password safe and use it for login. </h1>
                <P>We are updating the system. In the new system you'll be able to change your own password.</P>
              </div>
              
            
              <form class="user" action="index.php" method="POST">

                  <div class="form-group">
                    <label style="color: red;">Your New Password </label>
                    <input  style="color: red;" type="text" class="form-control form-control-user" id="exampleFirstName" name="pwd" value="<?php echo $str; ?>">

                  
                  <!-- <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="exampleLastName" name="pwd-repeat" placeholder="Repeat Password">
                  </div> -->
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block" name="signup-submit" >
                  Login Now
                </button>
                <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
                <hr>
               
              </form>
              <hr>
              
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
