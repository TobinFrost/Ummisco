<?php
session_start();
require_once ('../lib/autoload2.inc.php');
require_once('Controller.class.php');

class Activation_Controller extends Controller {
	
	
	
	
	
	function __construct() {
		
		parent::__construct();
	}

// Red�finition de l'algorithme d'ex�cution

	protected function execute(){
		
		session_destroy();
		
		$this->destination="";
		
		$this->repertoire = ".";
					
		
			
			

	}
	


}// fin de la classe

$ac = new Activation_Controller();

if (isset($_GET['date'])) {
	
	$datesyst = date('Y-m-d');
	
	if(sha1($datesyst) == $_GET['date']){
		echo "inscription confirm�!";
	}else{
		echo "d�laie Expir�e!";
	}
	
	$mail = $_GET['id'];
	echo $mail;
	
}else {
	echo 'Houston we have a problem !';
}
