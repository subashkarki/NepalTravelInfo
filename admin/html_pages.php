<!-- creating fucntion for different tabs of dashboard  -->

<?php

function user_dashboard()
{
    ?>

<?php
session_start(); ?>
<?php
  
  include 'includes/dbh.inc.php';

    $sql = "SELECT * FROM booking";
    $result = $conn->query($sql); ?>

<!-- User Dashboard -->
 <!-- Page Wrapper -->
 <div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3"><?php echo $_SESSION["uidUsers"]; ?> Dashboard</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  

  <!-- Nav Item - Tables -->
  <li class="nav-item active">
    <a class="nav-link" href="tables.php">
      <i class="fas fa-fw fa-table"></i>
      <span>Orders</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="enquiry.php">
      <i class="fas fa-fw fa-table"></i>
      <span>Enquiry</span></a>
  </li>
  <li class="nav-item ">
      <a class="nav-link" href="contact.php">
        <i class="fas fa-fw fa-table"></i>
        <span>Contact</span></a>
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

      
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Orders Details</h6>
        </div>
        
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Order No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Country</th>
                  <th>Phone Number</th>
                  <th>Trek Name</th>
                  <th>Trek Date</th>
                  <th>No of person</th>
                  <th></th>
                </tr>
              </thead>
          
              <tbody>
                <?php
                //fetch data from database
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
               <tr>
                <td><?php echo $row['user_ID']; ?></td>
                 <td><?php echo $row['user_fullname']; ?></td>
                 <td><?php echo $row['user_email']; ?></td>
                 <td><?php echo $row['user_address']; ?></td>
                 <td><?php echo $row['user_country']; ?></td>
                 <td><?php echo $row['user_phone']; ?></td>
                 <td><?php echo $row['user_trekname']; ?></td>
                 <td><?php echo $row['user_trekdate']; ?></td>
                 <td><?php echo $row['user_person']; ?></td>
                 <td><a href="edit.php?edit_id=<?php echo $row['user_ID']; ?>" class="edit" alt="edit">EDIT</a>
                   <input type="button" class="delete" onClick="deleteme(<?php echo $row['user_ID']; ?>)" name="Delete" value="Delete">
                    </td>
                </tr>
                <?php
                    }
                } else {
                    ?>
                  <tr>
                    <th colspan ="2">There's No data found !!! </th>
                </tr>
                <?php
                } ?>
               </tbody>
            
            </table>
          </div>
        
      
        </div>
            
        

       
      </div>

    </div>
    <!-- /.container-fluid -->
                <!-- Edit Modal HTML -->


  </div>
  <!-- End of Main Content -->

  <!-- Footer -->
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; Nepal Travel Info</span>
      </div>
    </div>
  </footer>
  <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
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
  <script language="javascript">
    function deleteme(delid) {
      if(confirm("Do you want Delete")){
        window.location.href='delete.php?del_id=' +delid+'';
        return true;
      }
    }
  </script>
<?php
}
?>

<!-- ================================================================================= -->

<?php
function user_enquiry()
{
    ?>
  
<?php
session_start(); ?>
  <?php
    
    include 'includes/dbh.inc.php';
  
    $sql = "SELECT * FROM enquiry";
    $result = $conn->query($sql); ?>
  
  <!-- User Dashboard -->
   <!-- Page Wrapper -->
   <div id="wrapper">
  
  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3"> <?php echo $_SESSION["uidUsers"]; ?> Dashboard</div>
    </a>
  
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
  
    <!-- Nav Item - Dashboard -->
    
  
    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="tables.php">
        <i class="fas fa-fw fa-table"></i>
        <span>Orders</span></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="enquiry.php">
        <i class="fas fa-fw fa-table"></i>
        <span>Enquiry</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.php">
        <i class="fas fa-fw fa-table"></i>
        <span>Contact</span></a>
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
  
       
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Enqyiry Details</h6>
          </div>
          
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Enquiry No</th>
                    <th>Full Name</th>
                    <th>City</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Message</th>
                    <th></th>
                    
                  </tr>
                </thead>
            
                <tbody>
                  <?php
                  //fetch data from database
                  if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                          ?>
                 <tr>
                  <td><?php echo $row['enquiry_no']; ?></td>
                   <td><?php echo $row['user_fullname']; ?></td>
                   <td><?php echo $row['user_city']; ?></td>
                   <td><?php echo $row['user_email']; ?></td>
                   <td><?php echo $row['user_phone']; ?></td>
                   <td><?php echo $row['user_message']; ?></td>
                   <td><input type="button" class="delete" onClick="deleteme(<?php echo $row['user_ID']; ?>)" name="Delete" value="Delete"></td>
                  </tr>
                  <?php
                      }
                  } else {
                      ?>
                    <tr>
                      <th colspan ="2">There's No data found !!! </th>
                  </tr>
                  <?php
                  } ?>
                 </tbody>
              
              </table>
            </div>
          
        
          </div>
              
          
  
         
        </div>
  
      </div>
      <!-- /.container-fluid -->
                  <!-- Edit Modal HTML -->
  
  
    </div>
    <!-- End of Main Content -->
  
    <!-- Footer -->
    <footer class="sticky-footer bg-white">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright &copy; Nepal Travel Info</span>
        </div>
      </div>
    </footer>
    <!-- End of Footer -->
  
  </div>
  <!-- End of Content Wrapper -->
  
  </div>
  <!-- End of Page Wrapper -->
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
    <script language="javascript">
      function deleteme(delid) {
        if(confirm("Do you want Delete")){
          window.location.href='delete.php?del_id=' +delid+'';
          return true;
        }
      }
    </script>
  <?php
}
?>

<!-- ================================================================================= -->

<?php
function user_contact()
{
    ?>
  
  <?php
  session_start(); ?>
  <?php
    
    include 'includes/dbh.inc.php';
  
    $sql = "SELECT * FROM contact";
    $result = $conn->query($sql); ?>
  
  <!-- User Dashboard -->
   <!-- Page Wrapper -->
   <div id="wrapper">
  
  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3"><?php echo $_SESSION["uidUsers"]; ?> Dashboard</div>
    </a>
  
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
  
    <!-- Nav Item - Dashboard -->
    
  
    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="tables.php">
        <i class="fas fa-fw fa-table"></i>
        <span>Orders</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="enquiry.php">
        <i class="fas fa-fw fa-table"></i>
        <span>Enquiry</span></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="contact.php">
        <i class="fas fa-fw fa-table"></i>
        <span>Contact</span></a>
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
  
       
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Contact Details</h6>
          </div>
          
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Message</th>
                    
                  </tr>
                </thead>
            
                <tbody>
                  <?php
                  //fetch data from database
                  if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                          ?>
                 <tr>
                   <td><?php echo $row['firstName']; ?></td>
                   <td><?php echo $row['lastName']; ?></td>
                   <td><?php echo $row['email']; ?></td>
                   <td><?php echo $row['phoneNumber']; ?></td>
                   <td><?php echo $row['message']; ?></td>
                   
                  </tr>
                  <?php
                      }
                  } else {
                      ?>
                    <tr>
                      <th colspan ="2">There's No data found !!! </th>
                  </tr>
                  <?php
                  } ?>
                 </tbody>
              
              </table>
            </div>
          
        
          </div>
              
          
  
         
        </div>
  
      </div>
      <!-- /.container-fluid -->
                  <!-- Edit Modal HTML -->
  
  
    </div>
    <!-- End of Main Content -->
  
    <!-- Footer -->
    <footer class="sticky-footer bg-white">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright &copy; Nepal Travel Info</span>
        </div>
      </div>
    </footer>
    <!-- End of Footer -->
  
  </div>
  <!-- End of Content Wrapper -->
  
  </div>
  <!-- End of Page Wrapper -->
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
    <script language="javascript">
      function deleteme(delid) {
        if(confirm("Do you want Delete")){
          window.location.href='delete.php?del_id=' +delid+'';
          return true;
        }
      }
    </script>
  <?php
}
?>