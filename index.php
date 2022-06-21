<?php include("includes/config.php");?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMS | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  
  

</head>
<body class="hold-transition sidebar-mini" style="background-image: url('image/logo.jpg');">
<div class="wrapper">

  
 
<div class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>SCHOOL MANAGEMENT SYSTEM</b></a>
  </div>
  
  <!-- /.login-logo -->
   <div class="card">
     <?php
			 if(isset($_GET["msg"]))
			 {
				 $msg=sanitizeInput($_GET["msg"]);
				 if($msg == "PWNM")
				 {
					 echo "<p>Password not matched</p>";
				 }
				 if($msg == "EMNM")
				 {
					  echo "<p> Email not matched</p>";
				 }
				  if($msg == "AS")
				 {
					  echo "<p>Account Suspended</p>";
				 }
				 
			 }
			 
			 ?>
    <div class="card-body login-card-body">
      <p class="login-box-msg"><b>Sign in to start your session</b></p>
	  
       
          
			 
                 
    		<form class="login-form" action="login-action.php" method="post"> <!--enctype="multipart/form-data"-->
				<div>
				
				<div class="row">
					<div class="col-md-12">
						<label for="Lid01">Email</label>
				<input type="Email" class="form-control" id="txt1" name="em" placeholder="Enter email" required >
					</div>
				</div>
                </div>
				
				<div>
				
				<div class="row">
					<div class="col-md-12">
						<label for="lid02">Password </label>
				<input type="password" class="form-control" id="txt2" name="pw" placeholder="Password" required >
					</div>
				</div>
				</div>
				
			    <div>
				
				<div class="row mt-3">
					<div class="col-md-12">
						<input type="submit" class="btn btn-info" value="Login" ><br><br>
					</div>
				</div>
				
				
				
				</div>
			</form>
			
	  

 
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href=""> Forgot password?</a>
      </p> -->
      <!-- <p class="mb-0">
        <a href="" class="text-center">Register as  ShopVendor
      </p> -->
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
