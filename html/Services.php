<!-- *********************** -->
<!-- *********************** -->
<!-- *This Page was Created* -->
<!-- ** from Scratch by **** -->
<!-- **** Name: Amr Ahmed ** -->
<!-- ****  ID: 162697 ****** -->
<!-- *********************** -->
<!-- *********************** -->
<!-- *********************** -->
<!DOCTYPE html>
<html lang="en">
<?php 
            session_start();
    ?>

<head>
    <title>Empire Research Center</title>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <link rel="shortcut icon" href="IconFavi/FaviResearch.png" />
    <link href="../Includes/css/style.css" rel="stylesheet" type="text/css">
    <link href="../Includes/css/Services.css" rel="stylesheet" type="text/css">
    <link href="../Includes/css/Footer.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="../Includes/js/Scripts.js"></script>
    <script type="text/javascript" src="../Includes/js/Clinics.js"></script>
</head>

<body>
    <div class="BackGroundTest">
        <div class="row">
            <div class="logo">
                <img id="LogoAnim" src="../logo/logo1.png" onmouseover="SetNewImage()" onmouseout="SetOldImage()" />
                <ul class="main-nav">
                    <li><a href="Home.php"> HOME </a></li>
                    <li><a href="Clinics.php"> CLINICS </a></li>
                    <li><a href="Vision.php"> VISION </a></li>
                    <li><a href="Testimonial.php"> TESTIMONIES </a></li>
                    <li><a href="Blog.php"> BLOG </a></li>
                    <li class="active"><a href="Services.php"> SERVICES </a></li>
                    <li><a href="About.php"> ABOUT </a></li>
                </ul>
            </div>
            <div class="services">
                <section class="pricecol">
                    <div class="icon">
                        <i class="icon-magic"></i>
                    </div>
                    <h3><span>Researches</span></h3>
                    <ul class="MangUL">
                        <li class="Serviceli">Etiam sit amet orci</li>
                        <li class="Serviceli">Duis leo sed fringilla</li>
                        <li class="Serviceli">Mauris sit amet nibh</li>
                        <li class="Serviceli">Donec sodales sagittis</li>
                    </ul>
                    <p>
                        <a class="ServiceButtons"><span>Sign Up</span></a>
                    </p>
                </section>

                <section class="pricecol">
                    <div class="icon">
                        <i class="icon-leaf"></i>
                    </div>
                    <h3><span>Feedback</span></h3>
                    <ul class="MangUL">
                        <li class="Serviceli">Etiam sit amet orci</li>
                        <li class="Serviceli">Duis leo sed fringilla</li>
                        <li class="Serviceli">Mauris sit amet nibh</li>
                        <li class="Serviceli">Donec sodales sagittis</li>
                    </ul>
                    <p>
                        <a class="ServiceButtons"><span>Sign Up</span></a>
                    </p>
                </section>

                <section class="pricecol">
                    <div class="icon">
                        <i class="icon-link"></i>
                    </div>
                    <h3><span>Support</span></h3>
                    <ul class="MangUL">
                        <li class="Serviceli">Etiam sit amet orci</li>
                        <li class="Serviceli">Duis leo sed fringilla</li>
                        <li class="Serviceli">Mauris sit amet nibh</li>
                        <li class="Serviceli">Donec sodales sagittis</li>
                    </ul>
                    <p>
                        <a class="ServiceButtons"><span>Sign Up</span></a>
                    </p>
                </section>
            </div>
        </div>
    </div>



    <!--Subscription Area - Amr ahmed Abd El Rahamn- 162697 -->

    <?php

        if(isset($_SESSION["USER"] )){ ?>

    <center class="Subscription">
        <div id="subscribebox">
            <div class="follow-subscribe-social">
                <ul>
                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-google"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
            <img border="0" alt="Subcribe" src="http://dateinacrate.com/wp-content/uploads/2015/06/icon-subscribe.png" width="100" height="100">
            <p>Subscribe to Empire Newsletter</p>
            <form class="subscribe" action='https://feedburner.google.com/fb/a/mailverify?uri=Msdesign92' method='post' onsubmit='window.open(&apos;https://feedburner.google.com/fb/a/mailverify?uri=Msdesign92, &apos;popupwindow&apos;, &apos;scrollbars=yes,width=550,height=520&apos;);return true' target='popupwindow'>
                <input name='uri' type='hidden' value='YOUR-USER-NAME' />
                <input name='loc' type='hidden' value='en_US' />
                <input class="subscribe-email" type='text' name='email' onblur='if (this.value == &quot;&quot;) {this.value = &quot;Your Email&quot;;}' onfocus='if (this.value == &quot;Your Email&quot;) {this.value = &quot;&quot;;}' value='Your Email' />
                <input class="subscribe-button" type="submit" value="Subscribe" />
            </form>
            <p style="font-size:90%;">We will not share your information with anyone</p>
        </div>
    </center>

    <?php } ?>

    <!-- Bottom Footer- Amr Ahmed Abd El Rahamn - 162697 -->
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
        echo "<script> $('.SignNavBar').html(\"<a href='Logout.php' class='ActiveSign' >Sign out</a><a href='UserPanel.php' class='ActiveSign' >Dashboard</a>\"); </script>";
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