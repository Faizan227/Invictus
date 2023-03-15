<?php
session_start();
error_reporting(0);
include('includes/connection.php');
error_reporting(0);

if(isset($_POST['submit']))
  {
    $contactno=$_SESSION['contactno'];
    $email=$_SESSION['email'];
    $password=($_POST['newpassword']);
    include "includes/connection.php";
        $query=mysqli_query($con,"UPDATE admin set a_password =md5('$password')  where  a_email='$email' && a_phone='$contactno' ");
   if($query)
   { ?>
<!-- // echo "<script>alert('Password successfully changed');</script>"; -->
<div class="alert alert-success">
	<?php echo "Password Change Successfully" ?>
</div>
<script>
                    setTimeout( function(){window.location="index.php" } ,2000);
                </script>
<?php

session_destroy();
   }
  
  }
  
  ?>
<!DOCTYPE html>
<html lang="de" class="">

<head>
	
	<script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
} 

</script>
</head>

<body>

	<!-- Start Header Area -->
<?php include_once('includes/header.php');?>
	<!-- End Header Area -->

	<!-- start banner Area -->
	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex text-center align-items-center justify-content-center">
				<!-- <div class="about-content col-lg-12">
					<p class="text-white link-nav"><a href="index.php">Home </a>
						<span class="lnr lnr-arrow-right"></span> <a href="reset.php">
							Recover Password</a></p>
					<h1 class="text-white">
						Recover Password
					</h1>
				</div> -->
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start contact-page Area -->
	<section class="contact-page-area section-gap">
		<div class="container mt-4">
			<p style="text-align: center;color: red;font-size: 30px"><strong>Password Change </strong></p>
			<div class="row mt-80">
				<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
				<div class="col col-lg-12">
					<form class="row contact_form" action="" method="post" id="" name="changepassword" onsubmit="return checkpass();">
						<div class="col-md-12">

						
							<div class="form-group" style="padding-top: 20px">
								<input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="New Password" required="true">
							</div>
							
							<div class="form-group" style="padding-top: 20px">
								<input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" required="true">
							</div>
							
						</div>
						
						<div class="col-md-6 text-left mt-4">

							<button type="submit" value="submit" name="submit" class="btn btn-primary" >Reset</button>
						
						</div>
						<!-- <div class="col-md-6 text-left">
					<a href="signin.php" class="btn primary-btn">Sign in</a>
						</div> -->

					</form>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End contact-page Area -->

	<!-- start footer Area -->
	<?php include_once('includes/footer.php');?>
	<!-- End footer Area -->
	<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/custom.js"></script>
	
</body>

</html>