<?php session_start();
      $enroll_n = $_SESSION["enrno"];  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="stylesheet" href="blogs.css">
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
            <a href="dashboard.php">
                <li>My Dashboard</li>
            </a>
            <a href="gtuServices.php">
                <li>GTU</li>
            </a>
            <a href="blogs.php">
                <li id="blogs">Blogs</li>
            </a>
            <a href="settings.php">
                <li>Settings</li>
            </a>
        </ul>
    </div>
    <div class="alumni">Alumni Blogs</div>
    <div class="container">
        <div class="box">
            <h4 class="heading">Harsh Sharma</h4>
            <hr>
            <p>For Computer engineers,<br> the best time to learn web development is 2nd semester, it raises an
                internship opportunity in early semesters and it is also interesting and easy to understand in early
                programming phases... <a href="https://alumni.gtu.ac.in/" target="_blank">read more</a></p>
        </div>
        <div class="box">
            <h4 class="heading">Krisha Patel</h4>
            <hr>
            <p>For IT Engineers,<br> Artificial Intillenge and Machine Learning are the best carrer options but for the
                foundation to be strong more emphasis should be given on the subjects like DSA and DBMS... <a
                    href="https://alumni.gtu.ac.in/" target="_blank">read more</a></p>
        </div>
        <div class="box">
            <h4 class="heading">Rahil Singhania</h4>
            <hr>
            <p>For Civil Engineers,<br> Assisting a project manager in a bridge or building construction way more
                beneficial and it adds value to your resume...<a href="https://alumni.gtu.ac.in/" target="_blank">read
                    more</a></p>
        </div>
        <div class="box">
            <h4 class="heading">Varun Banerjee</h4>
            <hr>
            <p>For Mechanical Engineers,<br> 4th semester is best time to learn solid works and MATLAB. Also, if you
                take part in RoboFest iit is beneficial...<a href="https://alumni.gtu.ac.in/" target="_blank">read
                    more</a></p>
        </div>
        <div class="box">
            <h4 class="heading">Avinash Bhatt</h4>
            <hr>
            <p>For Electronics and Communication Engineers,<br> The corporates needs are chip study making and
                optimization regarding space and processing. The study Arduino-UNO is mandatory but the study of other
                modern devices is also required...<a href="https://alumni.gtu.ac.in/" target="_blank">read more</a></p>
        </div>
        <div class="box">
            <h4 class="heading">Dhravi Doshi</h4>
            <hr>
            <p>For any engineering field,<br> More emphasis on higher credit subjects will definitely help you get more
                CPI or CGPA. For just exam perspective, the notes provided by GTU Vidhyarthi will almost cover the whole
                syllabus...<a href="https://alumni.gtu.ac.in/" target="_blank">read more</a></p>
        </div>
    </div>
    <div >
        <button id="compose">Compose</button>
    </div>
</body>

</html>