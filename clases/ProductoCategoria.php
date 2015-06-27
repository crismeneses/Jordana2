<?php
	include_once (PATHAPP.'/lib/db_funciones.php');
	include_once (PATHAPP.'/clases/Producto.php');
	
class ProductoCategoria{
	private $idCategoria;
	private $idProducto;
	private $querysel;
	private $queryins;
	private $querydel;
	
	function __construct(){
	}
		
	function GetProductosCategoria($idCategoria){
		$db=dbconnect();
		$sqlsel="SELECT pro.idProducto, pro.nombreProducto, pro.descripcionProducto, pro.precioProducto, pro.stockProducto
				FROM `categoria` cat, `producto_en_categoria` prca, `producto` pro
				WHERE cat.idCategoria = prca.idCategoria
				AND pro.idProducto = prca.idProducto
				AND cat.idCategoria = :idCat";
		$this->querysel=$db->prepare($sqlsel);
		$this->querysel->bindParam(':idCat',$idCategoria);
		$this->querysel->execute();
		
		$registro = $this->querysel->fetchAll();
		
		$productos = array();
		foreach ($registro as $reg){
			$productos[] = new Producto($reg["idProducto"],
										$reg["nombreProducto"],
										$reg["descripcionProducto"],
										$reg["precioProducto"],
										$reg["stockProducto"]);
		}
		return $productos;
		
	}
	
	function GetCategoriasProducto($idProducto){
		
	}
	
	function AddProductoEnCategoria($idProducto, $idCategoria){
		
	}
	
	function DelProductoEnCategoria($idProducto, $idCategoria){
		
	}
		
}

?>