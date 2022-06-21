<?php
session_start();
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
 include("sidebar-student.php");
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
            <h1>All Complains</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Complains</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
   

    <section class="content">
      <div class="container mt-3">
          <h5>All Complains</h5>
          <table class="table table-stripped">
             <tr>
                 <th>Complaint Against</th>
                 <th>Complainer Name</th>
                 <th>Complain</th>
                 <th>Date</th>
                 
             </tr>  

                  
                  <tr>
                    <td>Ahmed</td>
                    <td>Ali</td>
                    <td>Slow Service</td>
                    <td>10th march 2023</td>
                  </tr>
                  <tr>
                    <td>Hamza</td>
                    <td>Musa</td>
                    <td>No Responce</td>
                    <td>10th march 2023</td>
                  </tr>
                  <tr>
                    <td>Ahmed</td>
                    <td>Ali</td>
                    <td>Slow Service</td>
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

















