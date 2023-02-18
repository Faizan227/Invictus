<?php include 'includes/header.php'; ?>

<!-------------Header------------------>

            <?php include 'includes/nav.php';?>


<!--------------bar------------------->
<div class="container-fluid bg-info p-1">
</div>
<!--------------main content area------------------->
<?php if(isset($_REQUEST['edit_cat'])){
    edit_cat();
}
//when get not coming
else{
    ?>
    <div class="container">
        <div class="row mt-3 mb-3">
            <div class="col-md-12">
                <h2>Kategorie erstellen</h2>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <!-----content--------------------->
                <div class="row">
                    <!-------------form ------------->
                    <form class="row g-3" method="post" enctype="multipart/form-data">
                        <div class="col-md-12">
                            <label for="cat_title" class="form-label">Kategorietitel</label>
                            <input type="text" class="form-control" id="cat_title" name="cat_title">
                        </div>
                        <div class="col-md-12">
                            <label for="details" class="form-label">Kategoriedetails</label>
                            <textarea class="form-control" name="cat_details" id="details"  cols="30" rows="10"></textarea>
                        </div>
                        <div class="col-md-12">
                                <label for="file" class="form-label">Bild</label>
                                <input type="file" name="c_file" class="form-control" id="file">
                            </div>
                        <div class="col-12">
                            <button type="submit" name="create_cat" class="btn btn-primary">Erstellen</button>
                        </div>
                    </form>
                    <!-------------form close------------->
                </div>
                <!-----content-closed------------->
            </div>
        </div>
        <div class="row mt-3">
            <?php create_cat(); ?>
        </div>
    </div>
    <?php
}

?>



<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>