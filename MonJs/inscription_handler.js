/**
 * 
 */

var mailStatus = $("#mailStatus");
var errorStatus = $("#errorStatus");
var pwdStatus = $("#pwdStatus");
var btnSubscribe = $("#btnSubscribe");
var captchaStatus = $("#captchaStatus");
var load = $("#load");

function verif_mail(){
	var mail2 = $("#Email1").val();
	var mail = $("#Email").val();
	
	if(mail2 == mail){
		mailStatus.text("");
		btnSubscribe.show();
		return true;
	}else{
	mailStatus.text("Les adresses mail saisies ne sont pas identiques");
	btnSubscribe.hide();
		return false;
	}
}

function verif_password(){
	var pwd2 = $("#rePassword").val();
	var pwd = $("#Password").val();
	
	if(pwd2 == pwd){
		pwdStatus.text("");
		btnSubscribe.show();
		return true;
	}else{
		pwdStatus.text("Les mots de passe saisies ne sont pas identiques");
		btnSubscribe.hide();
		return false;
	}
}
$(document).ready(function(){
	btnSubscribe.click(function(){
		
		
	});
	
});


$(document).ready(function(){
	
	btnSubscribe.click(function(){
		var nom = $("#Surname").val();
		var prenom = $("#Name").val();
		var mail = $("#Email").val();
		var pwd = $("#Password").val();
		var captcha = $("#captcha_usr").val();
		load.html('<img width="20px;" height="20px;" src="../img/712.GIF"/>');
        $.post("../controller/Inscription_controller.class.php",
        {
        	nom : nom,
			prenom: prenom,
			mail: mail,
			pwd:pwd,
			captcha:captcha
        },
        function(data,status){
            alert("Data: " + data + "\nStatus: " + status);
            if(status =="success"){
            	load.html('');
            	if(data =="CAPTCHA KO"){
            		captchaStatus.text("les Caracteres saisie ne sont pas identiques");
            	}else{
            		captchaStatus.text("");
            	}
            	
            	if(data == "Message sent!"){
            		$("body").html('<div class="container"><div class="row"><div class="col-md-4 col-md-offset-4"><div class="login-panel panel panel-primary"><div class="panel-heading"><h3 class="panel-title">Inscription </h3></div><div class="panel-body">Un message de confirmation est envoye a l\'adresse : <b>'+mail+'</b></div></div></div></div></div>');
            	}
            	
            	if(data == "Compte Existe"){
            		errorStatus.html('<div class="alert alert-block"> <button type="button" class="close" data-dismiss="alert">&times;</button> <h4>Erreur!</h4> Ce Compte Existe est pris !</div>');
            	}
            }
        });
		
    });
});

function inscription(){
	
	var nom = $("#Name").val();
	var prenom = $("#Surname").val();
	var mail = $("#Email").val();
	var pwd = $("#Password").val();
	
	if(!verif_mail()){
		if(!verif_password()){
			$.post("../controller/Inscription_controller.class.php",{
			dnom : nom,
			dprenom: prenom,
			dmail: mail,
			dpwd:pwd
			},function(donne,status){
				alert(donne);
			});
		}
	}
}