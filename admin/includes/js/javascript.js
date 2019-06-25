
	
$(document).ready(function(){
	$("#bd").css( "background-color", "#D3D3D3" );
	$("#name").css("border-color","red");
	 $("#password").css("border-color","red");
	$("#name").css("height","30px");
	$("$password").css("height","200px");
});

function action1(){ 
	alert("authenticating!..."); //when clicking the button the pop will show up and function authenticate will be excuted
	validate();
}
function validate(){ // validate the form by using regex to protect it from sql injection attacks and xss
	var username = document.getElementById("name").value;
	var password=document.getElementById("password").value;
	var regex_user=username.match(/<script>/gi);
	var regex_pass=password.match(/<script>/gi);
	var regex_user2=username.match(/'/gi);
	var regex_pass2=password.match(/'/gi);
	var regex_user3=username.match(/%0a/gi);
	var regex_pass3=password.match(/%0A/gi);
	var regex= new array(regex_pass,regex_pass2,regex_pass3,regex_user,regex_pass2,regex_user3);
	for (var i=0;i<regex.length;i++){
		if (username==regex[i] || password==regex[i]){ // if the username = the pattern in the regex array or password = pattern in the regex array then clear the form.
			 document.getElementById("form").reset();
		}
	}
	
}

