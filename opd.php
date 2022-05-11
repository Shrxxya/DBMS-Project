<?php
// database connection code
// $con = mysqli_connect('localhost', 'root', '','isvhacc');

$con = mysqli_connect('localhost', 'root', '2041Pwd','isvhacc');

// get the post records
$custid = $_POST['custid'];
$name= $_POST['name'];
$species = $_POST['species'];
$vdate = $_POST['vdate'];

// database insert SQL code
$sql = "INSERT INTO `opd` (`custid`, `name`, `species`, `vdate`) VALUES ('$custid', '$name', '$species', '$vdate')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo '<script type ="text/JavaScript">';  
    echo 'alert("Patient booking successful")';  
    echo '</script>'; 
    include 'opd.html';
}
?>