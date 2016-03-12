<?php
function connectMysql()
	{

			try{
			 $bdd=new PDO('mysql:host=localhost;dbname=dpp_esp','root','');

			}
			catch(Exception $e){
				die('Erreur :'.$e->getMessage());
			}

		return $bdd;
	}

?>