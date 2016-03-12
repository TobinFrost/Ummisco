<?php
session_start();
require_once ('../lib/autoload2.inc.php');
require_once('Controller.class.php');

class CompleteFile_controller extends Controller {
	
	
	
	
	
	function __construct() {
		
		parent::__construct();
	}

// Redéfinition de l'algorithme d'exécution

	public function execute(){
		
	if (isset($_POST['idCandidat'])) {
	
	$idCandidat = $_POST['idCandidat'];
	
	$idNiveau = $_POST['idNiveau'];
	
	$idCountrie = $_POST['idCountrie'];
			
	$cand = new Candidat($idCandidat);
	$cand->__set("cdt_id_niveau", $idNiveau);
	$cand->__set("cdt_id_countrie", $idCountrie);

	
	
	
}
		
		$this->destination="completeDossier.php?state=success";
		
		$this->repertoire = "vue";
					
		
			
			

	}
	


}// fin de la classe

$add = new CompleteFile_controller();

$add->process();