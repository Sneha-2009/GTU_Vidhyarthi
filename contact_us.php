<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contactus.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alegreya+SC:ital@1&family=Roboto:wght@300&family=Ubuntu&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav class="nav1">
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
           <a href="Home.php"><input type="button" value="Back" id="signIn"></a> 
            
        </div>
    </nav>
  
    <div class="d1">
            <br>
       <!--<form action="signup.php"></form>--> 
    <!-- <form action="Home.php mailto:"> -->
    <form action="ssheth3329@gmail.com" method="post" id="formlink" enctype="text/plain">
        <fieldset>
            <legend style="font-weight: bold; font-size: 20px;">GET IN TOUCH WITH US</legend>
        <table>
            <div id="div-in">
                <tr>
                    <td class="rows">
                        <label for="name">Name </label>
                    </td>
                    <td class="rows1 ">
                        <input type="text" id="name" name="name" class="n" placeholder="Enter Your Name">
                    </td>
               
                </tr>
                <tr>
                    <td class="rows">
                        <label for="email">Email </label>
                    </td>
                    <td class="rows1">
                        <input type="email" name="email" id="email" class="n" placeholder="Enter Your Email">
                    </td>
                </tr>
                <tr>
                    <td class="rows">
                        <label for="phone">Phone No. </label>
                    </td>
                    <td class="rows1">
                        <input type="text" name="phone" class="n" id="phone" placeholder="Enter Your PhoneNumber">
                    </td>
                </tr>
                <tr>
                    <td class="rows">
                        <label for="msg">Message </label>
                    </td>
                    <td class="rows1">
                        <textarea name="msg" class="n" cols="30" id="msg" rows="10" placeholder="Write Your Message Here"></textarea>
                    </td>
                </tr>
            </div>
        </table>
        <br>
        <button type="submit" id="btn1" onclick="fun1()">Send Message</button>
        </fieldset>
    </form>
</div>

<div id="d2">
        <a class="logo" href="https://instagram.com/sn_ha20?igshid=ZGUzMzM3NWJiOQ==" target="_blank"><img class="logo" src="insta.jpg" alt="instagram logo">
        </a>
    
        <a class="logo" href="https://www.facebook.com/gtuoffice/" target="_blank">
            <img class="logo" src="facebook.jpg" alt="facebook app_logo">
        </a>
        <a class="logo" href="https://www.youtube.com/@GujaratTechnologicalUniversity" target="_blank">
            <img class="logo" src="yt.jpg" alt="youtube logo"> 
        </a>
    
        <a class="logo" href="https://twitter.com/gtuoffice" target="_blank">
            <img class="logo" src="twitter.jpg" alt="twitter app_logo"> 
        </a>
    </div>
</body>
<script type="text/javascript">
    const send = document.querySelector("#btn1");
    const nm = document.getElementById("name");
    const emailid = document.getElementById("email");
    const phno = document.getElementById("phone");
    const mesg = document.getElementById("msg");
    
    send.addEventListener('click', 
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
                                                    var p3 = /\d{10}/;
                                                    if(p3.test(phno.value)==false){
                                                        alert("Please enter a valid phone number");
                                                        formlink.action="#";
                                                    }
                                                    else{
                                                        if(mesg.value==""){
                                                            formlink.action="#";
                                                            alert("The message must not be blank");
                                                        }
                                                        else{
                                                            formlink.action="mailto:ssheth3329@gmail.com";
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }, 
                                    false);
</script>

</html>