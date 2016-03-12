<?php
require_once ('../lib/autoload2.inc.php');
require_once 'Controller.class.php';
class Connexion_controller extends Controller{
	
	public  $login;
	
	public  $motdepasse;
	
	public  $idAgent;
	
	public  $request;
	
	function __construct()
	{
		parent::__construct();
		$this->destination ='acceuil.php';
		
		$this->repertoire = "vue";
	
	}
	
	//	Redefinition de l'algorithme d'exécution
	public function execute()
	{
	
		$control = $_GET['control'];
	
		switch ($control) {
			case 'login_admin':
	
	
	
				if (isset($_POST['login'])) {
	
					$this->login = $_POST['login'];
	
				}
	
	
				$this->motdepasse = $_POST['motdepasse'];
	
				$prenom = substr($this->login, 0,1);
	
				$nom = substr($this->login, 2);
	
				$log = $this->login;
				
				$a = new Agent();
				
				$ad = new Administrateur();
	
				$prenom = $prenom.'%';
	
				$this->request ="agent_prenom LIKE '".$prenom."' AND agent_nom = '".$nom."' AND agent_pwd= '".$this->motdepasse."'";
	
				$reponse = $a->Request($this->request,'agent_id');
	
				//$this->idAgent = $reponse[0]['idAgent'];
	
				
		
				$result = $reponse->rowCount();
				
				if ($result!=0) {
					
//				$this->idAgent = $reponse[0]['agent_id'];

					$this->idAgent = $reponse->fetch()[0];
					
					echo "welcome agent";
										
					$this->repost_data['id'] = $this->idAgent;
					$this->repost_data["level"] = 2;
						
				}else{
						
					$this->request = "adm_log='".$this->login."' AND adm_pwd = '".$this->motdepasse."'";
					$reponse = $ad->Request($this->request,"adm_id");
					
					$result = $reponse->rowCount();
					
					
					
					$result = $reponse->rowCount();

					
					if($result != 0){
						$this->idAgent = $reponse->fetch()[0];
						echo "welcome admin";
						$this->repost_data['id'] = $this->idAgent;
						$this->repost_data["level"] = 1;
					}else{
						$this->destination="admin.php?auth=fail";
						
						$this->repertoire = ".";
						$this->repost_data = null;
					}
										
	
				}
	
	
	
	
	
	
	
	
	
				break;
					
			case 'login_candidat':
		
				if (isset($_POST['login'])) {
				
					$this->login = $_POST['login'];
				
				}
				
				$this->motdepasse = $_POST['motdepasse'];
	
				$this->repost_data['motdepasse'] = $this->motdepasse;
	
				$cand = new Candidat();
	
				$password = sha1($this->motdepasse);
				
				$this->request = "cdt_email='".$this->login."' AND cdt_password = '".$password."'";
				
				$reponse = $cand->Request($this->request,"cdt_id");
					
				$result = $reponse->rowCount();
				
				
				
				print_r($reponse);

//				echo $cdtId;
					
					if($result != 0){
						echo "welcome candidat";
						$cdtId = $reponse->fetch()[0];
						print_r($cdtId);
						$this->repost_data["id"] = $cdtId;
						$this->repost_data["level"] = 3;
						
					}else{
						$this->destination="login.php?auth=fail";
						
						$this->repertoire = "vue";
						$this->repost_data = null;
					}
				
				break;
					
			default:
				;
				break;
		}
	
	
	
	
	
	
	
	
	
	}
	
	
	
}

$conControl = new Connexion_controller();
$conControl->process();
//echo print_r($_GET);
//$conControl->execute();
