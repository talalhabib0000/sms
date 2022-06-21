<?php include("../includes/config.php");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>School Management System</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">  
<?php
 include("sidebar-parent.php");
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
            <h1>View Attendence</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Attendence</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    
      
              <div class="card-header border-transparent">
                <h3 class="card-title">Attendence Record</h3>

               
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Student Name</th>
                      <th>Week1</th>
                      <th>Week2</th>
                      <th>Week3</th>
                      <th>Week4</th>
                      <th>Week5</th>
                      <th>Week6</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>Hamza</td>
                      <td>P</td>
                      <td>A</td>
                      <td>P</td>
                      <td>A</td>
                      <td>P</td>
                      <td>P</td>
                    </tr>
                    <tr>
                      <td>Ahmed</td>
                      <td>P</td>
                      <td>A</td>
                      <td>P</td>
                      <td>A</td>
                      <td>P</td>
                      <td>P</td>
                      
                    </tr>
                    <tr>
                      <td>Raheel</td>
                      <td>P</td>
                      <td>A</td>
                      <td>P</td>
                      <td>A</td>
                      <td>P</td>
                      <td>P</td>
                    </tr>
                    <tr>
                      <td>Talal</td>
                      <td>P</td>
                      <td>A</td>
                      <td>P</td>
                      <td>A</td>
                      <td>P</td>
                      <td>P</td>
                    </tr>
                    <tr>
                      <td>Hamza</td>
                      <td>P</td>
                      <td>A</td>
                      <td>P</td>
                      <td>A</td>
                      <td>P</td>
                      <td>P</td>
                    </tr>
                    <tr>
                      <td>Ali</td>
                      <td>P</td>
                      <td>A</td>
                      <td>P</td>
                      <td>A</td>
                      <td>P</td>
                      <td>P</td>
                    </tr>
                    <tr>
                      <td>Musa</td>
                      <td>P</td>
                      <td>A</td>
                      <td>P</td>
                      <td>A</td>
                      <td>P</td>
                      <td>P</td>
                    </tr>
                    <tr>
                      <td>Hamza</td>
                      <td>P</td>
                      <td>A</td>
                      <td>P</td>
                      <td>A</td>
                      <td>P</td>
                      <td>P</td>
                    </tr>
                      
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                
                <a href="detail-orders.php" class="btn btn-sm btn-secondary float-right">View All Attendence</a>
              </div>
              <!-- /.card-footer -->
           

 
  <!-- /.content-wrapper -->




<!-- ./wrapper -->

<!-- jQuery -->

</body>
<?php
 include("footer.php");
 ?>
</html>
