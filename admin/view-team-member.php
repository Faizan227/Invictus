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
        <h2 class="text-danger">Team Member</h2>
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
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Position</th>
                        
                        <th colspan="2"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php display_team_member();

                    del_team_member();

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