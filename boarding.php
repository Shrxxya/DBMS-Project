<?php
// database connection code
// $con = mysqli_connect('localhost', 'root', '','isvhacc');

$con = mysqli_connect('localhost', 'root', '2041Pwd','isvhacc');

// get the post records
$custid = $_POST['custid'];
$species = $_POST['species'];
$name= $_POST['name'];
$frmdate = $_POST['frmdate'];
$todate = $_POST['todate'];

// database insert SQL code
$sql = "INSERT INTO `boarding` (`custid`, `species`, `name`, `fromdate`, `todate`) VALUES ('$custid', '$species', '$name', '$frmdate', '$todate')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo '<script type ="text/JavaScript">';  
    echo 'alert("Boarding registration done successfully")';  
    echo '</script>'; 
    include 'boarding_page.html';
}
?>