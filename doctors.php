<html>
    <head>
        <title>ISVHCC - Doctors</title>
        <link rel="icon" type="image/png" href="\imageshtml\brand logo.png"/>
        <img align="left" src="\imageshtml\brand logo.png" alt="official logo" width="110" height="90">
        <h1 style="vertical-align:bottom; color: #2c8862;">Innocent Souls Veterinary Hospital and Care Centre</h1>
        <style>
            .navbar {
            overflow: hidden;
            background-color: rgb(3, 107, 50);
            width: auto;
            height: 10%;
            border-color: black;
            }

            .navbar a {
            float: left;
            font-size: 24px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            }

            .dropdown {
            float: left;
            overflow: hidden;
            }

            .dropdown .dropbtn {
            font-size: 24px;  
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
            }

            .navbar a:hover, .dropdown:hover .dropbtn {
            background-color: red;
            }

            .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            }

            .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
            }

            .dropdown-content a:hover {
            background-color: #ddd;
            }

            .dropdown:hover .dropdown-content {
            display: block;
            }
            .bgr{
            background-image: url("/imageshtml/imageedit_1_6825191160.png");
            background-size: 100%;
            }
            .abc{
                font-size: 18;
                margin-left: 5%;
                margin-right: 5%;
            }
            table{
            border-style:solid;
            text-align: center;
            }
            th {
            letter-spacing: 2px;
            font-size: larger;
            }

            td {
            letter-spacing: 1px;
            }

            tbody td {
            text-align: center;
            }

            tfoot th {
            text-align: right;
            }
            table {
            table-layout: fixed;
            width: 100%;
            border-collapse: collapse;
            border: 5px #257755;
            }

            thead th:nth-child(1) {
            width: 30%;
            }

            thead th:nth-child(2) {
            width: 20%;
            }

            thead th:nth-child(3) {
            width: 15%;
            }

            thead th:nth-child(4) {
            width: 35%;
            }

            th, td {
            padding: 20px;
            }
        </style>
    </head>
    <body>
        <br>
    <div>
        </br>
        <div class="navbar">
      <a href="home.html"> Home </a>
      <div class="dropdown">
        <button class="dropbtn">About Us 
          <i class="fa fa-caret-down"></i>
        </button>

        <div class="dropdown-content">
          <a href="2041061_LabProg1.html"> About ISVHCC </a>
          <a href="doctors.php"> Our Fleet of Doctors</a>

        </div>
      </div>  
     <!-- <a href="2041061_LabProg1.html">About Us</a>-->
      
      <div class="dropdown">
          <button class="dropbtn">Services 
            <i class="fa fa-caret-down"></i>
          </button>
          
          <div class="dropdown-content">
              <a href="IPD WEBPAGE.html">IPD</a>
              <a href="opd.html">OPD</a>
              <a href="services.html">Miscellaneous</a>
              <a href="trainingNfirstaid.html">Training and First Aid</a>
              <a href="adoption_page.html"> Adopt a Stray </a>
              <a href="boarding_page.html"> Boarding </a>
              <a href="laboratory.html"> Laboratory Tests</a>
              <a href="cemetery.html"> Cemetery</a>

            </div>
      </div>
          
            <a href="volunteer.html"> Want To Help? </a>
            <a href="2041061_LabProg5.html"> Donate </a>
          <!---  <a href="doctors.php"> Our Fleet of Doctors </a>-->
            <a href="home.html#contact"> Contact Us </a> 
            
            <div style="margin-left:80%">
              <a href="2041061_LabProg6.html"> Login </a>
              <a href="signuppage.html">SignUp</a>
            </div>              
          </div>
                <br>
                <h1 style="text-align: center; color: #f18043;">Our Team of Doctors</h1>
                <p style="text-align: center;"><img src="\imageshtml\docs.jpg" width="700" height="400"></p>
                <div class="bgr">
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "2041Pwd";
                    $dbname = "ISVHACC";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT docname, phoneno, speciesspecs, highqual FROM doctors";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    echo "<center><br><br><table border='1'>
                    <tr>
                    <th>Doctor Name</th>
                    <th>Mobile No.</th>
                    <th>Species Specialization</th>
                    <th>Qualification</th>
                    </tr>";
 

                    while($row = $result->fetch_assoc())
                    {
                    echo "<tr>";
                    echo "<td>" . $row['docname'] . "</td>";
                    echo "<td>" . $row['phoneno'] . "</td>";
                    echo "<td>" . $row['speciesspecs'] . "</td>";
                    echo "<td>" . $row['highqual'] . "</td>";
                    echo "</tr>";
                    }

                    echo "</table></center>";
                    } else {
                    echo "0 results";
                    }
                    $conn->close();
                    ?>
                    </div>
    </body>
</html>