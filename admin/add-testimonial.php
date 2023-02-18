<?php include 'includes/header.php';?>

<!-------------Header------------------>

            <!---navigation start--->
            <?php include 'includes/nav.php';?>


<!--------------bar------------------->
<div class="container-fluid bg-info p-1">
</div>
<!--------------main content area------------------->

        <div class="container">
            <div class="row mt-3 mb-3">
                <div class="col-md-12">
                    <h2>Neue hinzufügen Testimonial</h2>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <!-----content--------------------->
                    <div class="row">
                        <!-------------form ------------->
                        <form class="row g-3" method="post" enctype="multipart/form-data">
                            <div class="col-md-3">
                                <label for="cl_name" class="form-label">Kundenname*</label>
                                <input type="text" name="cl_name" class="form-control" id="cl_name" required>
                            </div>    
                            <div class="col-md-6">
                                <label for="cl_address" class="form-label">Kundenadresse *</label>
                                <input type="text" name="cl_address" class="form-control" id="cl_address" required>
                            </div> 
                            <div class="col-md-9">
                                <label for="cl_review" class="form-label">Testimonial *</label>
                                <textarea  class="form-control" id="cl_review" name="cl_review" placeholder="Details etc.." rows="5" required></textarea>
                            </div>                    
                            <div class="col-12">
                                <button type="submit" name="create_testimonial" class="btn btn-primary">Erstellen Testimonial</button>
                            </div>
                        </form>
                        <!-------------form close------------->
                    </div>
                    <!-----content-closed------------->
                </div>
            </div>
            <div class="row mt-3">
                <?php create_testimonial(); ?>
            </div>
        </div>


<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>