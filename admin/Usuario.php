<?php
    class Usuario {
        private $nidusuario;
	private $snombreUsuario;
	private $sEmailUsuario;
	private $sPasswordUsuario;
	
	function __construct($sEmail,$susr,$sPass){
		$this->sEmailUsuario=$sEmail;
		$this->snombreUsuario=$susr;
		$this->sPasswordUsuario=md5($sPass);
	}
	public function getNombreUsuario(){
		return $this->snombreUsuario;
	}

	public function getIdUsuario(){
		return $this->nidusuario;
	}
	
	function VerificaUsuario(){
		$db=dbconnect();
		/*Definici�n del query que permitira ingresar un nuevo registro*/
		$sqlsel="select nombre from acceso
		where nomusuario=:usr";

		/*Preparaci�n SQL*/
		$querysel=$db->prepare($sqlsel);

		/*Asignaci�n de parametros utilizando bindparam*/
		$querysel->bindParam(':usr',$this->snombreUsuario);
		
		$datos=$querysel->execute();
		
		if ($querysel->rowcount()==1)return true; else return false;

	}

	function VerificaAcceso(){
		$db=dbconnect();
		/*Definici�n del query que permitira ingresar un nuevo registro*/
		$sqlsel="select nombreUsuario from usuario
		where nomusuario=:usr and passwordusuario=:pwd";

		/*Preparaci�n SQL*/
		$querysel=$db->prepare($sqlsel);

		/*Asignaci�n de parametros utilizando bindparam*/
		$querysel->bindParam(':usr',$this->s);
		$querysel->bindParam(':pwd',$this->sclave);

		$datos=$querysel->execute();

		if ($querysel->rowcount()==1){
			$this->snombre=$querysel->fetchColumn();
			
			return true;
		}
		else{
			return false;
		}


	}
	function ActualizaClave($snewpwd){
		$db=dbconnect();
		/*Definici�n del query que permitira actualizar la clave*/
		$sqlupd="update acceso
					set passwordusuario=:pwd
					where idacceso=:id";
	
		/*Preparaci�n SQL*/
		$querysel=$db->prepare($sqlupd);
	
		/*Asignaci�n de parametros utilizando bindparam*/
		$querysel->bindParam(':pwd',md5($snewpwd));
		$querysel->bindParam(':id',$this->nidacceso);
		

		$valaux=$querysel->execute();
	
		return $valaux;
	}

}
}
?>
