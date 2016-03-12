<?php
require_once '../modele/CoreObject.class.php';

class Abonnes extends CoreObject{
	public function __construct($id=null){
			
		parent::__construct();
		$this->table = 'dpp_abonnes';
		
	}
	
	
	public function addAbonnes($nom,$prenom,$email,$telephone,$special,$formation_id){
		$statement = "INSERT INTO ".$this->table."(`abn_nom`, `abn_prenom`, `abn_email`, `abn_telephone`, `abn_specialite`, `abn_form_id`) VALUES";
		$statement = $statement." ('".$nom."','".$prenom."','".$email."','".$telephone."','".$special."','".$formation_id."') ";
		$this->bdd->exec($statement);
		
	}
}