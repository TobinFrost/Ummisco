<?php
session_start();
require_once 'Document.class.php';
require_once ('../lib/autoload2.inc.php');

if(isset($_SESSION['id'])){

}else{
	header("Location: ../index.php");
}

if (isset($_GET["deleteid"])){
	
	$dep = new Departement();
	$dep->delete($_GET["deleteid"]);
}

if(isset($_POST["dpt_id"])){
//	$columns = "dpt_prenom,dpt_nom,dpt_matricule,dpt_tel,dpt_mail";
//	$values = "'".$_POST['dpt_prenom']."','".$_POST['dpt_nom']."','".$_POST['dpt_matricule']."','".$_POST['dpt_tel']."','".$_POST['dpt_mail']."'";
	
//	$a = new Agent();
	
//	$a->insert($columns,$values);

	$dep = new Departement();
	
	$dep->update("dpt_id =".$_POST["dpt_id"],"dpt_code ='".$_POST['dpt_code']."'");
	
	$dep->update("dpt_id =".$_POST["dpt_id"],"dpt_libelle ='".$_POST['dpt_libelle']."'");
	

	

	

	
}

$doc = new Document($_SESSION["user"],"","","","");
$doc->begin();
$doc->userLevel=$_SESSION["level"];
$doc->header($_SESSION["nom"]);
//$doc->Alert("success", "Connexion Réussie", "Bienvenue ".$_SESSION["nom"]);
$doc->beginRow();
$doc->menu();
$doc->beginBigSection("Département");
$dept = new Departement();
$data =$dept->listAll();

//print_r($dpt);
include_once 'conf_departement_vue.php';

$doc->endBigSection();
$doc->endRow();
$doc->end();