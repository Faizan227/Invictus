<?php
if(!isset($_SESSION)){
    session_start();
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
			$page = 'home';
			include "includes/header.php";?>

		 <div role="main" class="main">
			<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs nav-style-1 nav-arrows-thin nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'autoplay': true, 'autoplayTimeout': 7000}" style="height: 1000px;">
				<div class="owl-stage-outer">
					<div class="owl-stage">
							<!-- slide-1 -->
						 <div class="owl-item position-relative overflow-hidden">
							<section class="section section-with-shape-divider section-parallax bg-tertiary border-0 m-0 overlay overlay-show overlay-color-secondary overlay-op-8" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '110%', 'fadeIn': true}" data-image-src="Images/DSC03171.jpg">
					           <div class="shape-divider shape-divider-bottom" style="height: 576px;">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 576" preserveAspectRatio="xMinYMin">
							<path class="custom-svg-fill-color-tertiary" d="M-12,66c13.35,40.03,28.35,72.62,41,97c12.78,24.63,30.56,58.44,62,97c19.57,24,36.66,40.31,49,52
								c41.02,38.87,77.1,62.82,85,68c53.78,35.23,100.92,51.3,148,67c87.6,29.21,158.49,37.98,201,43c63.9,7.55,112.08,7.78,160,8
								c16.52,0.08,84.41,0.17,181-8c98.88-8.36,172.43-20.7,233-31c42.88-7.29,141.31-24.85,267-56c127.06-31.5,220.66-61.69,296-86
								c89.27-28.8,159.58-54.68,174-60c16.6-6.13,30.39-11.34,40-15c0,113.33,0,226.67,0,340c-644.33,0-1288.67,0-1933,0
								C-9.33,410-10.67,238-12,66z"/>
							<path fill="#FFF" d="M-5,3c1.21,5.32,2.98,13.29,5,23c4.38,21.08,6.71,34.95,8,42c7.08,38.6,19.7,71.54,26,88
								c8.52,22.26,16.34,38.54,19,44c5.4,11.07,16.38,32.61,33,58c28.88,44.11,57.48,73.41,64,80c6.89,6.97,38.98,38.97,91,72
								c57.09,36.25,106.11,53.37,143,66c66.98,22.93,119.93,31.44,162,38c81,12.63,143.81,13.53,189,14c62.45,0.65,109.33-2.68,156-6
								c35.74-2.54,89.63-7.16,155-16c68.17-9.22,117.88-18.83,170-29c110.32-21.52,194.58-42.54,224-50c131.43-33.34,227.73-64.9,286-84
								c93.88-30.77,155.18-54.57,184-66c6.29-2.49,11.48-4.58,15-6c0,102.67,0,205.33,0,308c-643.33,0-1286.67,0-1930,0C-5,387-5,195-5,3z
								"/>
						</svg>
					           </div>
					           <div class="container position-relative z-index-1 pb-5 my-5">
						<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1000">
							<div class="custom-svg-stars clean-animation-1">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 277 276">
									<g>
										<path fill="none" stroke="#FFF" stroke-width="9" stroke-miterlimit="10" d="M51.5,165.5c-0.63,0.07,0.16,5.68-1,13c-0.52,3.27-1.5,9.11-5,15c-4.06,6.82-9.54,10.42-12,12
											c-12.69,8.13-27.06,7.5-27,8c0.03,0.27,4.14-0.53,9,0c8.58,0.93,14.62,5.47,18,8c8.89,6.67,12.94,14.76,14,17
											c5.46,11.56,4.6,23.03,5,23c0.34-0.03-1.45-7.91,1-17c0.41-1.53,2.71-9.63,10-17c6.11-6.18,12.65-8.73,16-10
											c8.91-3.37,16.02-3.09,16-4c-0.03-1.04-9.22,0.41-19-4c-2.2-0.99-10.87-5.04-16-14c-3.08-5.38-4.54-11.95-7-23
											C52.78,169.26,52.02,165.44,51.5,165.5z"/>
									</g>
									<g>
										<path fill="none" stroke="#FFF" stroke-width="9" stroke-miterlimit="10" d="M188.8,77.92c-1.01,0.11,0.26,9.06-1.6,20.74c-0.83,5.22-2.39,14.53-7.98,23.93
											c-6.47,10.89-15.22,16.63-19.15,19.15C139.83,154.71,116.9,153.7,117,154.5c0.05,0.43,6.61-0.84,14.36,0
											c13.68,1.49,23.33,8.72,28.72,12.76c14.18,10.64,20.65,23.55,22.34,27.12c8.7,18.45,7.34,36.75,7.98,36.7
											c0.54-0.04-2.32-12.62,1.6-27.12c0.66-2.44,4.32-15.36,15.96-27.12c9.75-9.86,20.18-13.93,25.53-15.96
											c14.22-5.38,25.56-4.92,25.53-6.38c-0.04-1.66-14.71,0.65-30.31-6.38c-3.51-1.58-17.35-8.04-25.53-22.34
											c-4.91-8.59-7.24-19.06-11.17-36.7C190.84,83.92,189.63,77.83,188.8,77.92z"/>
									</g>
									<g>
										<path fill="none" stroke="#FFF" stroke-width="9" stroke-miterlimit="10" d="M90.5,10.5c-0.63,0.07,0.16,5.68-1,13c-0.52,3.27-1.5,9.11-5,15c-4.06,6.82-9.54,10.42-12,12
											c-12.69,8.13-27.06,7.5-27,8c0.03,0.27,4.14-0.53,9,0c8.58,0.93,14.62,5.47,18,8c8.89,6.67,12.94,14.76,14,17
											c5.46,11.56,4.6,23.03,5,23c0.34-0.03-1.45-7.91,1-17c0.41-1.53,2.71-9.63,10-17c6.11-6.18,12.65-8.73,16-10
											c8.91-3.37,16.02-3.09,16-4c-0.03-1.04-9.22,0.41-19-4c-2.2-0.99-10.87-5.04-16-14c-3.08-5.38-4.54-11.95-7-23
											C91.78,14.26,91.02,10.44,90.5,10.5z"/>
									</g>
								</svg>
							</div>
						</div>
						<div class="row justify-content-center justify-content-lg-start pb-5 mb-5">
							<div class="col-md-10 col-lg-6 text-center text-lg-end pe-lg-4 pb-5 mb-5">
								<h1 class="text-color-light font-weight-medium line-height-4 text-10 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Hochwertige <span class="font-weight-extra-bold text-0 text-md-2-3-3 custom-highlight-1  ws-nowrap p-1 customHighlightAnim customHighlightAnimDelay">Diamant-Schneidwerkzeuge</span> für jeden Schneidbedarf</h1>
								<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
									<p class="custom-font-secondary font-weight-bold custom-font-size-2 text-color-light text-justify opacity-6 mb-4">Finden Sie die besten Diamantschneidwerkzeuge zum besten Preis, nur bei uns</p>
								</div>
								<a href="#categories" data-hash data-hash-offset="0" data-hash-offset-lg="150" class="btn btn-secondary btn-modern font-weight-bold text-3 px-5 py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Mehr sehen</a>
								<div class="spacer pt-5 my-5"></div>
							</div>
						 </div>
					           </div>
				            </section>

				        
				        </div>
						 <!-- slide-2 -->
						 <div class="owl-item position-relative overflow-hidden">
							<section class="section section-with-shape-divider section-parallax bg-tertiary border-0 m-0 overlay overlay-show overlay-color-secondary overlay-op-8" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '110%', 'fadeIn': true}" data-image-src="Images/DSC03051.jpg">
					           <div class="shape-divider shape-divider-bottom" style="height: 576px;">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 576" preserveAspectRatio="xMinYMin">
							<path class="custom-svg-fill-color-tertiary" d="M-12,66c13.35,40.03,28.35,72.62,41,97c12.78,24.63,30.56,58.44,62,97c19.57,24,36.66,40.31,49,52
								c41.02,38.87,77.1,62.82,85,68c53.78,35.23,100.92,51.3,148,67c87.6,29.21,158.49,37.98,201,43c63.9,7.55,112.08,7.78,160,8
								c16.52,0.08,84.41,0.17,181-8c98.88-8.36,172.43-20.7,233-31c42.88-7.29,141.31-24.85,267-56c127.06-31.5,220.66-61.69,296-86
								c89.27-28.8,159.58-54.68,174-60c16.6-6.13,30.39-11.34,40-15c0,113.33,0,226.67,0,340c-644.33,0-1288.67,0-1933,0
								C-9.33,410-10.67,238-12,66z"/>
							<path fill="#FFF" d="M-5,3c1.21,5.32,2.98,13.29,5,23c4.38,21.08,6.71,34.95,8,42c7.08,38.6,19.7,71.54,26,88
								c8.52,22.26,16.34,38.54,19,44c5.4,11.07,16.38,32.61,33,58c28.88,44.11,57.48,73.41,64,80c6.89,6.97,38.98,38.97,91,72
								c57.09,36.25,106.11,53.37,143,66c66.98,22.93,119.93,31.44,162,38c81,12.63,143.81,13.53,189,14c62.45,0.65,109.33-2.68,156-6
								c35.74-2.54,89.63-7.16,155-16c68.17-9.22,117.88-18.83,170-29c110.32-21.52,194.58-42.54,224-50c131.43-33.34,227.73-64.9,286-84
								c93.88-30.77,155.18-54.57,184-66c6.29-2.49,11.48-4.58,15-6c0,102.67,0,205.33,0,308c-643.33,0-1286.67,0-1930,0C-5,387-5,195-5,3z
								"/>
						</svg>
					           </div>
					           <div class="container position-relative z-index-1 pb-5 my-5">
						<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1000">
							<div class="custom-svg-stars clean-animation-1">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 277 276">
									<g>
										<path fill="none" stroke="#FFF" stroke-width="9" stroke-miterlimit="10" d="M51.5,165.5c-0.63,0.07,0.16,5.68-1,13c-0.52,3.27-1.5,9.11-5,15c-4.06,6.82-9.54,10.42-12,12
											c-12.69,8.13-27.06,7.5-27,8c0.03,0.27,4.14-0.53,9,0c8.58,0.93,14.62,5.47,18,8c8.89,6.67,12.94,14.76,14,17
											c5.46,11.56,4.6,23.03,5,23c0.34-0.03-1.45-7.91,1-17c0.41-1.53,2.71-9.63,10-17c6.11-6.18,12.65-8.73,16-10
											c8.91-3.37,16.02-3.09,16-4c-0.03-1.04-9.22,0.41-19-4c-2.2-0.99-10.87-5.04-16-14c-3.08-5.38-4.54-11.95-7-23
											C52.78,169.26,52.02,165.44,51.5,165.5z"/>
									</g>
									<g>
										<path fill="none" stroke="#FFF" stroke-width="9" stroke-miterlimit="10" d="M188.8,77.92c-1.01,0.11,0.26,9.06-1.6,20.74c-0.83,5.22-2.39,14.53-7.98,23.93
											c-6.47,10.89-15.22,16.63-19.15,19.15C139.83,154.71,116.9,153.7,117,154.5c0.05,0.43,6.61-0.84,14.36,0
											c13.68,1.49,23.33,8.72,28.72,12.76c14.18,10.64,20.65,23.55,22.34,27.12c8.7,18.45,7.34,36.75,7.98,36.7
											c0.54-0.04-2.32-12.62,1.6-27.12c0.66-2.44,4.32-15.36,15.96-27.12c9.75-9.86,20.18-13.93,25.53-15.96
											c14.22-5.38,25.56-4.92,25.53-6.38c-0.04-1.66-14.71,0.65-30.31-6.38c-3.51-1.58-17.35-8.04-25.53-22.34
											c-4.91-8.59-7.24-19.06-11.17-36.7C190.84,83.92,189.63,77.83,188.8,77.92z"/>
									</g>
									<g>
										<path fill="none" stroke="#FFF" stroke-width="9" stroke-miterlimit="10" d="M90.5,10.5c-0.63,0.07,0.16,5.68-1,13c-0.52,3.27-1.5,9.11-5,15c-4.06,6.82-9.54,10.42-12,12
											c-12.69,8.13-27.06,7.5-27,8c0.03,0.27,4.14-0.53,9,0c8.58,0.93,14.62,5.47,18,8c8.89,6.67,12.94,14.76,14,17
											c5.46,11.56,4.6,23.03,5,23c0.34-0.03-1.45-7.91,1-17c0.41-1.53,2.71-9.63,10-17c6.11-6.18,12.65-8.73,16-10
											c8.91-3.37,16.02-3.09,16-4c-0.03-1.04-9.22,0.41-19-4c-2.2-0.99-10.87-5.04-16-14c-3.08-5.38-4.54-11.95-7-23
											C91.78,14.26,91.02,10.44,90.5,10.5z"/>
									</g>
								</svg>
							</div>
						</div>
						<div class="row justify-content-center justify-content-lg-start pb-5 mb-5">
							<div class="col-12 tool  col-md-10 col-lg-6 text-center text-lg-end pe-lg-4 pb-5 mb-5">
								<h1 class="text-color-light font-weight-medium line-height-4 text-10 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Innovative <span class="font-weight-extra-bold text-0 text-md-2-3-3 tolls-1 custom-highlight-1 ws-nowrap p-1 customHighlightAnim customHighlightAnimDelay">Diamant-Schneidwerkzeuge</span> für maximale Leistung</h1>
								<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
									<p class="custom-font-secondary font-weight-light custom-font-size-1 text-color-light opacity-6 text-justify mb-4">Erleben Sie unübertroffene Präzision mit unseren Diamantschneidwerkzeugen</p>
								</div>
								<a href="#whoweare" data-hash data-hash-offset="0" data-hash-offset-lg="150" class="btn btn-secondary btn-modern font-weight-bold text-3 px-5 py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Mehr sehen</a>
								<div class="spacer pt-5 my-5"></div>
							</div>
						</div>
					           </div>
				            </section>
						 </div>
				            
				    </div>
				</div>
				<div class="owl-nav">
					<button type="button" role="presentation" class="owl-prev"></button>
					<button type="button" role="presentation" class="owl-next"></button>
				</div>
				
				</div>
		</div>
	

			 <div id="booknow" class="container position-relative z-index-1" style="margin-top: -150px;">
					           <div class="row align-items-end pb-2 ">
						     <div class="col-lg-12 pe-lg-4  mb-lg-0">
							  <div  class="card border-0 custom-border-radius-1 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
								<div  class="card-body  p-5">
									<div class="row">
										<div class="col-lg-5">
									<h2 class="text-color-secondary font-weight-bold text-7 line-height-1 mb-1">Einen Termin vereinbaren</h2>
									<p class="custom-font-secondary text-4 pb-1 mb-4">Schreiben Sie uns eine E-Mail oder eine SMS für ein Treffen</p>
									</div>
									 <div class="col-lg-7">
									<ul class="list list-unstyled mb-0">
								<li class="mb-4 mb-lg-2">
									<span class="d-flex align-items-center justify-content-end justify-content-lg-end flex-column flex-lg-row font-weight-medium text-4 text-lg-3 text-xl-4">
									EINEN TERMIN VEREINBAREN: 
										<strong class="text-5 mt-2 mt-lg-0 ms-lg-3">
											<a href="tel:+49201433 95 601" class="text-color-secondary text-color-hover-primary text-decoration-none">+49 201 43395601</a>
										</strong>
									</span>
								</li>
								<li class="mb-0">
									<span class="d-flex align-items-center justify-content-end justify-content-lg-end flex-column flex-lg-row font-weight-medium text-4 text-lg-3 text-xl-4">
									EINE E-MAIL SCHREIBEN: 
										<strong class="text-3 ms-lg-3">
											<a href="mailto:info@invictus-diamantwerkzeuge.de" class="text-color-tertiary text-color-hover-primary text-decoration-underline">info@invictus-diamantwerkzeuge.de</a>
										</strong>
									</span>
								</li>
							    </ul>
								</div>
									</div>
									<!-- <form class=" custom-form-style-2" action="" method="get">
										<div class="contact-form-success alert alert-success d-none mt-4">
											<strong>Success!</strong> Your request has been sent to us.
										</div>

										<div class="contact-form-error alert alert-danger d-none mt-4">
											<strong>Error!</strong> There was an error sending your request.
											<span class="mail-error-message text-1 d-block"></span>
										</div>

										<div class="row">
											<div class="form-group col pb-1 mb-3">
												<input type="email" value=""  maxlength="100" class="form-control" name="email" placeholder="Your Name" required>
											</div>
										</div>
										<div class="row">
											<div class="form-group col pb-1 mb-3">
												<input type="password" value=""  maxlength="100" class="form-control" name="password" placeholder="password" required>
											</div>
										</div>
										<div class="row">
											<div class="form-group col pb-1 mb-3">
												<div class="custom-select-1">
													<select  class="form-control" name="request" required>
														<option value="0" selected>Ausgewähltes Produkt</option>
														<?php //display_cat_name(); ?>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group col">
												<button type="submit" name="send_request" class="btn btn-primary btn-modern font-weight-bold text-3 px-5 py-3" data-loading-text="Loading...">Ruf mich zurück</button>
											</div>
										</div>
									</form> -->
								</div>
								<?php //send_request(); ?>
							  </div>
						     </div>
						<!-- <div class="col-lg-6 pb-lg-5">
							
						</div> -->
					           </div>
			</div>
			 
		
			<?php
// $session_id = $_SESSION['email'];
// echo $session_id ;

?>
				
				
				
				

				<section id="whoweare" class="section section-with-shape-divider bg-transparent border-0 m-0">
					<div class="shape-divider shape-divider-bottom" style="height: 102px;">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 102" preserveAspectRatio="xMinYMin">
							<path fill="#F7F7F7" d="M1895,78c-56.71-6.03-113.75-12.1-167-17c-75.42-6.94-133.81-10.66-171-13c-62.1-3.91-108.85-5.97-155-8
								c-35.96-1.58-78.06-3.42-133-5c-59.81-1.72-103.18-2.23-172-3c-92.17-1.03-154.41-1.01-169-1c-69.05,0.05-115.16,0.67-137,1
								c-43.08,0.65-76.21,1.48-97,2c-28.02,0.7-71.13,1.8-128,4c-16.64,0.64-57.72,2.28-111,5c-26.12,1.33-67.11,3.45-121,7
								c-21.14,1.39-54.21,3.59-96,7c-19.93,1.63-39.22,3.32-47,4c-16.12,1.41-33.55,2.94-55,5c-26.48,2.54-19.07,2.04-77,8
								c-19.39,1.99-36.94,3.77-60.59,7.46V103H1923V81C1916.55,80.3,1906.82,79.26,1895,78z"/>
						</svg>
					</div>
					<div class="container mt-2 mb-5 pb-5">
						<div class="row align-items-center mb-4">
							<div class="col-lg-5 mb-5 mb-lg-0">
								<div class="d-flex align-items-center mb-2">
									<span class="custom-line appear-animation" data-appear-animation="customLineAnimation" appear-animation-duration="1s"></span>
									<div class="overflow-hidden ms-3">
										<h2 class="text-color-primary font-weight-semibold line-height-3 text-4 mb-0 appear-animation" data-appear-animation="maskRight" data-appear-animation-delay="1000">WER WIR SIND</h2>
									</div>
								</div>
								<h3 class="text-color-secondary font-weight-bold text-transform-none line-height-2 text-10 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">
									INVICTUS<br> 
									<span class="text-1 d-block">Diamant Werkzeuge Essen</span>
								</h3>
								<p class="custom-font-secondary text-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">Holen Sie sich zuverlässige und erschwingliche Diamantschneidwerkzeuge für Ihr Unternehmen mit 100 % Zufriedenheitsgarantie!</p>
								<p class="pb-1 mb-3 appear-animation text-justify" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">  INVICTUS Diamantwerkzeuge Essen ist Ihr erfahrener Partner für Diamantwerkzeuge in ganz Europa. Rund um Diamant-trennscheiben, Diamantbohrkronen, Schleiftechnik und Diamant-werkzeuge ist unsere Auswahl geradezu grenzenlos. Eine Auswahl unseres umfangreichen Angebotes finden Sie bereits auf unserer Seite. Sprechen Sie uns an, wenn Sie einen bestimmten Artikel suchen und vertrauen Sie auf langjährige  Berufserfahrung. Unser umfangreiches Lieferanten-Netzwerk und unsere Flexibilität. Wir bieten Ihnen Diamantwerkzeuge in bester Qualität zu fairen Preisen, eine verbindliche Beratung, individuelle Ideen und Lösungen für Ihr Tagesgeschäft sowie Ihre individuellen Anforderungen. Von Essen aus kommen wir auch zu Ihnen nach Dortmund, Bochum, Münster, Recklinghausen, Gelsenkirchen, Gladbeck, Bottrop, Duisburg, Moers, Krefeld, Düsseldorf, Mönchengladbach, Neuss, Dormagen, Köln, Leverkusen, Wuppertal, Solingen, Lüdenscheid oder Hagen, ins Bergische Land, ins Sauerland, ins Münsterland oder an den Niederrhein. Wir sind da, wo Sie uns brauchen - von NRW bis ganz Europa.</p>
								<a href="about.php" class="btn btn-primary btn-modern font-weight-bold text-3 px-5 py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800">mehr sehen</a>
							</div>
							<div class="col-sm-10 col-lg-6 offset-sm-1 ps-sm-5 ps-lg-0">
								<div class="position-relative">
									<div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
										<img src="Images/DSC03100.jpg" class="img-fluid rounded-circle custom-box-shadow-1 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1800" alt="" />
									</div>
									<div class="position-absolute top-50pct left-50pct transform3dxy-n50" style="left: 30%;">
										<div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
											<img src="Images/DSC02982.jpg" class="img-fluid rounded-circle custom-box-shadow-1 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1400" alt="" />
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</section>
        <!-- main-services start -->
				<section id="categories" class="section border-0 py-4 m-0">
					<div class="container">
						<div class="row align-items-end pb-3 mb-5 mb-lg-4">
							<div class="col-lg-7 col-xl-8 mb-4 mb-lg-0">
								<div class="d-flex align-items-center mb-2">
									<span class="custom-line appear-animation" data-appear-animation="customLineAnimation" appear-animation-duration="1s"></span>
									<div class="overflow-hidden ms-3">
										<h2 class="text-color-primary font-weight-semibold line-height-3 text-4 mb-0 appear-animation" data-appear-animation="maskRight" data-appear-animation-delay="1000">WAS WIR BIETEN</h2>
									</div>
								</div>
								<h3 class="text-color-secondary font-weight-bold text-transform-none text-8 mb-3 pb-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">Unsere Produkte</h3>
								<p class="mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">Wir bieten eine Reihe hochwertiger Produkte, die den Bedürfnissen unserer Kunden gerecht werden. Unsere Produkte sind so konzipiert, dass sie die höchsten Qualitäts- und Zuverlässigkeitsstandards erfüllen.</p>
							</div>
							<div class="col-lg-5 col-xl-4">
								<div class="d-flex justify-content-lg-end">
									<!-- <a href="services.php" class="btn btn-primary btn-modern font-weight-bold text-3 btn-px-4 py-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1800">VIEW ALL SERVICES</a> -->
									<a href="log-in.php" class="btn btn-secondary btn-modern font-weight-bold text-3 btn-px-4 py-3 ms-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1600">BESTELLEN SIE JETZT</a>
								</div>
							</div>
						</div>
						
						<div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2000">
							
						<div class="col">
								<div class="owl-carousel nav-outside nav-arrows-1 custom-carousel-box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 3}, '1199': {'items': 3}}, 'autoplay': false, 'autoplayTimeout': 5000, 'autoplayHoverPause': true, 'dots': false, 'nav': true, 'loop': false, 'margin': 20, 'stagePadding': '75'}">
								<?php $data=display_simple("categories");
                       foreach ($data as $product){
                       ?>	
								<div class="">
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
							
						</div>
					</div>
				</section>
	   <!-- main-services end -->	

				<section class="section section-with-shape-divider section-height-3 overlay overlay-show overlay-color-tertiary border-0 m-0" style="background-image: url(); background-size: cover; background-position: center;">
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
					<div class="shape-divider shape-divider-bottom" style="height: 102px;">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 102" preserveAspectRatio="xMinYMin">
							<path fill="#F7F7F7" d="M1895,78c-56.71-6.03-113.75-12.1-167-17c-75.42-6.94-133.81-10.66-171-13c-62.1-3.91-108.85-5.97-155-8
								c-35.96-1.58-78.06-3.42-133-5c-59.81-1.72-103.18-2.23-172-3c-92.17-1.03-154.41-1.01-169-1c-69.05,0.05-115.16,0.67-137,1
								c-43.08,0.65-76.21,1.48-97,2c-28.02,0.7-71.13,1.8-128,4c-16.64,0.64-57.72,2.28-111,5c-26.12,1.33-67.11,3.45-121,7
								c-21.14,1.39-54.21,3.59-96,7c-19.93,1.63-39.22,3.32-47,4c-16.12,1.41-33.55,2.94-55,5c-26.48,2.54-19.07,2.04-77,8
								c-19.39,1.99-36.94,3.77-60.59,7.46V103H1923V81C1916.55,80.3,1906.82,79.26,1895,78z"/>
						</svg>
					</div>
					<div class="container py-5 my-5">
						<div class="row align-items-center justify-content-center pt-3">
							<div class="col-md-9 col-lg-7 col-xl-9 text-center text-xl-start mb-4 mb-xl-0">
								<h2 class="text-color-light font-weight-medium line-height-4 text-9 negative-ls-1 mb-2">Der <span class="font-weight-extra-bold custom-highlight-1 p-1 appear-animation" data-appear-animation="customHighlightAnim" data-appear-animation-delay="300">Nächste Schnitt</span></h2>
								<p class="custom-font-secondary custom-font-size-1 font-weight-light text-color-light opacity-8 mb-0">"Bestellen Sie Ihr Produkt noch heute, um die Qualität und den Komfort zu erleben, die wir anbieten."</p>
							</div>
							<div class="col-xl-3 text-center text-xl-end">
								<div class="position-relative">
									<a href="contact.php" class="btn btn-secondary btn-modern font-weight-bold text-3 btn-px-4 py-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="550">Kontaktiere uns jetzt</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section border-0 m-0">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<div class="d-flex align-items-center mb-2">
									<span class="custom-line appear-animation" data-appear-animation="customLineAnimation" appear-animation-duration="1s"></span>
									<div class="overflow-hidden ms-3">
										<h2 class="text-color-primary font-weight-semibold line-height-3 text-4 mb-0 appear-animation" data-appear-animation="maskRight" data-appear-animation-delay="1000">WARUM UNS WÄHLEN</h2>
									</div>
								</div>
								<h3 class="text-color-secondary font-weight-bold text-transform-none text-8 mb-3 pb-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">Unsere Vorteile</h3>
								<p class="mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">Unsere Hauptaufgabe besteht darin, unseren Kunden den größtmöglichen Nutzen zu bieten. Kunden wählen unser Unternehmen wegen der unübertroffenen Präzision und Qualität beim Schneiden, die unsere Werkzeuge bieten.</p>
							</div>
						</div>
						<div class="featured-boxes featured-boxes-style-4 custom-featured-boxes-style-1">
							<div class="row justify-content-center">
								<div class="col-md-8 col-lg-4">
									<div class="featured-box featured-box-primary featured-box-effect-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
										<div class="box-content text-center">
											<div class="custom-featured-icon-wrapper bg-light mb-4">
												<img src="Images/invictus/icon1-1.png" class="img-fluid icon-featured" alt="" />
											</div>
											<h3 class="text-transform-none font-weight-bold custom-font-size-1 mb-3">Hochwertige Materialien und Beschichtungen</h3>
											<p class="px-3 mb-0 text-justify">Die Verwendung hochwertiger Materialien und Beschichtungen trägt auch dazu bei, die Lebensdauer der Werkzeuge zu verlängern, was den Kunden eine wertvolle Rendite für ihre Investition bietet.</p>
										</div>
									</div>
								</div>
								<div class="col-md-8 col-lg-4">
									<div class="featured-box featured-box-primary featured-box-effect-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
										<div class="box-content text-center">
											<div class="custom-featured-icon-wrapper bg-light mb-4">
												<img src="Images/invictus/icon2-2.png" class="img-fluid icon-featured" alt="" />
											</div>
											<h3 class="text-transform-none font-weight-bold custom-font-size-1 mb-3">Kostengünstige Lösungen</h3>
											<p class="px-3 mb-0 text-justify">Indem wir Produkte anbieten, die sowohl qualitativ hochwertig als auch erschwinglich sind. Wir bieten eine Reihe von Produkten an, die eine hervorragende Leistung zu einem günstigeren Preis bieten. </p>
										</div>
									</div>
								</div>
								<div class="col-md-8 col-lg-4">
									<div class="featured-box featured-box-primary featured-box-effect-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
										<div class="box-content text-center">
											<div class="custom-featured-icon-wrapper bg-light mb-4">
												<img src="Images/invictus/icon3-3.png" class="img-fluid icon-featured" alt="" />
											</div>
											<h3 class="text-transform-none font-weight-bold custom-font-size-1 mb-3">Zuverlässige und langlebige Produkte</h3>
											<p class="px-3 mb-0 text-justify">Ob ein Kunde ein Werkzeug für eine bestimmte Schneidaufgabe oder für eine Reihe von Schneidanwendungen benötigt, die zuverlässigen und langlebigen Produkte des Unternehmens sind die perfekte Wahl. </p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				

				

				<section class="section section-with-shape-divider bg-transparent border-0 pb-4 m-0">
					<div class="shape-divider shape-divider-reverse-x" style="height: 102px;">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 102" preserveAspectRatio="xMinYMin">
							<path fill="#F7F7F7" d="M1895,78c-56.71-6.03-113.75-12.1-167-17c-75.42-6.94-133.81-10.66-171-13c-62.1-3.91-108.85-5.97-155-8
								c-35.96-1.58-78.06-3.42-133-5c-59.81-1.72-103.18-2.23-172-3c-92.17-1.03-154.41-1.01-169-1c-69.05,0.05-115.16,0.67-137,1
								c-43.08,0.65-76.21,1.48-97,2c-28.02,0.7-71.13,1.8-128,4c-16.64,0.64-57.72,2.28-111,5c-26.12,1.33-67.11,3.45-121,7
								c-21.14,1.39-54.21,3.59-96,7c-19.93,1.63-39.22,3.32-47,4c-16.12,1.41-33.55,2.94-55,5c-26.48,2.54-19.07,2.04-77,8
								c-19.39,1.99-36.94,3.77-60.59,7.46V103H1923V81C1916.55,80.3,1906.82,79.26,1895,78z"/>
						</svg>
					</div>
					<div class="container pt-5 mt-5">
						<div class="row  pb-2 mb-3">
							<div class="col-md-9 col-lg-8 ">
							<h3 class="text-color-secondary font-weight-bold text-transform-none text-8 mb-3 pb-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">Unser Team</h3>							
								<p class="custom-font-secondary text-4 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Wir sind stolz darauf, ein talentiertes und engagiertes Teammitglieder zu haben, das kontinuierlich zum Erfolg unseres Unternehmens beiträgt.</p>
							</div>
						</div>
						<div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
							<div class="col">
								<div class="owl-carousel nav-outside nav-arrows-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 3}, '1199': {'items': 3}}, 'autoplay': false, 'autoplayTimeout': 5000, 'autoplayHoverPause': true, 'dots': false, 'nav': true, 'loop': false, 'margin': 20, 'stagePadding': '75'}">
									<?php display_team_member(); ?>
									
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-with-shape-divider bg-tertiary border-0 m-0">
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
					<div class="shape-divider shape-divider-bottom" style="height: 102px;">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 102" preserveAspectRatio="xMinYMin">
							<path fill="#F7F7F7" d="M1895,78c-56.71-6.03-113.75-12.1-167-17c-75.42-6.94-133.81-10.66-171-13c-62.1-3.91-108.85-5.97-155-8
								c-35.96-1.58-78.06-3.42-133-5c-59.81-1.72-103.18-2.23-172-3c-92.17-1.03-154.41-1.01-169-1c-69.05,0.05-115.16,0.67-137,1
								c-43.08,0.65-76.21,1.48-97,2c-28.02,0.7-71.13,1.8-128,4c-16.64,0.64-57.72,2.28-111,5c-26.12,1.33-67.11,3.45-121,7
								c-21.14,1.39-54.21,3.59-96,7c-19.93,1.63-39.22,3.32-47,4c-16.12,1.41-33.55,2.94-55,5c-26.48,2.54-19.07,2.04-77,8
								c-19.39,1.99-36.94,3.77-60.59,7.46V103H1923V81C1916.55,80.3,1906.82,79.26,1895,78z"/>
						</svg>
					</div>
					<div class="container pt-5 pb-3 mt-4">
						<div class="row mt-5 mb-5">
							<div class="col-lg-4 pe-lg-0 mb-4 mb-lg-0">
								<h2 class="text-color-light font-weight-bold line-height-6 text-8 mb-3">Unsere zufriedenen Kunden</h2>
								<p class="text-color-light opacity-7 mb-0">Ein zufriedener Kunde ist ein wertvolles Gut für jedes Unternehmen.Kundenbewertungen sind eine wertvolle Quelle für Feedback und können einem Unternehmen helfen, sich zu verbessern und zu wachsen.Der Aufbau einer starken Beziehung zu den Kunden durch regelmäßiges Einchecken und Behandeln von Bedenken kann ebenfalls zu ihrer Zufriedenheit beitragen.</p>
							</div>
							<div class="col-lg-8 ps-lg-4">
								<div class="owl-carousel dots-light dots-align-left" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '979': {'items': 2}, '1199': {'items': 2}}, 'margin': 20, 'loop': true, 'dots': true, 'dotsEach': 1, 'nav': false, 'autoplay': true, 'autoplayTimeout': 5000}">
									<?php display_testimonial();?>
									
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section border-0 pt-4 m-0">
					<div class="container py-2 ">
						<div class="row align-items-center text-center">
						<div class="owl-carousel owl-theme" data-plugin-options="{'items': 5, 'autoplay': true, 'autoplayTimeout': 3000}">
						<!-- 'items': 5, -->
						<?php display_brand(); ?>

								
							
							</div>
							
						</div>
					</div>	
				</section>
				<!-- cookies-banner -->



			
			</div>

			<?php include "includes/footer.php"; 
			 ?>

		</div>

		<?php include "includes/footer-files.php" ?>

	</body>
</html>
