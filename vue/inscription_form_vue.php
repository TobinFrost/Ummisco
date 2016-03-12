<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Inscription</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="../controller/Inscription_controller.class.php?control=loggin" method="post" onsubmit="return false;">
                            <fieldset>
                   
                                <div class="form-group">
                                <label class="control-label" for="Email">Adresse Electronique*</label>	
                                    <input class="form-control" id="Email" placeholder="Adresse Electronique" name="Email" type="email" required autofocus>
                                </div>
           
                                
                                <div class="form-group">
                                <label class="control-label" for="Surname">Nom*</label>
                                    <input class="form-control" id="Surname" placeholder="Nom" name="Surname" type="text" value="" required>
                                </div>
                                
                                <div class="form-group">
                                <label class="control-label" for="Name">Prénom*</label>
                                    <input class="form-control" id="Name" placeholder="Prénom" name="Name" type="text" value="" required>
                                </div>
                                
                                <div class="form-group">
                                	<label class="control-label" for="Password">Mot de passe*</label>
                                    <input class="form-control" id="Password" placeholder="Mot de passe" name="password" type="password" value="" required>
                                </div>
                                
                                <div class="form-group repwd">
                                	<label class="control-label" for="rePassword">Retapez le Mot de passe</label>
                                    <input class="form-control" id="rePassword" placeholder="Mot de passe"  type="password" value="" required>
                                    <p class="help-block">Veuillez retaper le mot de passe</p>
                                    <p class="text-error" id="pwdStatus"></p>
                                </div>
                   				
                                
                                             
                                <div class="form-group">
                                    <img width="200px" src="<?php echo $_SESSION['captcha']['image_src']; ?>">
                                    <div class="pull-left"><input id="captcha_usr"  class="form-control"  placeholder="Recopiez ici" name="captcha" type="text" required>
                                    <p class="help-block">Recopiez les caractères de l'image</p>
                                    <p class="text-error" id="captchaStatus"></p>
                                    </div>
                                </div>
                                <p id="load"></p>
                                <input id="btnSubscribe" type="submit" class="btn btn-primary btn-block"  value="S'inscrire" >
                            </fieldset>
        				<div id="errorStatus"></div>                    
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>


</body>
<script src="../bootstrap/js/jquery-1.11.1.js"></script>
<script src="../bootstrap/js/bootstrap.js"></script>
<script src="../MonJs/inscription_handler.js"></script>
    <script type="text/javascript">

	$(".remail").hide();
	$(".repwd").hide();
	//$(".cni").hide();
	//$(".adress").hide();
	//$(".telephone").hide();
	$("#Email").blur(function(){
		$(".remail").show()	
	});

	setInterval(function(){
		verif_mail();
		verif_password();
	}, 1000);

	
	
	
	$("#Password").blur(function(){
		$(".repwd").show()
		//$(".cni").show()
		//$(".adress").show()
		//$(".telephone").show()
			
	});


	
    </script>
    