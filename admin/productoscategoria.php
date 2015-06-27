<?php include_once ('../constantes.php');?>
<?php include("../clases/ProductoCategoria.php"); ?>

<?php 
	
	//Objeto clase ProductoCategoria
	$objProductosCategoria = new ProductoCategoria();

	//Productos en categorias
	foreach ($objProductosCategoria->GetProductosCategoria("1") as $producto){
		echo $producto->getIdProducto()." ";
		echo $producto->getNombreProducto()." ";
		echo $producto->getDescripcionProducto()." ";
		echo $producto->getPrecioProducto()." ";
		echo $producto->getStockProducto();
		echo "<br/>";
	}
	
	echo "<br/>";
	
	//Categorias de un producto
	foreach ($objProductosCategoria->GetCategoriasProducto("2") as $categoria){
		echo $categoria->getIDCategoria()." ";
		echo $categoria->getNombreCategoria();
		echo "<br/>";
	}
	
	echo "<br/>";
	
	//Agregar producto a una categoria
	echo "Agregando Producto 2 en Categoria 3: ";
	if($objProductosCategoria->AddProductoEnCategoria("2", "3")){
		echo "OK";
	} else {
		echo "ERROR";
	}
	echo "<br/>";
	
	//Quitar producto de una categoria
	echo "Quitando Producto 2 de la Categoria 3: ";
	if($objProductosCategoria->DelProductoEnCategoria("2", "3")){
		echo "OK";
	} else {
		echo "ERROR";
	}
	echo "<br/>";
	
	
?>
