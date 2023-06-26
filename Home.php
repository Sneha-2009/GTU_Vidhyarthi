<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GTU Vidhyarthi</title>
    <link rel="stylesheet" href="Home.css">
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
    <div class="bgimgdiv">
        <div class="spanOverDiv">For</div>
        <div class="divOverDiv">Gujarat Technological University</div>
        <div class="spanBelowDiv">Students, Alumni and Professors</div>
    </div>
    <div class="divBelowBg">
        Enter your email address and be the part of GTU Vidhyarthi community.
    </div>
    <form action="HomeNext.php" method="post" id="formlink">
    <div class="inpDiv"> 
        <input type="text" id="email" name="email" placeholder="gtu.vidhyarthi@gmail.com">
        <a href="signup.php" id="gslink"><input type="submit" value="Get Started >" id="getStarted"></a>
    </div>
    </form>
</body>

<script>
   
    const name = document.querySelector("#getStarted");
    const eid = document.getElementById("email");
    
    name.addEventListener('click', 
                        function() { 
                                        var p6 = /^\w+([\.\-\_]?\w+)*@\w+\.\w+(\.?\w+)*$/;
                                        if(p6.test(eid.value)==false){
                                            alert("Please enter a valid email address.");
                                            var link = document.getElementById("gslink");
                                            gslink.href = "#";
                                            formlink.action="#";
                                            
                                        } 
                                        else{
                                            
                                            gslink.href = "HomeNext.php";
                                            formlink.action="HomeNext.php";
                                        }}, 
                        false);
</script>

</html>