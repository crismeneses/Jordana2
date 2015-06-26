<?php include_once ('../constantes.php');?>
<?php include("../clases/ProductoCategoria.php"); ?>

<?php 

	$objProductosCategoria = (new ProductoCategoria())->GetProductosCategoria("2");
	//print_r($objProductosCategoria);
	
	foreach ($objProductosCategoria as $producto){
		//print_r($producto);
		echo $producto->getIdProducto()." ";
		echo $producto->getNombreProducto()." ";
		echo $producto->getDescripcionProducto()." ";
		echo $producto->getPrecioProducto()." ";
		echo $producto->getStockProducto();
		echo "<br/>";
		
	}
	
?>
