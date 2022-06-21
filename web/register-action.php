<?php
include("../includes/config.php");


		if ((isset($_POST["em"])) && (isset($_POST["pw1"])) && (isset($_POST["pw2"])) && (isset($_POST["fn"])) && (isset($_POST["type"])) && (isset($_POST["cell"])) && (isset($_POST["address"])) && (isset($_POST["gender"])) && (isset($_POST["dob"])) ) {
			$em=sanitizeInput($_POST["em"]);
			$pw1=sanitizeInput($_POST["pw1"]);
			$pw2=sanitizeInput($_POST["pw2"]);
			$fn=sanitizeInput($_POST["fn"]);
			$cnic=sanitizeInput($_POST["cnic"]);
			$type=sanitizeInput($_POST["type"]);
			$cell=sanitizeInput($_POST["cell"]);
			$address=sanitizeInput($_POST["address"]);
			$gender=sanitizeInput($_POST["gender"]);
			$dob=sanitizeInput($_POST["dob"]);

			$conn = new mysqli($DB_SERVER,$DB_USER,$DB_PASSWORD,$DB_NAME);

			$queryexist = "SELECT *FROM users WHERE email = '$em'";
			$runquery = mysqli_query($conn,$queryexist);
			$rowfetch = mysqli_fetch_row($runquery);

			if(!empty($rowfetch)){
				header("Location:add-user.php?msg=already");
	 			exit;
				
				
			}


			if ($pw1==$pw2) {

			   $hpwd=password_hash($pw1, PASSWORD_DEFAULT);	
					
					
				//connect with database
				$conn = new mysqli($DB_SERVER,$DB_USER,$DB_PASSWORD,$DB_NAME);

				if ($conn->connect_error) {
				trigger_error('Database connection failed: ' . $conn->connect_error, E_USER_ERROR);
				}

				//querry
				$sql="INSERT INTO users (email,password,cnic,fullname,type,cell,address,gender,dob) VALUES(?,?,?,?,?,?,?,?,?)";
				$stmt = $conn->prepare($sql);
				if($stmt === false) {
				trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
				}

				$stmt->bind_param('ssississs',$em,$hpwd,$cnic,$fn,$type,$cell,$address,$gender,$dob);
				$stmt->execute();
				$stmt->close();

				//close with db
				$conn->close();
				header("Location:add-user.php?msg=SR");
				exit;
			}
			else{
				header("Location:add-user.php?msg=PWDNM");
	 			exit;
			}	
}
