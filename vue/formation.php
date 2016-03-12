<?php
session_start();
require_once 'Document.class.php';
require_once ('../lib/autoload2.inc.php');

if(isset($_SESSION['id'])){

}else{
	header("Location: ../index.php");
}

if (isset($_GET["deleteid"])){
	
	$dep = new Level();
	$dep->delete("frm_id =".$_GET["deleteid"]);
}

if(isset($_POST["frm_id"])){
//	$columns = "frm_prenom,frm_nom,frm_matricule,frm_tel,frm_mail";
//	$values = "'".$_POST['frm_prenom']."','".$_POST['frm_nom']."','".$_POST['frm_matricule']."','".$_POST['frm_tel']."','".$_POST['frm_mail']."'";
	
//	$a = new Agent();
	
//	$a->insert($columns,$values);

	$dep = new Level();
	
	$dep->update("frm_id =".$_POST["frm_id"],"frm_code ='".$_POST['frm_code']."'");
	
	$dep->update("frm_id =".$_POST["frm_id"],"frm_libelle ='".$_POST['frm_libelle']."'");
	
	$dep->update("frm_id =".$_POST["frm_id"],"frm_duration ='".$_POST['frm_duration']."'");
	
}

if(isset($_GET["add"])){
	
	$columns = "frm_code,frm_libelle,frm_duration";
	$values = "'".$_POST['frm_code']."','".$_POST['frm_libelle']."',".$_POST['frm_duration'];
	$dep = new Level();
	$dep->insert($columns,$values);
}

$doc = new Document($_SESSION["user"],"","","","");
$doc->begin();
$doc->userLevel=$_SESSION["level"];
$doc->header($_SESSION["nom"]);
//$doc->Alert("success", "Connexion Réussie", "Bienvenue ".$_SESSION["nom"]);
$doc->beginRow();
$doc->menu();
$doc->beginBigSection("Formations");	
$dept = new Level();
$data =$dept->listAll();

//print_r($lvl);
include_once 'formation_vue.php';

$doc->endBigSection();
$doc->endRow();
$doc->end();