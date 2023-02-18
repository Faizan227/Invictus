
<!DOCTYPE html>
<html lang="de">
<head>
		<?php include "includes/header-main.php";?>
	</head>
	<body>

		<div class="body">
		<?php include "includes/header.php";?>

			<div role="main" class="main">

				<section class="page-header page-header-modern page-header-lg bg-tertiary border-0 my-0">
					<div class="container my-3">
						<div class="row">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1 class="font-weight-bold text-10">Login Formular</h1>
							</div>
							<div class="col-md-12 align-self-center order-1">
								<ul class="breadcrumb breadcrumb-light d-block text-center">
									<li><a href="index.php">Startseite</a></li>
									<li class="active">Login Formular</li>
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
                           <div class="widget-body ">
                              
							  <form action="" method="post">
                                 <div class="row">
								  
									<div class="form-group ">
                                       <label for="exampleInputEmail1">E-Mail-Addresse</label>
                                       <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> <small id="emailHelp" class="form-text text-muted">Wir werden Ihre E-Mail-Adresse niemals an Dritte weitergeben.</small> 
                                    </div>
                                    
                                    
                                    
                                    
                                    <div class="form-group ">
                                       <label for="exampleInputPassword1">Passwort</label>
                                       <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Passwort"> 
                                    </div>
                                    <div class="d-flex justify-content-end align-items-end">
                        
                                   
                                   <!-- <a href="#!" class="text-body">Forgot password?</a> -->
                                    </div>
									 
                                   
                                 </div>
                                
                                 <div class="row">
                                    <div class="col-4 col-md-6">

                                       <p> <input type="submit" value="Login" name="login" class="btn btn-secondary btn-modern font-weight-bold text-3 btn-px-4 py-3"> </p>
                                    </div>
									<div class="col-4 col-md-6 text-center  ">
                                 <p class=" fw-bold mt-2 pt-1 mb-0">Wenn Sie kein Konto haben? Bitte registrieren Sie sich zuerst <a href="registration.php" class="link-danger">Registrieren</a></p>
                                    </div>
                                 </div>
								 
                              </form>
                           <?php cus_login(); ?>
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

			<?php include "includes/footer.php";?>
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
