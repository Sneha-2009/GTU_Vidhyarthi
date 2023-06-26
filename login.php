<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GTU Vidhyarthi</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+SC:ital@1&family=Roboto:wght@300&family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <nav>
        <div class="app-logo">
            <img src="app_logo.jpg" alt="App Logo" id="applogo">
        </div>
        <div class="left-links">
            <div class="llinks">GTU Vidhyarthi</div>
        </div>
        <div class="right-links">
            <a class="rlinks" href="Home.php">Home</a>
            <a class="rlinks" href="about_us.html">About Us</a>
            <a class="rlinks" href="contact_us.php">Contact Us</a>
            <a href="Home.php"><input type="button" value="Back" id="signIn"></a>
        </div>
    </nav>

    <div class="d1">
        <br>
        <form action="loginNext.php" method="post" id="formlink">
            <img src="login.png" alt="logo" class="img1">
            <fieldset>
                <table>
                    <div id="div-in">
                        <tr>
                            <td class="rows">
                                <label for="enroll_num">Enrollment No. </label>
                            </td>
                            <td class="rows1">
                                <input type="text" name="enroll_num" id="enroll_num" class="n" placeholder="Enter Your Enrollment Number">
                            </td>
                        </tr>
                        <tr>
                            <td class="rows">
                                <label for="pass">Password </label>
                            </td>
                            <td class="rows1">
                                <input type="password" name="pass" id="pass" class="n" placeholder="Enter Your Password">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                    </div>
                </table>
                <br>
                <div class="divlink">
                <a class="pass" href="forgot_password.php" id="link">Forgot Password?</a>
                </div>
                
                <br>
                <button type="submit" id="btn1" onclick="login()">Login</button>
            </fieldset>
        </form>
    </div>
</body>

<script>
function login() {
    var txt1 = document.getElementById("enroll_num").value;
    var txt2 = document.getElementById("pass").value;
    var p1 = /\d{12}/;
    var p2 = /\W/;
    var p3 = /[a-z]{1,}/;
    var p4 = /[A-Z]/;
    var p5 = /\s/;
    if(txt1 == "") {
        alert("Enrollment no. must not be blank");
        formlink.action="#";
    }
    else {
        if(p1.test(txt1) == false) {
            alert("Please enter a valid enrollment number");
            formlink.action="#";
        }
        else {
            if(txt2 == "") {
                alert("Password cannot be blank");
                formlink.action="#";
            }
            else {
                if (p3.test(txt2) == false) {
                    alert("Password must contain a lower case character");
                    formlink.action="#";
                }
                else {
                    if (p4.test(txt2) == false) {
                        alert("Password must contain an upper case character");
                        formlink.action="#";
                    }
                    else {
                        if (p2.test(txt2) == false) {
                            alert("Password must contain a special character");
                            formlink.action="#";
                        }
                        else {
                            if (p5.test(txt2) == true) {
                                alert("Password must not contain space");
                                formlink.action="#";
                            }
                            else {
                                if (txt2.length < 8 || txt2.length > 16) {
                                    alert("password must have length of 8 to 16 charcters");
                                    formlink.action="#";
                                }
                                else {
                                    formlink.action="loginNext.php";
                                }
                            }
                        }
                    }    
                }
            }
        }
    }        
}
</script>

</html>