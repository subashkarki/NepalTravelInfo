<!-- creating a secure system for login  -->

<?php
session_start();
// If user is still logged in or season is active grant the tables.php page
if (isset($_SESSION["uidUsers"]) && isset($_SESSION["loggedIn"])) {
    header("Location: tables.php");
    exit();
}
if (isset($_POST["logIn"])) {
    require 'includes/dbh.inc.php';

    $uidUsers = $conn->real_escape_string($_POST["uidUsers"]);
    // hashing the password
    $pwdUsers = sha1($conn->real_escape_string($_POST["pwdUsers"]));

    $data = $conn->query("SELECT uidUsers FROM users WHERE uidUsers='$uidUsers' AND pwdUsers='$pwdUsers'");
    // var_dump($data);
    if ($data->num_rows > 0) {
        // echo "correct";
        $_SESSION["uidUsers"] = $uidUsers;
        $_SESSION["loggedIn"] = 1;

        header("Location: tables.php");
        exit();
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

  <title>SB Admin 2 - Login</title>

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
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form class="user" action = "index.php" method = "post">
                    <div class="form-group">
                      <input type="text" name="uidUsers" class="form-control form-control-user" id="exampleInputEmail" placeholder="User Name">
                    </div>
                    <div class="form-group">
                      <input type="password" name="pwdUsers" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    
                    <input class="btn btn-primary btn-user btn-block" type="submit" name="logIn" value="Login">
                  
                    
                    <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo($error); ?></div>
                    
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.php">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="signup.php">Create an Account!</a>
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
