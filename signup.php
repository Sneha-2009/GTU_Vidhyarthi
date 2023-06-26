<?php 
    session_start(); 
    $eid = $_SESSION['email']; 
    $pwd = $_SESSION['pswd'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="signup.css">
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
            <a class="rlinks" href="Home.php">Home</a>
            <a class="rlinks" href="about_us.html">About Us</a>
            <a class="rlinks" href="contact_us.html">Contact Us</a>
            <a href="Home.php">
                <input type="button" value="Back" id="signIn"></a>
        </div>
    </nav>

    <center>
        <div id="d1">

            <!-- <img id="img1" src="applogo.jpg" alt="logo"> -->
            <br>
            <form action="signupNext.php" method="post" id="formlink">
            <fieldset>
                <legend>CREATE NEW ACCOUNT</legend>
                <table>
                    <div id="div-in">
                        <tr>
                            <td class="rows">
                                <label for="name">Name</label>
                            </td>
                            <td class="rows1">
                                : <input type="text" name="name" class="n" id="name" placeholder="Surname Name Middle-Name">
                            </td>
                        </tr>

                        <tr>
                            <td class="rows">
                                <label for="email">Email</label>
                            </td>
                            <td class="rows1">
                                : <input type="email" name="email" class="n" id="email" placeholder="Enter Your Email" value=<?php echo $eid; ?>>
                            </td>
                        </tr>
                        <tr>
                            <td class="rows">
                                <label for="enroll_num">Enrollment <br>Number</label>
                            </td>
                            <td class="rows1">
                                : <input type="text" name="enroll_num" class="n" id="enroll_num" placeholder="Enter Your Enrollment Number" >
                            </td>
                        </tr>
                        <tr>
                            <td class="rows">
                                <label for="pass">Password</label>
                            </td>
                            <td class="rows1">
                                : <input type="password" name="pass" id="pass" class="n" placeholder="Enter the Password sent to your Email ID" value=<?php echo $pwd; ?>>
                            </td>
                        </tr>
                    </div>
                </table>
                <br>
                <button type="submit" id="btn1">Sign Up</button>
            </fieldset>
            </form>
        </div>
    </center>
     
</body>

<script type="text/javascript">
    const signup = document.querySelector("#btn1");
    const nm = document.getElementById("name");
    const emailid = document.getElementById("email");
    const enrno = document.getElementById("enroll_num");
    const pwd = document.getElementById("pass");
    
    signup.addEventListener('click', 
                        function() { 
                                        if(nm.value==""){
                                            formlink.action="#";
                                            alert("The name must not be blank");
                                        }
                                        else{
                                            var p1 = /^[A-Za-z\s]*$/;
                                            if(p1.test(nm.value)==false){
                                            alert("The name must contain only alphabets");
                                            formlink.action="#";
                                            }
                                            else{
                                                var p2 = /^\w+([\.\-\_]?\w+)*@\w+\.\w+(\.?\w+)*$/;
                                                if(p2.test(emailid.value)==false){
                                                    alert("Please enter a valid email address.");
                                                    formlink.action="#";
                                                }
                                                else{
                                                    var p3 = /\d{12}/;
                                                    if(p3.test(enrno.value)==false){
                                                        alert("Please enter a valid enrollment number");
                                                        formlink.action="#";
                                                    }
                                                    else{
                                                        if(pwd.value==""){
                                                        alert("The password can't be blank");
                                                        formlink.action="#";
                                                        }
                                                        else{
                                                            var p4 = /[a-z]{1,}/;
                                                            if(p4.test(pwd.value)==false){
                                                                alert("Atleast one lowercase character is required.");
                                                                formlink.action="#";
                                                            }
                                                            else{
                                                                var p5 = /[A-Z]{1,}/;
                                                                if(p5.test(pwd.value)==false){
                                                                alert("Atleast one uppercase character is required.");
                                                                formlink.action="#";
                                                                }
                                                                else{
                                                                    var p6 = /\W{1,}/;
                                                                    if(p6.test(pwd.value)==false){
                                                                    alert("Atleast one special character is required.");
                                                                    formlink.action="#";
                                                                    }
                                                                    else{
                                                                        if(pwd.value.length<8 || pwd.value.length>16){
                                                                        alert("The password should be 8 to 16 characters long");
                                                                        formlink.action="#";
                                                                        }
                                                                        else{
                                                                            formlink.action="signupNext.php";
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }}, 
                                        false);
</script>
</html>