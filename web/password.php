<?php include("../includes/config.php");?> 

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
  
    <a href="supervisor page.php"><b>SADMS</b></a>
  </div>
  
  <!-- /.login-logo -->
   <div class="card">
     <?php
       if(isset($_GET["msg"]))
       {
         $msg=sanitizeInput($_GET["msg"]);
         if($msg == "SUPW")
         {
           echo "<p>Successfully password updated</p>";
         }
         if($msg == "PWDNM")
         {
            echo "<p>Passwords did not match try again thanks</p>";
         }
         
       }
       
       ?>
    <div class="card-body login-card-body">
      <p class="login-box-msg"><b>Update Your Password</b></p>
    
       
          
       
                 
        <form class="login-form" action="password-action.php" method="post"> <!--enctype="multipart/form-data"-->
        <div>
        
        <label for="Lid01">New Password &nbsp : &nbsp &nbsp  &nbsp &nbsp &nbsp </label>
        <input type="password" id="Lid01" name="pw1" required >
                </div>
        
        <div>
        
        <label for="lid02"> Confirm Password  : &nbsp </label>
        <input type="password" id="lid02" name="pw2"  required >
        </div>
        
          <div>
        
        <label>&nbsp  &nbsp </label>
        <br>
        <input type="submit" value="Updated Password" ><br><br>
        
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
