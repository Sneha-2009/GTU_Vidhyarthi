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
    <link rel="stylesheet" href="settings.css">
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
            <a href="login1.html"><input type="button" value="Logout" id="logOut"></a>
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
            <a href="dashboard.php"><li id="myDashboard">My Dashboard</li></a>
            <a href="gtuServices.php"><li>GTU</li></a>
            <a href="blogs.php"><li>Blogs</li></a>
            <a href="settings.php"><li id="settings">Settings</li></a>
        </ul>
    </div>
   
    <div class="tablediv">
        <table>
            <caption id="tabcap">Settings</caption>
            <tbody>
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
                                
                            echo "<tr>";
                                echo "<tr><td>Enrollment Number</td>";
                                echo "<td colspan='2'>".$r["ENROLLMENT_NO"];
                                echo "</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>Name</td>";
                                echo "<td colspan='2'>".$r["NAME"];
                                echo "</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>EMail Id</td>";
                                echo "<td>".$r["EMAIL"];
                                echo "</td><td><button>CHANGE</button>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>Password</td>";
                                echo "<td>***********";
                                echo "</td><td><button>CHANGE</button>";
                            echo "</tr>";
                        }
                        mysqli_close($conn);
                    }
                    catch(Exception $e)
                    {
                        echo "connection not established";
                        echo $e;
                    }
                ?>
              
            </tbody>
        </table>
    </div>
</body>

</html>