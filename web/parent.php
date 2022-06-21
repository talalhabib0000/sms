<?php include("../includes/config.php");
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
 include("sidebar-parent.php");
 ?>
</head>

<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini layout-fixed">

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

                
              <h2><sup style="font-size: 20px">C</sup></23>

                <p>Contact Faculty</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="parent-contact.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><sup style="font-size: 20px">C</sup></h3>

                <p>children grades</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="child-grade.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>A</h3>

                <p>Attendence Record</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="attendance-parent.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            
			<div class="small-box bg-danger">
              <div class="inner">
                 <h3>Logout</h3>

                <p>...</p>
				
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
             <a href="<?php /*echo path; */?>../index.php" class="small-box-footer">Are you sure? <i class="fas fa-arrow-circle-right"></i></a>
			
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
            <!-- /.card -->

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
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
         
            <!-- /.card -->


                <!-- /.d-flex -->
              </div>
            </div>
         
		  
		  
		  
       
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->


  <!-- Main Footer -->

</body>
	  	<?php
 include("../web/footer.php");
 ?>
</html>