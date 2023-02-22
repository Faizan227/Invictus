
<?php
                include 'includes/function.php';
        ?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
        		<!-- Favicon -->
     <link rel="icon" type="image/x-icon" href="../images/invictus/invictus-logo.png">
    <title>INVICTUS - Diamant Werkzeuge Essen</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>


<div class="container mt-5">
    <div class="row"></div>
</div>
<div class="container mt-5">
    <div class="row"></div>
</div>
<!-------------upper html is used for margin only------------------>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="img text-center">
            <img src="images/login.png" class="card-img w-50"  alt="">
            </div>
        </div>
        <div class="col-md-6">
            <!----------------------------------------login area---------------------------->
            <form method="post">
            <div class="mb-3">

            </div>
            <div class="mb-3">
                <h2 class="display-4 text-primary">ANMELDUNG</h2>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">E-Mail-Addresse:</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email@gmail.com" name="email" >
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Passwort</label>
                <input type="password" class="form-control" id="pass" placeholder="Passwort" name="pass">
            </div>
            <div class="mb-3 ">
									    
			   <input class="" type="checkbox" onclick="myFunction()" ><label class="ms-2" for="pass">Passwort anzeigen</label> 
				</div> 
            <div class="mb-3">

                <input type="submit" class="btn btn-lg btn-outline-primary" name="login" value="Anmeldung">
                <a class="float-end" href="forgot-password.php">Passwort vergessen?</a>

            </div>
            
            <div class="mb-3">
                
            </div>
            </form>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <?php login(); ?>
        </div>
    </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/custom.js"></script>
<script>
	function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }

}

</script>
</body>
</html>