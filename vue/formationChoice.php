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


$doc = new Document("Choisir Formation","","","","");
$doc->begin();
$doc->userLevel=$_SESSION["level"];
$doc->header($_SESSION["nom"]);
$etatChoixFormation = "";
if(isset($_GET["state"])){
	$doc->Alert("success", "Choix formation", "La formation a été associé avec succès");
	$_SESSION["choixFormation"] = "ok";
}
if (isset($_SESSION["choixFormation"])){
	if($_SESSION["choixFormation"]=="ok"){
		$etatChoixFormation = "[Effectuée]";
	}
}
$doc->beginRow();
$doc->menu();


$doc->beginBigSection("Choisir sa formation ".$etatChoixFormation);

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


include ('formationChoice_vue.php');
	
$doc->endBigSection();
$doc->endRow();
$doc->end();