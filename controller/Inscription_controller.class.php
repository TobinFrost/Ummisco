<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once 'Controller.class.php';
include ('../modele/Candidat.class.php');
require ('../Mail/PHPMailerAutoload.php');
class Inscription_controller extends Controller{
	
	public function __construct(){
		$this->destination ='Activation_controller.class.php';
		$this->repertoire = "controller";
	}
	
	public function execute(){
		
		$a = new Candidat();
		
		
		
		if(isset($_POST['captcha'])){
			if($_SESSION['captcha']['code'] == $_POST['captcha']){
//				echo "CAPTCHA OK \n";
				
				if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['pwd'])){
					
					$request = "cdt_email = '".$_POST['mail']."'";
					$reponse = $a->Request($request,"cdt_id");
					$result = $reponse->rowCount();
					
					
					if($result == 0){ // Test Duplicat
					
					$date = sha1(date('Y-m-d'));
					$id = $_POST['mail'];
					
					$columns = "cdt_confirm,cdt_nom,cdt_prenom,cdt_email,cdt_password,cdt_time_subscribe";
					$pwd = sha1($_POST['pwd']);
					$values = "0,'".$_POST['nom']."','".$_POST['prenom']."','".$_POST['mail']."','".$pwd."','".$date."'";
					$a->insert($columns,$values);
					$to = "".$_POST['mail'];
					$de="myfirstlist@super-dev.com";
					$sujet="Validation de l'inscription à la plateforme DEMAT-ESP";
					$message = '<!DOCTYPE html><html><head><meta charset="iso-8859-1"><title>Validation de l\'inscription à la plateforme DEMAT-ESP</title></head><body style="margin:0px; font-family:Tahoma, Geneva, sans-serif;"><div style="padding:10px; background:#333; font-size:24px; color:#CCC;"><a href="http://www.esp.sn"><img src="http://t2.gstatic.com/images?q=tbn:ANd9GcTcNi6JP1wzUywN3dPES2aa_ZnGFzuaFRnGcU260_3Q0Dd3-Eqaefb_tog" width="180" height="40" alt="esp.sn" style="border:none; float:right;">	</a>Validation de l\'inscription à la plateforme DEMAT-ESP</div><div style="padding:24px; font-size:17px;">Salut '.$_POST['prenom'].' '.$_POST['nom'].',<br /><br />Cliquez sur ce lien pour Valider votre inscription:<br /><br /><a href="'.$_SERVER['HTTP_HOST'].'/DPP/'.$this->repertoire.'/'.$this->destination.'?date='.$date.'&id='.$id.'">Cliquer pour activer votre compte</a><br /><br />Vous vous êtes inscrit avec :<br />* le mail suivant : <b>'.$to.'</b><br />* le mot de passe suivant : <b>'.$_POST['pwd'].'</b></div></body></html>';
					$headers = "From: $de\n";
					$headers .= "MIME-Version: 1.0\n";
					$headers .= "Content-type: text/html; charset=iso-8859-1\n";
					
					
					
					$mail = new PHPMailer();
					//Tell PHPMailer to use SMTP
					$mail->isSMTP();
					//Enable SMTP debugging
					// 0 = off (for production use)
					// 1 = client messages
					// 2 = client and server messages
					$mail->SMTPDebug = 0;
					//Ask for HTML-friendly debug output
					$mail->Debugoutput = 'html';
					//Set the hostname of the mail server
					$mail->Host = "smtp.super-dev.com";
					
					//enable this if you are using gmail smtp, for mandrill app it is not required
					$mail->SMTPSecure = 'tls';
					
					//Set the SMTP port number - likely to be 25, 465 or 587
					$mail->Port = 587;
					//Whether to use SMTP authentication
					$mail->SMTPAuth = true;
					//Username to use for SMTP authentication
					$mail->Username = "admin@super-dev.com";
					//Password to use for SMTP authentication
					$mail->Password = "jjthomson92";
					//Set who the message is to be sent from
					$mail->setFrom('admin@super-dev.com', 'Admin');
					//Set an alternative reply-to address
					$mail->addReplyTo('admin@super-dev.com', 'Reply-to Admin');
					//Set who the message is to be sent to
					$mail->addAddress($to,$_POST['prenom'].' '.$_POST['nom']);
					//Set the subject line
					$mail->Subject = $sujet;
					//Read an HTML message body from an external file, convert referenced images to embedded,
					//convert HTML into a basic plain-text alternative body
					$mail->msgHTML($message);
					//Replace the plain text body with one created manually
					//$mail->AltBody = 'This is a plain-text message body';
					//Attach an image file
//					$mail->addAttachment('images/phpmailer_mini.png');
					
					//send the message, check for errors
					if (!$mail->send()) {
						echo "Mailer Error: " . $mail->ErrorInfo;
					} else {
						echo "Message sent!";
					}
						
					}else{ // fin Test duplicat
						echo "Compte Existe";
					}
				}
			}else{
				echo "CAPTCHA KO";
			}
		}else{
			echo "CAPTCHA NO SET";
		}
	}
}

$insControl = new Inscription_controller();
//$insControl->process();
$insControl->execute();
