<?php
include './libClases.php';
$archivo=$_FILES["archivo"]["name"];
$defarchivo=PATHFILE."img/products/".$archivo;
$urlarchivo="products/".$archivo;
$extension = pathinfo($archivo,PATHINFO_EXTENSION);
$tmppath=$_FILES["archivo"]["tmp_name"];
?>
<!-- Información del archivo que será publicado -->
Publicado: <?=$archivo?><br />
Tipo MIME: <?=$_FILES["archivo"]["type"]?><br />
Extensión: <?=$extension?><br />
Tamaño: <?=($_FILES["archivo"]["size"] / 1024)?>Kb<br />
Almacenado TMP: <?=$tmppath;?><br />
Destino APP: <?=$defarchivo?><br />



<?php

/*
 * Verificación de la existencia del archivo
 */
$oProducto=new Producto(NULL,$extension,$urlarchivo,$archivo);
if (file_exists($defarchivo) && $oProducto->BuscaURL()){
	echo "El archivo existe en el directorio <br/>\n";
	echo "El archivo existe en la base de datos\n";
	return;
}

/*
 * Verificación de la extensión del archivo
 */
if($extension != "jpg" &&
   $extension != "png" &&
   $extension!= "jpeg" &&
   $extension != "gif" ) {
    echo "Sólo se permiten imagenes";
    return;
}
/*
 * Movimiento de archivo a la ubicación definida en el sitio web
 */
 if (!move_uploaded_file($tmppath, $defarchivo))
 {   
 	echo "Ocurrio un error al mover el archivo :-(";
 	
 }
 else{
 	/*Agrega el registro del producto a la base de datos*/
 	if ($oProducto->Agregar()){
?>
	Archivo guardado : <?=$archivo?>
	<img src="<?=PATHURLFILE.$urlarchivo?>">
<?php
    }
 }
?>
