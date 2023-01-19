<?php include 'includes/header.php'; ?>
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
        <h2>Welcome to Admin Penal</h2>
    </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <!-----content--------------------->
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-white bg-info mb-3" >
                        <div class="card-header">Products</div>
                        <div class="card-body">
                            <h5 class="card-title"><?php display_pro_count(); ?> Products</h5>
                            <p class="card-text">No. of Products </p>
                        </div>
                        <div class="card-footer">
                            <a href="view-products.php" class="btn btn-link text-white" >Products</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-info mb-3" >
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <h5 class="card-title"><?php display_cat_count(); ?> Categories</h5>
                            <p class="card-text">No. of Categories</p>
                        </div>
                        <div class="card-footer">
                            <a href="view-categories.php" class="btn btn-link text-white">Categories</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-dark bg-light mb-3" >
                        <div class="card-header">Admin Users</div>
                        <div class="card-body">
                            <h5 class="card-title"><?php display_user_count(); ?> Users</h5>
                            <p class="card-text">No. of Users</p>
                        </div>
                        <div class="card-footer">
                            <a href="view-users.php" class="btn btn-link">Users</a>
                        </div>
                    </div>
                </div>
               

            </div>
            <div class="row">
                <div class="col col-md-6">
                    <div class="card text-white bg-success mb-3" >
                        <div class="card-header">Register Customer</div>
                        <div class="card-body">
                            <h5 class="card-title"><?php display_customer_count(); ?> Orders</h5>
                            <p class="card-text">No. of customer</p>
                        </div>
                        <div class="card-footer">
                            <a href="view-orders.php" class="btn btn-link text-white">Orders</a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-6">
                    <div class="card text-white bg-danger mb-3" >
                        <div class="card-header">Queries</div>
                        <div class="card-body">
                            <h5 class="card-title"><?php display_query_count(); ?> Queries</h5>
                            <p class="card-text">No. of Queries</p>
                        </div>
                        <div class="card-footer">
                            <a href="view-query.php" class="btn btn-link text-white">Queries</a>
                        </div>
                    </div>
                </div>
            </div>
         
            <!-----content-closed------------->
        </div>
    </div>
</div>



<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>