<?php include 'includes/header.php';?>

<!-------------Header------------------>

            <!---navigation start--->
            <?php include 'includes/nav.php';?>


<!--------------bar------------------->
<div class="container-fluid bg-info p-1">
</div>
<!--------------main content area------------------->
<?php
    if(isset($_REQUEST['edit_post'])){
        edit_post();
    }else{
        ?>
        <div class="container">
            <div class="row mt-3 mb-3">
                <div class="col-md-12">
                    <h2>Neues Produkt hinzufügen</h2>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <!-----content--------------------->
                    <div class="row">
                        <!-------------form ------------->
                        <form class="row g-3" method="post" enctype="multipart/form-data">
                            <div class="col-md-3">
                                <label for="price" class="form-label">Code</label>
                                <input type="text" name="p_code" class="form-control" id="code">
                            </div>    
                            <div class="col-md-6">
                                <label for="title" class="form-label">Titel</label>
                                <input type="text" name="p_title" class="form-control" id="title">
                            </div>
                            

                           
                            
                            <div class="col-md-6">
                                <label for="details" class="form-label">Eigenschaften </label>
                                <textarea  class="form-control" id="details" name="p_details" placeholder="Characteristics etc.." rows="5"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="price" class="form-label">Geltungsbereich:</label>
                                <textarea  class="form-control" id="scope" name="p_scope" placeholder="Scope ..." rows="5"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="machine" class="form-label">Maschine:</label>
                                <textarea  class="form-control" id="machine" name="machine" placeholder="Machine ..." rows="5"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="price" class="form-label">Abmessungen in mm</label>
                                <textarea  class="form-control" id="dimension" name="p_dimension" placeholder="Dimension ..." rows="5"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="file" class="form-label">Bild</label>
                                <input type="file" name="p_file" class="form-control" id="file">
                            </div>
                            <div class="col-md-12">
                                <label for="inputState" class="form-label">Kategorie</label>
                                <select id="inputState" class="form-select" name="p_cat">
                                    <option value="0" selected>Wählen...</option>
                                    <?php display_cat_single(); ?>

                                </select>
                            </div>
                            
                            
                            <div class="col-12">
                                <button type="submit" name="create_post" class="btn btn-primary">Erstellen</button>
                            </div>
                        </form>
                        <!-------------form close------------->
                    </div>
                    <!-----content-closed------------->
                </div>
            </div>
            <div class="row mt-3">
                <?php create_post(); ?>
            </div>
        </div>
        <?php
    }
?>


<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>