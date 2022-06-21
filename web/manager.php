
<?php include("../includes/config.php");
 $id = $_SESSION['uid'];
 //echo $id;exit;
   if(empty($id)){
    header("Location:../index.php");
      
   }
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
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">  

</head>
<?php
 include("sidebarmanage.php");
 ?>

 
<body class="hold-transition sidebar-mini layout-fixed ">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">SMS</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
       <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">


              <h3><sup style="font-size: 20px">A</sup></h3>
                <p>Add User</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="add-user.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><sup style="font-size: 20px">H</sup></h3>

                <p>Suspend User</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="suspend-user.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>V</h3>

                <p>View Complains</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="viewcomplainsadmin.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                 <h3><a href="loggoff.php">Logout</h3>

                <p>...</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href= "../index.php"  class="small-box-footer"> Are you sure? <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
            <!-- /.card -->


            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Complanis</h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>

              <div class="card-body table-responsive p-0">
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

    </section    
                         
          </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
         
            <!-- /.card -->


                <!-- /.d-flex -->
              </div>
            </div>
          
		  
       <!-- ./wrapper -->


</div>


  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  
 
</body>
<?php
 include("footer.php");
 ?>
</html>


