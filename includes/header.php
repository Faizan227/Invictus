<?php
if(!isset($_SESSION)){
    session_start();
}
function dropdown_menu(){
	include "connection.php";
    $q="SELECT * FROM categories";
    $q_run =  mysqli_query($con, $q);
    while($data = mysqli_fetch_array($q_run)){
    ?>  
       <li>
		<a href="services-detail.php?id=<?php echo $data['c_id']?>" class="dropdown-item"><?php echo $data['c_name']; ?></a>
		</li>
    <?php
    }  
}


?>
<?php include "includes/function.php"; ?>

    
        
        <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 85}">
				<div class="header-body header-body-bottom-border border-top-0">
					<div class="header-top header-top-bottom-containered-border pt-2">
						<div class="container">
							<div class="header-row">
								<div class="header-column justify-content-start">
									<div class="header-row">
										<ul class="header-social-icons social-icons social-icons-clean social-icons-medium position-relative right-7 d-none d-md-block ms-0">
											<li class="social-icons-instagram"><a href="https://www.instagram.com/invictus_diamantwerkzeuge/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
											<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
											<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
										</ul>
										<ul class="nav nav-pills position-relative bottom-1 ms-md-3">
											<li class="nav-item">
												<span class="d-flex d-none d-md-block align-items-center ws-nowrap text-color-secondary font-weight-medium text-3"><i class="icon-clock icons text-3 top-3 left-1 me-2 text-color-secondary font-weight-bold"></i> Mon - Sat 9:00am - 6:00pm</span>
											</li>
										</ul>
									</div>
								</div>
								<div class="header-column justify-content-end">
									<div class="header-row">
										<a href="log-in.php" class="custom-header-top-btn-style-1 btn btn-secondary font-weight-bold px-4 px-sm-5 py-3">Login</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="index.php">
											<img src="images/invictus/logo.png" class="img-fluid" width="195" height="70" alt="" />
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-links">
										<div class="header-nav-main header-nav-main-text-capitalize header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class=""><a href="index.php" class="nav-link <?php if($page=='home'){ echo 'active';} ?>">Startseite</a></li>
													<li class=""><a href="about.php" class="nav-link <?php if($page=='about'){ echo 'active';} ?>">Über uns</a></li>
													<li class="dropdown ">
														<a class="nav-link dropdown-toggle <?php if($page=='product'){ echo 'active';} ?>" href="" >
														Produkte<span class="child-indicator submenu-toggle mx-2"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="5" viewBox="0 0 10 5"><path id="Polygon_5" data-name="Polygon 5" d="M5,0l5,5H0Z" transform="translate(10 5) rotate(180)"/></svg></span>
														</a>
														<ul class="dropdown-menu">
															<?php dropdown_menu(); ?>
															
														</ul>
													</li>
													<li class=""><a href="traning.php" class="nav-link <?php if($page=='traning'){ echo 'active';} ?>">Schulung</a></li>
													<li class=""><a href="contact.php" class="nav-link <?php if($page=='contact'){ echo 'active';} ?>">Kontakt</a></li>
												</ul>
											</nav>
										</div>
									</div>
									<div class="feature-box feature-box-style-2 align-items-center ms-lg-4">
						  				<div class="feature-box-icon d-none d-sm-inline-flex">
											<img class="icon-animated" width="48" src="Images/invictus/phone.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-tertiary position-relative bottom-3'}" />
										</div>
										<div class="feature-box-info ps-2">
											<p class="font-weight-semibold line-height-1 text-2 pb-0 mb-1">RUF UNS JETZT AN</p>
											<a href="tel:+49201433 95 601" class="text-color-tertiary text-color-hover-primary text-decoration-none font-weight-bold line-height-1 custom-font-size-1 pb-0">+49 201 43395601</a>
										</div>
									</div>
									<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
										<i class="fas fa-bars"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
       
    