<?php include("../includes/config.php");

       
        

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SADMS | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  
  

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <?php include("../includes/menu.php");?> 


<div class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>SADMS</b></a>
  </div>
  
  <!-- /.login-logo -->
   <div class="card">
     
    <div class="card-body login-card-body">
      <p class="login-box-msg"><b>Profile</b></p>
    
       
          <form class="view-profile">



        <?php 




          //coonnect with dp
        $conn = new mysqli($DB_SERVER,$DB_USER,$DB_PASSWORD,$DB_NAME);

        if ($conn->connect_error) {
        trigger_error('Database connection failed: ' . $conn->connect_error, E_USER_ERROR);
        } 

        //query

        //querry
        $sql='SELECT bio, fullname FROM users WHERE id = ?';
        $stmt = $conn->prepare($sql);
        if($stmt === false) {
        trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
        }

        $stmt->bind_param('i',$_SESSION["uid"]);
        $stmt->execute();
        $stmt->store_result();



        if($stmt->num_rows==1){
        $stmt->bind_result($bio,$fullname);
        while ($stmt->fetch()) 
        $stmt->free_result();
        $stmt->close();
        }

        //close with db
        $conn->close();
        echo "<strong>$fullname</strong><br />";
        echo $bio;

        ?>
       
        
        </div>
      </form>
      
    

      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</div>
</div>
</div>
</body>

</html>
