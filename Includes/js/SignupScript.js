function validateform(){
var elems = document.querySelectorAll(".wronginput");

[].forEach.call(elems, function(el) {
    el.className=".input";
});
var elems = document.querySelectorAll("p");

[].forEach.call(elems, function(el) {
    el.innerHTML="";
});
var bt= document.getElementById("button");
var x=document.getElementById("fullname");
var r=true;
var inputphoneno=document.getElementById("mobile");
var profession=document.getElementById("profession"); 
var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
var emailinput=document.getElementById("email"); 
var pass=document.getElementById("pass"); 
var conpass=document.getElementById("conpass");
var date= document.getElementById("bday");
var nat=document.getElementById("nationality");
if (x.value.length==0){
x.className="wronginput";
x.nextElementSibling.innerHTML="CANNOT BE EMPTY";
bt.nextElementSibling.innerHTML="ERROR IN LOGIN !";
bt.className="wronginput";
r=false;
}
if(!inputphoneno.value.match(/^[0-9\s(-)]*$/)|| inputphoneno.value.length==0){

inputphoneno.className="wronginput";
inputphoneno.nextElementSibling.innerHTML="MUST BE AS XXX-XXX-XXX-XX";
bt.nextElementSibling.innerHTML="ERROR IN LOGIN !";
bt.className="wronginput";
r=false;

}
if (profession.value.length==0){
profession.className="wronginput";
profession.nextElementSibling.innerHTML="PLEASE ENTER A VALID PROFESSION";

bt.nextElementSibling.innerHTML="ERROR IN LOGIN !";
bt.className="wronginput";
r=false;
}
if(emailinput.value.search(emailRegEx) == -1){

emailinput.className="wronginput";
emailinput.nextElementSibling.innerHTML="PLEASE ENTER A VALID E-MAIL";

bt.nextElementSibling.innerHTML="ERROR IN LOGIN !";
bt.className="wronginput";
r=false;


}

if(pass.value.length< 6){

pass.className="wronginput";
pass.nextElementSibling.innerHTML="PASSWORD MUST CONTAIN AT LEAST 6 CHARACTERS";

bt.nextElementSibling.innerHTML="ERROR IN LOGIN !";
bt.className="wronginput";
r=false;


}
if (pass.value != conpass.value){
conpass.className="wronginput";
conpass.nextElementSibling.innerHTML="PASSWORDS DOES NOT MATCH";

bt.nextElementSibling.innerHTML="ERROR IN LOGIN !";
bt.className="wronginput";
r=false;
}


return r;




}


//Coming part made by Mohamed159588 and Amr162697

var X =0;
var SI = 'BECOME AN EMPIRE MEMBER';
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
                    TXTT.style.position="relative";
                    TXTT.style.padding="10px 25px";
                    X++;
                    setTimeout(EmpireText,speed2);
                    
                }
        }

window.onload = function()
{
    EmpireText();
}

