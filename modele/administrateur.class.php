<?php
//include '../modele/CoreObject.class.php';

class Administrateur extends CoreObject{
	
	private $id;
	private $log;
	private $pwd;
	
	public function __construct($id=null){
		parent::__construct();
		$this->table = "dpp_administrateur";
		$this->id = $id;
	}
	
	public function __get($attributeName)
	{
		parent::__get($attributeName);
	
		$request = $this->bdd->prepare("SELECT * FROM `dpp_administrateur` WHERE `adm_id`=?") or die(print_r($req->errorInfo()));
	
		$request -> execute(array($this->id));
	
		$reponse = $request->fetch();
	
		$request->closeCursor();
		
		return $reponse[$attributeName];
	
	}
	
	public function __set($attributeName, $value){
	
		$table = $this->table;
		$condition = $this->id;
	
		$sql = 'UPDATE '.$table.' SET '.$attributeName.'='.$value.' WHERE `adm_id`='.$condition.'';
	
		try {
	
			$request = $this->bdd->query($sql) ;
	
			$request->closeCursor();
	
		} catch (Exception $e) {
	
			die($e->getMessage());
		}
	}
	
	
	
}