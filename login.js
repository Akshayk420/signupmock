$(document).ready(function($){

// hide messages 
$("#error").hide();
$("#show_message").hide();
// on submit...
$('#login-form').submit(function(e){
e.preventDefault();
//window.location.replace("profile.html");
$("#error").hide();


// email required
var email = $("input#email").val();
if(email == ""){
$("#error").fadeIn().text("Email required");
$("input#email").focus();
return false;
}

// mobile number required
var mobile = $("input#mobile").val();
if(mobile == ""){
$("#error").fadeIn().text("Mobile number required");
$("input#mobile").focus();
return false;
}


$.ajax({
type:"POST",
url: "verify.php",
data: $(this).serialize(), // get all form field value in serialize form
success: function(){
//window.location.href = "profile.html";
//$("#show_message").fadeIn();
//$("#ajax-form").fadeOut();
}
});

//ajaxEnd
});  
return false;
});