<?php
include '../MonFrameWork.php';
require_once ('../lib/autoload2.inc.php');
require_once ('../controller/SearchFormation_controller.class.php');
if(isset($_POST["specialite"])){
	$search= new SearchFormation_Controller();
	$search->execute();
	$deptLibelle = $search->deptLibelle;
	$deptFormLibelle = $search->deptFormLibelle;
	echo '<p class="text-left"> <h4>Résultats : </h4> </p>';
	for ($i=0; $i <count($deptLibelle) ; $i++) {
		//print_r($deptFormLibelle[$i]);
		// This is Big Deal
		// This is the place to be
		SetAccordeonQuater(($deptLibelle[$i]),"Liste des Formations  ",$deptFormLibelle[$i],$_POST["specialite"]);
	}
	
}else{


?>

<!DOCTYPE html>
<html lang="fr">
  

<meta http-equiv="content-type" content="text/html" />
<head>
    <meta charset="utf-8">
    <title>PREINS-ESP : Dématérialisation des Procédures de Préinscription de l'ESP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../MonCss/SameStyle.css" rel="stylesheet"> 
    <link href="../MonCss/SearchStyle.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 60px;

       
      }

      /* Custom container */
      .container {
        margin: 0 auto;
        max-width: 1000px;
      }
      .container > hr {
        margin: 60px 0;
      }



      /* Customize the navbar links to be fill the entire space of the .navbar */
      .navbar .navbar-inner {
        padding: 0;
      }
      .navbar .nav-main{
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar .nav-main li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav-main li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav-main li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav-main li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }
    </style>
    

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
  </head>

  <body>
  <div class="navbar navbar-inverse   navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="../index.php"> PREINS-ESP [bêta] </a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="">
                                <a href="login.php"><i class="icon-lock icon-white"></i> Connexion</a>
                            </li>
                            <li class="">
                                <a href="inscription.php"><i class="icon-user icon-white"></i> Inscription</a>
                            </li>                        </ul>
                        <ul class="nav">
                          
                            
                          </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <br/>                         		
  
  
    <div class="container">

      <div class="masthead">
        <img alt="logo esp" src="../img/cropped-Entete-banner-1982.png">
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav nav-main">
                <li class=""><a href="../index.php">Acceuil</a></li>
                <li><a href="../index.php#presentation">Présentation</a></li>
                <li class="">
                <a href="formations.php">Formations</a>
                </li>
                <li><a href="guide.php">Guide</a></li>
                
                <li><a href="#">Nous Contacter</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>


      		      			<div class="block"> <!-- debut of block -->
      				<div class="navbar navbar-inner block-header">
      					<div class="muted pull-left">Guide et Orientation</div>
      				</div>
      				<div class="block-content collapse in">
      						
      						<form  method="POST" onsubmit="return false" >
      						  	<!-- <div class="label_div">Entrez votre spécialité ou domaine d'étude : </div> -->
      						  	<div class="form-group">
      						  	
	      						  	<label for="specialite">Entrez votre spécialité/Métier ou domaine d'étude : </label>
	      							<div class="search_container">
	      								<input name="specialite" type="text" class="form-control" placeholder="Entrez votre spécialité" id="specialite" onkeyup="autocomp();" autocomplete="off">
	      								<input type="hidden" id="unknown" value="">
	      							<ul class="list-group" id="formation_list"></ul>
	      							</div>
      						  	
      						  	</div>	
      						  	
      							
      							 
      							 
      							 
								<div id="serie">
									
									
								</div>
								
      							<button class="btn btn-primary" type="submit" onclick="search_formation()">Rechercher</button>
      							
      							
							<!--    <fieldset>
							        <div class="form-group">
							            <label for="specialite">Entrez votre spécialité ou domaine d'étude :</label>
							            <input class="form-control" name="specialite" id="specialite" placeholder="Tapez votre spécialité" type="text">              
							        </div>
							        <button type="submit" class="btn btn-primary">Search</button>
							    </fieldset>

      							-->	
      							
      						</form>
      				
      			<!--	<form action="" class="form-inline">
      				
      						<div class="form-group">
						    <label class="sr-only" for="exampleInputEmail3">Email address</label>
						    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
						  </div>
      				
      				</form> -->
      						
					<div class="accordion" id="Accord_Departement">
      				</div>

<br>
<br>
<br>
<br>
<br>
  				
      				</div>
      			</div> <!-- end of block -->
      			
<div class="footer">
        <p>&copy; ESP 2015</p>
      </div>

    </div> <!-- /container -->
    <script src="../bootstrap/js/jquery-1.11.1.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
 <script src="../MonJs/Autocomplete.js"></script>

    <script src="../MonJs/jquery.mockjax.js"></script>
    <script src="../MonJs/bootstrap-typeahead.js"></script>
    
        <script type="text/javascript">
<!--
		



//-->
	</script>
    
  </body>

</html>

<?php }?>      			