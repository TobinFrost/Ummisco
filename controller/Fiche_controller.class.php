<?php
require_once ('../lib/autoload2.inc.php');
require_once('Controller.class.php');

class Fiche_controller extends Controller {
	
	public  $ficheFormation;
	
	public $fichePriseEnCharge;
	
	public $ficheDuree;
	
	public $fichePrerequis;
	
	public $ficheCode;
	
	
	
	function __construct() {
		
		parent::__construct();
	}

// Redéfinition de l'algorithme d'exécution

	public function execute(){
		
	if (isset($_GET['dept'])) {
	
		
//	$Formation = $_POST['LibelleDepartment'];

	$depart = $_GET['dept'];
	
	$RefFormation = $_GET['form'];
	
	$idFormation=null;
	
	$dep = new Departement();
	
	
	
	$request = "dpt_libelle LIKE '".urldecode($depart)."'";
	
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
	
//	echo "id Formation : ".$idFormation;
	
	$a = new Agent();
	
	$condition = "f.frm_typeid = t.type_id and f.frm_level_id = l.lvl_id and f.frm_id =".$idFormation;

	$table = "dpp_formation f,dpp_typeformation t,dpp_level l";
	
	$select = "frm_libelle,type_libelle,lvl_duration,lvl_minima,frm_code";
	
	$rep = $a->UniversalRequest($condition, $table,$select);
	
	
//	print_r($rep->fetchAll());
	
	while ($donne = $rep->fetch()) {
		
		$this->ficheFormation = $donne["frm_libelle"];
		$this->fichePriseEnCharge = $donne["type_libelle"];
		$this->ficheDuree = $donne["lvl_duration"];
		$this->fichePrerequis = $donne["lvl_minima"];
		$this->ficheCode = $donne["frm_code"];
		
	}
	
}
		
		$this->destination="";
		
		$this->repertoire = ".";
					
		
			
			

	}
	


}// fin de la classe

