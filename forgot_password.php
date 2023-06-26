<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GTU Vidhyarthi</title>
        <link rel="stylesheet" href="forgot.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Alegreya+SC:ital@1&family=Roboto:wght@300&family=Ubuntu&display=swap" rel="stylesheet">
        
    </head>
    <script>
        function func()
        {
            var e=document.getElementById("eid").value;
            var p= /^\w+([\.\-\_]?\w+)*@\w+\.\w+(\.?\w+)*$/;
                //  /^\w+([\.\-\_]?\w+)*@\w+\.\w+(\.?\w+)*$/
            if(e!='')
            {
                if(p.test(e)==false)
                {
                    alert("Please enter a valid email address.");
                    formlink.action="#";
                }
                else
                {
                    formlink.action="forgotNext.php";
                }
            }
            else
            {
                alert("Please enter an Email Id");
                formlink.action="#";
            }
        }
    </script>
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
        <div class="d1">
        <form action="forgotnext.php" method="post" id="formlink">
            <fieldset>
                <legend style="font-weight:bold; font-size:20px;
                ">Forgot password?</legend>
                <table>
                    <div id="div-in">
                        <tr>
                            <td class="rows">
                                <label for="eid">Email: </label>
                            </td>
                            <td class="rows1">
                                <input type="text" name="eid" id="eid" class="n"  placeholder="Enter Your EmailAddress">
                            </td>
                        </tr>
                        
                    </div>
                </table>
                <br>
                <input type="submit"  value="send" onclick="func()" id="btn1">
            </fieldset>
        </form>
    </div>
        
    </body>
</html>