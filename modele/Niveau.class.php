<?php
include_once '../modele/CoreObject.class.php';

class Niveau extends CoreObject{
	
	private $id;
	
	
	
	public function __construct($id=null){
		parent::__construct();
		$this->table = "dpp_niveau_scolaire";
		$this->id = $id;				
	}
	
	public function __get($attributeName)
	{
		parent::__get($attributeName);
	
		$request = $this->bdd->prepare("SELECT * FROM `dpp_niveau_scolaire` WHERE `nv_id`=?") or die(print_r($req->errorInfo()));
	
		$request -> execute(array($this->id));
	
		$reponse = $request->fetch();
	
		$request->closeCursor();
		
		return $reponse[$attributeName];
		
	}
	
	public function __set($attributeName, $value){
		
		$table = $this->table;
		$condition = $this->id;
		
		$sql = 'UPDATE '.$table.' SET '.$attributeName.'='.$value.' WHERE `nv_id`='.$condition.'';
		
		try {
		
			$request = $this->bdd->query($sql) ;
		
			$request->closeCursor();
		
		} catch (Exception $e) {
		
			die($e->getMessage());
		}
	}
	
}