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
	$dep->delete("lvl_id =".$_GET["deleteid"]);
}

if(isset($_POST["lvl_id"])){
//	$columns = "lvl_prenom,lvl_nom,lvl_matricule,lvl_tel,lvl_mail";
//	$values = "'".$_POST['lvl_prenom']."','".$_POST['lvl_nom']."','".$_POST['lvl_matricule']."','".$_POST['lvl_tel']."','".$_POST['lvl_mail']."'";
	
//	$a = new Agent();
	
//	$a->insert($columns,$values);

	$dep = new Level();
	
	$dep->update("lvl_id =".$_POST["lvl_id"],"lvl_code ='".$_POST['lvl_code']."'");
	
	$dep->update("lvl_id =".$_POST["lvl_id"],"lvl_minima ='".$_POST['lvl_minima']."'");
	
	$dep->update("lvl_id =".$_POST["lvl_id"],"lvl_duration ='".$_POST['lvl_duration']."'");
	
}

if(isset($_GET["add"])){
	
	$columns = "lvl_code,lvl_minima,lvl_duration";
	$values = "'".$_POST['lvl_code']."','".$_POST['lvl_minima']."',".$_POST['lvl_duration'];
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
$doc->beginBigSection("Niveaux");
$dept = new Level();
$data =$dept->listAll();

//print_r($lvl);
include_once 'conf_niveau_vue.php';

$doc->endBigSection();
$doc->endRow();
$doc->end();