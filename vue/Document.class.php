<?php 
// CLASS DOCUMENT A.K.A PAGE

// La page sera dÃ©coupÃ©e en 4 parties:

// **	L'entete (header) -> header Logo
//					-> header menu (Accesible par tous)

// **	le menu Contextuel : diffÃ©rent en fonctiondu niveau d'accÃ¨s de l'utilisateur
// **	le sujet:relatif Ã  la page
// **	le bas de page(footer)

// Elle comporte deux attributs liÃ©s Ã  la session gÃ©rer par l'authentification des utilisateurs:
// * userId (int) : identifiant de l'utilisateur(lorsqu'il est  connectÃ©)
// * userLevel (int) : le niveau d'accÃ¨s de l'utilisateur connectÃ©




class Document{
	public  $userId;
	public  $userLevel;
	public  $title;
	public $logo ="../img/logoA1.jpg";
	// constructeur par dÃ©fault : appele htmlHeader

	public function __construct($title="",$script="",$css="",$dojoRequire="",$meta="")
	{
		$this->title = $title;
			
		echo '<html>
<head>
	<title>'.$this->title.'</title>
	<meta '.$meta.'/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../MonCss/MonStyle.css" rel="stylesheet">
    <link href="'.$css.'" rel="stylesheet">
    <script src="../MonJs/moment.min.js"></script>
 	<script src="../bootstrap/js/jquery-1.11.1.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../MonJs/jquery.metisMenu.js"></script>
    <script src="../MonJs/MonJs.js"></script>
    <script src="../MonJs/jquery.dataTables.js"></script>
    <script src="../MonJs/fullcalendar.js"></script>
	<script src="../MonJs/lang-all.js"></script>
        		
    <script src="'.$dojoRequire.'"></script>
    		
    <script type="text/javascript">
    	
	'.$script.'
    		
   	</script>
    
    		
</head>
		';
		
		
				
	}

	// commencement du <body>

	public function begin()
	{
			echo '<body>';
	}

	// Retourne le <header>

	public function htmlHeader($css="",$dojoRequire="",$meta="")
	{
		echo '
				<html>
<head>
	<title>'.$this->title.'</title>
	<meta '.$meta.'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="MonCss/MonStyle.css" rel="stylesheet">
    <link href="'.$css.'" rel="stylesheet">
 	<script src="bootstrap/js/jquery-1.11.1.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="'.$dojoRequire.'"></script>
</head>
				
				
				';
	}

	// La partie Entete

	public function header($AgentName=null)
	{
		switch ($this->userLevel) {
			case 1: // level 1 pour l'administrateur
		echo '<div class="navbar   navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="acceuil.php"> PREINS-UMMISCO </a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> '.$AgentName.' <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#"><i class="icon-user"></i> Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="../controller/Deconnexion_Controller.php?control=logout"><i class="icon-off"></i> Déconnexion</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="">
                                <a href="acceuil.php">Tableau de Bord</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Outils <b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">
                                    <li>
                                        <a  href="Calendrier.php">Calendrier 
                                        </a>
                                        
                                    </li>
                                    <li>
                                        <a href="#">Outils2</a>
                                    </li>
                                	
                                    
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Information</a>
                                    </li>
                                    
                                </ul>
                            </li>
                           </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <br/>                         		
       ';
			;
			break;
			case 2: // level 2 pour le chef de département
	echo '<div class="navbar   navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#"> PREINS-UMMISCO </a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> '.$AgentName.' <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#"><i class="icon-user"></i> Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="../controller/Deconnexion_Controller.php?control=logout"><i class="icon-off"></i> Déconnexion</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="">
                                <a href="acceuil.php">Tableau de Bord</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Outils <b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">
                                    <li>
                                        <a  href="Calendrier.php"><i class="icon-calendar"></i> Calendrier 
                                        </a>
                                        
                                    </li>
                                    
                                	
                                    
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#"><i class="icon-info-sign"></i> Information</a>
                                    </li>
                                    
                                </ul>
                            </li>
                           </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <br/>';
	;
				
	break;
			case 3: // level 3 pour l'Etudiant
			echo '<div class="navbar   navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="acceuil.php"> PREINS-UMMISCO </a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> '.$AgentName.' <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#"><i class="icon-user"></i> Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="../controller/Deconnexion_Controller.php?control=logout"><i class="icon-off"></i> Déconnexion</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Outils <b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">
                                    <li>
                                        <a  href="Calendrier.php"><i class="icon-calendar"></i> Calendrier 
                                        </a>
                                        
                                    </li>
                                    
                                	
                                    
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#"><i class="icon-info-sign"></i> Informations</a>
                                    </li>
                                    
                                </ul>
                            </li>
                             
							<li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Mon Dossier <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="formationChoice.php"><i class="icon-question-sign"></i> Choix Formation </a>
                                    </li>
                                		
                                	<li>
                                        <a tabindex="-1" href="dossierState.php"><i class="icon-certificate"></i> Etat du Dossier </a>
                                    </li>
                                		
                                	<li>
                                        <a tabindex="-1" href="completeDossier.php"><i class="icon-plus-sign"></i> Completer Dossier </a>
                                    </li>
                                    
                                </ul>
                               
                                    
                                		
                            </li>
                                		
                                		
                           </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <br/>';	
				;
				break;
				
				case 4: // level 4 pour le responsable pédagogique
				
				echo '';
					
					;
				break;
						
				break;	
			default:
				echo '';
				;
			break;
		}
	}

	// La partie menu contextuel

	public function menu()
	{
		switch ($this->userLevel) {
			case 1: // Administrateur 
			
			echo '  <div class="span3">   
	  <div class="well sidebar-nav">
        <ul class="nav nav-list" id="side-menu">
          <li class="nav-header">
            Paramètrage
          </li>

          <li class="">
            <a href="" >
            <i class="icon-chevron-right"></i> Agents
            </a>
            <ul class="" style="height:0px;" >
              <li ><a href="chefdepartement.php">Chef de Département</a></li>
            </ul>
          </li>
          <li class="">
            <a href="departement.php">
            <i class="icon-chevron-right"></i> Départements
            </a>
            
          </li>
					
		<li class="">
            <a href="niveau.php">
            <i class="icon-chevron-right"></i> Niveaux Scolaires
            </a>
            
          </li>

          <li>
            <a href="#">
            <i class="icon-chevron-right"></i> Formations
            </a>
            <ul class="nav nav-list">
          
              <li>
                <a href="formation.php">
              Configuration Formations
                </a>
              </li>
			
			<li>
                <a href="typeformation.php">
              Configuration Type de Formations
                </a>
              </li>
			
					

            

            </ul>
            
          </li>

          <li>
            <a href="#">
            <i class="icon-chevron-right"></i> Archivage
            </a>
          </li>
		
          <li>
            <a href="administrateur.php">
            <i class="icon-chevron-right"></i> Administrateur
            </a>
          </li>
					
					
          <li>
            <a href="#">
            <i class="icon-chevron-right"></i> Paramètrage Avancé
            </a>
            <ul>
              <li>
                <a href="#"> Année Académique
                </a>
              </li>
              <li>
                <a href=""> Status
                </a>
              </li>
            </ul>
          </li>



        </ul>

      </div>
	</div>
			
			'
					
			;
				
				;
			break;
			
			case 2: // Cas du chef de departement

			echo '<div class="span3">   
	  <div class="well sidebar-nav">
        <ul class="nav nav-list" id="side-menu">
          <li class="nav-header">
            Paramètrage
          </li>

          <li>
            <a href="#">
            <i class="icon-chevron-right"></i> Département
            </a>
            <ul class="nav nav-list">
              <li class="">
                <a href="#">
             Formations
            </a>
               </li>
             
            </ul>
            
          </li>

          



       
          <li>
            <a href="#">
            <i class="icon-chevron-right"></i> Candidats
            </a>
					<ul class="nav nav-list">
              <li class="">
                <a href="#">
             Dossiers
            </a>
               </li>
					<li class="">
                <a href="#">
             Liste Principale
            </a>
               </li>
				<li class="">
                <a href="#">
             Liste d\'Attente
            </a>
               </li>
             
            </ul>
          </li>

          <li>
            <a href="#">
            <i class="icon-chevron-right"></i> Archivage
            </a>
          </li>
          <li>
            <a href="#">
            <i class="icon-chevron-right"></i> Paramètrage Avancé
            </a>
            <ul>
              <li>
                <a href=""> Moyenne Seuille
              </a>
              </li>
              <li>
                <a href=""> Année Académique
                </a>
              </li>
              <li>
                <a href=""> Status
                </a>
              </li>
            </ul>
          </li>



        </ul>

      </div>
	</div>
			';
				
				
				;
				
			break;
			
			case 3: // Cas du Candidat
			
			echo '';	
				
				;
			
			break;
			
			case 4: // Cas du Responsable pédagogique
			
			echo '';	
				
				;
			
			break;
			
			
			default:
				;
			break;
		}
	}

	
	
	// debut du recherche 
	
	
	public function search(){
		echo '<div class="panel panel-default">
        <div class="panel-heading clearfix">
          <i class="icon-calendar"></i>
          <h3 class="panel-title">Input Groups</h3>
        </div>
        
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-4 col-sm-4">
              <div class="input-group">
                <span class="input-group-addon">@</span>
                <input class="form-control" placeholder="Username" type="text">
              </div>
            </div>
            <div class="col-lg-4 col-sm-4">
              <div class="input-group">
                <input class="form-control" type="text">
                <span class="input-group-addon">.00</span>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4">
              <div class="input-group">
                <span class="input-group-addon">$</span>
                <input class="form-control" type="text">
                <span class="input-group-addon">.00</span>
              </div>
            </div>
          </div>
        </div>
      </div>';
	}
	
	
	// fin du menu search
	
	// la fin du <body>

	public function end()
	{
		echo '
<center>
 <div id="footer">
  <div class="container">
    <p class="muted credit"> Copyright IntraESP 2014 By Tobin Frost @ Supadev </p>
  </div>
</div>
</center>
		</body>
</html>';
	}
	
	public function beginScript(){
		echo '<script>';
	}
	
	public function endScript(){
		echo '</script>';
	}
	
	public function embedScript($src=''){
		
	echo '<script src="'.$src.'"></script>';
		
	}
	
public function beginSpan9() {

	echo '<div class="span9"> <!--  Début Span9 -->';
	
	}

public function endSpan9(){
	echo '</div> <!--  Fin Span9 -->';
}	

public function beginSpan3() {

	echo '<div class="span3"> <!--  Début Span3 -->';

}

public function endSpan3(){
	echo '</div> <!--  Fin Span3 -->';
}

public function beginSpan6() {

	echo '<div class="span6"> <!--  Début Span6 -->';

}

public function endSpan6(){
	echo '</div> <!--  Fin Span6 -->';
}




	// debut d'une section

	public function beginBigSection($title)
	{
		switch ($this->userLevel) {
			case 1:
				$this->beginSpan9();
				echo '
			
				<div class="container-fluid"> <!--  Début Section -->
      <div class="block">
        <div class="navbar navbar-inner block-header">
          <div class="muted pull-left">'.$title.'</div>
				
        </div>
        <div class="block-content collapse in">';
				

			;
			break;
			
			case 2: // Cas du Directeur des Etudes
				$this->beginSpan9();
				echo '
			<div class="">
				<div class="container-fluid"> <!--  Début Section -->
      <div class="block">
        <div class="navbar navbar-inner block-header">
          <div class="muted pull-left">'.$title.'</div>
				
        </div>
        <div class="block-content collapse in">';
				

				;
			break;
			
			case 3: 
				echo '
			<div class="">
				<div class="container-fluid"> <!--  Début Section -->
      <div class="block">
        <div class="navbar navbar-inner block-header">
          <div class="muted pull-left">'.$title.'</div>
				
        </div>
        <div class="block-content collapse in">';
				; 
			break;
			
			case 4:
				echo '
			<div class="">
				<div class="container-fluid"> <!--  Début Section -->
      <div class="block">
        <div class="navbar navbar-inner block-header">
          <div class="muted pull-left">'.$title.'</div>
			
        </div>
        <div class="block-content collapse in">';
				;
				break;
			
			default:
				echo '
			
				<div class="container-fluid"> <!--  Début Section -->
      <div class="block">
        <div class="navbar navbar-inner block-header">
          <div class="muted pull-left">'.$title.'</div>
		
        </div>
        <div class="block-content collapse in">';
				
				;
			break;
		}
			}

	// fin d'une section

	public function endBigSection()
	{
		echo '</div>
      </div>
	</div>
	
    </div> <!--  Fin Section -->';
	}
	
	public function progressBar($percent,$type=null){
		echo '<div class="progress progress-'.$type.'">
  <div class="bar" style="width: '.$percent.'%;"></div>
</div>';
	}
	
	public function beginSection($title){
		
		echo '
			
				<div class="container-fluid"> <!--  Début Section -->
      <div class="block">
        <div class="navbar navbar-inner block-header">
          <div class="muted pull-left">'.$title.'</div>
		
        </div>
        <div class="block-content collapse in">';
			
	}
	
	
	public function endSection(){
		echo '
      </div>
	</div>
	</div>
    </div> <!--  Fin Section -->';
	}
	
	public function beginSmallSection($title,$info) {
		echo '  <div class="span6"> <!--  Début Span6 -->
    <div class="block">
      <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">'.$title.'
        </div>
        <div class="pull-right">
          <span class="badge badge-info">'.$info.'</span>
        </div>
      </div>
      <div class="block-content collapse in">
	';
	}
	
	public function endSmallSection() {
		echo '</div>
    </div>
  </div> <!--  Fin Span6 -->';
	}
	
	public function beginRow() {
		echo '<div class="container-fluid"> <!--  Début Row -->
      <div class="row-fluid">';
	}
	
	public function endRow() {
		echo '</div>
    </div> <!--  Fin Row -->';
	}
	
	
	public function beginContainer() {
		echo '<div class="container">';
	}
	
	public function endContainer() {
		echo '</div>';
	}
	
	
	public function Alert($type,$title,$message) {
		echo '
			<div class="container">
				<div class="alert alert-'.$type.'">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>'.$title.'!</strong>
        '.$message.'
    			</div>
        	</div>';
	}
	
	public function DataTable(array $Header,array $FetchedData){
		echo '
        <div class="span12">
        
                                    
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="Tableau">
                    <thead>
                      <tr>
	';
		foreach ($Header as $value) {
			
			echo '<th>'.$value.'</th>';
		}
		
		echo '</tr>
                    </thead>
                    <tbody>';
		
		BigSetRow($FetchedData);
		
		
		
		
		echo '</tbody>
                  </table>
      
  </div>';
	}
	
		
	public function beginTabbable(Array $A,$Data){
		
		echo '
			<div class="tabbable">
            <ul class="nav nav-tabs">
			<li class="active"><a href="#tab1" data-toggle="tab">'.$A[0].'</a></li>';
		
		for ($i = 1; $i <= count($A)-1; $i++) {
			
			$y = $i+1;
				
			echo '<li><a href="#tab'.$y.'" data-toggle="tab">'.$A[$i].'</a></li>';
			
		}
		
		echo '</ul>';
		echo '
                <div class="tab-content">
                  <div class="tab-pane active" id="tab1">';
			
//		 $Data;
		
		echo '</div>';
		
		for ($i = 1; $i <= count($A)-1; $i++) {
			
			$y = $i+1;
			
			echo '<div class="tab-pane" id="tab'.$y.'">';

			 $Data;
			
			echo '</div>';
		}
			
		
		
	}
	
function endTabbable() {
	
	echo '</div>';
	echo '</div>';
}	
	
	public function Calendrier(){
		echo '<div class="span2">
          <div id="external-events">
            <h5> Evénements</h5>
                                    <div class="external-event">Evénement1</div>
                                    <div class="external-event">Evénement2</div>
                                    <div class="external-event">Evénement3</div>
                                    <div class="external-event">Evénement4</div>
                                    <div class="external-event">Evénement5</div>
                                    <div class="external-event">Evénement6</div>
                                    <div class="external-event">Evénement7</div>
                                    <div class="external-event">Evénement8</div>
                                    <div class="external-event">Evénement9</div>
                                    <div class="external-event">Evénement10</div>
                                    <div class="external-event">Evénement11</div>
                                    <div class="external-event">Evénement12</div>
                                    <div class="external-event">Evénement13</div>
                                    <div class="external-event">Evénement14</div>
                                    <div class="external-event">Evénement15</div>
                                    <p>
                                    <input type="checkbox" id="drop-remove" /> <label for="drop-remove">Annuler Affectations</label>
                                    </p>
          </div>
        </div>
				
				<div class="span10"> <!-- Debut  Calendrier -->
            <div id="calendrier">
            </div>
        </div> <!-- Fin  Calendrier -->';
	}
	
public function breadcrumb($name=null,$name2=null) {
		switch ($this->userLevel) {
			case 4:
		echo '<div class="container">
      <!-- Debut breadcrumb  -->
      <ul class="breadcrumb">
        <li><a href="#">Acceuil</a> <span class="divider">/</span> </li>
        <li><a href="#">Direction</a> <span class="divider">/</span> </li>
        <li><a href="#">Direction des Etudes</a> <span class="divider">/</span> </li>
		<li><a href="#">'.$name.'</a> <span class="divider">/</span> </li>
        <li class="active">'.$name2.'</li>
      </ul>
    </div>';
			;
			break;
			case 3:
		echo '<div class="container">
      <!-- Debut breadcrumb  -->
      <ul class="breadcrumb">
        <li><a href="#">Acceuil</a> <span class="divider">/</span> </li>
        <li><a href="#">Direction</a> <span class="divider">/</span> </li>
        <li><a href="#">Direction des Etudes</a> <span class="divider">/</span> </li>
        <li class="active">'.$name.'</li>
      </ul>
    </div>';
				;
			break;
			
			case 2:

		echo '<div class="container">
      <!-- Debut breadcrumb  -->
      <ul class="breadcrumb">
        <li><a href="#">Acceuil</a> <span class="divider">/</span> </li>
        <li><a href="#">Direction</a> <span class="divider">/</span> </li>
        <li class="active">Direction des Etudes</li>
      </ul>
    </div>';		
				
				; 
			
			break;
			case 1:

		echo '<div class="container">
      <!-- Debut breadcrumb  -->
      <ul class="breadcrumb">
        <li><a href="#">Acceuil</a> <span class="divider">/</span> </li>
        <li class="active">Direction</li>
      </ul>
    </div>';
				
				; 
			
			break;
			default:
				;
			break;
		}
	}

	public function Table($type,$header,$data){
		
		echo '<table class="table table-'.$type.' table-bordered">
                    <thead>
                      <tr>
	';
		foreach ($header as $value) {
			
			echo '<th>'.$value.'</th>';
		}
		
		echo '</tr>
                    </thead>
                    <tbody>';
		
		BigSetRow($data);
		
		
		
		echo '</tbody>
		</table>';
		
	}
	

} // Fin de la classe




function BigSetRow(array $tab){

	for ($i=0; $i <count($tab) ; $i++) {
		echo "<tr class=''>"."<td>".($tab[$i][0])."</td>"."<td>".($tab[$i][1])."</td>"."<td width='12%'>".($tab[$i][2])."</td>"."<td>".($tab[$i][3])."</td>"."<td width=''>".($tab[$i][4])."</td>"."<td>".($tab[$i][5])."</td>"."<td>".($tab[$i][6])."</td></tr>";
	}

}

function BigSetRowBis(array $tab){

	for ($i=0; $i <count($tab) ; $i++) {
		echo "<tr class=''>"."<td>".($tab[$i][0])."</td>"."<td>".($tab[$i][1])."</td>"."<td width='12%'>".($tab[$i][2])."</td>"."<td>".($tab[$i][3])."</td>"."<td width=''>".($tab[$i][4])."</td>"."<td>".($tab[$i][5])."</td>"."<td>".($tab[$i][6])."</td>"."<td>".($tab[$i][7])."</td></tr>";
	}

}







/*

*****************************************
*										*
* EXEMPLE D'UTILISATION DE LA CLASSE 	*
*										*
*****************************************

session start();
 require once(â€™config.phpâ€™);
 require once(â€™/Document.class.phpâ€™);
 $page=new Document();
 if (!$page->begin(0)) die();
 $page->beginSection("Bienvenue!");
 bla bla bla
 $page->endSection();
 $page->end();


*/

 ?>
