<?php

class Specialite extends CoreObject{
	
	private $id;
	private $libelle;
	private $dpt_id;
	
	public function __construct($id = NULL){
		parent::__construct();
		$this->id = $id;
		$this->table = 'dpp_specialite';
	}
	
	public function __get($attributeName){
		
		$request = $this->bdd->prepare("SELECT * FROM `dpp_specialite` WHERE `spec_id`=?") or die(print_r($req->errorInfo()));
		
		$request -> execute(array($this->id));
		
		$reponse = $request->fetch();
		
		$request->closeCursor();
		
		return $reponse[$attributeName];
	}
	
	public function __set($attributeName, $value){
	
		$table = $this->table;
		$condition = $this->id;
	
		$sql = 'UPDATE '.$table.' SET '.$attributeName.'='.$value.' WHERE `spec_id`='.$condition.'';
	
		try {
	
			$request = $this->bdd->query($sql) ;
	
			$request->closeCursor();
	
		} catch (Exception $e) {
	
			die($e->getMessage());
		}
	}
	
}