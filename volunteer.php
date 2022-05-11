<?php
// database connection code
// $con = mysqli_connect('localhost', 'root', '','isvhacc');

$con = mysqli_connect('localhost', 'root', '2041Pwd','isvhacc');

// get the post records
$name = $_POST['name'];
$pno = $_POST['pno'];
$gender= $_POST['gender'];
$address = $_POST['address'];
$joindate = $_POST['joindate'];
$enddate = $_POST['enddate'];

// database insert SQL code
$sql = "INSERT INTO `volunteers` (`name`, `phoneno`, `gender`, `address`, `joiningdate`, `endofservice`) VALUES ('$name', '$pno', '$gender', '$address', '$joindate', '$enddate')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Volunteer registration successful")';  
    echo '</script>'; 
    include 'volunteer.html';
}
?>