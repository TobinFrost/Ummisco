<?php
require_once '../modele/CoreObject.class.php';

class Departement extends CoreObject{
	
	private $id;
	
	
	
	public function __construct($id=null){
		parent::__construct();
		$this->table = "dpp_departement";
		$this->id = $id;				
	}
	
	
	
	public function __get($attributeName)
	{
		parent::__get($attributeName);
	
		$request = $this->bdd->prepare("SELECT * FROM `dpp_departement` WHERE `dpt_id`=?") or die(print_r($req->errorInfo()));
	
		$request -> execute(array($this->id));
	
		$reponse = $request->fetch();
	
		$request->closeCursor();
		
		return $reponse[$attributeName];
		
	}
	
	public function __set($attributeName, $value){
		
		$table = $this->table;
		$condition = $this->id;
		
		$sql = 'UPDATE '.$table.' SET '.$attributeName.'='.$value.' WHERE `dpt_id`='.$condition.'';
		
		try {
		
			$request = $this->bdd->query($sql) ;
		
			$request->closeCursor();
		
		} catch (Exception $e) {
		
			die($e->getMessage());
		}
	}
	
	
	
	public function getDepartementsBySerie($serie){

		
		if($serie != ""){
			if($serie =="S" || $serie =="T"){
				$serie = 1;
			}else{
				$serie = 2;
			}
			
			$sql = 'SELECT * FROM `dpp_departement` WHERE dpt_serie_id ='.$serie;
		}else{
			$sql = 'SELECT * FROM `dpp_departement`';
		}
		
			
	
		
		
		try {
			
			$request = $this->bdd->query($sql) ;
				
			return $request;
				
			$request->closeCursor();
			
		} catch (Exception $e) {
			
			die($e->getMessage());
			
		}
		
	}// end of getDepartementsBySerie
	
	public function getFormationByNiveau($niveau,$serie){
		
		
		if($serie != ""){
			
			if($serie =="S" || $serie =="T"){
				$serie = 1;
			}else{
				if($serie =="G" || $serie =="L"){
					$serie = 2;
				}
			
			}
			
			$sql = 'SELECT DISTINCT frm_libelle,frm_id,type_libelle,lvl_duration,lvl_minima FROM `dpp_departement` d,`dpp_formation` f,dpp_typeformation t,dpp_level l,dpp_serie_formation s WHERE f.frm_typeid = t.type_id and f.frm_level_id = l.lvl_id AND d.dpt_id = f.frm_dptid AND d.dpt_serie_id='.$serie.' AND l.lvl_minima LIKE "'.$niveau.'" AND d.dpt_id='.$this->id;
			
		}else{
			if($niveau == ""){
				$sql = 'SELECT DISTINCT frm_libelle,frm_id,type_libelle,lvl_duration,lvl_minima FROM `dpp_departement` d,`dpp_formation` f,dpp_typeformation t,dpp_level l,dpp_serie_formation s WHERE f.frm_typeid = t.type_id and f.frm_level_id = l.lvl_id AND d.dpt_id = f.frm_dptid AND d.dpt_id='.$this->id;
			}else{
				$sql = 'SELECT DISTINCT frm_libelle,frm_id,type_libelle,lvl_duration,lvl_minima FROM `dpp_departement` d,`dpp_formation` f,dpp_typeformation t,dpp_level l,dpp_serie_formation s WHERE f.frm_typeid = t.type_id and f.frm_level_id = l.lvl_id AND d.dpt_id = f.frm_dptid AND l.lvl_minima LIKE "'.$niveau.'" AND d.dpt_id='.$this->id;
			}
			
			
			
		}
			
		
		
		
		
		
		try {
			
			$request = $this->bdd->query($sql) ;
			
			return $request;
			
			$request->closeCursor();
			
		} catch (Exception $e) {
			
			die($e->getMessage());
			
		}
	}
	
	
	public function getFormation(){
		
		$sql = 'SELECT frm_libelle,frm_id,type_libelle,lvl_duration,lvl_minima FROM `dpp_departement` d,`dpp_formation` f,dpp_typeformation t,dpp_level l WHERE f.frm_typeid = t.type_id and f.frm_level_id = l.lvl_id AND d.dpt_id = f.frm_dptid AND d.dpt_id= '.$this->id;
		
		try {
		
			$request = $this->bdd->query($sql) ;
				
			return $request;
				
			$request->closeCursor();
		
		} catch (Exception $e) {
		
			die($e->getMessage());
		}
	}
	
	
	public function getFormations(){
	
		$sql = 'SELECT frm_id,frm_libelle FROM `dpp_departement` d,`dpp_formation` f WHERE d.dpt_id = f.frm_dptid';
	
		try {
	
			$request = $this->bdd->query($sql) ;
	
			return $request->fetchAll();
	
			$request->closeCursor();
	
		} catch (Exception $e) {
	
			die($e->getMessage());
		}
	}
	
	
}