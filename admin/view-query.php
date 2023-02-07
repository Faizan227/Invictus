<<<<<<< HEAD
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
        <h2 class="text-danger">Queries</h2>
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
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Date</th>
                        <th scope="col">Message</th>

                        <th colspan="1">operations</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php display_query();
                    del_query();
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
=======
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
        <h2 class="text-danger">Queries</h2>
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
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Date</th>
                        <th scope="col">Message</th>

                        <th colspan="1">operations</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php display_query();
                    del_query();
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
>>>>>>> 002b8ed74864ef0650d0fcc36f9b36dd68162220
</html>