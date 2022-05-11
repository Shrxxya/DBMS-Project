<?php
// database connection code
// $con = mysqli_connect('localhost', 'kunal', "",'isvhacc');

$con = mysqli_connect('localhost', 'root', '2041Pwd','isvhacc');

// get the post records
$custid = $_POST['custid'];
$Species = $_POST['Species'];
$name = $_POST['name'];
$date = $_POST['date'];

// database insert SQL code
$sql = "INSERT INTO 'cemetery' ('custid', 'species', 'name', 'dateofburial') VALUES ('$custid', '$Species', '$name', '$date');";

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