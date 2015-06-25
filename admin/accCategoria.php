<?php
	include_once ('../constantes.php');
	include_once (PATHAPP.'/clases/Categoria.php');
	print_r($_POST);
	if(isset($_POST["agregar"])){
		$nueva_categoria = new Categoria(NULL,$_POST["nombre_categoria"]);
		$nueva_categoria->Agregar();
	}
	elseif (isset($_POST["accion"])){
		if($_POST["accion"] == "borrar"){
			if(isset($_POST["categoria_seleccionada"])){
				$categorias_borrar = $_POST["categoria_seleccionada"];
				$catBorrar = new Categoria();
				foreach($categorias_borrar as $idCat){
					$catBorrar->Quitar($idCat);
				}
			}
		}
	}
	header ("Location: categorias.php");	
?>
