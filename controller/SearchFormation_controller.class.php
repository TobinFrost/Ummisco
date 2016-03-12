<?php
require_once ('../lib/autoload2.inc.php');
require_once('Controller.class.php');

class SearchFormation_Controller extends Controller {

	public $deptLibelle = array();
	public $deptFormLibelle = array();




	function __construct() {

		parent::__construct();
	}

	// Red�finition de l'algorithme d'ex�cution

	public function execute(){

	if(isset($_POST["Niveau"]) || isset($_POST["Serie"])){
		
		$niveau = $_POST["Niveau"];
		$serie = "";
		if(isset($_POST["Serie"])){
			$serie = $_POST["Serie"];
		}
		
		
		
		$dep = new Departement();
		$deplist = $dep->getDepartementsBySerie($serie)->fetchAll();
		$depnumber =$dep->getDepartementsBySerie($serie)->rowCount();
		
		$deptLibelle = array();
		$deptCode = array();
		$deptFormLibelle = array();
		$tempon = array();
		for ($i = 0; $i < $depnumber; $i++) {
			array_push($deptLibelle, $deplist[$i]["dpt_libelle"]);
			$dep = new Departement($deplist[$i]["dpt_id"]);
			$frmList = $dep->getFormationByNiveau($niveau, $serie)->fetchAll();
			$frmnumber =$dep->getFormationByNiveau($niveau, $serie)->rowCount();
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

			array_push($deptFormLibelle,$tempon);
			
		}
		
		$this->deptFormLibelle = $deptFormLibelle;
		$this->deptLibelle = $deptLibelle;
		
	}
	if(isset($_POST["specialite"])){
		$deptFormLibelle = array();
		$deptLibelle = array();
		$specialite = $_POST["specialite"];
		if($_POST["unknown"]){
			$dpt_id = $_POST["unknown"];
			//echo $specialite."_".$dpt_id;
			$deptFormLibelle = array();
			$deptLibelle = array();
			$dep = new Departement($dpt_id);
			array_push($deptLibelle, $dep->__get("dpt_libelle"));
			$frmList = $dep->getFormation()->fetchAll();
			$frmnumber =$dep->getFormation()->rowCount();
			$dep->destroy();
			$deptFormLibelleFinal = array();
			$deptFormTypeFinal = array();
			$deptFormDureeFinal = array();
			$deptFormMinimaFinal = array();
			$deptFormIdFinal = array();
			for ($y = 0; $y < $frmnumber; $y++) {
				array_push($deptFormLibelleFinal,$frmList[$y]["frm_libelle"]);
				array_push($deptFormTypeFinal,$frmList[$y]["type_libelle"]);
				array_push($deptFormDureeFinal,$frmList[$y]["lvl_duration"]);
				array_push($deptFormMinimaFinal,$frmList[$y]["lvl_minima"]);
				array_push($deptFormIdFinal,$frmList[$y]["frm_id"]);
				$tempon = array($deptFormLibelleFinal,$deptFormTypeFinal,$deptFormDureeFinal,$deptFormMinimaFinal,$deptFormIdFinal);
			}
			array_push($deptFormLibelle,$tempon);
		}
		
		$this->deptFormLibelle = $deptFormLibelle;
		$this->deptLibelle = $deptLibelle;
	}// end of specialite POST test
	
	// end of test POST
		
		

		$this->destination="";

		$this->repertoire = ".";
			

			
			

	}



}// fin de la classe
