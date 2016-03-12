<?php
session_start();
require_once ('../lib/autoload2.inc.php');
require_once('Controller.class.php');

class AddFormation_controller extends Controller {
	
	
	
	
	
	function __construct() {
		
		parent::__construct();
	}

// Redéfinition de l'algorithme d'exécution

	public function execute(){
		
	if (isset($_POST['idCandidat'])) {
	
	$idCandidat = $_POST['idCandidat'];
	
	$Formation = $_POST['LibelleDepartment'];
	
	$RefFormation = $_POST['refFormation'];
	
	$idFormation=null;
	
	$dep = new Departement();
	
	
	
	$request = "dpt_libelle LIKE '".urldecode($Formation)."'";
	
	$reponse = $dep->Request($request,"dpt_id");
	
//	print_r($reponse->fetchAll());

//	print_r($reponse->fetch());
	
	$dpt_id = $reponse->fetch()["dpt_id"];
	
//	echo $dpt_id;
	
	$dep = new Departement($dpt_id);
	
	$listFormation = $dep->getFormation()->fetchAll();
	$FormationLength = count($listFormation);
//	print_r($listFormation);
//	echo $FormationLength;
	
	for ($i = 0; $i < $FormationLength; $i++) {
		if($i == $RefFormation){
			$idFormation = $listFormation[$i]["frm_id"];
		}
	}
	
	unset($dep);
	
	echo "id Formation : ".$idFormation;
	
	$cand = new Candidat($idCandidat);
	$cand->__set("cdt_id_formation", $idFormation);

	
	
	
}
		
		$this->destination="formationChoice.php?state=success";
		
		$this->repertoire = "vue";
					
		
			
			

	}
	


}// fin de la classe

$add = new AddFormation_controller();

$add->process();