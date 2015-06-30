<?php include 'libClases.php'; ?>
<head>
<!-- META TAGS -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- TITULO DEL SITIO -->
<title>Jordana</title>

<!-- FUENTES -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,900,700italic,500italic' rel='stylesheet' type='text/css'>

<!-- CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/perfect-scrollbar.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" href="css/animation.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/chosen.css">

<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<link rel="stylesheet" href="css/ie.css">
<![endif]-->
<!--[if IE 7]>
	<link rel="stylesheet" href="css/fontello-ie7.css">
<![endif]-->
</head>

<body>

	<!-- Container -->
	<div class="container">
		
		<!-- HEADER -->
		<header class="row">
			
			<div class="col-lg-12 col-md-12 col-sm-12">
				
				<!-- HEADER ARRIBA -->
				<div id="top-header" class="style2">
					
					<div class="row">
						
						<nav id="top-navigation" class="col-lg-12 col-md-12 col-sm-12">
							<ul class="pull-right">
								<!--<li><a href="crearCuenta.php">Mi Cuenta</a></li>-->
                                                                <li><a href="admin/index.php">Administrador</a></li>								
								<li><a href="nosotros.php">Sobre Nosotros</a></li>
								<li><a href="contacto.php">Contacto</a></li>
							</ul>
						</nav>
						
					</div>
					
				</div>
				<!-- /HEADER ARRIBA -->
				
				
				
				<!-- HEADER PRINCIPAL -->
				<div id="main-header" class="style2">
					
					<div class="row">
						
						<div id="logo" class="col-lg-4 col-md-4 col-sm-4">
							<a href="home.php"><img src="img/logo.png" alt="Logo"></a>
						</div>
						
						<nav id="middle-navigation" class="col-lg-8 col-md-8 col-sm-8">
							<ul class="pull-right">
					
	                            <!-- CREACIÓN DE CUENTA Y LOGIN -->
								<li class="login-create purple">
	                            	<i class="icons icon-user"></i>
                                        <p>Bienvenido <a href="login.php">Inicia Sesión</a> o<br><a href="crearCuenta.php">Crear una Cuenta</a></p>
									<ul id="login-dropdown" class="box-dropdown">
										<li>
	                                    	<div class="box-wrapper">
                                                    <form action="login.php" method="POST">
                                                    <h4>Iniciar Sesión</h4>
	                                            <div class="iconic-input">
	                                                <input type="text" placeholder="Usuario">
	                                                <i class="icons icon-user-3"></i>
	                                            </div>
	                                            <div class="iconic-input">
	                                                <input type="text" placeholder="Constraseña">
	                                                <i class="icons icon-lock"></i>
	                                            </div>
	                                            <input type="checkbox" id="loginremember"> <label for="loginremember">Recordar clave</label>
	                                            <br>
	                                            <br>
	                                            <div class="pull-left">
	                                                <input type="submit" class="orange" value="Acceder">
	                                            </div>
	                                            <div class="pull-right">
	                                               <!-- <a href="#">Olvidaste tu clave?</a>
	                                                <br>
	                                                <a href="#">Olvidaste tu nombre de usuario?</a>-->
													<br>
	                                            </div>
	                                            <br class="clearfix">
                                                    </form>
	                                        </div>
											<div class="footer">
												<h4 class="pull-left">¿NUEVO CLIENTE?</h4>
												<a class="button pull-right" href="crearCuenta.php">Crear una cuenta</a>
											</div>
										</li>
									</ul>
                                                                </li>
							</ul>
						</nav>
						
					</div>
					
				</div>
				<!-- /HEADER PRINCIPAL -->
				
				<!-- MENU DE NAVEGACIÓN -->
				<nav id="main-navigation" class="style2">
					<ul>
						
						<li class="home-green current-item">
							<a href="home.php">
								<span class="nav-caption">Inicio</span>
								<span class="nav-description">Página principal</span>
							</a>								
							
						<?php $oCat= new Categoria();
                                                while ($reg = $oCat->Selecciona()){
                                                ?>
						<li class="green">                                                   
							<a href="verduras.php">
                                                            <span class="nav-caption"><?=$reg->getNombreCategoria(); ?></span>
								<span class="nav-description">Catálogo</span>
							</a>
							
							<ul class="wide-dropdown normalAniamtion">
								<li>
									<ul>
										<!--<li><span class="nav-caption">Categoria</span></li>-->
										<li><a href="deCasa.php"><i class="icons icon-right-dir"></i> Productos de Casa</a></li>
										<li><a href="deTemporada.php"><i class="icons icon-right-dir"></i> Productos de Temporada</a></li>
										<li><a href="proxCosecha.php"><i class="icons icon-right-dir"></i> Próxima Cosecha</a></li>
										<li><a href="ofertas.php"><i class="icons icon-right-dir"></i> Ofertas</a></li>
									</ul>
								</li>									
							</ul>
							
						</li>
                                                      
						<?php }?>												
						<li class="nav-search">
	                        	<i class="icons icon-search-1"></i>
						</li>
						
					</ul>
					
					<div id="search-bar">
						
						<div class="col-lg-12 col-md-12 col-sm-12">
	                    	<table id="search-bar-table">
	                            <tr>
	                            	<td class="search-column-1">
	                                    <!--<p><span class="grey">Busquedas recientes</span> <a href="#">frutas</a>, <a href="#">verduras</a>, <a href="#">hierbas</a>, <a href="#">setas</a>, <a href="#">delicatessen</a>, <a href="#">más</a></p>-->
	                                    <input type="text" placeholder="Ingresa palabra para buscar">
	                                </td>
	                                <td class="search-column-2">
	                                	<!--<p class="align-right"><a href="#">Busqueda avanzada</a></p>-->
	                                	<select class="chosen-select-search">
	                                        <option>Todas las categorias</option>
	                                        <option>Frutas</option>
	                                        <option>Verduras</option>
	                                        <option>Setas</option>
	                                        <option>Hierbas</option>
	                                        <option>Delicatessen</option>
	                                    </select>
	                        		</td>
	                            </tr>
	                        </table>
						</div>
						<div id="search-button">
							<input type="submit" value="">
							<i class="icons icon-search-1"></i>
						</div>
					</div>				
				</nav>
				<!-- /Main Navigation -->				
			</div>				
		</header>
		<!-- /Header -->		
	</div>
</body>
<div class="container">
			
			<!-- Header -->
			<header class="row">
				
				<div class="col-lg-12 col-md-12 col-sm-12">

