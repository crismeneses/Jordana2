<!--
Falta modificar login
-->
<?php
session_start();
include ("./php/libClases.php");
?>
<!DOCTYPE html>
<html>      
	<head>
		<!-- LIBRERIAS Y BARRA DE MENU -->
	    <?php include './php/libreria.php'; ?>   
	    <?php include './php/header.php'; ?>

    </head>
    <!-- LIBRERIA DE CLASES -->
    <?php include 'php/libClases.php'; ?>
		<body>
			<!-- Contenido -->
			<div class="row content">
				
				<!-- Menu Contenido -->
				<section class="main-content col-lg-12 col-md-12 col-sm-12">
					
					<!-- Slider -->
					<div class = "iosSlider">
						<div class = "slider">
						
							<div class = "item" id = "item1">
								
								<div class = "image">
									<div class = "bg"></div>
								</div>
								
								<div class = "text">
									
									<div class = "bg"></div>
									
									<div class = "title">
										<h2><strong>Pack de Frutas 1</strong></h2>
									</div>
									
									<div class = "desc">
										<h3>Surtido de Frutas y Verduras</h3>
										<span>Por <span class="price">$96.000</span></span>
									</div>
									
									<div class = "button">
										<a class="button big red" href="#">Comprar ahora</a>
									</div>
									
								</div>
								
							</div>
							
							<div class = "item" id = "item2">
								
								<div class = "image">
									<div class = "bg"></div>
								</div>
								
								<div class = "text">
									
									<div class = "bg"></div>
									
									<div class = "title">
										<h2><strong>Pack de Frutas 2</strong></h2>
									</div>
									
									<div class = "desc">
										<h3>Surtido de Frutas y Verduras</h3>
										<span>Por <span class="price">$96.000</span></span>
									</div>
									
									<div class = "button">
										<a class="button big red" href="#">Comprar ahora</a>
									</div>
									
								</div>
								
							</div>

							<div class = "item" id = "item3">
								
								<div class = "image">
									<div class = "bg"></div>
								</div>
								
								<div class = "text">
									
									<div class = "bg"></div>
									
									<div class = "title">
										<h2><strong>Pack de Frutas 3</strong></h2>
									</div>
									
									<div class = "desc">
										<h3>Surtido de Frutas y Verduras</h3>
										<span>Por <span class="price">$96.000</span></span>
									</div>
									
									<div class = "button">
										<a class="button big red" href="#">Comprar ahora</a>
									</div>
									
								</div>
								
							</div>
						
						</div>
						
						<div class = 'prevButton'></div>
					
						<div class = 'nextButton'></div>
						
					</div>
					<!-- /Slider -->

	                    <!-- Banner -->
						<section class="banner">
							
							<div class="left-side-banner banner-item icon-on-right gray">
								<h4>629-707-712</h4>
								<p>Lunes - Viernes: 8am - 5pm </p>
								<i class="icons icon-phone-outline"></i>
							</div>
							
							<a href="#">
							<div class="middle-banner banner-item icon-on-left light-blue">
								<h4>Envío Gratuito</h4>
								<p>por compras superiores a $15.000</p>
								<!--<span class="button">Learn more</span>-->
								<i class="icons icon-truck-1"></i>
							</div>
							</a>
							
							<a href="ofertas.php">
							<div class="right-side-banner banner-item orange">
								<h4>Ofertas</h4>
								<p>mira nuestro catálogo de ofertas</p>
								<span class="button">Ver</span>
							</div>
							</a>
						
						</section>
						<!-- /Banner -->
                                                
                                                
                                                <!-- SLIDER DE PRODUCTOS 0 -->
					<div class="products-row row">
						
						<!-- Carousel Heading -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="carousel-heading">
                                <!-- PONER NOMBRE SEGUN LA CATEGORIA -->
								<h4>Surtidos</h4>
								<div class="carousel-arrows">
									<i class="icons icon-left-dir"></i>
									<i class="icons icon-right-dir"></i>
								</div>
							</div>
							
						</div>
						<!-- /Carousel Heading -->
						
						<!-- Carousel -->
						<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
							
                            <div class="owl-carousel" data-max-items="5">
                                    <?php $oProd= new Producto();
                                        while ($registro = $oProd->SeleccionaProd()){                                                                                
                                    ?>
                                    <!-- Slide -->
                                    <div>
                                    	<!-- Carousel Item -->
                                        <div class="product">

                                            <div class="product-image">
                                                    <!--<span class="product-tag">Oferta</span>-->
                                                    <img src="img/products/sample4.jpg" alt="Product1">
                                                    <a href="#" class="product-hover">
                                                            <i class="icons icon-eye-1"></i> Vista rápida
                                                    </a>
                                            </div>

                                            <div class="product-info">
                                                <h5><a href="#"><?=$registro->getNombreProducto(); ?></a></h5>

                                                <span class="price">$<?=$registro->getPrecioProducto(); ?></span><br>
                                                <span class="price"></span>
                                                    <!--<div class="rating readonly-rating" data-score="4"></div>-->
                                            </div>

                                            <div class="product-actions">
                                                <span class="add-to-cart">
                                                        <span class="action-wrapper">
                                                            <i class="icons icon-basket-2"></i>
                                                            <span class="action-name">Stock = <?=$registro->getStockProducto(); ?></span>
                                                        </span >
                                                </span>
                                                <span class="add-to-favorites">
                                                        <span class="action-wrapper">
                                                            <i class="icons icon-heart-empty"></i>
                                                            <span class="action-name">Agregar a favoritos</span>
                                                        </span>
                                                </span>                                                    
                                            </div>
                                        </div>
                                       	<!-- /Carousel Item -->
                            		</div>
                            		<!-- /Slide -->
                                    <?php } ?>
							</div>
						</div>
						<!-- /Carousel -->						
					</div>
					<!-- /SLIDER DE PRODUCTOS 0-->
	                    
                    
					
					<!-- SLIDER DE PRODUCTOS 1 -->
					<div class="products-row row">
						
						<!-- Carousel Heading -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="carousel-heading">
                                <!-- PONER NOMBRE SEGUN LA CATEGORIA -->
								<h4>Verduras</h4>
								<div class="carousel-arrows">
									<i class="icons icon-left-dir"></i>
									<i class="icons icon-right-dir"></i>
								</div>
							</div>
							
						</div>
						<!-- /Carousel Heading -->
						
						<!-- Carousel -->
						<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
							
                            <div class="owl-carousel" data-max-items="4">
                                    <?php $oProd= new Producto();
                                        while ($registro = $oProd->SeleccionaVerduras()){                                                                                
                                    ?>
                                    <!-- Slide -->
                                    <div>
                                    	<!-- Carousel Item -->
                                        <div class="product">

                                            <div class="product-image">
                                                    <!--<span class="product-tag">Oferta</span>-->
                                                    <img src="img/products/sample4.jpg" alt="Product1">
                                                    <a href="#" class="product-hover">
                                                            <i class="icons icon-eye-1"></i> Vista rápida
                                                    </a>
                                            </div>

                                            <div class="product-info">
                                                <h5><a href="#"><?=$registro->getNombreProducto(); ?></a></h5>

                                                <span class="price">$<?=$registro->getPrecioProducto(); ?></span><br>
                                                <span class="price"></span>
                                                    <!--<div class="rating readonly-rating" data-score="4"></div>-->
                                            </div>

                                            <div class="product-actions">
                                                <span class="add-to-cart">
                                                        <span class="action-wrapper">
                                                            <i class="icons icon-basket-2"></i>
                                                            <span class="action-name">Stock = <?=$registro->getStockProducto(); ?></span>
                                                        </span >
                                                </span>
                                                <span class="add-to-favorites">
                                                        <span class="action-wrapper">
                                                            <i class="icons icon-heart-empty"></i>
                                                            <span class="action-name">Agregar a favoritos</span>
                                                        </span>
                                                </span>                                                    
                                            </div>
                                        </div>
                                       	<!-- /Carousel Item -->
                            		</div>
                            		<!-- /Slide -->
                                    <?php } ?>
							</div>
						</div>
						<!-- /Carousel -->						
					</div>
					<!-- SLIDER DE PRODUCTOS -->

					<!-- SLIDER DE PRODUCTOS 2-->
					<div class="products-row row">
						
						<!-- Carousel Heading -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="carousel-heading">
                                <!-- PONER NOMBRE SEGUN LA CATEGORIA -->
								<h4>Frutas</h4>
								<div class="carousel-arrows">
									<i class="icons icon-left-dir"></i>
									<i class="icons icon-right-dir"></i>
								</div>
							</div>
							
						</div>
						<!-- /Carousel Heading -->
						
						<!-- Carousel -->
						<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
							
                            <div class="owl-carousel" data-max-items="4">
                                    <?php $oProd= new Producto();
                                        while ($registro = $oProd->SeleccionaFrutas()){                                                                                
                                    ?>
                                    <!-- Slide -->
                                    <div>
                                    	<!-- Carousel Item -->
                                        <div class="product">

                                            <div class="product-image">
                                                    <!--<span class="product-tag">Oferta</span>-->
                                                    <img src="img/products/sample4.jpg" alt="Product1">
                                                    <a href="#" class="product-hover">
                                                            <i class="icons icon-eye-1"></i> Vista rápida
                                                    </a>
                                            </div>

                                            <div class="product-info">
                                                <h5><a href="#"><?=$registro->getNombreProducto(); ?></a></h5>

                                                <span class="price">$<?=$registro->getPrecioProducto(); ?></span><br>
                                                <span class="price"></span>
                                                    <!--<div class="rating readonly-rating" data-score="4"></div>-->
                                            </div>

                                            <div class="product-actions">
                                                <span class="add-to-cart">
                                                        <span class="action-wrapper">
                                                            <i class="icons icon-basket-2"></i>
                                                            <span class="action-name">Stock = <?=$registro->getStockProducto(); ?></span>
                                                        </span >
                                                </span>
                                                <span class="add-to-favorites">
                                                        <span class="action-wrapper">
                                                            <i class="icons icon-heart-empty"></i>
                                                            <span class="action-name">Agregar a favoritos</span>
                                                        </span>
                                                </span>                                                    
                                            </div>
                                        </div>
                                       	<!-- /Carousel Item -->
                            		</div>
                            		<!-- /Slide -->
                                    <?php } ?>
							</div>
						</div>
						<!-- /Carousel -->						
					</div>
					<!-- SLIDER DE PRODUCTOS 2 -->

					<!-- SLIDER DE PRODUCTOS 3 -->
					<div class="products-row row">
						
						<!-- Carousel Heading -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="carousel-heading">
                                <!-- PONER NOMBRE SEGUN LA CATEGORIA -->
								<h4>Hierbas</h4>
								<div class="carousel-arrows">
									<i class="icons icon-left-dir"></i>
									<i class="icons icon-right-dir"></i>
								</div>
							</div>
							
						</div>
						<!-- /Carousel Heading -->
						
						<!-- Carousel -->
						<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
							
                            <div class="owl-carousel" data-max-items="4">
                                    <?php $oProd= new Producto();
                                        while ($registro = $oProd->SeleccionaHierbas()){                                                                                
                                    ?>
                                    <!-- Slide -->
                                    <div>
                                    	<!-- Carousel Item -->
                                        <div class="product">

                                            <div class="product-image">
                                                    <!--<span class="product-tag">Oferta</span>-->
                                                <img src="img/products/achicoria.jpg" alt="Product1">
                                                    <a href="#" class="product-hover">
                                                            <i class="icons icon-eye-1"></i> Vista rápida
                                                    </a>
                                            </div>

                                            <div class="product-info">
                                                <h5><a href="#"><?=$registro->getNombreProducto(); ?></a></h5>

                                                <span class="price">$<?=$registro->getPrecioProducto(); ?></span><br>
                                                <span class="price"></span>
                                                    <!--<div class="rating readonly-rating" data-score="4"></div>-->
                                            </div>

                                            <div class="product-actions">
                                                <span class="add-to-cart">
                                                        <span class="action-wrapper">
                                                            <i class="icons icon-basket-2"></i>
                                                            <span class="action-name">Stock = <?=$registro->getStockProducto(); ?></span>
                                                        </span >
                                                </span>
                                                <span class="add-to-favorites">
                                                        <span class="action-wrapper">
                                                            <i class="icons icon-heart-empty"></i>
                                                            <span class="action-name">Agregar a favoritos</span>
                                                        </span>
                                                </span>                                                    
                                            </div>
                                        </div>
                                       	<!-- /Carousel Item -->
                            		</div>
                            		<!-- /Slide -->
                                    <?php } ?>
							</div>
						</div>
						<!-- /Carousel -->						
					</div>
					<!-- SLIDER DE PRODUCTOS 3-->
						
				</section>
				<!-- /Menu Contenido -->				
				
			</div>
			<!-- /Contenido -->
			<!-- FOOTER -->
			<?php include './php/footer.php'; ?>			
    </body>
    
</html>