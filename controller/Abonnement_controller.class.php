<?php
require_once ('../lib/autoload2.inc.php');
require_once('Controller.class.php');
include ('../modele/Abonnes.class.php');
require ('../Mail/PHPMailerAutoload.php');
class Abonnement_Controller extends Controller {





	function __construct() {

		parent::__construct();
	}

	// Redéfinition de l'algorithme d'exécution

	public function execute(){
			$ab = new Abonnes();
			if (isset($_POST["form_txt_spec"])){
				$spec_form = $_POST["form_txt_spec"];
				$pos = strpos($spec_form, "_");
				$formation_id = substr($spec_form, $pos+1);
				$special = substr($spec_form,0,$pos);
				$telephone = $_POST["form_txt_telephone"];
				$email = $_POST["form_txt_email"];
				$prenom = $_POST["form_txt_prenom"];
				$nom = $_POST["form_txt_nom"];
				echo "ok";
				$ab->addAbonnes($nom, $prenom, $email, $telephone, $special, $formation_id);
				$this->sendEmail($nom, $prenom, $special, $telephone, $email);
			}
	

		

			

	}
	
	public function sendEmail($nom,$prenom,$special,$telephone,$email){
		
		$username = "admin@super-dev.com";
		$host = "smtp.super-dev.com";
		$password = "jjthomson92";
		
		$message = '<!DOCTYPE html><html><head><meta charset="iso-8859-1"><title>Abonnement aux formations concernant : '.$special.'</title></head><body style="margin:0px; font-family:Tahoma, Geneva, sans-serif;"><div style="padding:10px; background:#333; font-size:24px; color:#CCC;"><a href="http://www.preins.esp.sn"><img src="http://t2.gstatic.com/images?q=tbn:ANd9GcTcNi6JP1wzUywN3dPES2aa_ZnGFzuaFRnGcU260_3Q0Dd3-Eqaefb_tog" width="180" height="40" alt="esp.sn" style="border:none; float:right;">	</a>Abonnement aux formations concernant : '.$special.'</div><div style="padding:24px; font-size:17px;">Salut '.$prenom.' '.$nom.',<br /><br />Vous venez de vous abonner à toutes les formations concernant votre future/actuelle spécialité :<br /><br /> <h3>'.$special.'</h3><br /><br />Vous receverez toute les nouveautés ou info concernant cette spécialité <br /></div></body></html>';
		$headers = "From: no-reply@preins.esp.sn \n";
		$headers .= "MIME-Version: 1.0\n";
		$headers .= "Content-type: text/html; charset=utf-8\n";
		
		$sujet = "Abonnement aux formations concernant : ".$special;
		
		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->SMTPDebug = 0;
		$mail->Debugoutput = 'html';
		$mail->Host = $host;
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;
		$mail->SMTPAuth = true;
		$mail->Username = $username;
		$mail->Password = $password;
		//Set who the message is to be sent from
		$mail->setFrom('no-reply@preins.esp.sn', 'Preinscription ESP');
		//Set an alternative reply-to address
		$mail->addReplyTo('no-reply@preins.esp.sn', 'Ne pas répondre à Préinscription ESP');
		//Set who the message is to be sent to
		$mail->addAddress($email,$prenom.' '.$nom);
		//Set the subject line
		$mail->Subject = $sujet;
		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		$mail->msgHTML($message);
		//Replace the plain text body with one created manually
		//$mail->AltBody = 'This is a plain-text message body';
		//send the message, check for errors
		if (!$mail->send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
			echo "Message sent!";
		}
	}



}// fin de la classe

$ab = new Abonnement_Controller();
$ab->execute();
