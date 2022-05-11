<?php
// database connection code
// $con = mysqli_connect('localhost', 'root', '','isvhacc');

$con = mysqli_connect('localhost', 'root', '2041Pwd','isvhacc');

// get the post records
$name = $_POST['name'];
$species = $_POST['species'];
$breed= $_POST['breed'];

// database insert SQL code
$sql = "INSERT INTO `adoption` (`name`, `breed`, `species`) VALUES ('$name', '$breed', '$species')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo '<script type ="text/JavaScript">';  
    echo 'alert("Adoption request submitted successfully")';  
    echo '</script>'; 
    include 'adoption_page.html';
}
?>