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
								<h1 class="font-weight-bold text-10">Produkte</h1>
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
				<section class="section section-with-shape-divider bg-transparent border-0 pb-4 m-0">
				<div class="shape-divider shape-divider-bottom" style="height: 102px;">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 102" preserveAspectRatio="xMinYMin">
							<path fill="#F7F7F7" d="M1895,78c-56.71-6.03-113.75-12.1-167-17c-75.42-6.94-133.81-10.66-171-13c-62.1-3.91-108.85-5.97-155-8
								c-35.96-1.58-78.06-3.42-133-5c-59.81-1.72-103.18-2.23-172-3c-92.17-1.03-154.41-1.01-169-1c-69.05,0.05-115.16,0.67-137,1
								c-43.08,0.65-76.21,1.48-97,2c-28.02,0.7-71.13,1.8-128,4c-16.64,0.64-57.72,2.28-111,5c-26.12,1.33-67.11,3.45-121,7
								c-21.14,1.39-54.21,3.59-96,7c-19.93,1.63-39.22,3.32-47,4c-16.12,1.41-33.55,2.94-55,5c-26.48,2.54-19.07,2.04-77,8
								c-19.39,1.99-36.94,3.77-60.59,7.46V103H1923V81C1916.55,80.3,1906.82,79.26,1895,78z"/>
						</svg>
					</div>
				<div class="container my-5 pb-2">
					<div class="row align-items-center mb-4">
						<div class="col-lg-12 mb-5 mb-lg-0">
							<div class="d-flex align-items-center mb-2">
								<span class="custom-line appear-animation" data-appear-animation="customLineAnimation" data-appear-animation-delay="1200" appear-animation-duration="1s"></span>
								<div class="overflow-hidden ms-3">
									<h2 class="text-color-primary font-weight-semibold line-height-3 text-4 mb-0 appear-animation" data-appear-animation="maskRight" data-appear-animation-delay="2200">WAS WIR TUN</h2>
								</div>
							</div>
							
								<p class="custom-font-secondary text-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">Wir bieten eine Reihe hochwertiger Produkte, die den Bedürfnissen unserer Kunden gerecht werden. Unsere Produkte sind so konzipiert, dass sie die höchsten Qualitäts- und Zuverlässigkeitsstandards erfüllen.</p>
						</div>
							<div class="col mb-2 mb-lg-0">
							<p class="pb-1 mb-3 appear-animation text-justify" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">  Willkommen in unserem Unternehmen, in dem wir uns darauf spezialisiert haben, unseren Kunden hochwertige Diamantschneideprodukte anzubieten. Unser umfangreiches Sortiment an Produkten zum Diamantschneiden umfasst Sägeblätter, Bohrer, Schleifscheiben und Polierpads, die sich perfekt zum Schneiden und Formen von Diamanten aller Größen und Formen eignen. Wir verstehen, dass Präzision und Effizienz in der Diamantschneideindustrie unerlässlich sind, weshalb wir nur Produkte anbieten, die aus Diamantpartikeln höchster Qualität hergestellt und auf stabile Metallsubstrate gebunden sind, um eine lange Lebensdauer zu gewährleisten. Unsere Produkte eignen sich für den Einsatz in einer Vielzahl von Anwendungen, von der Schmuckherstellung bis hin zu industriellen Schneidzwecken. Unser Expertenteam ist bestrebt, einen exzellenten Kundenservice zu bieten und sicherzustellen, dass unsere Kunden das richtige Produkt für ihre spezifischen Bedürfnisse erhalten. Egal, ob Sie ein kleines Unternehmen oder ein großer Industriebetrieb sind, wir haben das richtige Diamantschneideprodukt für Ihre Anforderungen. Kontaktieren Sie uns noch heute, um mehr über unsere Produkte und Dienstleistungen zu erfahren.
 </p>

							
							</div>
						
					</div>
				</div>
				</section>
				<!-- main-services start -->
				<section class="section border-0 py-4 m-0">
					<div class="container">
					<div class="row row-gutter-sm ">
					<h3 class="text-color-secondary font-weight-bold text-transform-none line-height-2 text-10 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">
					Unsere Produkte
					</h3>
					<?php $data=display_simple("categories");
                       foreach ($data as $product){
                       ?>	
							<div class="col-md-4 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
							
										<a href="services-detail.php?id=<?php echo $product['c_id']; ?>" class="text-decoration-none ">
											<div class="card custom-card-style-1" style="min-height: 700px;" >
												<div class="card-body text-center py-5">
													<div class="custom-card-style-1-image-wrapper bg-primary rounded-circle d-inline-block  mb-3">
														<img src="uploads/<?php echo $product['c_file'];  ?>" class="img-fluid   rounded-circle" alt="" style="height: 300px;" >
													</div>
													<h4 class="custom-card-style-1-title text-color-secondary font-weight-bold mb-2"><?php echo $product['c_name'];?></h4>
													<p class="custom-card-style-1-description text-justify"><?php echo $product['c_details'];?> </p>
													<span class="custom-card-style-1-link font-weight-bold">mehr sehen</span>
												</div>
											</div>
										</a>
									</div>
						
									<?php } ?>
						
							
					</div>	
						
						
					</div>
				</section>
	   <!-- main-services end -->	

				<section class="section section-with-shape-divider section-height-3 bg-tertiary border-0 m-0">
					<div class="shape-divider" style="height: 116px;">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 116" preserveAspectRatio="xMinYMin">
							<path class="custom-svg-fill-color-tertiary-darken" d="M0,24c2.86,0.42,7.41,1.1,13,2c6.13,0.98,10.67,1.77,12,2c11.67,2.01,42.24,7.05,68,11
								c7.79,1.2,22.72,3.48,41,6c20.75,2.86,38.83,5.06,74,9c41.19,4.61,62.09,6.95,93,10c57.4,5.66,101.17,9.03,114,10
								c9.13,0.69,40.29,3.02,109,7c48.33,2.8,87.04,5.04,132,7c76.86,3.35,135.02,4.27,184,5c104.27,1.56,187.39,0.71,234,0
								c21.92-0.34,91.62-1.5,183-5c50.62-1.94,106.43-4.12,181-9c57.01-3.73,108.05-7.94,152-12c94.91-8.78,162.37-17.44,182-20
								c41.76-5.45,72.06-10.09,96-14c21.23-3.47,39.04-6.63,52-9c0-11.67,0-23.33,0-35C1279-11,638-11-3-11C-2,0.67-1,12.33,0,24z"/>
							<path fill="#FFF" d="M-7,23c1.59,0.23,4.03,0.58,7,1c82.06,11.6,145.17,16.35,182,19c244.62,17.62,377,23,377,23
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

			<?php include "includes/footer.php"; 
			 ?>

		</div>

		<?php include "includes/footer-files.php" ?>

	</body>
</html>
