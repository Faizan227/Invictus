<?php
include "includes/connection.php";
if(!isset($_SESSION)){
    session_start();
}?>
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
if (!isset($_SESSION['email'])) {?>
<script>
     setTimeout( function(){window.location="log-in.php" } ,600);
</script>
       
   <?php
}else{
    $product = $_GET['product'];
    include "includes/connection.php";
        $q="SELECT * FROM products WHERE p_id = '$product'";
        $q_run =  mysqli_query($con, $q);
        while($data = mysqli_fetch_array($q_run)){
    ?>
    <div class="container my-5">
        <div class="row align-items-center align-items-center justify-content-center">
            
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
            <a href="mailto:info@invictus-diamantinstrumente.de?Subject=Produktcode:<?php echo $data['p_code']; ?>&amp;Body=Produktname: <?php  echo  $data['p_name'];?>, 'wir auf Ihrer Website gesehen haben. Wir möchten die Preisdetails für dieses Produkt erhalten'." class="btn-primary py-2 px-3 text-4 font-weight-bold border-radius-2 " data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="top" title="Erhalten Sie Informationen per E-Mail">E-mail</a>
          
        </div>
              
        </div>
         </div>
        </div>

        
	 </div>
    </div>
     
     
    <?php
}

}






?>

</div>

			<?php include "includes/footer.php" ?>
		</div>

		<?php include "includes/footer-files.php" ?>

	</body>
</html>
