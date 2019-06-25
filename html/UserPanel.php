<!-- *********************** -->
<!-- *********************** -->
<!-- *********************** -->
<!-- *********************** -->
<!-- **** Name: Amr Ahmed ** -->
<!-- **** ID: 162697  ******-->
<!-- *********************** -->
<!-- *********************** -->
<!-- *********************** -->
<?php
session_start();
$User=$_SESSION["USER"];
if($User)
{
    if(isset($_POST["CPwd"]))
    {
        $oldpwd = $_POST['OPwd'];
        $newpwd = $_POST['npwd'];
        $db_host="localhost";
        $db_name="researchblog";
        $db_user="root";
        $db_pass="";
        $conn=mysqli_connect($db_host, $db_user, $db_pass);
        mysqli_select_db($conn,$db_name);
        $sqq="SELECT password FROM users WHERE username='$User'";
        $PGet = mysqli_query($conn,$sqq);
        $row = $PGet->fetch_assoc();
        
        $oldPwdUser = $row['password'];
        
        if($oldpwd==$oldPwdUser)
        {
            $ChangePwQuery=mysqli_query($conn,"UPDATE users SET password='$newpwd' WHERE username='$User'");
            echo"<script>alert('Password Changed')</script>";
        }
        else
        {
            echo"<script>alert('Old Password Doesnt Match')</script>";
        }
    }
    if(isset($_POST["DAcc"]))
    {
        $db_host1="localhost";
        $db_name1="researchblog";
        $db_user1="root";
        $db_pass1="";
        $conn1=mysqli_connect($db_host1, $db_user1, $db_pass1);
        mysqli_select_db($conn1,$db_name1);
    
        $sqlc="DELETE FROM users WHERE username='$User'";
        $Del=mysqli_query($conn1,$sqlc);
        session_destroy();
        header("Location: AccDeleted.php");
    }
}
else
    header("Location: NotLogged.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>Empire Research Center</title>
    <link rel="shortcut icon" href="IconFavi/FaviResearch.png" />
    <link href="../Includes/css/UserPanel.css" rel="stylesheet" type="text/css">
    <link href="../Includes/css/Footer.css" rel="stylesheet" type="text/css">
    <link href="../Includes/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../Includes/js/UserPanel.js"></script>
    <script src="../Includes/js/Scripts.js"></script>
</head>

<body>
    <div class="BackGroundTest">
        <div class="row">
            <div class="logo">
                <img alt="" id="LogoAnim" src="../logo/logo1.png" onmouseover="SetNewImage()" onmouseout="SetOldImage()" />
                <ul class="main-nav">
                    <li><a href="Home.php"> HOME </a></li>
                    <li><a href="Clinics.php"> CLINICS </a></li>
                    <li><a href="Vision.php"> VISION </a></li>
                    <li><a href="Testimonial.php"> TESTIMONIES </a></li>
                    <li><a href="Blog.php"> BLOG </a></li>
                    <li><a href="Services.php"> SERVICES </a></li>
                    <li><a href="About.php"> ABOUT </a></li>
                </ul>
            </div>
            <div class="user-panel">
                <div class="slidebar">
                    <ul>
                        <!-- Icon Images From W3cSchools - Amr ahmed Abd El Rahamn- 16269 -->
                        <li><a href="" name="tab1"><i class="fa fa-fa fa-address-book"></i>General</a></li>
                        <li><a href="" name="tab2"><i class="fa fa-briefcase"></i>Cases</a></li>
                        <li><a href="" name="tab3"><i class="fa fa-gear"></i>Setting</a></li>
                        <li><a href="" name="tab4"><i class="fa fa-cogs"></i>Advanced</a></li>
                    </ul>
                </div>
                <div class="UserPanelOptions">
                    <div id="tab1">
                        <?php
                            $ID = $_SESSION["USER"];
                            $ID0 = $_SESSION["USER"];
                            $db_host0="localhost";
                            $db_name0="researchblog";
                            $db_user0="root";
                            $db_pass0="";
                            $conn0=mysqli_connect($db_host0, $db_user0, $db_pass0);
                            $sql0 = "SELECT email, phone_number,date_of_birth FROM users where username='".$ID0."'";
                            mysqli_select_db($conn0,$db_name0);
                            $ret=mysqli_query($conn0,$sql0);
                            while($row = mysqli_fetch_assoc($ret))
                            {
                                echo "<script> $('#tab1').html(\"<h2  class='header'>Empire - Dashboard - Your Info - $ID</h2> <h4 id = 'user_info_UserPanel'>Email : {$row['email']} <br>Phone Number : {$row['phone_number']}<br>Date of birth : {$row['date_of_birth']}</h4>\"); </script>" ;
                            }
                        ?>
                    </div>
                    <div id="tab2">
                        <?php 
                    if(isset($_SESSION["USER"] ))
                    {
                        $ID = $_SESSION["USER"];
                    echo "<script> $('#tab2').html(\"<h2  class='header'>Empire - Cases - $ID</h2>\"); </script>";
                    }
                ?>
                    </div>
                    <div id="tab3">
                        <?php 
                    if(isset($_SESSION["USER"] ))
                    {
                        $ID = $_SESSION["USER"];
                    echo "<script> $('#tab3').html(\"<h2  class='header'>Empire - Settings - $ID</h2>\"); </script>";
                    }
                ?>
                        <h3 id="ChangePasswordText">Change Your Password</h3>
                        <form id="FormContainer" action="" name="ChangePW" method="POST">
                            <input class="ChangePassInput" id="OPwd" name="OPwd" type="password" placeholder="Old Password"><br>
                            <input class="ChangePassInput" type="password" placeholder="new password" id="npwd" name="npwd"><br>
                            <input class="ChangePassButton" type="submit" value="Change Password" id="CPwd" name="CPwd" />
                        </form>
                    </div>
                    <div id="tab4">
                        <?php 
                    if(isset($_SESSION["USER"] ))
                    {
                        $ID = $_SESSION["USER"];
                    echo "<script> $('#tab4').html(\"<h2  class='header'>Empire - Advanced - $ID</h2>\"); </script>";
                    }
                ?>
                        <h3 id="DeleteYourAccountText">Delete Your Account</h3>
                        <form action="" name="DeleteAcc" method="POST">
                            <input id="DeleteAccButton" type="submit" value="Delete Account" id="DAcc" name="DAcc" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Footer- Amr ahmed Abd El Rahamn- 162697 -->
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