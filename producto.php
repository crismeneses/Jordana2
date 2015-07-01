<!DOCTYPE html>
<html>
	<head>
	    <?php include './php/libreria.php'; ?>   
	    <?php include './php/header.php'; ?>	    
    </head>
    <body>
        <table>
            <!-- SLIDER DE PRODUCTOS 0 -->
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
							
                            <div class="owl-carousel" data-max-items="5">
                                    <?php $oProd= new Producto();
                                        while ($registro = $oProd->SeleccionaProductos($_GET["idcategoria"])){                                                                                
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
        </table>
    </body>
<?php include './php/footer.php'; ?>

</html>