<?php include 'includes/header.php';?>

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
                    <h2>Neues Teammitglied hinzufügen</h2>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <!-----content--------------------->
                    <div class="row">
                        <!-------------form ------------->
                        <form class="row g-3" method="post" enctype="multipart/form-data">
                           
                            <div class="col-md-6">
                                <label for="m_name" class="form-label">Name *</label>
                                <input type="text" name="m_name" class="form-control" id="m_name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="m_position" class="form-label">Position *</label>
                                <input type="text" name="m_position" class="form-control" id="m_position" required>
                            </div>
                            <div class="col-md-6">
                                <label for="facebook" class="form-label">Facebook-Link hinzufügen *</label>
                                <input type="text" name="facebook_link" class="form-control" id="facebook" required>
                            </div>
                            <div class="col-md-6">
                                <label for="twitter" class="form-label">Twitter-Link hinzufügen *</label>
                                <input type="text" name="twitter_link" class="form-control" id="twitter" required>
                            </div>
                            <div class="col-md-6">
                                <label for="instagram" class="form-label">Instagram-Link hinzufügen *</label>
                                <input type="text" name="instagram_link" class="form-control" id="instagram" required>
                            </div>
                            <div class="col-md-4">
                                <label for="p_file" class="form-label">Wählen Sie Bild *</label>
                                <input type="file" name="p_file" class="form-control" id="p_file" required>
                            </div>
                          
                          
                            <div class="col-12">
                                <button type="submit" name="create_member" class="btn btn-primary">Mitglied erstellen</button>
                            </div>
                        </form>
                        <!-------------form close------------->
                    </div>
                    <!-----content-closed------------->
                </div>
            </div>
            <div class="row mt-3">
                <?php create_team_member(); ?>
            </div>
        </div>
        <?php
    
?>


<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>