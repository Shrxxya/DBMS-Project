<?php
// database connection code
// $con = mysqli_connect('localhost', 'root', '','isvhacc');

$con = mysqli_connect('localhost', 'root', '2041Pwd','isvhacc');

// get the post records
$name= $_POST['name'];
$gender = $_POST['gender'];
$pno = $_POST['pno'];
$address = $_POST['address'];
$email = $_POST['email'];
$confpwd = $_POST['confpwd'];

// database insert SQL code
$sql = "INSERT INTO `customerlogin` (`name`, `gender`, `phoneno`, `emailid`, `password`, `address`) VALUES ('$name', '$gender', '$pno', '$email', '$confpwd', '$address')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	include 'home.html';
	//echo "Records inserted successfully";
}
?>