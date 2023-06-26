<?php session_start();
      $_SESSION['email'] = $_POST["email"];
    //   $_SESSION['pwd'] = 1234;  
    $eid = $_POST["email"];
    $h = "localhost";
    $u = "root";
    $p = "Sneh@123#";
    $db = "gtu_vidhyarthi"; //after creation and connection of db
    try{
        $conn = mysqli_connect($h, $u,$p, $db);
        //echo "Connection is successfully established. <br/><br/>";
        $selectq = "SELECT * from gtu_db_table where EMAIL='$eid'";
        $result = mysqli_query($conn, $selectq);
            if($result->num_rows > 0){
                
                $selectq1 = "SELECT * from homesignup where EMAIL='$eid'";
                $res = mysqli_query($conn, $selectq1);
                if($res->num_rows < 1){

                    // echo "Your email id is ".$eid;
                    $id=substr($eid,0,4);
                    $randomno = rand(100,999);
                    // $password = $id."@GTU".$randomno;
                    $password = $id."@GTU123";
                    $_SESSION['pswd'] = $password;
                    $subject = "GTU Vidhyarthi new password";
                    $content = "This mail is sent by GTU Vidhyarthi for your new account. Your password is ".$password;
                    $header = "From: ssheth3329@gmail.com";
                    if(mail($eid,$subject,$content,$header)){
                            echo "Your mail has been sent";
                    }
                    else{
                            echo "Email sending failed";
                    }

                    // Redirect browser
                    header("Location: signup.php");
                    //echo "<script>alert('An account with same mail id already exists.');</script>";
                    exit;
                }
                else{
                    header("Location: HomeNext2.php");
                    exit;
                }
            }
                else{
                    // echo '<script type="text/javascript"> window.onload = function() { alert("No email exists"); } </script>';
                    // header("Location: HomeNext.php");                    
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
            <a class="rlinks" href="contact_us.php">Contact Us</a>
            <a href="login.php"><input type="button" value="Sign In" id="signIn"></a>
        </div>
    </nav>
    <div id="msg">The entered email address is not associated with any of the GTU Students. <br>Please enter the email address linked with your GTU Account.
       <br> <a href="Home.php"><button id="btn">Back</button></a>
    </div>
</body>

</html>
