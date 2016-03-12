<?php 
include_once 'modele/connect.php'; ?>
<!DOCTYPE html>
<html lang="fr">
  

<meta http-equiv="content-type" content="text/html" />
<head>
    <meta charset="">
        <title>Ummisco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
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
                    <a class="brand" href="#"> PREINS-UMMISCO [bêta]</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="">
                                <a href="vue/login.php"><i class="icon-lock icon-white"></i> Connexion</a>
                            </li>
                            <li class="">
                                <a href="vue/inscription.php"><i class="icon-user icon-white"></i> Inscription</a>
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
        <img alt="logo ummisco" src="img/logoA1.png">
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav nav-main">
                <li class=""><a href="index.php">Acceuil</a></li>
                <li><a href="#presentation">Présentation</a></li>
                <li class="">
                <a href="vue/formations.php">Formations</a>
                </li>
                <li><a href="vue/guide.php">Guide</a></li>
                
                <li><a href="#">Nous Contacter</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>

	<div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="img/entree-direction.jpeg" alt="entrée direction">
                    <div class="carousel-caption">
                      <h4>Nouveau</h4>
                      <p>L'Ecole Supérieur Polytechnique viens d'acquérir une plateforme de préinscription... <a href="#" class="btn btn-info">En savoir plus</a></p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="img/portail-esp-depuis-amphi.jpeg" alt="">
                    <div class="carousel-caption">
                      <h4>Inscription</h4>
                      <p>Inscrivez vous pour avoir accés à la plateforme et poursuivre vos démarches    <a href="#" class="btn btn-primary">S'inscrire</a></p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="img/salle-cifres.jpeg" alt="">
                    <div class="carousel-caption">
                      <h4>En savoir plus sur les démarches </h4>
                      <p><a href="#" class="btn btn-info">En savoir plus</a></p>
               
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
     </div>
      <hr>
	<h1 id="presentation">Présentation</h1>
      <!-- Example row of columns -->
      <div class="row-fluid">
        <div class="span12">
          <h2>Missions</h2>
          <p>L’Ecole supérieure polytechnique (ESP), établissement public a vocation inter-africaine de l’Université Cheikh Anta Diop de Dakar, a pour mission de :</p>
                    <p><br/>1- former tant sur le plan théorique que pratique :
<br/>– des techniciens supérieur ;
<br/>– des ingénieurs d’exécution ;
<br/>– et des ingénieurs de conception.</p>
                    <p>2- dispenser un enseignement supérieur et mener des activités de recherche en vue de préparer directement aux fonctions d’encadrement dans :
<br/>– la production ;
<br/>– la recherche appliquée ;
<br/>– et les services.</p>
                    <p>3- organiser des enseignements et des activités de recherche visant au perfectionnement permanent, à l’adaptation et à la participation à l’évolution scientifique et technologique.</p>
                    <p>4- procéder à des expertises dans le cadre de la formation à l’intention des entreprises publiques et privées.</p>
          <p><a class="btn" href="#">En savois plus &raquo;</a></p>
        </div>
      </div>

      <hr>
      
            <div class="row-fluid">
         
        <div class="span12">
          <h2>Départements</h2>
          <?php $bdd = connectMysql();

          $req = $bdd->query("select * from dpp_departement");
          
          while ($donne = $req->fetch()) {
          	echo '<h5> <a href="#myModal'.$donne["dpt_id"].'" role="button" data-toggle="modal" >'.$donne["dpt_libelle"].'</a> </h5>';
          	echo '<div id="myModal'.$donne["dpt_id"].'" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    <h3 id="myModalLabel">'.$donne["dpt_libelle"].'</h3>
  </div>
  <div class="modal-body">
    '.$donne["dpt_description"].'
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Ok</button>
  </div>
</div>';
          	 
          }
          
          ?>
        </div>
      </div>

      <hr>

      <div class="footer">
        <p>&copy; ESP 2015</p>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.11.1.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
        <script>
    $('.Mycarousel').carousel();
    </script>

  </body>

</html>
