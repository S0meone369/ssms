 <?php

include_once('C:\xampp\htdocs\ojaswi\database\db.php');
		$db=new database();
		$conn=$db->connect();
		
				
				$fName=$_POST['fName'];
				$lName=$_POST['lName'];
				$email=$_POST['email'];
				$password=$_POST['password'];
				$contact=$_POST['contact'];
				$role=$_POST['role'];
				
			
		
		$stmt=$conn->prepare("INSERT INTO `user`(`Role_id`, `Password`, `Username`, `Contact`, `First_Name`, `Last_Name`) VALUES (?,?,?,?,?,?)");
		$stmt->bind_param("ssssss", $role, $password, $email, $contact, $fName, $lName);
		$stmt->execute();
		$stmt->close();
		$conn->close();
		//$run = mysqli_query($conn,$query);
		
				if($stmt)
				{
					echo " a";
					
				}
				else
				{
					echo"Form not Submitted";
				}
	
		

?>