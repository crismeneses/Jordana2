<?php
	include_once (PATHAPP.'/lib/db_funciones.php');
	include_once (PATHAPP.'/clases/Producto.php');
	include_once (PATHAPP.'/clases/Categoria.php');
	
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
		$db=dbconnect();
		$sqlsel="SELECT cat.idCategoria, cat.nombreCategoria
				 FROM `categoria` cat, `producto_en_categoria` prca, `producto` pro
				 WHERE cat.idCategoria = prca.idCategoria
				 AND pro.idProducto = prca.idProducto
				 AND pro.idProducto = :idProd";
		$this->querysel=$db->prepare($sqlsel);
		$this->querysel->bindParam(':idProd',$idProducto);
		$this->querysel->execute();
		
		$registro = $this->querysel->fetchAll();
		
		$categorias = array();
		foreach ($registro as $reg){
			$categorias[] = new Categoria($reg["idCategoria"],
										 $reg["nombreCategoria"]);
		}
		return $categorias;
	}
	
	function AddProductoEnCategoria($idProducto, $idCategoria){
		$db=dbconnect();
		$sqlins="INSERT INTO `producto_en_categoria`(`idProducto`, `idCategoria`) VALUES (:idProd, :idCat)";
		$this->queryins=$db->prepare($sqlins);
		$this->queryins->bindParam(':idProd',$idProducto);
		$this->queryins->bindParam(':idCat',$idCategoria);
		return $this->queryins->execute();
	}
	
	function DelProductoEnCategoria($idProducto, $idCategoria){
		$db=dbconnect();
		$sqldel="DELETE FROM `producto_en_categoria` WHERE idProducto=:idProd AND idCategoria=:idCat";
		$this->querydel=$db->prepare($sqldel);
		$this->querydel->bindParam(':idProd',$idProducto);
		$this->querydel->bindParam(':idCat',$idCategoria);
		return $this->querydel->execute();
	}
		
}

?>