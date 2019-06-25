<?php
    session_start();
    $db_host="localhost";
    $db_name="researchblog";
    $db_user="root";
    $db_pass="";
    $conn=mysqli_connect($db_host, $db_user, $db_pass);
    mysqli_select_db($conn,$db_name);
    if(isset($_POST['username']))
    {
     $uname=$_POST['username'];
     $password=$_POST['password'];
     $sql="select * from users where username='".$uname."' AND password ='".$password."'";
     $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1)
        {
            $_SESSION["USER"] = $_POST["username"];
            header("Location: UserPanel.php");
            exit();
        }
        else
        {
            echo "<script> alert('Error in Loggin') </script>";
        }
    }	
?>


<html lang="en">
<head>
    <title>Empire Dental Clinics</title>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <link rel="shortcut icon" href="photos/favicon.ico" />
    <link href="../Includes/css/signin.css" rel="stylesheet" type="text/css">
    <link href="../Includes/css/style.css" rel="stylesheet" type="text/css">
    <link href="../Includes/css/Footer.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="../Includes/js/signin.js"></script>
</head>

<body>
    <div class="BackGroundTest">
        <div class="row">
            <div class="logo">
                <img id="LogoAnim" src="../logo/logo1.png" onmouseover="SetNewImage()" onmouseout="SetOldImage()" />
                <ul class="main-nav">
                    <li class="active"><a href="Home.php"> HOME </a></li>
                    <li><a href="Clinics.php"> CLINICS </a></li>
                    <li><a href="Vision.php"> VISION </a></li>
                    <li><a href="Testimonial.php"> TESTIMONIES </a></li>
                    <li><a href="Blog.php"> BLOG </a></li>
                    <li><a href="Services.php"> SERVICES </a></li>
                    <li><a href="About.php"> ABOUT </a></li>
                </ul>
                <p class="CapsLockWarningText" id="CapsText">WARNING! CAPS LOCK IS ON.</p>
                <div id="EmpireTxt">
                    <div>
                        <h1 id="TESTING" class="EmpireTxt"></h1>
                    </div>
                </div>
                <hr>
            </div>
            <form name="login" id="LForm" method="POST">
                <div class="login">
                    <input id="username" name="username" type="text" placeholder="username"><br>
                    <input type="password" placeholder="password" id="password" name="password"><br>
                    <input type="submit" onclick="check(this.form)" value="Login" id="LoginButton" name="login" />
                    <input type="button" value="Forgot your password?" id="forgotpwd" />

                    <div id="lightbox">
                        <div id="lightbox_content">
                            <div id="close">&times;</div>
                            <div class="EAdd">
                                <p>Enter your email address</p>
                            </div>
                            <input id="Email" name="Email" type="text" placeholder="Email address">
                            <input type="button" onclick="ValidateEmail(document.login.Email)" value="Send password" id="sendpassword" />
                        </div>
                    </div>
                    <div class="LoggingLoading" id="LoggingTxt">
                        <p id="test"></p>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <footer>
        <div class="contact_us">
            <div class="contact_us_fon">
                <div class="contact_us_left">
                    <div class="contact_us_big_text">
                        <span class="contact_us_big_text">contact <span class="Darkcyan_text">us</span></span>
                    </div>
                    <div class="contact_us_small_text adress"> Address: 22, banafseg 1, 1st settlement, New Cairo - Egypt</div>
                    <div class="contact_us_small_text phone_number"> phone: +20 1011573252</div>
                    <div class="contact_us_small_text mail"> Geek3mr@gmail.com</div>
                </div>
                <div class="contact_us_right">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3451.1758944256294!2d31.603787315452355!3d30.11777992205871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14581dea54fc683b%3A0xfb58c4d6f97e0173!2sThe+British+University+In+Egypt!5e0!3m2!1sen!2seg!4v1552924252458" width="400" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </footer>

    <!-- Sticky SignNav Right Bottom - Amr ahmed Abd El Rahamn- 162697 -->
    <div class="SignNavBar">
<?php
        
        if(isset($_SESSION["USER"] ))
        {
        echo "<script> $('.SignNavBar').html(\"<a href='Logout.php' class='ActiveSign' >Sign out</a>\"); </script>";
        }
        else 
        {
            echo "<script> $('.SignNavBar').html(\"<a href='Signin.php' class='ActiveSign'>Sign In</a><a href='Signup.php'class='ActiveFooter'>Register</a>\"); </script>";
        }
?>
     
        <a id="ContactLB" href="#contact" class="ActiveFooter">Contact</a>
        <div id="lightbox2">
            <div id="lightbox2_content">
                <div id="close2">&times;</div>
                <div class="ContactUsField">
                    <form id="contact" action="" method="post">
                        <h3 class="ContactUsWords">Quick Contact</h3>
                        <h4 class="ContactUsWords">Contact us today, and get reply with in 24 hours!</h4>
                        <fieldset>
                            <input placeholder="Your name" id="username" type="text" tabindex="1" required autofocus>
                        </fieldset>
                        <fieldset>
                            <input placeholder="Your Email Address" id="textfield1" type="email" tabindex="2" required>
                        </fieldset>
                        <fieldset>
                            <input placeholder="Your Phone Number" id="textfield2" type="tel" tabindex="3" required>
                        </fieldset>
                        <fieldset>
                            <input placeholder="Your Social Media Account starts with http://" type="url" tabindex="4" required>
                        </fieldset>
                        <fieldset>
                            <textarea placeholder="Type your Message Here...." id="textfield3" tabindex="5" required></textarea>
                        </fieldset>
                        <fieldset>
                            <button name="submit" type="submit" id="contact-submit" id="textfield4" data-submit="...Sending">Submit</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <a href="Signin.php" class="ActiveFooter">Submit Case</a>
    </div>

    <!-- Social Media Left Side Sticky Y-Axis- Amr Ahmed Abd El Rahamn- 162697 -->
    <div class="icon-bar">
        <a href="https://www.facebook.com/amrahmedgewaly" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="www.google.com" class="google"><i class="fa fa-google"></i></a>
        <a href="https://www.linkedin.com/" class="linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="www.youtube.com" class="youtube"><i class="fa fa-youtube"></i></a>
    </div>


</body>

</html>