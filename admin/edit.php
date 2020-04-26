<!-- Using GET method to aquire the id from user to edit the data from database -->

<?php
  session_start();
  include 'includes/dbh.inc.php';
 
  //get ID from database
    $editid = $_GET['edit_id'];

    if (!isset($_GET['edit_id']) || empty($_GET['edit_id'])) {
        header("location: tables.php");
    }
    $sql = "SELECT * FROM booking WHERE user_ID = '{$editid}'";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $row = mysqli_fetch_array($result);

  
  //update information
  if ($_POST) {
      $user_ID = $_POST['ID'];
      $user_fullname = $_POST['fullname'];
      $user_email = $_POST['email'];
      $user_address = $_POST['address'];
      $user_country = $_POST['country'];
      $user_phone = $_POST['phone'];
      $user_trekname = $_POST['trekname'];
      $user_trekdate = $_POST['trekdate'];
      $user_person = $_POST['person'];
      $update = "UPDATE booking SET user_fullname='{$user_fullname}', user_email='{$user_email}', user_address='{$user_address}', user_country='{$user_country}', user_phone='{$user_phone}', user_trekname='{$user_trekname}', user_trekdate='{$user_trekdate}', user_person='{$user_person}' WHERE `booking`.`user_ID`='{$user_ID}'";
      $up = mysqli_query($conn, $update);

    
      if ($up) {
          header("location: tables.php");
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

  <title>SB Admin 2 - Tables</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

   <!-- Page Wrapper -->
   <div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Admin Dashboard</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  

  <!-- Nav Item - Tables -->
  <li class="nav-item active">
    <a class="nav-link" href="tables.html">
      <i class="fas fa-fw fa-table"></i>
      <span>Orders</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>

     
      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">
        <li> 
      <a class="btn btn-primary" href="includes/logout.inc.php">Logout</a> </li>
      </ul>

    </nav>
    <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          

        </div>
     
        <!-- /.container-fluid -->
       
        </div>
       

            <div class="card-body">
                    <form class="form" role="form" autocomplete="off" action="" method="POST">
                        <div class="form-group row">
                            
                            <div class="col-lg-9">
                                <input type="hidden" class="form-control" name="ID"  value="<?php echo $row['user_ID']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Full name</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="fullname"  value="<?php echo $row['user_fullname']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">E-mail</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" name="email"  value="<?php echo $row['user_email']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Address</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="address"  value="<?php echo $row['user_address']; ?>">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Trek Name</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="trekname" value="<?php echo $row['user_trekname']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Trek Date</label>
                            <div class="col-lg-9">
                                <input type="date" class="form-control" name="trekdate" value="<?php echo $row['user_trekdate']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Phone</label>
                            <div class="col-lg-9">
                                <input type="phone" class="form-control" name="phone" value="<?php echo $row['user_phone']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Country</label>
                            <div class="col-lg-9">
                                <input type="country" class="form-control" name="country" value="<?php echo $row['user_country']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">No. of People</label>
                            <div class="col-lg-9">
                                <input type="country" name="person" class="form-control" value="<?php echo $row['user_person']; ?>">
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                <input type="submit" class="btn btn-primary" id="btn-update"  name="btn-update" value="Update" onClick="update()">
                            </div>
                        </div>
                    </form>
                </div>
	<!-- Delete Modal HTML -->
  </div>
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
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

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  <script>
    function update(){
      var x;
      if(confirm("Updated data Successfully") == true){
        x = "update";
      }
    }
  </script>

</body>

</html>
