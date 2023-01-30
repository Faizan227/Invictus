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
        <h2 class="text-danger">Products</h2>
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
                        <th scope="col">code</th>
                        <th scope="col">Image</th>
                        
                        <th scope="col">Title</th>
                        
                        <th scope="col">characteristics</th>
                        <th scope="col">Scope</th>
                        <th scope="col">Machine</th>
                        <th scope="col">Dimension</th>
                        <th colspan="2">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php display_pro();

                    del_post();

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