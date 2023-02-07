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
        <h2>User</h2>
    </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <!-----content--------------------->
            <div class="row">
                <!-------------form ------------->
                <form class="row g-3" method="post">
                    <div class="col-md-12">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="u_name">
                    </div>

                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" name="u_email">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" name="u_pass">
                    </div>
                    <div class="col-12">
                        <label for="number" class="form-label">Phone</label>
                        <input type="number" class="form-control" id="number" name="u_phone" placeholder="0300 456 123 5">
                    </div>
                   <div class="col-12">
                       <label for="role" class="form-label"></label>
                       <select name="u_type" id="role" class="form-select" >
                           <option value="admin">Admin</option>
                           <option value="editor">Editor</option>
                       </select>
                   </div>
                    <div class="col-12">
                        <button type="submit"  name="create_user" class="btn btn-primary">Sign in</button>
                    </div>
                </form>
                <!-------------form close------------->
            </div>
            <div class="row mt-3">

                <?php create_user(); ?>

            </div>
            <!-----content-closed------------->
        </div>
    </div>
</div>


<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>