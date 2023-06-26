<?php session_start();
      $_SESSION['enrno'] = $_POST["enroll_num"];
    
        $h = "localhost";
        $u = "root";
        $p = "Sneh@123#";
        $db = "gtu_vidhyarthi";

        try
        {
            $conn = mysqli_connect($h, $u, $p, $db);

            if ($conn) {
                $enroll = $_POST["enroll_num"];
                $pwd = $_POST["pass"];
                $selectQuery = "SELECT * FROM homesignup WHERE ENROLLMENT_NO ='$enroll' AND PASSWORD ='$pwd'";
                $Result = mysqli_query($conn, $selectQuery);

                if($Result->num_rows > 0)
                {
                    header("Location: dashboard.php");
                    exit;
                }
                else{
                    header("Location: login.php");
                    exit;
                }
            }
            mysqli_close($conn);
        }
        catch(Exception $e)
        {
            echo "connection not established";
            echo $e;
        }
    ?>
