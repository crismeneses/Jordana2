<?php
include_once (PATHAPP.'/lib/db_funciones.php');

class Categoria{
    private $idCategoria;
    private $nombreCategoria;
    private $cantidadProductos;
    private $querysel;
    private $queryins;
    private $querydel;
            
    function getNombreCategoria() {
        return $this->nombreCategoria;
    }
    
    function getIDCategoria() {
    	return $this->idCategoria;
    }
    
    function getCantidadProductos() {
    	return $this->cantidadProductos;
    }

    function setNombreCategoria($nombreCategoria) {
        $this->nombreCategoria = $nombreCategoria;
    }
    
    function setCantidadProductos($cantidadProductos) {
    	$this->cantidadProductos = $cantidadProductos;
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
	
	function Agregar(){
		$db=dbconnect();
		$sqlins="INSERT INTO categoria (nombreCategoria) VALUES (:nomCat)";
		$this->queryins=$db->prepare($sqlins);
		$this->queryins->bindParam(':nomCat',$this->nombreCategoria);
		return $this->queryins->execute();
	}
	
	function Quitar($idCategoria){
		$db=dbconnect();
		$sqldel="DELETE FROM categoria WHERE idCategoria = :idCat";
		$this->querydel=$db->prepare($sqldel);
		$this->querydel->bindParam(':idCat',$idCategoria);
		return $this->querydel->execute();
	}

}
?>