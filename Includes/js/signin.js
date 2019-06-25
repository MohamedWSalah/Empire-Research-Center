/* By Mohamed 159588 */
/* change Login background color on mouse hover */
$(document).ready(function()
                         {
            $(".login input[type=button]").on({
                mouseenter: function()
                {
                    $(this).css("background-color" , "darkorange");
                    $(this).css("color" , "white");
                },
                
                mouseleave: function()
                {
                    $(this).css("background-color" , "white")
                    $(this).css("color" , "black");
                }
            })
        });

$(document).ready(function()
                         {
            $(".login input[type=submit]").on({
                mouseenter: function()
                {
                    $(this).css("background-color" , "darkorange");
                    $(this).css("color" , "white");
                },
                
                mouseleave: function()
                {
                    $(this).css("background-color" , "white")
                    $(this).css("color" , "black");
                }
            })
        });
/* ========================================================================= */        
/* this function types "Logging...." text when the user enter a username and pwd then press on "Login" Button. */
/* By Mohamed 159588 */
var i =0;
var txt = 'Logging....';
var speed = 50;
function LoggingText()
        {
            if(i < txt.length)
                {
                    document.getElementById("test").innerHTML += txt.charAt(i);
                    i++;
                    setTimeout(LoggingText,speed);
                    
                }
        }
//=====================================================================
// Singin to empire text writing letter by letter on window load //
// By Mohammed 159588 //
var X =0;
var SI = 'SIGN IN TO EMPIRE';
var speed2 = 100;

function EmpireText()
        {
            var TXTT = document.getElementById("EmpireTxt");
            
            if(X < SI.length)
                {
                    document.getElementById("EmpireTxt").innerHTML += SI.charAt(X);
                    
                    TXTT.style.fontSize = "70px";
                    TXTT.style.textAlign="center";
                    TXTT.style.color="white";
                    
                    
                    X++;
                    setTimeout(EmpireText,speed2);
                    
                }
        }
//==================================

/* ======================================================================== */
/* this function is to make sure that the user didnt leave usernamd or pwd filed empty, also it changes
the border color to "red" for the empty field so its easier for the user to notice. */
/* By Mohamed 159588 */
function check(form)
         {
             var User= document.getElementById("username");
             var Pass= document.getElementById("password");
             var LogTxt= document.getElementById("LoggingTxt");
             
             if(form.username.value == "" || form.password.value == "")
                 {
                     alert("Please fill in the required fields");
                     
                     
                     if(form.username.value == "")
                         {
                             User.style.border="1px solid red";
                             LogTxt.style.display="none";
                         }
                     else
                         {
                             User.style.border="1px solid black";
                             
                         }
                     
                     if(form.password.value == "")
                         {
                             Pass.style.border="1px solid red";
                             LogTxt.style.display="none";
                         }
                     else
                         {
                             Pass.style.border="1px solid black";
                         }
                     
                 }
             
             else
                 {
                     User.style.border="1px solid black";
                     Pass.style.border="1px solid black";
                     LogTxt.style.display="block";
                     LoggingText();
                     
                 }
         }


/* ======================================================================== */
/* capslock detection function, it shows a warning text incase the user's capslock is On*/
/* By Mohamed 159588- Amr Ahmed Abd El Rahman 162697*/

window.onload = function()
{
    EmpireText();
    
    var UN = document.getElementById("username");
    var pwd = document.getElementById("password");
    var txt1 = document.getElementById("textfield1");
    var txt2= document.getElementById("textfield2");
    var txt3 = document.getElementById("textfield3");
    var txt4 = document.getElementById("textfield4");
    var text = document.getElementById("CapsText");
    UN.addEventListener("keyup", function(event) 
                           {
        if (event.getModifierState("CapsLock")) 
        {
            text.style.display = "block";
        } 
        else 
        {
            text.style.display = "none"
        }
        });
    pwd.addEventListener("keyup", function(event)
                    {
    if(event.getModifierState("CapsLock"))
        {
            text.style.display = "block";
        }
    else
        {
            text.style.display = "none";
        }
});
/* ===================================================================================== */
/* Showing Forget password Lightbox */
    /* By Mohamed 159588 */
    document.getElementById("forgotpwd").addEventListener("click", function() 
    {
                document.getElementById("lightbox").className = "open";
          });

    document.getElementById("close").addEventListener("click", function() 
    {
                document.getElementById("lightbox").className = "";
          });

    document.getElementById("lightbox").addEventListener("click", function(Q) 
    {
        if (Q.target.id == "lightbox") 
        {
                document.getElementById("lightbox");
        }
    });

   //==========================================================/
    /* CONTACT US LIGHT BOX */
    
    /* By Mohamed 159588 */
    document.getElementById("ContactLB").addEventListener("click", function() 
    {
                document.getElementById("lightbox2").className = "open";
          });

    document.getElementById("close2").addEventListener("click", function() 
    {
                document.getElementById("lightbox2").className = "";
          });

    document.getElementById("lightbox2").addEventListener("click", function(Q) 
    {
        if (Q.target.id == "lightbox2") 
        {
                document.getElementById("lightbox2");
        }
    });

    
    //=====================================
    
    var UN = document.getElementById("username");
    var pwd = document.getElementById("password");
    var txt1 = document.getElementById("textfield1");
    var txt2= document.getElementById("textfield2");
    var txt3 = document.getElementById("textfield3");
    var txt4 = document.getElementById("textfield4");
    var text = document.getElementById("CapsText");
    UN.addEventListener("keyup", function(event) 
                           {
        if (event.getModifierState("CapsLock")) 
        {
            text.style.display = "block";
        } 
        else 
        {
            text.style.display = "none"
        }
        });
    txt1.addEventListener("keyup", function(event) 
                           {
        if (event.getModifierState("CapsLock")) 
        {
            text.style.display = "block";
        } 
        else 
        {
            text.style.display = "none"
        }
        });
     txt2.addEventListener("keyup", function(event) 
                           {
        if (event.getModifierState("CapsLock")) 
        {
            text.style.display = "block";
        } 
        else 
        {
            text.style.display = "none"
        }
        });
     txt3.addEventListener("keyup", function(event) 
                           {
        if (event.getModifierState("CapsLock")) 
        {
            text.style.display = "block";
        } 
        else 
        {
            text.style.display = "none"
        }
        });
     txt4.addEventListener("keyup", function(event) 
                           {
        if (event.getModifierState("CapsLock")) 
        {
            text.style.display = "block";
        } 
        else 
        {
            text.style.display = "none"
        }
        });
    pwd.addEventListener("keyup", function(event)
                    {
    if(event.getModifierState("CapsLock"))
        {
            text.style.display = "block";
        }
    else
        {
            text.style.display = "none";
        }
});
    
    
};



/* ============================================= */
/* Email Validate*/
/* By Mohamed 159588 & Amr Ahmed 162697*/
/* ============================================= */

function ValidateEmail(inputText)
{
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var FgpwEmail = document.getElementById("Email");
    
    if(inputText.value.match(mailformat))
    {
        alert("ok");
        FgpwEmail.style.border="1px solid black";
        
    }
    else
    {
        alert("Invalid Email! :)");
        FgpwEmail.style.border="1px solid red";
       
    }
}


/* ======================================================================== */
/* Changing Logo Animation - Amr Ahmed Abd El Rahman - Mohamed Wael Salah */
/* ======================================================================== */

function SetNewImage()
{
    document.getElementById("LogoAnim").src ="../logo/logo2.png";
};
function SetOldImage()
{
    document.getElementById("LogoAnim").src ="../logo/logo1.png";
};


/* ===================================================================================== */
/* hover on the nav bar color */
//By Mohamed159588 & Amr162697//
/* ===================================================================================== */

$(document).ready(function () {
    $(".main-nav li").on({
        mouseenter: function () {
            $(this).css("border", "2px solid white");

        },
        mouseleave: function () {
            $(this).css("border", "transparent");
        }
    })
});
/* ===================================================================================== */
