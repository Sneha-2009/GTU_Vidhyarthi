<?php $eid = $_POST["eid"];
      $h = "localhost";
      $u = "root";
      $p = "Sneh@123#";
      $db = "gtu_vidhyarthi";
      try{
        $conn = mysqli_connect($h, $u,$p, $db);
        $selectq1 = "SELECT * from homesignup where EMAIL='$eid'";
        $res = mysqli_query($conn, $selectq1);
        if($res->num_rows > 0){
            $r=mysqli_fetch_assoc($res);
            $password = $r["PASSWORD"];
            $subject = "GTU Vidhyarthi password";
            $content = "This mail is sent by GTU Vidhyarthi for your existing account. Your password is ".$password;
            $header = "From: ssheth3329@gmail.com";
            if(mail($eid,$subject,$content,$header)){
                echo "Your mail has been sent";
            }
            else{
                echo "Email sending failed";
            }
            header("Location: login.php");
            exit;
        }
        else{
                // header("Location: HomeNext2.php");
                // exit;
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
    <link rel="stylesheet" href="forgotNext.css">
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
            <a class="rlinks" href="contact_us.php">Contact Us</a>
            <a href="login.php"><input type="button" value="Sign In" id="signIn"></a>
        </div>
    </nav>
    <div id="msg">The entered email address is not associated with any active GTU Vidhyarthi User. <br>Please enter the email address linked with your GTU Account.
       <br> <a href="forgot_password.php"><button id="btn">Back</button></a>
    </div>
</body>

</html>