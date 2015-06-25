<?php

include_once (PATHAPP.'/lib/db_funciones.php');

class Usuario{
	private $idUsuario;
	private $emailUsuario;
	private $passwordUsuario;
	private $querysel;
	
	function __construct($email, $password){
		$this->emailUsuario=$email;
		$this->passwordUsuario=md5($password);
	}
	
	function VerificarCredenciales(){
		$db=dbconnect();
		$sqlsel="SELECT idUsuario, emailUsuario
				 FROM usuario
				 WHERE emailUsuario=:emailUsr
				 AND passwordUsuario=:passUsr";
		$querysel=$db->prepare($sqlsel);
		$querysel->bindParam(':emailUsr', $this->emailUsuario);
		$querysel->bindParam(':passUsr', $this->passwordUsuario);
		$this->querysel->execute();
		return ($querysel->rowCount()==1); 
	}
	
}

?>