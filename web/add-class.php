
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
 include("sidebarmanage.php");
 ?>
</head>


 
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->



    <!-- Main content -->


  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>CLASSES</h1>
          </div>
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
     
		  <h1>
                            ADD CLASS
                            
                        </h1> 
            <form class="form-group" action="" method="post" enctype='multipart/form-data'>            
            <div class="form-group">
              <label for="inputName">Name</label>
              <input type="text" id="inputName" name="name"  pattern="[a-z A-Z]+" minlength="3" maxlength="" placeholder="Enter item name "  required="required" class="form-control"/>
            </div>

          

            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="ADD CLASS">
            </div>

          </form>
          <?php
        if (isset($_GET["msg"])) {
          $msg=sanitizeInput($_GET["msg"]);
        
          if ($msg=="SAC") {
            echo "<p> <strong> Category SUCCESSFULLY ADDED</strong> </p>";
          }
           if ($msg=="DUP") {
            echo "<p> <strong> Category Already Exist!</strong> </p>";
          }if ($msg=="deleted") {
            echo "<p> <strong> Deleted Successfully</strong> </p>";
          }

          
        }
        ?>


                <div class="form-group">

                  <h3>Current Classes</h3>

                  <?php

                  $conn = new mysqli($DB_SERVER,$DB_USER,$DB_PASSWORD,$DB_NAME);

                    if ($conn->connect_error) {
                    trigger_error('Database connection failed: ' . $conn->connect_error, E_USER_ERROR);
                    } 

                    //query

                    $sql2='SELECT * FROM category';
                    $runcatagory = mysqli_query($conn,$sql2);
                    $ar = array();
                    while($data = mysqli_fetch_assoc($runcatagory)){
                        $ar[] = $data;


                    }

                    //echo '<pre>'; print_r($ar);exit;
                    
                  ?>

                  <table class="table">
                    <tr>
                      <th>Name</th>
                     
                      <th>Action</th>
                      <th></th>
                    </tr>

                    <?php
                        
                        foreach($ar as $r){
                           $id = $r['id'];
                           $q = "SELECT *FROM product WHERE cat_id = '$id'";
                           $ru = mysqli_query($conn,$q);
                           $result = mysqli_fetch_assoc($ru);


                         ?>

                        <tr>
                          <td><?php echo $r['name']; ?></td>
                        
                          <?php
                             if(empty($result)){ ?>

                             <td><a href="deletecatadmin.php?id=<?php echo $r['id']; ?>" class="btn btn-danger">Delete</a></td>

                            <?php  }else{ ?>

                           

                           <?php  }

                           ?>
                          
                        </tr>

                        <?php }
 
                     ?>
                  </table>
                </div>

		
</div>
</div>	
</div>		






<!-- ./wrapper -->


</body>
	  	<?php
 include("footer.php");
 ?>
 
</html>
