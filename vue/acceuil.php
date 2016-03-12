<?php
session_start();
require_once 'Document.class.php';
require_once ('../lib/autoload2.inc.php');

if(isset($_GET['id'])){
	$_SESSION["id"]=$_GET['id'];
	if(isset($_GET['level'])){
		$level = $_GET['level'];
		if($_GET['level']== 1){ // Administrateur
			$a = new Administrateur($_GET['id']);
			
			$_SESSION["nom"]="Administrateur";
			$nom = "Administrateur";
			$user = "Page Administrateur";
			$_SESSION["user"]="Page Administrateur";
		}else{
			if($_GET['level']== 2){ // Agent
				$a = new Agent($_GET['id']);
				$nom = $a->__get("agent_nom");
				$user = "Page Agent";
			}else{
				if($_GET['level']== 3){
					$a = new Candidat($_GET['id']);
					$nom = $a->__get("cdt_nom");
					$user = "Page Candidat";
					$_SESSION["statusFormationCandidat"] = $a->__get("cdt_id_formation");
					
					
				}
			}
		}
	}// fin test level

	
	
	$_SESSION["user"]=$user;
	
	$_SESSION["nom"]=$nom;
	
	$_SESSION["level"]=$level;
	
	
	header("Location: acceuil.php");
}else{
	if(isset($_SESSION['id'])){
		
	}else{
		header("Location: ../index.php");

		
	}
}


$doc = new Document($_SESSION["user"],"","../morris/morris.css","../morris/morris.js","");
$doc->embedScript("../MonJs/Raphael/raphael-min.js");
$doc->begin();
$doc->userLevel=$_SESSION["level"];
$doc->header($_SESSION["nom"]);
$doc->Alert("success", "Connexion Réussie", "Bienvenue ".$_SESSION["nom"]);
$doc->beginRow();
$doc->menu();
switch ($doc->userLevel) {
	case 1: // L'administrateur
		$doc->beginBigSection("Log File");
	;
	break;
	case 2: // L'agent
		$doc->beginBigSection("Tableau de Bord");
		$chef = new Agent($_SESSION['id']);
		$iddpt = $chef->getFromDepartement("dpt_id");
//		$condition = "c.cdt_id_formation = f.frm_id AND f.frm_dptid=d.dpt_id AND frm_dptid = ".$iddpt." GROUP BY dpt_id";
//		$table = "`dpp_candidat` c,dpp_formation f,dpp_departement d";
//		$select = "count(cdt_id)";
//		$request = $chef->UniversalRequest($condition, $table,$select);
		
		$sql = "SELECT f.frm_code,count(c.cdt_id) as compte FROM `dpp_candidat` c INNER JOIN dpp_formation f ON c.cdt_id_formation = f.frm_id AND f.frm_dptid = ".$iddpt." GROUP by frm_libelle";
		$request = $chef->Query($sql); 
		$response = $request->fetchAll();
//		print_r($response);
		$frmStat = $response;
//		echo $frmStat[0];

		$sql = "SELECT p.name_fr as nom,count(c.cdt_id) as compte FROM `dpp_candidat` c INNER JOIN countries p ON c.cdt_id_countrie = p.id INNER JOIN dpp_formation f ON c.cdt_id_formation = f.frm_id INNER JOIN dpp_departement d ON d.dpt_id = f.frm_dptid AND d.dpt_id = ".$iddpt."  GROUP by code";
		$request = $chef->Query($sql);
		$response = $request->fetchAll();
		//		print_r($response);
		$frmPaysStat = $response;
		
		
		
		$sql = "SELECT l.nv_libelle niveau ,count(c.cdt_id) as compte FROM `dpp_candidat` c INNER JOIN dpp_niveau_scolaire l ON c.cdt_id_niveau = l.nv_id INNER JOIN dpp_formation f ON c.cdt_id_formation = f.frm_id INNER JOIN dpp_departement d ON d.dpt_id = f.frm_dptid AND d.dpt_id = ".$iddpt."  GROUP by nv_libelle";
		$request = $chef->Query($sql);
		$response = $request->fetchAll();
		//		print_r($response);
		$frmNiveauStat = $response;
		
		
		$doc->beginRow();
		include_once 'StatDepartement_vue.php';
		$doc->endRow();
		$doc->endBigSection();
		;
	break;
	
	case 3: // Le candidat
$doc->beginBigSection("Etat Dossier");

	$cand = new Candidat($_SESSION['id']);
	//echo  $cand->__get("cdt_id_countrie");
	$countrie = $cand->__get("cdt_id_countrie");
	$niveau = $cand->__get("cdt_id_niveau");
	$formation = $cand->__get("cdt_id_formation");
	$percent=25;
	if($countrie ==""){
		
	}else{
		$percent+=25;
	}
	
	if($niveau ==""){
		
	}else{
		$percent+=25;
	}
	
	if($formation ==""){
	
	}else{
		$percent+=25;
	}
	

	$doc->beginRow();
		$doc->beginSmallSection("Etat de la  procédure d'inscription ", "50%");
			$doc->progressBar(50,"striped active");
		$doc->endSmallSection();
	$doc->endRow();

	$doc->beginRow();
		
	$doc->endRow();

	$doc->endBigSection();
	
	$doc->beginBigSection("Dossier");
	
	$dep = new Departement();
	$deplist = $dep->listAll()->fetchAll();
	$depnumber =$dep->listAll()->rowCount();
	
	$deptLibelle = array();
	$deptCode = array();
	$deptFormLibelle = array();
	for ($i = 0; $i < $depnumber; $i++) {
		array_push($deptLibelle, $deplist[$i][2]);
		$dep = new Departement($deplist[$i][0]);
		$frmList = $dep->getFormation()->fetchAll();
		$frmnumber =$dep->getFormation()->rowCount();
		$deptFormLibelleFinal = array();
		for ($y = 0; $y < $frmnumber; $y++) {
			array_push($deptFormLibelleFinal,$frmList[$y][0]);
		}
		array_push($deptFormLibelle,$deptFormLibelleFinal);
	
	}
	//print_r($deptFormLibelle);
	//echo $depnumber;
	//print_r($deptFormLibelle);
	
	
	
	include ('completeDossier_vue.php');
	
	
	
	$doc->endBigSection();	
	
		;
		break;
	
	default:
		;
	break;
}
	
	
	
$doc->endBigSection();
$doc->endRow();
$doc->beginScript();

switch ($_SESSION['level']) {
	case 1:

		;
		break;

	case 2:
		include_once ('../vue/StatDepartement.php');
		;
		break;
	case 3:
		
		;
		break;

	default:
		;
		break;
}




$doc->endScript();

$doc->end();