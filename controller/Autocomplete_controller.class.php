<?php
require_once ('../lib/autoload2.inc.php');
require_once('Controller.class.php');
include_once '../modele/connect.php';

class Autocomplete_Controller extends Controller {





	function __construct() {

		parent::__construct();
	}

	// Redéfinition de l'algorithme d'exécution

	public function execute(){

			

		$this->destination="";

		$this->repertoire = ".";
			
		if(isset($_POST["keyword"])){
			$bdd = connectMysql();
			$keyword = $_POST["keyword"];
			$keyword = utf8_decode($keyword);
			$request = "SELECT DISTINCT dpt_libelle,dpt_id,frm_libelle FROM `dpp_specialite`s,`dpp_departement`p,`dpp_formation`f where  spec_libelle LIKE '".$keyword."%' AND s.spec_dpt_id = f.frm_dptid AND  p.dpt_id = f.frm_dptid";
			$request = "SELECT spec_libelle,dpt_libelle,dpt_id FROM `dpp_specialite` s,`dpp_departement`p where s.spec_libelle <> ''  AND s.spec_libelle LIKE '".$keyword."%'"."AND s.spec_dpt_id = p.dpt_id";
			$req = $bdd->query($request);
			
			while ($donne = $req->fetch()) {
				echo '<li class="list-group-item" onclick="set_formation(\''.utf8_encode($donne["spec_libelle"]).'\','.$donne["dpt_id"].')"><span class="spec_lib">'.utf8_encode($donne["spec_libelle"]).'</span><br /><span>Departement '.utf8_encode($donne["dpt_libelle"]).'</span></li>';
			}
			echo '<div> </div>';
			
		}
		
			

	}



}// fin de la classe

$auto = new Autocomplete_Controller();
$auto->execute();

