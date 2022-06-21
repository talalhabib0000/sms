
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


    <!-- Main content -->
	<div class="content-wrapper">
	    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        
		            <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contact us</li>
            </ol>
          </div>
 
	<section class="content">
      <div class="container-fluid">
        
         
          
    
								
                <section class="content">

      <!-- Default box -->
     
      <h1>
                            ADD ROLE
                            
                        </h1>
            <form class="content" action="role-add.php" method="post">            
            <div class="form-group">
              <label for="inputName">ROLE</label>
              <input type="text" id="inputName" name="role"  pattern="[a-z A-Z]+" minlength="3" maxlength="" placeholder="Enter item name "  required="required" class="form-control"/>
            </div>

            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="ADD ROLE">
            </div>

          </form>
          <?php
        if (isset($_GET["msg"])) {
          $msg=sanitizeInput($_GET["msg"]);
        
          if ($msg=="SAC") {
            echo "<p> <strong> Role SUCCESSFULLY ADDED</strong> </p>";
          }
           if ($msg=="DUP") {
            echo "<p> <strong> Role Already Exist!</strong> </p>";
          }

          
        }
        ?>
        <div class="content">

                  <h3>Current Roles</h3>

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
                       
                      echo "<table class='table table-striped ' >";
                      echo "<tr>";
                        echo "<th><b>ID</b></th>";
                        echo "<th>ROLE</th>";
                       
                        
                      echo "</tr>";

                    $stmt->bind_result($id,$role);
                    while ($stmt->fetch()) {
                      
                      echo "<tr>";
                        echo "<td>$id</td>";

                        echo "<td><form action='role-edit.php' method='post' class='my-form'><div><input type='hidden' value='$id' name='id'/><input type='text' value='$role' name='role'/><input type='submit' class='btn btn-primary' value='update'/></div></form></td>";

                      

                      echo "</tr>"; 

                    }
                      echo "</table>";
                    $stmt->free_result();
                    $stmt->close();
                    }

                    else{
                      echo "no roles found";
                    }

                    //close with db
                    $conn->close();

                  ?>


               
                
              
                       <!--method="get" class="sidebar-form" -->
            
      
				

    
                      </div>  
			
                    </section>
  
       <!-- /.content -->
  </div>
    <!-- /.content-wrapper -->
 
  </div>
</div>
</div>
</div>
       </div>
      </div><!-- /.container-fluid -->
    </section>

</div>

</body>
<?php
 include("footer.php");
 ?>
</html>

















