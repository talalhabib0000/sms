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
            <h1>Add Subjects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
             
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="container mt-3">
          <h5>Select</h5>
 
      <form action="addcomplainaction.php" method="POST">
        <div class="row">
          <div class="col-md-3">
          <label for="class">Choose Class:</label>

          <select name="class" id="class">
            <option value="volvo">One</option>
            <option value="saab">Two</option>
            <option value="mercedes">Three</option>
            <option value="audi">Four</option>
          </select>
          </div>

          <div class="col-md-6">
            <label>Subjects</label>
            <textarea class="form-control" rows="5"  name="com">
              
            </textarea>
          </div>
          <div class="col-md-3 mt-5">
            <input style="margin-top: 80px;" type="submit" name="addcomplain" class="btn btn-info">
          </div>
          
        </div>
      </form>
          
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
