<?php include 'includes/header.php';?>

<!-------------Header------------------>

            <!---navigation start--->
            <?php include 'includes/nav.php';?>


<!--------------bar------------------->
<div class="container-fluid bg-dark p-1">
</div>
<!--------------main content area------------------->

        <div class="container">
            <div class="row mt-3 mb-3">
                <div class="col-md-12">
                    <h2>Add New Company brands</h2>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <!-----content--------------------->
                    <div class="row">
                        <!-------------form ------------->
                        <form class="row g-3" method="post" enctype="multipart/form-data">
                           
                            
                            

                            <div class="col-md-4">
                                <label for="p_file" class="form-label">Select Picture *</label>
                                <input type="file" name="p_file" class="form-control" id="p_file" required>
                            </div>
                          
                          
                            <div class="col-12">
                                <button type="submit" name="create_brand" class="btn btn-primary">Create Member</button>
                            </div>
                        </form>
                        <!-------------form close------------->
                    </div>
                    <!-----content-closed------------->
                </div>
            </div>
            <div class="row mt-3">
                <?php create_company_brand(); ?>
            </div>
        </div>
  

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>