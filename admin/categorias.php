<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Categorías - Dashboard Jordana</title>
	
    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    
    <?php include_once ('../constantes.php');?>
    
  </head>

  <body>

  	<!-- Header -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Administración Jordana</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
        </div>
      </div>
    </nav>

    
    <div class="container-fluid">
	    <!-- Sidebar -->
	    <div class="row">
	    	<?php include("sidebar.php")?>
	    </div>
       <!-- Content -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Categorías</h1>
          <?php include("../clases/categoria.php"); ?>
          <div>
	          	<h3>Agregar nueva</h3>
	          	<form action="accCategoria.php" method="POST">
	          		Nombre Categoría<br>
	          		<input type="text" name="nombre_categoria" />
	          		<input type="submit" class="btn btn-default" name="agregar" value="Agregar">
	          	</form>
          </div>
          <form action="accCategoria.php" method="POST">
          	<div class="table-responsive">  
		        <table class="table table-striped">
		          	<thead>
			          	<tr>
			          		<th>
							    <input type="checkbox" id="select_all">
			          		</th>
			          		<th>
				          		ID Categoría
				          	</th>
				          	<th>
				          		Nombre Categoría
				          	</th>
				          	<th>
				          		Productos asignados
				          	</th>
			          	</tr>
		          	</thead>
		          	<tbody>
		          	<?php
			          	$categorias = new categoria();
			          	while($cat = $categorias->Selecciona()){
		          	?>
		          	<tr>
		          		<td>
		          			<input type="checkbox" class="checkboxCat" name="categoria_seleccionada[]" value="<?=$cat->getIDCategoria()?>" />
		          		</td>
			          	<td>
			          		<?=$cat->getIDCategoria()?>
			          	</td>
			          	<td>
			          		<?=$cat->getNombreCategoria()?>
			          	</td>
			          	<td></td>
		          	</tr>
		          	<?php }?>
		          	</tbody>
		          </table>
		          </div>
		          <select name="accion">
				    <option value="">-- Acciones en lote --</option> 
				    <option value="borrar">Borrar</option>
				  </select>
				  <input type="submit" class="btn btn-default" name="aplicar" value="Aplicar">
		      </form>
          </div>
          <br/>
          
       </div>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery-1.11.0.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script type="text/javascript">
	    $(document).ready(function() {
	        $('#select_all').click(function(event) {  //on click
	            if(this.checked) { // check select status
	                $('.checkboxCat').each(function() { //loop through each checkbox
	                    this.checked = true;  //select all checkboxes with class "checkbox1"              
	                });
	            }else{
	                $('.checkboxCat').each(function() { //loop through each checkbox
	                    this.checked = false; //deselect all checkboxes with class "checkbox1"                      
	                });        
	            }
	        });
	    });
	</script>
  </body>
</html>
