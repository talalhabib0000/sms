<?php
include("../includes/config.php");?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

</body>
</html> lang="en">
<head>
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
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
<?php
 include("sidebarmanage.php");
 ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>VIEW USERS</h1>
          </div>
  <?php
  if (isset($_GET["msg"])) {
          $msg=sanitizeInput($_GET["msg"]);

      
        if ($msg=="SUB") {
          # code...
          echo "<p> <strong class='error'>SUCCESS:</strong> updated record </p>";
        }
        if ($msg=="SDB") {
          # code...
          echo "<p> <strong class='error'>SUCCESS:</strong> book record deleted</p>";
        }
        if ($msg=="SDP") {
          # code...
          echo "<p> <strong class='error'>SUCCESS:</strong> PRODUCT DELETED</p>";
        }
      }


  ?>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contact us</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      
      
        

      <section class="content">
                        <!-- Default box -->
                      
                  <?php

      $conn = new mysqli($DB_SERVER,$DB_USER,$DB_PASSWORD,$DB_NAME);

        if ($conn->connect_error) {
        trigger_error('Database connection failed: ' . $conn->connect_error, E_USER_ERROR);
        } 

        //query
        $sql='SELECT * FROM users ';
        $stmt = $conn->prepare($sql);
        if($stmt === false) {
        trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
        }
        
        $stmt->execute();
        $stmt->store_result();
        if($stmt->num_rows > 0){

          echo "<table class='table table-striped ' >";
          echo "<tr>";

            echo "<th>NAME</th>";
            echo "<th>ROLE</th>";
            echo "<th>ADDRESS</th>";
            echo "<th>DOB</th>";

          echo "</tr>";

        $stmt->bind_result($id,$name,$fn,$cnic,$dob,$gender,$bio,$hpwd,$cell,$address,$image,$status,$em,$type);
        while ($stmt->fetch()) {
          
          echo "<tr>";
           
            echo "<td>$fn</td>";     
            echo "<td>$type</td>";
             echo "<td>$address</td>";
             echo "<td>$dob</td>";   
          echo "</tr>"; 

        }
          echo "</table>";
        $stmt->free_result();
        $stmt->close();
        }

        else{
          echo "no users found";
        }

        //close with db
        $conn->close();

  ?>                                           

                                        
                                        <!-- END panel-->
                                    </form>

                                </div>
                            </div>
                            <div class="box-body">
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->

 
                    </section><!-- /.content -->
    
</div>
</div>  
</div>  
   <!-- Main content -->

</body>
<?php
 include("footer.php");
 ?>
 
</html>

