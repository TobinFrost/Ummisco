<?php
session_start();
include_once '../controller/Fiche_controller.class.php';
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


$doc = new Document("Fiche de Formation","","","","");
$doc->begin();
$doc->userLevel=$_SESSION["level"];
$doc->header($_SESSION["nom"]);
$doc->beginRow();

$fi = new Fiche_controller();

$fi->execute();

$doc->beginSmallSection("Présentation","");

echo "La formation sélectionnée est la <b>".$fi->ficheFormation."</b>, son code administratif est le <b>";
echo $fi->ficheCode." </b>.";

$doc->endSmallSection();

$doc->beginSmallSection("Durée de la formation","");

echo "<p>La durée de la formation  est de <b>".$fi->ficheDuree."</b> ans </p>";

$doc->endSmallSection();


$doc->endRow();


$doc->beginRow();

$doc->beginSmallSection("Prise en charge","");

echo "Les formalités de scolarité tout au long de la formation  sont <b>".$fi->fichePriseEnCharge."</b>";


$doc->endSmallSection();

$doc->beginSmallSection("Critères d'admission","");


echo "Pour être accessible à cette formation il vous faut au minimum : <b>".$fi->fichePrerequis."</b>";


$doc->endSmallSection();


$doc->endRow();




$doc->end();