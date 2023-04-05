<?php
include "includes/function.php";
?>
<!DOCTYPE html>
<html lang="de">
<head>
		<?php include "includes/header-main.php";?>
	</head>
	<body>

		<div class="body">
		<?php 
		$page = 'product';
		include "includes/header.php";?>

			<div role="main" class="main">

				<section class="page-header page-header-modern page-header-lg bg-tertiary border-0 my-0">
					<div class="container my-3">
						<div class="row">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<?php display_header_name();?>
							</div>
							<div class="col-md-12 align-self-center order-1">
								<ul class="breadcrumb breadcrumb-light d-block text-center">
									<li><a href="index.php">Startseite</a></li>
									<li class="active">Produkte</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<section class="section border-0 pb-0 pb-lg-5 m-0">
					<div class="container my-lg-4">
						<div class="row align-items-center align-items-center justify-content-center">
							<div class="col-lg-10 order-lg-2 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
							<p class="custom-font-secondary text-4 mb-4">Holen Sie sich zuverlässige und erschwingliche Diamantschneidwerkzeuge für Ihre Einrichtung mit 100 % Zufriedenheitsgarantie!</p>	
							<?php display_product_cat_wise();?>
							<?php //get_info(); ?> 
							</div>
							
						</div>
					</div>
				</section>

				<section class="section section-with-shape-divider section-height-3 bg-tertiary border-0 m-0">
					<div class="shape-divider" style="height: 116px;">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 116" preserveAspectRatio="xMinYMin">
							<path class="custom-svg-fill-color-tertiary-darken" d="M0,24c2.86,0.42,7.41,1.1,13,2c6.13,0.98,10.67,1.77,12,2c11.67,2.01,42.24,7.05,68,11
								c7.79,1.2,22.72,3.48,41,6c20.75,2.86,38.83,5.06,74,9c41.19,4.61,62.09,6.95,93,10c57.4,5.66,101.17,9.03,114,10
								c9.13,0.69,40.29,3.02,109,7c48.33,2.8,87.04,5.04,132,7c76.86,3.35,135.02,4.27,184,5c104.27,1.56,187.39,0.71,234,0
								c21.92-0.34,91.62-1.5,183-5c50.62-1.94,106.43-4.12,181-9c57.01-3.73,108.05-7.94,152-12c94.91-8.78,162.37-17.44,182-20
								c41.76-5.45,72.06-10.09,96-14c21.23-3.47,39.04-6.63,52-9c0-11.67,0-23.33,0-35C1279-11,638-11-3-11C-2,0.67-1,12.33,0,24z"/>
							<path fill="#F7F7F7" d="M-7,23c1.59,0.23,4.03,0.58,7,1c82.06,11.6,145.17,16.35,182,19c244.62,17.62,377,23,377,23
								c157.86,6.42,277.64,7.71,308,8c75.8,0.73,232.89,1.31,438-6c0,0,137.72-4.66,358-19c42.98-2.8,104.01-7.03,183-16
								c33.26-3.78,60.85-7.38,80-10c0-9.01,0-18.01,0-27.02c-644,0-1288,0-1932,0C-6.33,4.99-6.67,13.99-7,23z"/>
						</svg>
					</div>
					<div class="container pt-4 pb-3 mt-5">
						<div class="row align-items-center justify-content-center pt-3">
							<div class="col-md-9 col-lg-7 col-xl-9 text-center text-xl-start mb-4 mb-xl-0">
								<h2 class="text-color-light font-weight-medium line-height-4 text-9 negative-ls-1 mb-2">Der <span class="font-weight-extra-bold custom-highlight-1 p-1 appear-animation" data-appear-animation="customHighlightAnim" data-appear-animation-delay="300">Nächste Schnitt</span></h2>
								<p class="custom-font-secondary custom-font-size-1 font-weight-light text-color-light opacity-8 mb-0">"Bestellen Sie Ihr Produkt noch heute, um die Qualität und den Komfort zu erleben, die wir anbieten."</p>
							</div>
							<div class="col-xl-3 text-center text-xl-end">
								<div class="position-relative">
									<a href="contact.php" class="btn btn-secondary btn-modern font-weight-bold text-3 btn-px-4 py-3">Kontaktiere uns jetzt</a>
								</div>
							</div>
						</div>
					</div>
				</section>

			</div>

			<?php include "includes/footer.php" ?>
		</div>

		<?php include "includes/footer-files.php" ?>
	</body>
</html>
