window.onload = function()
{
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
}