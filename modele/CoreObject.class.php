<?php 
// LA CLASSE COREOBJECT
// La mère de tout les objects
// Cette classe a pour but de réaliser des taches de bases:
// * Obtention de la valeur d'un attribut
// * fixer la valeur d'un attribut
// * transformation an format (String,Json) ceci sera utile vous verrai




Class CoreObject{

	protected   $bdd;
	protected   $table;

	// Le constructeur par défaut vide
	public function __construct(){
		
		$this->bdd = connectMysql();

	}

	// retourne le nom et valeurs des attributs
	 public function getProperties()
	{
		return $this->bdd;
	}
	
	public function insert($columns="",$values="") {

		$table = $this->table;

		$sql = 'INSERT INTO '.$table.' ('.$columns.') VALUES ('.$values.')';
		
		try {
						
			$request = $this->bdd->query($sql) ;
			
						
			$request->closeCursor();
			
		} catch (Exception $e) {
			
			die($e->getMessage());
		}
	}

	
	public function delete($condition) {
	
		$table = $this->table;
	
		$sql = 'DELETE FROM '.$table.'  WHERE ('.$condition.')';
	
		try {
	
			$request = $this->bdd->query($sql) ;
	
			$request->closeCursor();
				
		} catch (Exception $e) {
				
			die($e->getMessage());
		}
	}
	
	
	
	
	public function update($condition="",$setting="") {
	
		$table = $this->table;
	
		
		$sql = 'UPDATE '.$table.' SET '.$setting.' WHERE ('.$condition.')';
	
		try {
	
			$request = $this->bdd->query($sql) ;
	
			$request->closeCursor();
				
		} catch (Exception $e) {
				
			die($e->getMessage());
		}
	}
	
	
	
	// retourne la valeur d'un attribue donnée
	public function __get($attributeName)
	{
		
	}

	public function __set($attributeName,$value){
		
	}
	
	// Compte le nombre de ligne

	public function count() // Mais l'héritage ne marche pas (A revoir Soon)
	{
		$table = $this->table;

		$sql =	'SELECT count(*) FROM '.$table.'';

		$request = $this->bdd->query($sql) or die(print_r($request->errorInfo()));
		
		$reponse = $request->fetch();
		
		$request->closeCursor();
		
		return $reponse[0];

	}

	public function listAll()
	{
		$table = $this->table;

		$sql =	'SELECT * FROM '.$table.'';

		$request = $this->bdd->query($sql) or die(print_r($request->errorInfo()));
		
//		$reponse = $request->fetchAll();

		$reponse = $request;
		

		return $reponse;
		
		
	}
	
	public function Query($sql)
	{
	
		try {
	
			$request = $this->bdd->query($sql) ;
	
			return $request;
			
			$request->closeCursor();
				
		} catch (Exception $e) {
				
			die($e->getMessage());
		}
	
	
	}
	

	public function Request($condition,$selector=null)
	{
		$table = $this->table;

		if (is_null($selector)) {

			$selector ='*';
		}

		$sql = 'SELECT '.$selector.' FROM '.$table.' WHERE '.$condition.'';

		$request = $this->bdd->query($sql) or die(print_r($request->errorInfo()));

//		$reponse = $request->fetchAll();

		$reponse = $request;

		
		
		return $reponse;
		
		
	}
	
	
	public  function UniversalRequest($condition,$table,$selector=NULL){
		
		if (is_null($selector)) {
		
			$selector ='*';
		}
		
		$sql = 'SELECT '.$selector.' FROM '.$table.' WHERE '.$condition.'';
		
		 ;
		
		try {
			$request = $this->bdd->query($sql);
		} catch (Exception $e) {
			 //die(print_r($request->errorInfo()));
			 $e->getMessage();
		}
		
//		$reponse = $request->fetchAll();

		$reponse = $request;
		
		return $reponse;
		
		$request->closeCursor();
	}
	
	public function RequestFetched($condition,$selector = null){
		
		$table = $this->table;
		
		if (is_null($selector)) {
		
			$selector ='*';
		}
		
		$sql = 'SELECT '.$selector.' FROM '.$table.' WHERE '.$condition.'';
		
		$request = $this->bdd->query($sql) or die(print_r($request->errorInfo()));
		
		$reponse = $request->fetch();
		
		return $reponse[0];
		
		
	}

	// Transformation en Chaine
	public function __toString()
	{
		(String)$this;
	}

	// Representation en JSON

	public function exportAsJSON()
	{
		# code...
	}

	function destroy(){
		$this->bdd = null;
	}
	
} // Fin class CoreObject

 function connectMysql()
	{

			try{
//			 $bdd=new PDO('mysql:host=localhost;dbname=dpp_esp','root','');
				return new PDO('mysql:host=localhost;dbname=dpp_esp','root','');

			}
			catch(Exception $e){
				die('Erreur :'.$e->getMessage());
			}

//		return $bdd;
	}
	
	function disconnectMysql(){
		
	}


 ?>