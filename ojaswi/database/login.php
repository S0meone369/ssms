<?php
error_reporting(0);
session_start();
$email=$_POST['log_email'];
$password=$_POST['Password'];
$data123=0;

	include_once('C:\xampp\htdocs\ojaswi\database\db.php');
		$db=new database();
		//->setFetchMode(DB_FETCHMODE_ASSOC);
		$conn=$db->connect();

		if ($conn->connect_error) 
		{
 			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT * FROM `user`";
		$result = $conn->query($sql);
		$find=0;


		if ($result->num_rows > 0) 
		{
			
			while($row = $result->fetch_assoc())
			{
			$de=$row["Username"];
			$dp=$row["Password"];
			$dr=$row["Role_id"];
			
			
			if($email==$de && $password==$dp )
			{
			
			$find++;
			break;
			
			}
	
		}
		}
		
		 if($find==1){
			
			echo json_encode(true);
			
		}
		else{
			
			echo json_encode(false);
		}
		
$conn->close();



?>
