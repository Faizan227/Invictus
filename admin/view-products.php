<?php include 'includes/header.php';?>
<!-------------Header------------------>

            <?php include 'includes/nav.php';?>


<!--------------bar------------------->
<div class="container-fluid bg-info p-1">
</div>
<!--------------main content area------------------->
<div class="container">
    <div class="row mt-3 mb-3">
    <div class="col-md-12">
        <h2 class="text-danger">Produkte</h2>
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
                        <th scope="col">Code</th>
                        <th scope="col">Bild</th>
                        
                        <th scope="col">Titel</th>
                        
                        <th scope="col">Eigenschaften</th>
                        <th scope="col">Umfang</th>
                        <th scope="col">Maschine</th>
                        <th scope="col">Abmessungen</th>
                        <th colspan="2">Aktion</th>
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