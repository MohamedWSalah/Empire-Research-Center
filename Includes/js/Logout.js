/* ======================================================================== */
var i =0;
var txt = 'Logging Out....';
var speed = 50;
function LOutText()
        {
            if(i < txt.length)
                {
                    document.getElementById("LOut").innerHTML += txt.charAt(i);
                    i++;
                    setTimeout(LOutText,speed);
                    
                }
        }

window.onload = function()
{
    LOutText();
}