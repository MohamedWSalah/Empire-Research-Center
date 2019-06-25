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
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>Empire Research Center</title>
    <link rel="shortcut icon" href="IconFavi/FaviResearch.png" />
    <link href="../Includes/css/style.css" rel="stylesheet" type="text/css">
    <link href="../Includes/css/Footer.css" rel="stylesheet" type="text/css">
    <link href="../Includes/css/Blog.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="../Includes/js/Scripts.js"></script>
    <script type="text/javascript" src="../Includes/js/Clinics.js"></script>
</head>

<body>
    <div class="row">
        <div class="logo">
            <img id="LogoAnim" src="../logo/logo1.png" onmouseover="SetNewImage()" onmouseout="SetOldImage()" />
            <ul class="main-nav">
                <li><a href="Home.php"> HOME </a></li>
                <li><a href="Clinics.php"> CLINICS </a></li>
                <li><a href="Vision.php"> VISION </a></li>
                <li><a href="Testimonial.php"> TESTIMONIES </a></li>
                <li class="active"><a href="Blog.php"> BLOG </a></li>
                <li><a href="Services.php"> SERVICES </a></li>
                <li><a href="About.php"> ABOUT </a></li>
            </ul>
        </div>


        <?php
        if(isset($_SESSION["USER"] )){ ?>
        <div class="comments-container">
            <ul id="comments-list" class="comments-list">
                <li>
                    <div class="comment-main-level">
                        <!-- Avatar -->
                        <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>
                        <div class="comment-box">
                            <div class="comment-head">
                                <h6 class="comment-name by-author">Amr Ahmed</h6>
                                <span>From 10 Minutes</span>
                                <i class="fa fa-reply"></i>
                                <i class="fa fa-heart"></i>
                            </div>
                            <div class="comment-content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                            </div>
                        </div>
                    </div>
                    <ul class="comments-list reply-list">
                        <li>
                            <!-- Avatar -->
                            <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>
                            <div class="comment-box">
                                <div class="comment-head">
                                    <h6 class="comment-name">Mohamed Wael</h6>
                                    <span>From 10 Minutes</span>
                                    <i class="fa fa-reply"></i>
                                    <i class="fa fa-heart"></i>
                                </div>
                                <div class="comment-content">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                </div>
                            </div>
                        </li>

                        <li>
                            <!-- Avatar -->
                            <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>
                            <div class="comment-box">
                                <div class="comment-head">
                                    <h6 class="comment-name by-author">Amr Ahmed</h6>
                                    <span>From 10 Minutes</span>
                                    <i class="fa fa-reply"></i>
                                    <i class="fa fa-heart"></i>
                                </div>
                                <div class="comment-content">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>

                <li>
                    <div class="comment-main-level">
                        <!-- Avatar -->
                        <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>
                        <div class="comment-box">
                            <div class="comment-head">
                                <h6 class="comment-name">Mohamed Wael</h6>
                                <span>From 10 Minutes</span>
                                <i class="fa fa-reply"></i>
                                <i class="fa fa-heart"></i>
                            </div>
                            <div class="comment-content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="comments-container">
            <ul id="comments-list" class="comments-list">
                <li>
                    <div class="comment-main-level">
                        <!-- Avatar -->
                        <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>
                        <div class="comment-box">
                            <div class="comment-head">
                                <h6 class="comment-name by-author">Amr Ahmed</h6>
                                <span>From 10 Minutes</span>
                                <i class="fa fa-reply"></i>
                                <i class="fa fa-heart"></i>
                            </div>
                            <div class="comment-content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                            </div>
                        </div>
                    </div>
                    <ul class="comments-list reply-list">
                        <li>
                            <!-- Avatar -->
                            <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>
                            <div class="comment-box">
                                <div class="comment-head">
                                    <h6 class="comment-name">Mohamed Wael</h6>
                                    <span>From 10 Minutes</span>
                                    <i class="fa fa-reply"></i>
                                    <i class="fa fa-heart"></i>
                                </div>
                                <div class="comment-content">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                </div>
                            </div>
                        </li>
                        <li>
                            <!-- Avatar -->
                            <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>
                            <div class="comment-box">
                                <div class="comment-head">
                                    <h6 class="comment-name by-author">Amr Ahmed</h6>
                                    <span>From 10 Minutes</span>
                                    <i class="fa fa-reply"></i>
                                    <i class="fa fa-heart"></i>
                                </div>
                                <div class="comment-content">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>

                <li>
                    <div class="comment-main-level">
                        <!-- Avatar -->
                        <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>
                        <div class="comment-box">
                            <div class="comment-head">
                                <h6 class="comment-name">Mohamed Wael</h6>
                                <span>From 10 Minutes</span>
                                <i class="fa fa-reply"></i>
                                <i class="fa fa-heart"></i>
                            </div>
                            <div class="comment-content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="comments-container">
            <ul id="comments-list" class="comments-list">
                <li>
                    <div class="comment-main-level">
                        <!-- Avatar -->
                        <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>
                        <div class="comment-box">
                            <div class="comment-head">
                                <h6 class="comment-name by-author">Amr Ahmed</h6>
                                <span>hace 20 minutos</span>
                                <i class="fa fa-reply"></i>
                                <i class="fa fa-heart"></i>
                            </div>
                            <div class="comment-content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                            </div>
                        </div>
                    </div>

                    <ul class="comments-list reply-list">
                        <li>
                            <!-- Avatar -->
                            <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>
                            <div class="comment-box">
                                <div class="comment-head">
                                    <h6 class="comment-name">Mohamed Wael</h6>
                                    <span>hace 10 minutos</span>
                                    <i class="fa fa-reply"></i>
                                    <i class="fa fa-heart"></i>
                                </div>
                                <div class="comment-content">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                </div>
                            </div>
                        </li>

                        <li>
                            <!-- Avatar -->
                            <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>
                            <div class="comment-box">
                                <div class="comment-head">
                                    <h6 class="comment-name by-author">Amr Ahmed</h6>
                                    <span>From 10 Minutes</span>
                                    <i class="fa fa-reply"></i>
                                    <i class="fa fa-heart"></i>
                                </div>
                                <div class="comment-content">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>

                <li>
                    <div class="comment-main-level">
                        <!-- Avatar -->
                        <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>
                        <div class="comment-box">
                            <div class="comment-head">
                                <h6 class="comment-name">Mohamed Wael</h6>
                                <span>hace 10 minutos</span>
                                <i class="fa fa-reply"></i>
                                <i class="fa fa-heart"></i>
                            </div>
                            <div class="comment-content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>


        <?php }
        
        else
    header("Location: NotLogged.php");
?>

    </div>






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
        <a href="Signin.html" class="ActiveFooter">Submit Case</a>
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