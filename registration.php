
<?php
                
				
					if(isset($_REQUEST['register'])){
						$name=$_REQUEST['username'];
						$phone=$_REQUEST['phone'];
						$email=$_REQUEST['email'];
						$comapny=$_REQUEST['cname'];
						$regno=$_REQUEST['regno'];
						$pass=$_REQUEST['password'];
						$date = date("Y/m/d");
						// $request=$_REQUEST['request'];
						
						
						include "includes/connection.php";
						$q="INSERT INTO customer (cus_name, cus_email,cus_phone,company_name,com_reg_no, cus_password, reg_date ) VALUES 
												('$name','$email','$phone','$comapny','$regno',md5('$pass'),$date)";
						$q_run =  mysqli_query($con, $q);
						echo mysqli_error($con);
						if($q_run){
							?>
							<div class="alert alert-success">
							Erfolgreich registriert
							</div>
							<script>
								setTimeout(function(){window.location="log-in.php";},2000);
							</script>
							<?php
						}else{
							?>
							<div class="alert alert-danger">
							Fehler bitte versuchen Sie es erneut
							</div>
							<?php
						}//else
					}//isset
				
                
                ?>
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
								<h1 class="font-weight-bold text-10">Anmeldeformular</h1>
							</div>
							<div class="col-md-12 align-self-center order-1">
								<ul class="breadcrumb breadcrumb-light d-block text-center">
									<li><a href="index.php">Startseite</a></li>
									<li class="active">Anmeldeformular</li>
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
								  <!-- <div class="form-group col-sm-12">
                                       <label for="exampleInputEmail1">User-Name *</label>
                                       <input class="form-control" type="text" name="username" id="example-text-input" placeholder="UserName" required > 
                                    </div> -->
									<div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">E-Mail-Addresse *</label>
                                       <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email eingeben" required> <small id="emailHelp" class="form-text text-muted">Wir werden Ihre E-Mail-Adresse niemals an Dritte weitergeben.</small> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">Telefonnummer</label>
                                       <input class="form-control" type="number" name="phone" id="example-tel-input-3" placeholder="Telefon" required> <small class="form-text text-muted">Wir werden Ihre Nummer niemals an Dritte weitergeben.</small> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">Name der Firma *</label>
                                       <input class="form-control" type="text" name="cname" id="example-text-input" placeholder="Name der Firma..."> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">Handelsregisternummer. *</label>
                                       <input class="form-control" type="text" name="regno" id="example-text-input-2" placeholder="Eingetragene Firmennummer..."> 
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputPassword1">Passwort</label>
                                       <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Passwort" required> 
                                    </div>
                                   
									 <!-- <div class="form-group col-sm-12">
                                       <label for="exampleTextarea">Address</label>
                                       <textarea class="form-control" id="exampleTextarea"  name="address" rows="3"></textarea>
                                    </div>
                                    -->
                                 </div>
                                
                                 <div class="row">
                                    <div class="col-4 col-md-6">

                                       <p> <input type="submit" value="Register" name="register" class="btn btn-secondary btn-modern font-weight-bold text-3 btn-px-4 py-3"> </p>
                                    </div>
									<div class="col-4 col-md-6 text-center  ">
                                 <p class=" fw-bold mt-2 pt-1 mb-0">Konto bereits vorhanden <a href="log-in.php" class="link-danger">Anmeldung</a></p>
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
