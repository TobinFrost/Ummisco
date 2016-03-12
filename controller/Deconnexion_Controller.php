<?php
session_start();
require_once ('../lib/autoload2.inc.php');
require_once('Controller.class.php');

class Deconnexion_Controller extends Controller {
	
	
	
	
	
	function __construct() {
		
		parent::__construct();
	}

// Redéfinition de l'algorithme d'exécution

	protected function execute(){
		
		session_destroy();
		
		$this->destination="";
		
		$this->repertoire = ".";
					
		
			
			

	}
	


}// fin de la classe

$dec = new Deconnexion_Controller();

if (isset($_GET['control'])) {
	
	$dec->process();
	
}else {
	echo 'Houston we have a problem !';
}
