<?php
class categoria{
    private $idCategoria;
    private $nombreCategoria;
    private $querysel;
            
    function getNombreCategoria() {
        return $this->nombreCategoria;
    }

    function setNombreCategoria($nombreCategoria) {
        $this->nombreCategoria = $nombreCategoria;
    }

    function __construct($id = NULL,$nombre= NULL) {
        $this->idCategoria = $id;
        $this->nombreCategoria = $nombre;
        
    }
    
    function Selecciona(){		
		if (!$this->querysel){
		$db=dbconnect();
		/*Definición del query que permitira ingresar un nuevo registro*/
		
			$sqlsel="select idCategoria,nombreCategoria from categoria order by nombreCategoria";
		
			/*Preparación SQL*/
			$this->querysel=$db->prepare($sqlsel);
		
			$this->querysel->execute();
		}
		
		$registro = $this->querysel->fetch();
		if ($registro){
			return new self($registro['idCategoria'], $registro['nombreCategoria']);			
		}
		else {
			return false;
			
		}
	}
}
?>