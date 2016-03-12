<?php
require_once '../modele/CoreObject.class.php';


class Candidat extends CoreObject{
	
	private $id;
	public function __construct($id=null){
			
		parent::__construct();
		$this->table = 'dpp_candidat';
		$this->id = $id;			
	}
	
	public function __set($attributeName, $value){
	
		parent::__get($attributeName);
		
		$table = $this->table;
		$condition = $this->id;
	
		$sql = 'UPDATE '.$table.' SET '.$attributeName.'='.$value.' WHERE `cdt_id`='.$condition.'';
	
		try {
	
			$request = $this->bdd->query($sql) ;
	
			$request->closeCursor();
	
		} catch (Exception $e) {
	
			die($e->getMessage());
		}
	}
	
	
	public function __get($attributeName)
	{
		parent::__get($attributeName);
	
		$request = $this->bdd->prepare("SELECT * FROM `dpp_candidat` WHERE `cdt_id`=?") or die(print_r($req->errorInfo()));
	
		$request -> execute(array($this->id));
	
		$reponse = $request->fetch();
	
		
		
		return $reponse[$attributeName];
	
		$request->closeCursor(); // a enlever
	}
	
	
}