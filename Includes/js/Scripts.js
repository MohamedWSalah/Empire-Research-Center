/* ======================================================================== */
/* Index Dynammic Moving Words(Cursor) - Java Script - Amr Ahmed Abd El Rahman  */
/* ======================================================================== */

var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid white }";
  document.body.appendChild(css);
    
    
    //========================================================================
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

    
    //========================================================================
    
    
};

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


/* ======================================================================== */
/* hover on the nav bar color */
//By Mohamed159588 & Amr162697//
/* ======================================================================== */
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


/* ======================================================================== */
/* Slide Show Using Jquery Simple Idea - Amr Ahmed Abd El Rahman - 162697 */
/* ======================================================================== */

$("#slideshow > div:gt(0)").hide();
setInterval(function() {
  $('#slideshow > div:first')
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
}, 3000);


/*==================================== */




