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
    <link href="../Includes/css/stylesignup.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="../Includes/js/Scripts.js"></script>
    <script type="text/javascript" src="../Includes/js/SignupScript.js"></script>
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


                <div id="EmpireTxt">
                    <div>
                        <h1 id="TESTING" class="EmpireTxt"></h1>
                    </div>
                </div>
                <hr>



            </div>





            <div class="signup form">

                <form method="post" action="registerinsert.php" onsubmit="return validateform();">
                    <img src="../images/signicon.png" />
                    <br><br>
                    <br>
                    <label for="fullname"><b>&nbsp; Username&nbsp; &nbsp; &nbsp; </b></label>&nbsp; &nbsp;

                    <input type="text" placeholder="Enter fullname" id="username" name="username">
                    <p></p>

                    <br>
                    <hr>
                    <br>
                    <label name="phone_number" for="fu"><b>&nbsp; Mobile number &nbsp; &nbsp; </b></label>
                    <input type="text" placeholder="Enter mobile number" id="phone_number" name="phone_number">
                    <p></p>
                    <br>
                    <hr><br>
                    <label name="gender" id="gender" for="fu"><b>&nbsp; Gender &nbsp; &nbsp; &nbsp; </b></label>&nbsp; &nbsp;
                    <input type="radio" name="gender" id="gender" value="&nbsp male" checked> Male
                    <input type="radio" name="gender" id="gender" value="female"> Female
                    <p></p>
                    <br>
                    <hr><br>
                    <label for="fu"><b>Date of Birth &nbsp; &nbsp; &nbsp;</b></label>
                    <input type="date" id="date_of_birth" name="date_of_birth">
                    <p></p>
                    <br>
                    <hr><br>
                    <label name="profession" for="fu"><b>&nbsp; profession&nbsp; &nbsp; &nbsp; </b></label>&nbsp;
                    <input type="text" placeholder="Enter profession" id="profession" name="profession">
                    <p></p>
                    <br>
                    <hr><br>
                    <label name="nationality" id="nationality" for="fu"><b> &nbsp; Nationality &nbsp; &nbsp; </b></label> &nbsp;

                    <select name="nationality" id="nationality">

                        <option value="afghan">Afghan</option>
                        <option value="albanian">Albanian</option>
                        <option value="algerian">Algerian</option>
                        <option value="american">American</option>
                        <option value="andorran">Andorran</option>
                        <option value="angolan">Angolan</option>
                        <option value="antiguans">Antiguans</option>
                        <option value="argentinean">Argentinean</option>
                        <option value="armenian">Armenian</option>
                        <option value="australian">Australian</option>
                        <option value="austrian">Austrian</option>
                        <option value="azerbaijani">Azerbaijani</option>
                        <option value="bahamian">Bahamian</option>
                        <option value="bahraini">Bahraini</option>
                        <option value="bangladeshi">Bangladeshi</option>
                        <option value="barbadian">Barbadian</option>
                        <option value="barbudans">Barbudans</option>
                        <option value="batswana">Batswana</option>
                        <option value="belarusian">Belarusian</option>
                        <option value="belgian">Belgian</option>
                        <option value="belizean">Belizean</option>
                        <option value="beninese">Beninese</option>
                        <option value="bhutanese">Bhutanese</option>
                        <option value="bolivian">Bolivian</option>
                        <option value="bosnian">Bosnian</option>
                        <option value="brazilian">Brazilian</option>
                        <option value="british">British</option>
                        <option value="bruneian">Bruneian</option>
                        <option value="bulgarian">Bulgarian</option>
                        <option value="burkinabe">Burkinabe</option>
                        <option value="burmese">Burmese</option>
                        <option value="burundian">Burundian</option>
                        <option value="cambodian">Cambodian</option>
                        <option value="cameroonian">Cameroonian</option>
                        <option value="canadian">Canadian</option>
                        <option value="cape verdean">Cape Verdean</option>
                        <option value="central african">Central African</option>
                        <option value="chadian">Chadian</option>
                        <option value="chilean">Chilean</option>
                        <option value="chinese">Chinese</option>
                        <option value="colombian">Colombian</option>
                        <option value="comoran">Comoran</option>
                        <option value="congolese">Congolese</option>
                        <option value="costa rican">Costa Rican</option>
                        <option value="croatian">Croatian</option>
                        <option value="cuban">Cuban</option>
                        <option value="cypriot">Cypriot</option>
                        <option value="czech">Czech</option>
                        <option value="danish">Danish</option>
                        <option value="djibouti">Djibouti</option>
                        <option value="dominican">Dominican</option>
                        <option value="dutch">Dutch</option>
                        <option value="east timorese">East Timorese</option>
                        <option value="ecuadorean">Ecuadorean</option>
                        <option value="egyptian">Egyptian</option>
                        <option value="emirian">Emirian</option>
                        <option value="equatorial guinean">Equatorial Guinean</option>
                        <option value="eritrean">Eritrean</option>
                        <option value="estonian">Estonian</option>
                        <option value="ethiopian">Ethiopian</option>
                        <option value="fijian">Fijian</option>
                        <option value="filipino">Filipino</option>
                        <option value="finnish">Finnish</option>
                        <option value="french">French</option>
                        <option value="gabonese">Gabonese</option>
                        <option value="gambian">Gambian</option>
                        <option value="georgian">Georgian</option>
                        <option value="german">German</option>
                        <option value="ghanaian">Ghanaian</option>
                        <option value="greek">Greek</option>
                        <option value="grenadian">Grenadian</option>
                        <option value="guatemalan">Guatemalan</option>
                        <option value="guinea-bissauan">Guinea-Bissauan</option>
                        <option value="guinean">Guinean</option>
                        <option value="guyanese">Guyanese</option>
                        <option value="haitian">Haitian</option>
                        <option value="herzegovinian">Herzegovinian</option>
                        <option value="honduran">Honduran</option>
                        <option value="hungarian">Hungarian</option>
                        <option value="icelander">Icelander</option>
                        <option value="indian">Indian</option>
                        <option value="indonesian">Indonesian</option>
                        <option value="iranian">Iranian</option>
                        <option value="iraqi">Iraqi</option>
                        <option value="irish">Irish</option>
                        <option value="israeli">Israeli</option>
                        <option value="italian">Italian</option>
                        <option value="ivorian">Ivorian</option>
                        <option value="jamaican">Jamaican</option>
                        <option value="japanese">Japanese</option>
                        <option value="jordanian">Jordanian</option>
                        <option value="kazakhstani">Kazakhstani</option>
                        <option value="kenyan">Kenyan</option>
                        <option value="kittian and nevisian">Kittian and Nevisian</option>
                        <option value="kuwaiti">Kuwaiti</option>
                        <option value="kyrgyz">Kyrgyz</option>
                        <option value="laotian">Laotian</option>
                        <option value="latvian">Latvian</option>
                        <option value="lebanese">Lebanese</option>
                        <option value="liberian">Liberian</option>
                        <option value="libyan">Libyan</option>
                        <option value="liechtensteiner">Liechtensteiner</option>
                        <option value="lithuanian">Lithuanian</option>
                        <option value="luxembourger">Luxembourger</option>
                        <option value="macedonian">Macedonian</option>
                        <option value="malagasy">Malagasy</option>
                        <option value="malawian">Malawian</option>
                        <option value="malaysian">Malaysian</option>
                        <option value="maldivan">Maldivan</option>
                        <option value="malian">Malian</option>
                        <option value="maltese">Maltese</option>
                        <option value="marshallese">Marshallese</option>
                        <option value="mauritanian">Mauritanian</option>
                        <option value="mauritian">Mauritian</option>
                        <option value="mexican">Mexican</option>
                        <option value="micronesian">Micronesian</option>
                        <option value="moldovan">Moldovan</option>
                        <option value="monacan">Monacan</option>
                        <option value="mongolian">Mongolian</option>
                        <option value="moroccan">Moroccan</option>
                        <option value="mosotho">Mosotho</option>
                        <option value="motswana">Motswana</option>
                        <option value="mozambican">Mozambican</option>
                        <option value="namibian">Namibian</option>
                        <option value="nauruan">Nauruan</option>
                        <option value="nepalese">Nepalese</option>
                        <option value="new zealander">New Zealander</option>
                        <option value="ni-vanuatu">Ni-Vanuatu</option>
                        <option value="nicaraguan">Nicaraguan</option>
                        <option value="nigerien">Nigerien</option>
                        <option value="north korean">North Korean</option>
                        <option value="northern irish">Northern Irish</option>
                        <option value="norwegian">Norwegian</option>
                        <option value="omani">Omani</option>
                        <option value="pakistani">Pakistani</option>
                        <option value="palauan">Palauan</option>
                        <option value="panamanian">Panamanian</option>
                        <option value="papua new guinean">Papua New Guinean</option>
                        <option value="paraguayan">Paraguayan</option>
                        <option value="peruvian">Peruvian</option>
                        <option value="polish">Polish</option>
                        <option value="portuguese">Portuguese</option>
                        <option value="qatari">Qatari</option>
                        <option value="romanian">Romanian</option>
                        <option value="russian">Russian</option>
                        <option value="rwandan">Rwandan</option>
                        <option value="saint lucian">Saint Lucian</option>
                        <option value="salvadoran">Salvadoran</option>
                        <option value="samoan">Samoan</option>
                        <option value="san marinese">San Marinese</option>
                        <option value="sao tomean">Sao Tomean</option>
                        <option value="saudi">Saudi</option>
                        <option value="scottish">Scottish</option>
                        <option value="senegalese">Senegalese</option>
                        <option value="serbian">Serbian</option>
                        <option value="seychellois">Seychellois</option>
                        <option value="sierra leonean">Sierra Leonean</option>
                        <option value="singaporean">Singaporean</option>
                        <option value="slovakian">Slovakian</option>
                        <option value="slovenian">Slovenian</option>
                        <option value="solomon islander">Solomon Islander</option>
                        <option value="somali">Somali</option>
                        <option value="south african">South African</option>
                        <option value="south korean">South Korean</option>
                        <option value="spanish">Spanish</option>
                        <option value="sri lankan">Sri Lankan</option>
                        <option value="sudanese">Sudanese</option>
                        <option value="surinamer">Surinamer</option>
                        <option value="swazi">Swazi</option>
                        <option value="swedish">Swedish</option>
                        <option value="swiss">Swiss</option>
                        <option value="syrian">Syrian</option>
                        <option value="taiwanese">Taiwanese</option>
                        <option value="tajik">Tajik</option>
                        <option value="tanzanian">Tanzanian</option>
                        <option value="thai">Thai</option>
                        <option value="togolese">Togolese</option>
                        <option value="tongan">Tongan</option>
                        <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                        <option value="tunisian">Tunisian</option>
                        <option value="turkish">Turkish</option>
                        <option value="tuvaluan">Tuvaluan</option>
                        <option value="ugandan">Ugandan</option>
                        <option value="ukrainian">Ukrainian</option>
                        <option value="uruguayan">Uruguayan</option>
                        <option value="uzbekistani">Uzbekistani</option>
                        <option value="venezuelan">Venezuelan</option>
                        <option value="vietnamese">Vietnamese</option>
                        <option value="welsh">Welsh</option>
                        <option value="yemenite">Yemenite</option>
                        <option value="zambian">Zambian</option>
                        <option value="zimbabwean">Zimbabwean</option>
                    </select>
                    <p></p>
                    <br>
                    <hr><br>

                    <label name="email" for="fu"><b>&nbsp; Email Address &nbsp;</b></label>&nbsp;
                    <input type="text" placeholder="Enter Email" id="email" name="email">
                    <p></p>
                    <br><br>
                    <hr><br>

                    <label for="fu"><b> &nbsp; Password&nbsp; &nbsp; &nbsp; &nbsp; </b></label>&nbsp;
                    <input type="password" placeholder="Enter password" id="pass" name="password">
                    <p></p>
                    <br>
                    <hr><br>
                    <label name="password" for="fu"><b>&nbsp; Confirm Password&nbsp; </b></label>
                    <input type="password" placeholder="Enter password again" id="conpass">
                    <p></p>
                    <br><br>

                    <button type="submit" id="button" class="signupbtn"><b>Sign Up</b></button>
                    <p id="pm">
                        <p>
                            <br> <br>
                </form>
                </h2>
                </h2>
            </div>

            <!-- Bottom Footer- Amr ahmed Abd El Rahamn - 162697 -->
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