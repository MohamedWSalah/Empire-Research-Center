
/* ======================================================================== */
/* JavaScript Coming Soon Counter - Amr Ahmed Abd El Rahman - 162697 */
/* ======================================================================== */
// Set the date we're counting down to

window.onload = function()
{
var countDownDate = new Date("April 29, 2019 15:37:25").getTime();

// Update the count down every 1 second
var countdownfunction = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
  
  // Find the distance between now an the count down date
  var distance = countDownDate - now;
  
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
  // Output the result in an element with id="demo"
  document.getElementById("ComingSoon").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
  
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(countdownfunction);
    document.getElementById("ComingSoon").innerHTML = "The Count is over, Welcome";
  }
}, 1000);
    
    // ==============================================================================
    /* Contact US LIGHT BOX - By Mohamed 159588 */
    
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

}
