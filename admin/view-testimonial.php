<?php include 'includes/header.php';?>
<!-------------Header------------------>

            <?php include 'includes/nav.php';?>


<!--------------bar------------------->
<div class="container-fluid bg-dark p-1">
</div>
<!--------------main content area------------------->
<div class="container">
    <div class="row mt-3 mb-3">
    <div class="col-md-12">
        <h2 class="text-danger">Testimonial</h2>
    </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <!-----content--------------------->
            <div class="row">
                <!-------------form ------------->
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        
                        <th  colspan="4" scope="col">Name</th>
                        <th colspan="4" scope="col">Address</th>
                        <th scope="col">Review</th>
                        
                        <th colspan="2"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php display_testimonial();

                    del_testimonial();

                    ?>

                    </tbody>
                </table>
                <!-------------form close------------->
            </div>
            <!-----content-closed------------->
        </div>
    </div>
</div>


<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>