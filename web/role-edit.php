<?php
include("../includes/config.php");


		if ((isset($_POST["id"])) && (isset($_POST["role"]))) {
		$role=sanitizeInput($_POST["role"]);
		$id=sanitizeInput($_POST["id"]);

	
			//connect with database
			$conn = new mysqli($DB_SERVER,$DB_USER,$DB_PASSWORD,$DB_NAME);

			if ($conn->connect_error) {
			trigger_error('Database connection failed: ' . $conn->connect_error, E_USER_ERROR);
			 }

			//querry
			$sql='UPDATE ROLE SET role=? WHERE id=?';
			$stmt = $conn->prepare($sql);
			if($stmt === false) {
			trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
			}

			$stmt->bind_param('si',$role,$id);
			$stmt->execute();
			$stmt->close();

			//close with db
			$conn->close();
			header("Location:view-role.php?msg=SUC");
			exit;
	}


