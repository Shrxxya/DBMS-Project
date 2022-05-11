<?php
    $servername= "localhost";
    $username = "root";
    $password = "2041Pwd";
    $dbname = "isvhacc";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $userid = $_POST['userid'];
        $userpwd = $_POST['userpwd'];

        $sql = "select * from admin where username = '$userid' AND password = '$userpwd'";

        $result = mysqli_query($conn, $sql);
          
        if(mysqli_num_rows($result)===1)
        {
            $row= mysqli_fetch_assoc($result);
            header('Location: home.html');
            exit();
        }
        else {
            header('Location: adminLogin.html');
            exit();
        }
    }
?>