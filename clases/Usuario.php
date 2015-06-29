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
                    //echo "Clase Usuario:ERROR:Ejecuci�n Query ".$Exception->getMessage( ).'/'. $Exception->getCode( );
                    return false;
            }
            return ($this->querysel->rowCount()==1); 
    }

    function VerificaAcceso(){
        $db=dbconnect();
        $sqlsel="select nombre from acceso
        where nomusuario=:usr and pwdusuario=:pwd";

        $querysel=$db->prepare($sqlsel);

        $querysel->bindParam(':usr',$this->susuario);
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
}

?>