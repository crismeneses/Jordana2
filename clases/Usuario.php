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
		$this->querysel=$db->prepare($sqlsel);
		$this->querysel->bindParam(':emailUsr', $this->emailUsuario);
		$this->querysel->bindParam(':passUsr', $this->passwordUsuario);
		
		try {
			$this->querysel->execute();
		}
		catch( PDOException $Exception ) {
			//echo "Clase Usuario:ERROR:Ejecución Query ".$Exception->getMessage( ).'/'. $Exception->getCode( );
			return false;
		}
		return ($this->querysel->rowCount()==1); 
	}
	
}

?>