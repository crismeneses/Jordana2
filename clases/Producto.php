<?php
include_once (PATHAPP.'/lib/db_funciones.php');

class Producto{
    private $idProducto;
    private $nombreProducto;
    private $descripcionProducto;
    private $precioProducto;
    private $stockProducto;
    private $tipoProducto;
    private $querysel;
    private $queryins;
    private $querydel;
            
    function getIdProducto() {
        return $this->idProducto;
    }

    function getNombreProducto() {
        return $this->nombreProducto;
    }

    function getDescripcionProducto() {
        return $this->descripcionProducto;
    }

    function getPrecioProducto() {
        return $this->precioProducto;
    }

    function getStockProducto() {
        return $this->stockProducto;
    }
    
    function getTipoProducto() {
        return $this->tipoProducto;
    }

    function setIdProducto($idProducto) {
        $this->idProducto = $idProducto;
    }

    function setNombreProducto($nombreProducto) {
        $this->nombreProducto = $nombreProducto;
    }

    function setDescripcionProducto($descripcionProducto) {
        $this->descripcionProducto = $descripcionProducto;
    }

    function setPrecioProducto($precioProducto) {
        $this->precioProducto = $precioProducto;
    }

    function setStockProducto($stockProducto) {
        $this->stockProducto = $stockProducto;
    }
    
    function setTipoProducto($tipoProducto) {
        $this->tipoProducto = $tipoProducto;
    }

    function __construct($id= NULL, $nombre = NULL, $descripcion = NULL, $precio = NULL, $stock = NULL, $tipo = NULL) {
        $this->idProducto = $id;
        $this->nombreProducto = $nombre;
        $this->descripcionProducto = $descripcion;
        $this->precioProducto = $precio;
        $this->stockProducto = $stock;
        $this->tipoProducto = $tipo;
    }
    
    /* FUNCION PARA SELECCIONAR TODOS LOS PRODUCTOS */
    function SeleccionaProd(){
        
        if (!$this->querysel){
        $db=dbconnect();
        /*Definición del query que permitira ingresar un nuevo registro*/
            $sqlsel="select idProducto,nombreProducto, descripcionProducto,precioProducto,stockProducto, tipoProducto 
            from producto order by nombreProducto";
        
            $this->querysel=$db->prepare($sqlsel);
            $this->querysel->execute();
        }
        
        $registro = $this->querysel->fetch();
        if ($registro){
            return new self($registro['idProducto'], $registro['nombreProducto'], $registro['descripcionProducto'], $registro['precioProducto'],$registro['stockProducto'],$registro['tipoProducto']);         
        }
        else {
            return false;
            
        }
    }
    
    function BuscaURL(){
	
        $db=dbconnect();
        /*Definición del query que permitira ingresar un nuevo registro*/

        $sqlsel="select idProducto from producto where url=:url";

        /*Preparación SQL*/
        $querysel=$db->prepare($sqlsel);
        $querysel->bindParam(':url',$this->surl);
        $valaux=$querysel->execute();

        if ($querysel->rowcount()>=1)return true; else return false;
	}

    function Agregar(){
        $db=dbconnect();
        if ($this->BuscaURL()){
            die("Error, la imagen ya esta registrada en la base de datos.");
            return false;
	}
        $sqlins="INSERT INTO producto (nombreCategoria, descripcionProducto, precioProducto,stockProducto, tipoProducto) VALUES (:nombre, :descripcion, :precio, :stock, :tipo)";
        $this->queryins=$db->prepare($sqlins);
        $this->queryins->bindParam(':nombre',$this->nombreProducto);
        $this->queryins->bindParam(':descripcion',$this->descripcionProducto);
        $this->queryins->bindParam(':precio',$this->precioProducto);
        $this->queryins->bindParam(':stock',$this->stockProducto);
        $this->queryins->bindParam(':tipo',$this->tipoProducto);
        return $this->queryins->execute();
    }
    
    function Eliminar($id){
    
        $db=dbconnect();
        
            $sqldel="delete from producto where idProducto=:id";    
            $querydel=$db->prepare($sqldel);            
            $querydel->bindParam(':id',$id);            
            $valaux=$querydel->execute();
    
        return $valaux;
    }
    
    /* INTENTO DE FUNCION PARA SELECCIONAR SOLO LAS FRUTAS*/
    function SeleccionaFrutas(){        
        if (!$this->querysel){
        $db=dbconnect();        
            $sqlsel="select * from producto WHERE tipoProducto= 'F'";        
            $this->querysel=$db->prepare($sqlsel);
            $this->querysel->execute();
        }        
        $registro = $this->querysel->fetch();
        if ($registro){
            return new self($registro['idProducto'], $registro['nombreProducto'], $registro['descripcionProducto'], $registro['precioProducto'],$registro['stockProducto'],$registro['tipoProducto']);         
        }
        else {
            return false;
            
        }
    }
    
    function SeleccionaVerduras(){        
        if (!$this->querysel){
        $db=dbconnect();        
            $sqlsel="select * from producto WHERE tipoProducto= 'V'";        
            $this->querysel=$db->prepare($sqlsel);
            $this->querysel->execute();
        }        
        $registro = $this->querysel->fetch();
        if ($registro){
            return new self($registro['idProducto'], $registro['nombreProducto'], $registro['descripcionProducto'], $registro['precioProducto'],$registro['stockProducto'],$registro['tipoProducto']);         
        }
        else {
            return false;
            
        }
    }
    
    function SeleccionaHierbas(){        
        if (!$this->querysel){
        $db=dbconnect();        
            $sqlsel="select * from producto WHERE tipoProducto= 'H'";        
            $this->querysel=$db->prepare($sqlsel);
            $this->querysel->execute();
        }        
        $registro = $this->querysel->fetch();
        if ($registro){
            return new self($registro['idProducto'], $registro['nombreProducto'], $registro['descripcionProducto'], $registro['precioProducto'],$registro['stockProducto'],$registro['tipoProducto']);         
        }
        else {
            return false;
            
        }
    }
    
    function SeleccionaDelicatessen(){        
        if (!$this->querysel){
        $db=dbconnect();        
            $sqlsel="select * from producto WHERE tipoProducto= 'D'";        
            $this->querysel=$db->prepare($sqlsel);
            $this->querysel->execute();
        }        
        $registro = $this->querysel->fetch();
        if ($registro){
            return new self($registro['idProducto'], $registro['nombreProducto'], $registro['descripcionProducto'], $registro['precioProducto'],$registro['stockProducto'],$registro['tipoProducto']);         
        }
        else {
            return false;
            
        }
    }
    
    function SeleccionaSetas(){        
        if (!$this->querysel){
        $db=dbconnect();        
            $sqlsel="select * from producto WHERE tipoProducto= 'D'";        
            $this->querysel=$db->prepare($sqlsel);
            $this->querysel->execute();
        }        
        $registro = $this->querysel->fetch();
        if ($registro){
            return new self($registro['idProducto'], $registro['nombreProducto'], $registro['descripcionProducto'], $registro['precioProducto'],$registro['stockProducto'],$registro['tipoProducto']);         
        }
        else {
            return false;
            
        }
    }
    
    function SeleccionaProductos($id){        
        if (!$this->querysel){
        $db=dbconnect();        
            $sqlsel="select * from producto WHERE idCategoria=:id";        
            $this->querysel=$db->prepare($sqlsel);
            $this->querysel->bindParam(':id',$id);
            $this->querysel->execute();
        }        
        $registro = $this->querysel->fetch();
        if ($registro){
            return new self($registro['idProducto'], $registro['nombreProducto'], $registro['descripcionProducto'], $registro['precioProducto'],$registro['stockProducto'],$registro['tipoProducto']);         
        }
        else {
            return false;
            
        }
    }
}
?>
