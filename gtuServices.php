<?php session_start();
      $enroll_n = $_SESSION["enrno"];  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="gtuServices.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alegreya+SC:ital@1&family=Roboto:wght@300&family=Ubuntu&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav>
        <div class="app-logo">
            <a class="links" href="#"><img src="app_logo.jpg" alt="App Logo" id="applogo"></a>
        </div>
        <div class="left-links">
            <div class="llinks">GTU Vidhyarthi</div>
        </div>
        <div class="right-links">
            <a class="rlinks" href="dashboard.php">Home</a>
            <a class="rlinks" href="about_us.php">About Us</a>
            <a class="rlinks" href="contact_us.php">Contact Us</a>
            <a href="Home.php"><input type="button" value="Logout" id="logOut"></a>
        </div>
    </nav>
    <div class="div2">
    <?php
        $h="localhost";
        $u="root";
        $p="Sneh@123#";
        $db="gtu_vidhyarthi";
        
        try
        {
            $conn=mysqli_connect($h,$u,$p,$db);
            if($conn)
            {                
                $selectq="SELECT * from gtu_db_table where ENROLLMENT_NO=$enroll_n";
                $result=mysqli_query($conn,$selectq);
                $r=mysqli_fetch_assoc($result);
                echo "<span id='unm'>".$r["NAME"];
                echo "</span>";
            }
            mysqli_close($conn);
        }
        catch(Exception $e)
        {
            echo "connection not established";
            echo $e;
        }
    ?>
        <ul class="ul2">
            <a href="dashboard.php"><li>My Dashboard</li></a>
            <a href="gtuServices.php"><li id="gtu">GTU</li></a>
            <a href="blogs.php"><li>Blogs</li></a>
            <a href="settings.php"><li>Settings</li></a>
        </ul>
    </div>
    <div class="alumni">GTU SERVICES</div>
    <div class="container">
        <a href="https://www.gtu.ac.in/" target="_blank"><div class="box">GTU WEBSITE</div></a> 
        <a href="https://www.youtube.com/@GujaratTechnologicalUniversity" target="_blank"><div class="box">GTU YOUTUBE</div></a> 
        <a href="https://student.gtu.ac.in/Login.aspx" target="_blank"><div class="box">GTU STUDENT PORTAL</div></a> 
        <a href="https://www.gtu.ac.in/GTU_100PointActivities/" target="_blank"><div class="box">100 ACTIVITY POINTS</div></a> 
        <a href="https://de.gtu.ac.in/Account/Login" target="_blank"><div class="box">DE LOGIN</div></a> 
        <a href="https://www.gturesults.in/" target="_blank"><div class="box">GTU RESULTS</div></a> 
        <a href="https://syllabus.gtu.ac.in/" target="_blank"><div class="box">GTU SYLLABUS</div></a> 
        <a href="http://timetable.gtu.ac.in/" target="_blank"><div class="box">GTU TIMETABLE</div></a> 
        <a href="https://set.gtu.ac.in/circular/" target="_blank"><div class="box">GTU CIRCULARS</div></a> 
        <a href="https://set.gtu.ac.in/contact-details/" target="_blank"><div class="box">GTU CONTACT US</div></a> 
    </div>
</body>

</html>