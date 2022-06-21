<?php
session_start();
//echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';exit;
//echo '<pre>'; print_r($_SESSION["uid"]);exit;

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>School Management System </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
<?php
 include("sidebarmanage.php");
 ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Salary</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Slaray</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="container mt-3">
          <h5>Manage Salary</h5>
          <table class="table table-stripped">
             <tr>
                 <th>Employ ID</th>
                 <th>Employ Name</th>
                 <th>Employ Role</th>
                 <th>Salary</th>
                 <th>Salary status</th>
                 <th>Date</th>
                 
             </tr>  

                  
                  <tr>
                    <td>910</td>
                    <td>Ali</td>
                    <td>Teacher</td>
                    <td>10 lac</td>
                    <td>Paid/Unpaid</td>
                    <td>10th march 2023</td>
                  </tr>
                  <tr>
                    <td>910</td>
                    <td>Ali</td>
                    <td>Teacher</td>
                    <td>10 lac</td>
                    <td>Paid/Unpaid</td>
                    <td>10th march 2023</td>
                  </tr>
                  <tr>
                    <td>910</td>
                    <td>Ali</td>
                    <td>Teacher</td>
                    <td>10 lac</td>
                    <td>Paid/Unpaid</td>
                    <td>10th march 2023</td>
                  </tr>
                  <tr>
                    <td>910</td>
                    <td>Ali</td>
                    <td>Teacher</td>
                    <td>10 lac</td>
                    <td>Paid/Unpaid</td>
                    <td>10th march 2023</td>
                  </tr>
                  <tr>
                    <td>910</td>
                    <td>Ali</td>
                    <td>Teacher</td>
                    <td>10 lac</td>
                    <td>Paid/Unpaid</td>
                    <td>10th march 2023</td>
                  </tr>
                  <tr>
                    <td>910</td>
                    <td>Ali</td>
                    <td>Teacher</td>
                    <td>10 lac</td>
                    <td>Paid/Unpaid</td>
                    <td>10th march 2023</td>
                  </tr>

                         
          </table>
      </div>

    </section>
   

  
  
       <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


</body>
	  	<?php
 include("../web/footer.php");
 ?>
</html>

















