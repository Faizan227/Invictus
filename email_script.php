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

<?php
// session_start();
if (empty($_SESSION['email'])) {
    header("Location: log-in.php");
    exit;
}else{
    $product = $_GET['product'];
    include "includes/connection.php";
        $q="SELECT * FROM products WHERE p_id = '$product'";
        $q_run =  mysqli_query($con, $q);
        while($data = mysqli_fetch_array($q_run)){
    ?>
    <div class="container my-5">
        <div class="row align-content-center">
            <div class="col-md-3 col-lg-3"></div>
            <div class="col col-md-6 col-lg-6">
             <div class="card custom-border-radius-1 box-shadow-1 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
		      <div class="card-body py-5">
			<h2 class="text-color-secondary font-weight-bold text-6 line-height-1 pb-2 mb-4">Senden Sie eine E-Mail, um ein Angebot für dieses Produkt zu erhalten</h2>
            <div class="row">
                <div class="col-7">
            <h3 class="mt-5 text-color-primary"><?php echo $data['p_code']; ?></h3>
            <h3><?php echo $data['p_name']; ?></h3>
             </div>
             <div class="col-5">
            <img src="uploads/<?php echo $data['p_file']; ?>" class="img-fluid " alt="" style="width: 150px; height:150px;" />
             </div>    
            </div>
            
        
        
            <div class="text-center">
            <a href="mailto:info@invictus-diamantinstrumente.de?Subject=Product Code :<?php echo $data['p_code']; ?>&amp;Body=I Saw <?php  echo  $data['p_name'];  ?>on your website.I want to get price" class="btn-primary py-2 px-3 text-4 font-weight-bold border-radius-2 " data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="top" title="Get Info By Email">Email</a>
          
        </div>
              
        </div>
         </div>
        </div>

        <div class="col-md-3 col-lg-3"></div>
	 </div>
    </div>
     
     
    <?php
}

}





// if (isset($_GET['send_email'])) {
//    $to = "Husnain325@gmail.com";
// $subject = "Test Email";
// $message = "This is a test email.";

// $headers = "From: sender@example.com\r\n";
// $headers .= "Reply-To: sender@example.com\r\n";
// $headers .= "Content-Type: text/html\r\n";

// mail($to, $subject, $message, $headers);
// }

// function send_email() {
    // Code to send an email
    // ...
// }
?>

</div>

			<?php include "includes/footer.php" ?>
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
