<?php
session_start();
require_once 'Document.class.php';
require_once ('../lib/autoload2.inc.php');

if(isset($_SESSION['id'])){

}else{
	header("Location: ../index.php");
}

if (isset($_GET["deleteid"])){
	
	$a = new Agent();
	$a->delete($_GET["deleteid"]);
}

if(isset($_POST["agent_id"])){
//	$columns = "agent_prenom,agent_nom,agent_matricule,agent_tel,agent_mail";
//	$values = "'".$_POST['agent_prenom']."','".$_POST['agent_nom']."','".$_POST['agent_matricule']."','".$_POST['agent_tel']."','".$_POST['agent_mail']."'";
	
//	$a = new Agent();
	
//	$a->insert($columns,$values);

	$a = new Agent();
	
	$a->update("agent_id =".$_POST["agent_id"],"agent_prenom ='".$_POST['agent_prenom']."'");
	
	$a->update("agent_id =".$_POST["agent_id"],"agent_nom ='".$_POST['agent_nom']."'");
	
	$a->update("agent_id =".$_POST["agent_id"],"agent_matricule ='".$_POST['agent_matricule']."'");
	
	$a->update("agent_id =".$_POST["agent_id"],"agent_tel ='".$_POST['agent_tel']."'");
	
	$a->update("agent_id =".$_POST["agent_id"],"agent_mail ='".$_POST['agent_mail']."'");
	
}

$doc = new Document($_SESSION["user"],"","","","");
$doc->begin();
$doc->userLevel=$_SESSION["level"];
$doc->header($_SESSION["nom"]);
//$doc->Alert("success", "Connexion Réussie", "Bienvenue ".$_SESSION["nom"]);
$doc->beginRow();
$doc->menu();
$doc->beginBigSection("Chef de Département");
$cf = new Agent();
$data =$cf->listAll();
$dpt= $cf->getLibelleDepartements();
//print_r($dpt);
include_once 'conf_chefdepartement_vue.php';

$doc->endBigSection();
$doc->endRow();
$doc->end();