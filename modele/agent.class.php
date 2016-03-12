<?php
require_once '../modele/CoreObject.class.php';

class Agent extends CoreObject{
	
	private $id;
	private $nom;
	private $prenom;
	private $matricule;
	private $iddept;
	private $telelephone;
	private $mail;
	private $pwd;
	
	
	public function __construct($id=null){
		parent::__construct();
		$this->table = "dpp_agent";
		$this->id = $id;				
	}
	
	public function __get($attributeName)
	{
		parent::__get($attributeName);
	
		$request = $this->bdd->prepare("SELECT * FROM `dpp_agent` WHERE `agent_id`=?") or die(print_r($req->errorInfo()));
	
		$request -> execute(array($this->id));
	
		$reponse = $request->fetch();
	
		$request->closeCursor();
		
		return $reponse[$attributeName];
	
	}
	
	public function __set($attributeName, $value){
		
		$table = $this->table;
		$condition = $this->id;
		
		$sql = 'UPDATE '.$table.' SET '.$attributeName.'='.$value.' WHERE `agent_id`='.$condition.'';
		
		try {
		
			$request = $this->bdd->query($sql) ;
		
			$request->closeCursor();
		
		} catch (Exception $e) {
		
			die($e->getMessage());
		}
	}
	
	public function getLibelleDepartement($id){
				
		$sql = 'SELECT dpt_libelle FROM `dpp_agent` a,`dpp_departement` d WHERE a.agent_iddept = d.dpt_id AND d.dpt_id= '.$id;
		
		try {
		
			$request = $this->bdd->query($sql) ;
			
			return $request->fetch()[0];
			
			$request->closeCursor();
		
		} catch (Exception $e) {
		
			die($e->getMessage());
		}
		
	}
	
	
	public function getLibelleDepartements(){
	
		$sql = 'SELECT dpt_id,dpt_libelle FROM `dpp_agent` a,`dpp_departement` d WHERE a.agent_iddept = d.dpt_id';
	
		try {
	
			$request = $this->bdd->query($sql) ;
				
			return $request->fetchAll();
				
			$request->closeCursor();
	
		} catch (Exception $e) {
	
			die($e->getMessage());
		}
	
	}
	
	
	public function getFromDepartement($attributeName)
	{
		
	
		$request = $this->bdd->prepare("SELECT * FROM `dpp_agent` a,`dpp_departement` d WHERE a.agent_iddept = d.dpt_id AND a.agent_id= ?") or die(print_r($req->errorInfo()));
	
		$request -> execute(array($this->id));
	
		$reponse = $request->fetch();
	
		$request->closeCursor();
	
		return $reponse[$attributeName];
	
	}
	
}