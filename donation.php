<?php
// database connection code
// $con = mysqli_connect('localhost', 'root', '','isvhacc');

$con = mysqli_connect('localhost', 'root', '2041Pwd','isvhacc');

// get the post records
$fname = $_POST['fname'];
$pno = $_POST['pno'];
$amt= $_POST['amt'];


// database insert SQL code
$sql = "INSERT INTO `donation` (`name`, `phoneno`, `amount`) VALUES ('$fname', '$pno', '$amt')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Donation request submitted successfully")';  
    echo '</script>'; 
    include 'payment.html';
}
?>