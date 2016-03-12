/**
 * 
 */

$(document).ready(function(){
  $(".update").click(function(){
    $(".action").attr("value","update");
  });
  
  $(".demission").click(function(){
	    $(".action").attr("value","delete");
	  });
  
  
  
});

var myVar=setInterval(function(){myTimer()},1000);

var Verified = false;

function myTimer()
{
	//
	var firstPassword = $("#firstPassword").val();
	
	var secondPassword = $("#secondPassword").val();
	
	var statusPassword = $("#statusPassword");
	
	var submitPassword = $("#submitPassword");
	
	if(firstPassword == secondPassword){
		
		if(firstPassword == ""){
			
		}else{
			statusPassword.css('color','green');	
			statusPassword.text('Mot de Passe OK !');
//			submitPassword.addClass("active");
			submitPassword.show();
//			submitPassword.attr("active","active");
			
		}
		
		
	}else{
		statusPassword.css('color','red');
		statusPassword.text('Erreur !! Redefinissez votre Mot de Passe');
		submitPassword.hide();
		submitPassword.css("disabled","disabled");
		
//		submitPassword.attr("disabled","disabled");
	}
	
}