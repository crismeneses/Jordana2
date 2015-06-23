<!DOCTYPE html>

<html>
    <head>
	    <?php include './php/libreria.php'; ?>   
	    <?php include './php/header.php'; ?>
    </head>    
    
    <body>			
			<!-- Content -->
			<div class="row content">				
                               
				<!-- Main Content -->
				<section class="main-content col-lg-12 col-md-12 col-sm-12">
                    
                    
                    <div class="row">
                    	
                        <div class="col-lg-7 col-md-7 col-sm-7">
                        	
                            <div class="carousel-heading no-margin">
                                <h4>Información de contacto</h4>
                            </div>
                            
                            <div class="page-content contact-info">
                            	
                                <iframe width="425" height="350" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d95777.49752601786!2d2.14876785!3d41.39479005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a49816718e30e5%3A0x44b0fb3d4f47660a!2sBarcelona%2C+Espa%C3%B1a!5e0!3m2!1ses!2scl!4v1434958132123"></iframe>
								<div class="row">
                                	
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<div class="contact-item green">
                                            <i class="icons icon-location-3"></i>
                                            <p>Barcelona, España<br>
                                            Madrid, España
                                            </p>
										</div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<div class="contact-item blue">
                                            <i class="icons icon-mail"></i>
                                            <p><a href="#">info@jordana.com</a><br>
											<a href="#">ventas@jordana.com</a>
											</p>
										</div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<div class="contact-item orange">
                                            <i class="icons icon-phone"></i>
                                            <p>629-707-712<br>
											629-707-713
											</p>
										</div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<div class="contact-item purple">
                                            <i class="icons icon-clock"></i>
                                            <p>Lunes - Viernes 08:00-18:00<br>
											Sábado: 08:00-12:00</p>
										</div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                    	</div>
                        
                        
                        
                        
                        <div class="col-lg-5 col-md-5 col-sm-5">
                        	
                            <div class="carousel-heading no-margin">
                                <h4>Formulario</h4>
                            </div>
                            
                            <div class="page-content contact-form">
                            	
								<form id="contact-form" action="php/contact.php">
								
									<label>Nombre(requerido)</label>
									<input name="contact-name" type="text">
									
									<label>Email(requerido)</label>
									<input name="contact-email" type="text">
									
									<label>Título</label>
									<input name="contact-subject" type="text">
									
									<label>Mensaje</label>
									<textarea name="contact-message"></textarea>
									
									<input class="big" type="submit" value="Enviar">
									
                                </form>
								
                            </div>
                            
                    	</div>
                        
                        
                  	</div>
                    
				</section>
				<!-- /Main Content -->
                
                
			</div>
			<!-- /Content -->
			
			<!-- FOOTER -->
			<?php include './php/footer.php'; ?>
    </body>
    
</html>