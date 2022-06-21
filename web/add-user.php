<?php include("../includes/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>School Management System </title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Fixed Sidebar</title>

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
      <section class="content">

    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Users</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      
        <div class="row">
          <!-- left column -->
          <div class="col-9">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
<p>User</p>
                   
                            </div>



                              <?php
                              if (isset($_GET["msg"])) {
                                $msg=sanitizeInput($_GET["msg"]);

                            
                              if ($msg=="PWDNM") {
                                # code...
                                echo "<p> <strong class='error'>ERROR:</strong> Passwords did not matched </p>";
                              }
                               if ($msg=="SR") {
                                # code...
                                echo "<p> <strong class='SUCESS'>SUCCESS:</strong> Successgully registered </p>";
                              } if ($msg=="already") {
                                # code...
                                echo "<p> <strong class='error'>ERROR:</strong> Email Already Exist! Try Another </p>";
                              } 




                            }
                              ?>

              <!-- /.card-header -->
              <!-- form start -->
              <form class="my-form" action="register-action.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="lid01">Full Name</label>
                    <input type="text" id="lid01" name="fn" pattern="[a-z A-Z]+"  minlength="3" maxlength="30" placeholder="Enter Name"  required="required" class="form-control">
                  </div>
                
                  
                    
				  
                  <div class="form-group">
                    <label for="lid02">Email address</label>
                    <input type="email" class="form-control"  id="lid02" name="em" placeholder="Enter email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="required">
                  </div>


                    <div class="form-group">
                    <label for="lid03">Password</label>
                    <input type="password" class="form-control"  id="lid03" name="pw1" required="required">
                  </div>


                    <div class="form-group">
                    <label for="lid04">Confirm Password</label>
                    <input type="password" class="form-control"  id="lid04" name="pw2"  required="required">
                  </div>
              
              

                
                   <div class="form-group">
                    <label for="lid05">CNIC </label>
                    <input type="text" class="form-control" id="lid05" name="cnic"  required="required" >
                    <div class="form-group">
                    <label for="lid07">CELL </label>
                    <input type="text" class="form-control" id="lid07" name="cell"  required="required" >
                    <div class="form-group">
                    <label for="lid08">ADDRESS </label>
                    <input type="text" class="form-control" id="lid08" name="address"  required="required" >
                    <div class="form-group">
                    <label for="lid09">GENDER </label>
                    <input type="text" class="form-control" id="lid09" name="gender"  required="required" >
                    <div class="form-group">
                    <label for="lid10">DOB</label>
                    <input type="date" class="form-control" id="lid10" name="dob"  required="required" >
                  </div>
                   <div class="form-group">
                    <label for="lid05">Select Role </label>                
                    <select class="form-control" name="type" id="lid06">
                      
<?php
    $conn = new mysqli($DB_SERVER,$DB_USER,$DB_PASSWORD,$DB_NAME);

        if ($conn->connect_error) {
        trigger_error('Database connection failed: ' . $conn->connect_error, E_USER_ERROR);
        } 

        //query
        $sql='SELECT * FROM role';
        $stmt = $conn->prepare($sql);
        if($stmt === false) {
        trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
        }

        $stmt->execute();
        $stmt->store_result();
        if($stmt->num_rows > 0){
        $stmt->bind_result($id,$role);
        while ($stmt->fetch()) {
          
          echo "<option value='$id'>$role</option>";  

        }
          
        $stmt->free_result();
        $stmt->close();
        }

        else{
          echo "<option value='0'>Uncategorized</option>";
        }

        //close with db
        $conn->close();


?>          

                    </select>
                  </div>
             
               <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add User</button>
                </div>
              </form>
            </div>
           

          </div>
          <!--/.col (left) -->
          <!-- right column -->
        
          <!--/.col (right) -->
        </div>
		
        <!-- /.row -->
      <!-- /.container-fluid -->
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
 include("footer.php");
 ?>
</php>
