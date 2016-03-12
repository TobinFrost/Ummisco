<?php
require_once ('../lib/autoload2.inc.php');
require_once ('../controller/SearchFormation_controller.class.php');

if(!isset($_POST["Niveau"])){
	
$dep = new Departement();
$deplist = $dep->listAll()->fetchAll();
$depnumber =$dep->listAll()->rowCount();
$dep->destroy();
$deptLibelle = array();
$deptCode = array();
$deptFormLibelle = array();
for ($i = 0; $i < $depnumber; $i++) {
	array_push($deptLibelle, $deplist[$i]["dpt_libelle"]);
	$dep = new Departement($deplist[$i]["dpt_id"]);
	$frmList = $dep->getFormation()->fetchAll();
	$frmnumber =$dep->getFormation()->rowCount();
	$dep->destroy();
	$deptFormLibelleFinal = array();
	$deptFormTypeFinal = array();
	$deptFormDureeFinal = array();
	$deptFormMinimaFinal = array();
		for ($y = 0; $y < $frmnumber; $y++) {
			array_push($deptFormLibelleFinal,$frmList[$y]["frm_libelle"]);
			array_push($deptFormTypeFinal,$frmList[$y]["type_libelle"]);
			array_push($deptFormDureeFinal,$frmList[$y]["lvl_duration"]);
			array_push($deptFormMinimaFinal,$frmList[$y]["lvl_minima"]);
			$tempon = array($deptFormLibelleFinal,$deptFormTypeFinal,$deptFormDureeFinal,$deptFormMinimaFinal);
		}
//		array_push($deptFormLibelle,$deptFormLibelleFinal);
//		array_push($deptFormLibelle,$deptFormTypeFinal);

		array_push($deptFormLibelle,$tempon);

}
}else{
	$search= new SearchFormation_Controller();
	$search->execute();
	$deptLibelle = $search->deptLibelle;
	$deptFormLibelle = $search->deptFormLibelle;
}
?>
<!DOCTYPE html>
<html lang="fr">
  

<meta http-equiv="content-type" content="text/html" />
<head>
    <meta charset="">
    <title>PREINS-ESP : Dématérialisation des Procédures de Préinscription de l'ESP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../MonCss/SameStyle.css" rel="stylesheet">
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
      					<div class="muted pull-left">Recherche</div>
      				</div>
      				<div class="block-content collapse in">
      						
      						<form action="formations.php" class="form-inline" method="POST">
      							<label>Niveau d'entrée : </label>
      							 <select id="Niveau" name="Niveau">
      							 	<option value="" selected="selected">Sélectionner votre niveau</option>
      							 	<option id="Bac" value="Bac">BAC</option>
									<option value="Bac+2">BAC+2</option>
									<option value="Bac+3">BAC+3</option>
									
									
								</select>
								<span class="serie">
									
								
								</span>
								
      							<button class="btn btn-primary" type="submit">Rechercher</button>
      						</form>
      				
      				
      				</div>
      			</div> <!-- end of block -->
      		

		      <p class="text-left"> <h4>Résultats :   <?php 

		      if(isset($_POST["Niveau"])){
					if($_POST["Niveau"] != ""){
						echo "Pour Niveau  ".$_POST["Niveau"];
					 }else{
						echo "Pour Tout Niveau  ";
					}
					
				}
		      
		      ?></h4> </p>
<?php
include '../MonFrameWork.php';
?>
<!--	<div class="container"> -->
    	<!-- Debut  Accordion -->

                <div class="accordion" id="Accord_Departement">

                
                
                    <!-- Config  Accordion -->
                    <?php
                    //print_r($deptFormLibelle[2][0]);
                    //echo $deptFormLibelle[2][0][0];
                    for ($i=0; $i <count($deptLibelle) ; $i++) {
					//print_r($deptFormLibelle[$i]); 
                      SetAccordeonTer(($deptLibelle[$i]),"Liste des Formations  ",$deptFormLibelle[$i]);
                    }
                      
                     ?>
   
                </div>
                  
          <!-- Fin  Accordion -->
<!--	</div>      -->

<div class="footer">
        <p>&copy; ESP 2015</p>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../bootstrap/js/jquery-1.11.1.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
    <script>
    $(document).ready(function () {
        //var Bac = $("#Niveau");
        //var Bac = $("#Niveau>#Bac");
        var SerieSet = $(".serie");
        $("select").change(function() {
        	SerieSet.show();
			$("select option:selected").each(function(){
				if($(this).val() == 'Bac'){
					//alert("ccc");
					
					SerieSet.html('<label>Série : </label> <select name="Serie"><option value="" selected="selected">Sélectionner votre série</option><option value="L">L</option><option value="S">S</option><option value="G">G</option><option value="T">T</option></select>');
					SerieSet.show();
				}else{
					//SerieSet.hide();
					SerieSet.html("");
				}
			});
		});
        
		 
    });
    </script>

  </body>

</html>