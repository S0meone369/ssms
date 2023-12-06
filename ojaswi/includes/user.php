<?php
class User
{
	private $con;
	function _construct()
	{
		include_once('C:\xampp\htdocs\ojaswi\database\db.php');
		$db=new database();
		$this->con=$db->connect();
		
		
	}
	
	//User is already register or not
	private function emailExists($email)
	{
		$pre_stmt=$this->con->prepare("SELECT User_id from user WHERE email=?");
		$pre_stmt->bind_param("s",$email);
		$pre_stmt->execute() or die($this->con->error);
		$result=$pre_stmt->get_result();
		if($result->num_rows >0){
			return 1;
		}
		else{
			return 0;
		}
	}
	public function createUserAccount($role,$password,$email,$contact,$fname,$lname)
	{
		if($this->emailExists($email))
			{
				return "EMAIL_ALREADY_EXISTS";
			}
			else
			{

				$pre_stmt= $this->con->prepare("INSERT INTO `user`( `Role_id`, `Password`, `Username`, `Contact`, `First_Name`, `Last_Name`) VALUES (?,?,?,?,?,?)");
				$pre_stmt->bind_param("ississ",$role,$password,$email,$contact,$fname,$lname);
				$result=$pre_stmt->execute() or die($this->con->error);
				if($result)
				{
					return $this->con->insert_id;
				}
				else{
					return "SOME_ERROR";
				}
			}
	}
			
}


?>