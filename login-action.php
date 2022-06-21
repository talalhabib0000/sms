<?php
	include("includes/config.php");

	if((isset($_POST["em"])) && (isset($_POST["pw"]))){
		$em=sanitizeInput($_POST["em"]);
		$pw=sanitizeInput($_POST["pw"]);

		//connect with database
		$conn = new mysqli($DB_SERVER,$DB_USER,$DB_PASSWORD,$DB_NAME);

		if ($conn->connect_error) {
		trigger_error('Database connection failed: ' . $conn->connect_error, E_USER_ERROR);
		}

		//query
		$sql='SELECT * FROM users WHERE email = ?';
		$stmt = $conn->prepare($sql);
		if($stmt === false) {
			trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
		}
		$stmt->bind_param('s',$em);
		$stmt->execute();
		$stmt->store_result();

		echo "Found " . $stmt->num_rows . " records.<br />";
		if ($stmt->num_rows==1) {
			# code...
		

			$stmt->bind_result($id,$name,$fullname,$cnic,$dob,$gender,$bio,$hpwd,$cell,$address,$image,$status,$email,$type);
			while ($stmt->fetch()) {

				if($status == 'S'){

					header("Location:index.php?msg=AS");
					exit;

				}
				 
				$matched=password_verify($pw,$hpwd);

				if ($matched) {



					$_SESSION["loggedin"]=$true;
				}

				else{
					header("Location:index.php?msg=PWNM");
					exit;

				}
			
				$_SESSION["uid"]=$id;
				$_SESSION["ustatus"]=$status;
				$_SESSION["utype"]=$type;
				}
				
			$stmt->free_result();
			$stmt->close();
		}

		else{
			header("Location:index.php?msg=EMNM");
			exit;

		}

		//closedb
		$conn->close();


	}
	else{
		header("Location:index.php");
		exit;
	}

	if(($_SESSION["utype"]=="manager"))
            {
		       header("Location:web/manager.php");
	        }	
    if(($_SESSION["utype"]=="2"))			
     {
		       header("Location:web/teacher-page.php");
	  }
    if(($_SESSION["utype"]=="1"))			
     {
		       header("Location:web/student.php");
	  }

	
	        if(($_SESSION["utype"]=="3"))			
     {
		       header("Location:web/parent.php");
	  }