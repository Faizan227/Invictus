
<?php
                
				
					if(isset($_REQUEST['register'])){
						$name=$_REQUEST['username'];
						$phone=$_REQUEST['phone'];
						$email=$_REQUEST['email'];
						$comapny=$_REQUEST['cname'];
						$regno=$_REQUEST['regno'];
						$pass=$_REQUEST['password'];
						$address=$_REQUEST['address'];
						
						
						include "includes/connection.php";
						$q="INSERT INTO customer (cus_name, cus_email,cus_phone,company_name,com_reg_no, cus_password , cus_address) VALUES 
												('$name','$email','$phone','$comapny','$regno',md5('$pass'),'$address')";
						$q_run =  mysqli_query($con, $q);
						echo mysqli_error($con);
						if($q_run){
							?>
							<div class="alert alert-success">
								Registered Succesfully
							</div>
							<script>
								setTimeout(function(){window.location="log-in.php";},2000);
							</script>
							<?php
						}else{
							?>
							<div class="alert alert-danger">
								Error please Try Again
							</div>
							<?php
						}//else
					}//isset
				
                
                ?>
<!DOCTYPE html>
<html lang="de">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Demo Cleaning Services | Porto - Multipurpose Website Template</title>	

		<meta name="keywords" content="WebSite Template" />
		<meta name="description" content="Porto - Multipurpose Website Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CRoboto+Slab:300,400,700,900&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">

		<!-- Demo CSS -->
		<link rel="stylesheet" href="css/demos/demo-cleaning-services.css">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="css/skins/skin-cleaning-services.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>

		<div class="body">
		<?php include "includes/header.php";?>

			<div role="main" class="main">

				<section class="page-header page-header-modern page-header-lg bg-tertiary border-0 my-0">
					<div class="container my-3">
						<div class="row">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1 class="font-weight-bold text-10">Registration Form</h1>
							</div>
							<div class="col-md-12 align-self-center order-1">
								<ul class="breadcrumb breadcrumb-light d-block text-center">
									<li><a href="#">Home</a></li>
									<li class="active">Services</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<section class="section border-0 pb-0 pb-lg-5 m-0">
					<div class="container my-4">
						<!-- <div class="row mb-4 pb-2">
							<div class="col">
							<h4>Registration is fast, easy, and free.</h4>
                        <p>Once you"re registered, you can:</p>
                        <hr>
							</div>
						</div> -->
						
                     <div class="row">
                     <!-- REGISTER -->
					 <div class="col-md-2"></div>
                       <div class="col-md-8">
                        <div class="widget bg-white p-5 mb-4 border-radius-2">
                           <div class="widget-body">
                              
							  <form action="" method="post">
                                 <div class="row">
								  <div class="form-group col-sm-12">
                                       <label for="exampleInputEmail1">User-Name</label>
                                       <input class="form-control" type="text" name="username" id="example-text-input" placeholder="UserName" required > 
                                    </div>
									<div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">Email address</label>
                                       <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required> <small id="emailHelp" class="form-text text-muted">We"ll never share your email with anyone else.</small> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">Phone number</label>
                                       <input class="form-control" type="number" name="phone" id="example-tel-input-3" placeholder="Phone" required> <small class="form-text text-muted">We"ll never share your number with anyone else.</small> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">Company Name</label>
                                       <input class="form-control" type="text" name="cname" id="example-text-input" placeholder="Company Name..."> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">Company Register No.</label>
                                       <input class="form-control" type="text" name="regno" id="example-text-input-2" placeholder="Comapny Registered Number..."> 
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputPassword1">Password</label>
                                       <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required> 
                                    </div>
                                   
									 <div class="form-group col-sm-12">
                                       <label for="exampleTextarea">Address</label>
                                       <textarea class="form-control" id="exampleTextarea"  name="address" rows="3"></textarea>
                                    </div>
                                   
                                 </div>
                                
                                 <div class="row">
                                    <div class="col-4 col-md-6">

                                       <p> <input type="submit" value="Register" name="register" class="btn btn-secondary btn-modern font-weight-bold text-3 btn-px-4 py-3"> </p>
                                    </div>
									<div class="col-4 col-md-6 text-center  ">
                                 <p class=" fw-bold mt-2 pt-1 mb-0">Already have account <a href="log-in.php" class="link-danger">Login</a></p>
                                    </div>
                                 </div>
								 
                              </form>
                           <?php  ?>
						   </div>
                           <!-- end: Widget -->
                        </div>
                        <!-- /REGISTER -->
                     </div>
					 <div class="col-md-2"></div>
                  </div>
               
					</div>
				</section>

				

			</div>

			<footer id="footer" class="footer bg-color-secondary border-0 mt-0">
				<div class="container container-xl-custom pt-4 pb-3">
					<div class="row py-5">
						<div class="col-md-4 col-lg-3 mb-4 mb-lg-0">
							<h4 class="font-weight-bold ls-0">Our Address</h4>
							<ul class="list list-unstyled mb-0">
								<li class="mb-1">
									12345  Porto Blvd.
								</li>
								<li class="mb-1">
									Suite 1500
								</li>
								<li class="mb-0">
									Los Angeles, California 90000
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-3 mb-4 mb-lg-0">
							<h4 class="font-weight-bold ls-0">Our Contacts</h4>
							<div class="feature-box feature-box-style-2 align-items-center mb-3">
								<div class="feature-box-icon">
									<img class="icon-animated" width="45" src="img/demos/cleaning-services/icons/phone.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
								</div>
								<div class="feature-box-info ps-2">
									<p class="text-uppercase font-weight-semibold line-height-1 text-2 pb-0 mb-0">CALL US NOW</p>
									<a href="tel:+1234567890" class="text-uppercase text-color-light text-color-hover-secondary text-decoration-none text-5 font-weight-bold pb-0">800-123-4567</a>
								</div>
							</div>
							<a href="demo-cleaning-services-contact.html" class="btn btn-primary font-weight-bold px-5 py-3 mb-2">BOOK NOW</a>
						</div>
						<div class="col-md-4 col-lg-2 mb-4 mb-md-0">
							<h4 class="font-weight-bold ls-0">Our Services</h4>
							<ul class="list-unstyled mb-0">
								<li class="mb-1">
									<a href="demo-cleaning-services-services-detail.html">Building Services</a>
								</li>
								<li class="mb-1">
									<a href="demo-cleaning-services-services-detail.html">Post Construction</a>
								</li>
								<li class="mb-0">
									<a href="demo-cleaning-services-services-detail.html">Office Cleaning</a>
								</li>
							</ul>
							<a href="demo-cleaning-services-services.html" class="btn btn-link font-weight-bold text-decoration-none ps-0">VIEW MORE</a>
						</div>
						<div class="col-md-4 col-lg-2 mb-4 mb-md-0">
							<h4 class="font-weight-bold ls-0">About</h4>
							<ul class="list-unstyled mb-0">
								<li class="mb-1">
									<a href="demo-cleaning-services-about-us.html">About Us</a>
								</li>
								<li class="mb-0">
									<a href="demo-cleaning-services-contact.html">Send a Message</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2">
							<h4 class="font-weight-bold ls-0">Follow Us</h4>
							<ul class="social-icons social-icons-clean social-icons-medium">
								<li>
									<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
								</li>
								<li>
									<a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
								</li>
								<li>
									<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright bg-color-secondary">
					<div class="container container-xl-custom pb-4">
						<div class="row">
							<div class="col opacity-3">
								<hr class="my-0 bg-color-light opacity-1">
							</div>
						</div>
						<div class="row py-4 mt-2">
							<div class="col-lg-6 text-center text-lg-start mb-3 mb-lg-0">
								<a href="demo-cleaning-services.html">
									<img alt="Porto" width="115" height="30" src="img/demos/cleaning-services/logo-light.png">
								</a>
							</div>
							<div class="col-lg-6 text-center text-lg-end">
								<p class="text-3 mb-0">Porto Cleaning Services. © 2022. All Rights Reserved</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="vendor/plugins/js/plugins.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Demo -->
		<script src="js/demos/demo-cleaning-services.js"></script>

		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

	</body>
</html>
