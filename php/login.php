<?php
	include_once('../constantes.php');
	include_once(PATHAPP.'/clases/Usuario.php');
	
	$objUser = new Usuario("admin@jordana.acom", "123456");
	
	if($objUser->VerificarCredenciales()){
		echo "Acceso autorizado";
	}
	else{
		echo "Acceso denegado";
	}
	

?>
