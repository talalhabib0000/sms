
<?php
include("../includes/config.php");



		if ((isset($_POST["role"]))) {
		$role=sanitizeInput($_POST["role"]);
			
	
			//connect with database
			$conn = new mysqli($DB_SERVER,$DB_USER,$DB_PASSWORD,$DB_NAME);

			$dup=mysqli_query($conn,"select *from role WHERE role='$role'");
			 if (mysqli_num_rows($dup)>0) {
			 	header("Location:view-role.php?msg=DUP");
			 	
			 }
			 else{

			if ($conn->connect_error) {
			trigger_error('Database connection failed: ' . $conn->connect_error, E_USER_ERROR);
			 }

			//querry
			$sql='INSERT INTO ROLE (role) VALUES(?)';
			$stmt = $conn->prepare($sql);
			if($stmt === false) {
			trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
			}

			$stmt->bind_param('s',$role);
			$stmt->execute();
			$stmt->close();

			//close with db
			$conn->close();
			header("Location:view-role.php?msg=SAC");
			exit;
				}
	}


