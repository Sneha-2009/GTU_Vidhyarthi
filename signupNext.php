<?php session_start();
      $_SESSION['email'] = $_POST["email"];
    //   $_SESSION['pwd'] = 1234; 
    $name = $_POST["name"]; 
    $eid = $_POST["email"];
    $enrno = $_POST["enroll_num"];
    $pwd = $_POST["pass"];
    $h = "localhost";
    $u = "root";
    $p = "Sneh@123#";
    $db = "gtu_vidhyarthi"; 
    try{
        $conn = mysqli_connect($h, $u,$p, $db);
        
        $selectq = "SELECT * from gtu_db_table where EMAIL='$eid' AND ENROLLMENT_NO='$enrno';";
        $result = mysqli_query($conn, $selectq);
        if($result->num_rows > 0){
            
            $selectq1 = "SELECT * from homesignup where ENROLLMENT_NO='$eid' AND PASSWORD='$pwd';";
            $res = mysqli_query($conn, $selectq1);
            
            
            if($res->num_rows < 1){
                $insertq = "INSERT INTO homesignup(EMAIL,NAME,ENROLLMENT_NO,PASSWORD) VALUES('$eid','$name','$enrno','$pwd');";
                mysqli_query($conn,$insertq); 
                mysqli_commit($conn);       
            }
            mysqli_close($conn);
            
            $conn = mysqli_connect($h, $u,$p, $db);
                // $selectq1 = "SELECT * from homesignup where ENROLLMENT_NO='$eid' AND PASSWORD='$pwd';";
                $res2 = mysqli_query($conn, $selectq1);
                if($res2->num_rows > 0){
                    header("Location: dashboard.php");
                    exit;
                }
                else{
                    header("Location: dashboard.php");
                    exit;   
                }
        }
        else{
                    // header("Location: signupNext.php");                    
        }
        mysqli_close($conn);
    }
    catch(Exception $e){
        echo "Connection error ".mysqli_connect_error();
        echo $e;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GTU Vidhyarthi</title>
    <link rel="stylesheet" href="HomeNext.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+SC:ital@1&family=Roboto:wght@300&family=Ubuntu&display=swap" rel="stylesheet">
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
            <a class="rlinks" href="Home.php">Home</a>
            <a class="rlinks" href="about_us.html">About Us</a>
            <a class="rlinks" href="contact_us.html">Contact Us</a>
            <a href="login.php"><input type="button" value="Sign In" id="signIn"></a>
        </div>
    </nav>
    <div id="msg">The entered email address and enrollment number don't match. <br>Please enter the email address linked with your GTU Account.
       <br> <a href="signup.php"><button id="btn">Back</button></a>
    </div>
</body>

</html>
