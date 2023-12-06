<?php
$host="localhost";
$user="root";
$pass="admin";
$db="ssms";
$conn=mysqli_connect($host,$user,$pass,$db) or die(mysqli_error());
if(!$conn)
{
	echo "Cant connect";
}
else{
	echo "Connected";
}
?>