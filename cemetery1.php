<?php
// database connection code
// $con = mysqli_connect('localhost', 'root', '','isvhacc');

$con = mysqli_connect('localhost', 'root', '2041Pwd','isvhacc');

// get the post records
$custid= $_POST['custid'];
$name = $_POST['name'];
$species = $_POST['Species'];
$bdate = $_POST['bdate'];

// database insert SQL code
$sql = "INSERT INTO `cemetery` (`custid`, `species`, `name`, `dateofburial`) VALUES ('$custid', '$species', '$name', '$bdate')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Burial appointment booked successfully")';  
    echo '</script>'; 
    include 'cemetery.html';
}
?>