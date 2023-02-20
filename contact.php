<?php
include "includes/connection.php"; 
if(isset($_REQUEST['send-message'])){
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$phone = $_REQUEST['phone'];
	$message = $_REQUEST['message'];
	$date = date("Y/m/d");
	include "includes/connection.php";
	$q = "INSERT INTO messages (sen_name,sen_email,sen_phone,message,date) VALUES ('$name','$email','$phone','$message','$date') ";
	$q_run = mysqli_query($con, $q);
	  
	  echo mysqli_error($con);
	  if($q_run){ ?> 
						   <div class="contact-form-success alert alert-success  mt-4">
								  <strong>Success!</strong> Your message has been sent to us.
							  </div>
							 
	  <?php

  }else{ ?>
						<div class="contact-form-error alert alert-danger  mt-4">
								  <strong>Error!</strong> There was an error sending your message.
								  <span class="mail-error-message text-1 d-block"></span>
							  </div>
	  <?php
  }

  }
 ?>
<!DOCTYPE html>
<html lang="de">
<head>
		<?php include "includes/header-main.php";?>
	</head>
	<body>

		<div class="body">
		<?php 
		$page = 'contact';
		include "includes/header.php";?>

			<div role="main" class="main">

				<section class="page-header page-header-modern page-header-lg bg-tertiary border-0 my-0">
					<div class="container my-3">
						<div class="row">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1 class="font-weight-bold text-10">Kontakt</h1>
							</div>
							<div class="col-md-12 align-self-center order-1">
								<ul class="breadcrumb breadcrumb-light d-block text-center">
									<li><a href="index.php">STARTSEITE</a></li>
									<li class="active">Kontakt</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<section class="section border-0 py-0 m-0">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="row py-5 my-5">
									<div class="col-md-6">
										<h2 class="font-weight-bold text-color-secondary text-6 text-lg-5 text-xl-6 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Kontakte</h2>
										<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
											<h3 class="font-weight-bold text-color-secondary text-transform-none text-4 text-lg-3 mb-0">Inhaber S. Kirli</h3>
											<a href="tel:+49201433 95 601" class="d-inline-block text-color-default text-color-hover-primary text-decoration-none mb-4">+49 201 43 39 56 01</a>
										</div>
										<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
											<h3 class="font-weight-bold text-color-secondary text-transform-none text-4 text-lg-3 mb-0">Verkaufsleiter</h3>
											<a href="tel: +4920185151751" class="d-inline-block text-color-default text-color-hover-primary text-decoration-none mb-4"> +49 201 85 15 17 51</a>										
										</div>
										<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
											<h3 class="font-weight-bold text-color-secondary text-transform-none text-4 text-lg-3 mb-0">Öffnungszeiten</h3>
											<p>Mo - Sa 9:00 - 20:00 Uhr<br> Sonntag - GESCHLOSSEN</p>
										</div>
									</div>
									<div class="col-md-6">
										<h2 class="font-weight-bold text-color-secondary text-6 text-lg-5 text-xl-6 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">Postanschrift</h2>
										<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1300">
											<h3 class="font-weight-bold text-color-secondary text-transform-none text-4 text-lg-3 mb-0">Anschrift</h3>
											<p>Vogelheimerstraße 92 <br>45329 Essen <br>Deutschland</p>
										</div>
										<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500">
											<h3 class="font-weight-bold text-color-secondary text-transform-none text-4 text-lg-3 mb-0">Email</h3>
											<a href="mailto:info@invictus-diamantinstrumente.de" class="text-color-default text-color-hover-primary text-decoration-underline mb-4">info@invictus-diamantinstrumente.de</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-5 fluid-col-lg-5 p-0">
								<div class="fluid-col h-100">

									<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
									<div class="google-map h-100 m-0" style="min-height: 450px;">
									<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4968.179879218837!2d6.997201!3d51.493217!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b8e83f018ef855%3A0xa35ad87a2b76ddc9!2sVogelheimer%20Str.%2092%2C%2045329%20Essen%2C%20Germany!5e0!3m2!1sen!2sus!4v1675943672125!5m2!1sen!2sus" width="100%"  height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>

								</div>
							</div>
						</div>
					</div>
				</section>

				<div class="container py-5 mt-5">
					<div class="row pb-2 mb-4">
						<div class="col">
							<div class="d-flex align-items-center mb-2">
								<span class="custom-line appear-animation" data-appear-animation="customLineAnimation" appear-animation-duration="1s"></span>
								<div class="overflow-hidden ms-3">
									<h2 class="text-color-primary font-weight-semibold line-height-3 text-4 mb-0 appear-animation" data-appear-animation="maskRight" data-appear-animation-delay="1000">IN KONTAKT KOMMEN</h2>
								</div>
							</div>
							<h3 class="text-color-secondary font-weight-bold text-transform-none line-height-2 text-8 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">Schick uns eine Nachricht</h3>
						</div>
					</div>
					<div class="row pb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">
						<div class="col">
							<form class="custom-form-style-1" action="" method="post">
                                
                                
                                

                                <div class="row row-gutter-sm">
                                    <div class="form-group col-lg-6 mb-4">
                                        <input type="text" value="" data-msg-required="Bitte geben Sie Ihren Namen ein." maxlength="100" class="form-control" name="name" id="name" required placeholder="Dein Name *">
                                    </div>
									<div class="form-group col-lg-6 mb-4">
                                        <input type="email" value="" data-msg-required="Geben Sie bitte Ihre Email-Adresse ein." data-msg-email="Bitte geben Sie eine gültige E-Mail-Adresse ein." maxlength="100" class="form-control" name="email" id="email" required placeholder="Deine E-Mail *">
                                    </div>
                                </div>
                                <div class="row row-gutter-sm">
                                    
									<div class="form-group col-lg-6 mb-4">
                                        <input type="text" value="" data-msg-required="Bitte gib deine Telefonnummer ein." maxlength="100" class="form-control" name="phone" id="phone"  placeholder="Telefonnummer *">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col mb-4">
                                        <textarea maxlength="5000" data-msg-required="Bitte gib deine Nachricht ein." rows="10" class="form-control" name="message" id="message" required placeholder="Ihre Nachricht *"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col mb-0">
                                        <button type="submit" name="send-message" class="btn btn-primary btn-modern font-weight-bold text-3 px-5 py-3" data-loading-text="Loading...">NACHRICHT SENDEN</button>
                                    </div>
                                </div>
								
                            </form>
							
						</div>
					</div>
				
				</div>

			</div>

			<?php include "includes/footer.php";?>
		</div>

		<!-- Vendor -->
		<script src="vendor/plugins/js/plugins.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="js/views/view.contact.js"></script>

		<!-- Demo -->
		<script src="js/demos/demo-cleaning-services.js"></script>

		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

	

	</body>
</html>
