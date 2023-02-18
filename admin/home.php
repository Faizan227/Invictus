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
        <h2>Willkommen bei Admin Penal</h2>
    </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <!-----content--------------------->
            <div class="row">
  
                <div class="col-md-4">
                    <div class="card text-white bg-info mb-3" >
                        <div class="card-header">Produkte</div>
                        <div class="card-body">
                            <h5 class="card-title"><?php display_pro_count(); ?> Produkte</h5>
                            <p class="card-text">Anzahl der Produkte </p>
                        </div>
                        <div class="card-footer">
                            <a href="view-products.php" class="btn btn-link text-white" >Produkte anzeigen</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-info mb-3" >
                        <div class="card-header">Kategorien</div>
                        <div class="card-body">
                            <h5 class="card-title"><?php display_cat_count(); ?> Kategorien</h5>
                            <p class="card-text">Anzahl der Kategorien</p>
                        </div>
                        <div class="card-footer">
                            <a href="view-categories.php" class="btn btn-link text-white">Kategorien anzeigen</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-dark bg-light mb-3" >
                        <div class="card-header">Admin-Benutzer</div>
                        <div class="card-body">
                            <h5 class="card-title"><?php display_user_count(); ?> Benutzer</h5>
                            <p class="card-text">Anzahl der Benutzer</p>
                        </div>
                        <div class="card-footer">
                            <a href="view-users.php" class="btn btn-link">Benutzer anzeigen</a>
                        </div>
                    </div>
                </div>
               

            </div>
            <div class="row">
                <div class="col col-md-6">
                    <div class="card text-white bg-success mb-3" >
                        <div class="card-header">Kunde registrieren</div>
                        <div class="card-body">
                            <h5 class="card-title"><?php display_customer_count(); ?> Kunde</h5>
                            <p class="card-text">Anzahl der Kunden</p>
                        </div>
                        <div class="card-footer">
                            <a href="view-orders.php" class="btn btn-link text-white">Kunde ansehen</a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-6">
                    <div class="card text-white bg-danger mb-3" >
                        <div class="card-header">Mitteilungen</div>
                        <div class="card-body">
                            <h5 class="card-title"><?php display_query_count(); ?> Mitteilungen</h5>
                            <p class="card-text">Anzahl der Mitteilungen</p>
                        </div>
                        <div class="card-footer">
                            <a href="view-query.php" class="btn btn-link text-white">Mitteilungen anzeigen</a>
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