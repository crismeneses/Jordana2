<?php

class Categoria{
    private $idUsuario;
    private $nombreUsuario;
    private $emailUsuario;
    private $passwordUsuario;
    
    function __construct($id,$nombre, $email, $password) {
        $this->idUsuario = $id;
        $this->idUsuario = $nombre;
        $this->emailUsuario = $email;
        $this->passwordUsuario = $password;
    }
    
    public function getNombre(){
        return $this->nombreUsuario;
    }
    
 /* COMPLETAR FUNCIONES */
 
}
?>

