<?php
// database connection code
// $con = mysqli_connect('localhost', 'root', '','isvhacc');

$con = mysqli_connect('localhost', 'root', '2041Pwd','isvhacc');

// get the post records
$custid = $_POST['custid'];
$species = $_POST['species'];
$name= $_POST['name'];
$appttype = $_POST['appttype'];
$apptdate = $_POST['apptdate'];

// database insert SQL code
$sql = "INSERT INTO `pathoradio_appt` (`custid`, `species`, `name`, `type`, `doa`) VALUES ('$custid', '$species', '$name', '$appttype', '$apptdate')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Appointment booked successfully")';  
    echo '</script>'; 
    include 'laboratory.html';
}
?>