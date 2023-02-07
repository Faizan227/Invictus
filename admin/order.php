<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="shortcut icon" href="images/card-icon.png" type="image/x-icon">
</head>

<body>
    <!-- header-Part -->
    <?php include'includes/header.php' ?>
    <!-- main-body part -->

    <div class="bg-main-body contact-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--Section: Contact v.2-->
                    <section class="mb-4">

                        <!--Section heading-->
                        <h2 class="h1-responsive font-weight-bold mt-5  my-4">Order Penal</h2>
                        <!--Section description-->
                        <p class=" w-responsive mb-5">Feel ask to free if Do you have any questions? Please do not hesitate to contact us directly.<br> Our team will come back to you within a matter of hours to help you.</p>
                    <div class="row">
                        <?php
                        if(isset($_REQUEST['id'])){
                            $where=array(
                                    'p_id'=>$_REQUEST['id']
                            );
                            $data = display_where("products", $where);
                            foreach ($data as $da){}
                        }
                        ?>

                        <img src="uploads/<?php echo $da['p_file']; ?>" class="w-25" alt="">
                        <h4>Product Name: <i> <?php echo $da['p_name']; ?></i></h4>
                            <strong>Price: <?php echo $da['p_price']; ?></strong>
                            <strong>Cash on Delivery</strong>
                        <h4>Delivery Details</h4>
                    </div>
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-9 mb-md-0 mb-5">
                                <form method="post">
                                    <!--Grid row-->
                                    <div class="row">
                                        <!--Grid column-->
                                        <input type="hidden" name="product" class="form-control">
                                        <!-- <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <label for="name" class="">Product name</label>
                                                <input type="text" id="name" name="product" class="form-control" required>

                                            </div>
                                        </div> -->
                                        <!--Grid column-->

                                        <!--Grid column-->
                                       

                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <label for="email" class="">Quantity</label>
                                                <input type="number" id="quantity" name="quantity" class="form-control">

                                            </div>
                                        </div>
                             
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <label for="name" class="">Your name</label>
                                                <input type="text" id="name" name="name" class="form-control">

                                            </div>
                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <label for="email" class="">Your email</label>
                                                <input type="email" id="email" name="email" class="form-control" required>

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <label for="subject" class="">Phone</label>
                                                <input type="text" id="subject" name="phone" class="form-control" required>

                                            </div>
                                        </div>
                                        <!--Grid column-->

                                    </div>
                                    <!--Grid row-->

                                    <!--Grid row-->
                                    <div class="row">
                                        
                                            <!-- <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <label for="email" class="">Date</label>
                                                <input type="date" id="date" name="date" class="form-control" required>

                                            </div>
                                            </div> -->
                                            
                                        
                                    </div>
                                    <!--Grid row-->

                                    <!--Grid row-->
                                    <div class="row">

                                        <!--Grid column-->
                                        <div class="col-md-12">

                                            <div class="md-form">
                                                <label for="address">Shipping Address</label>
                                                <textarea type="text" id="address" name="address" rows="2" class="form-control md-textarea"></textarea>

                                            </div>

                                        </div>
                                        <div class="row" id="datepickup">
    
  </div>

                                        <!-- <input type="date" class="" name="date" id=""> -->
                                    </div>
                                    <!--Grid row-->



                                    

                                    <div class="text-center text-md-left">
                                        <input type="submit" name="order" class="btn btn-1 mt-3" value="Order">
                                    </div>
                                    
                                </form>


                                <div class="status">
                                    <?php
                                  
                                    if(isset($_REQUEST['confirm'])){

                                        $data=array(
                                                "o_name"=>$_REQUEST['name'],
                                                "o_quantity"=>$_REQUEST['quantity'],
                                            "o_email"=>$_REQUEST['email'],
                                            "o_phone"=>$_REQUEST['phone'],
                                            "o_address"=> clean_input( $_REQUEST['address']),
                                            'o_product'=>$_REQUEST['product'],
                                            'o_date'=>$_REQUEST['date']
                                            
                                            
                                        );
                                        if(insert("orders", $data)){
                                            ?>
                                            <div class="alert alert-success">
                                                Your Order has been saved
                                            </div>
                                            <script>
                                                setTimeout(function(){
                                                    window.location="index.php";
                                                },2000);
                                            </script>
                                            <?php
                                        }
                                    }
                                    ?>

                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-3 text-center">
                                <ul class="list-unstyled mb-0">
                                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                        <p>Aminpur Bazar Faisalabad</p>
                                    </li>

                                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                        <p>041-2620292</p>
                                    </li>

                                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                        <p><a href="mailto:abc@gmail.com" class="text-decoration-none text-black">
                                            uniquestationery@gmail.com
                                        </a></p>
                                    </li>
                                </ul>
                            </div>
                            <!--Grid column-->

                        </div>

                    </section>
                    <!--Section: Contact v.2-->
                </div>
            </div>
        </div>
    </div>





    <!-- Footer Start -->
    <?php include 'includes/footer.php' ?>

    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/custom.js"></script>
    <!-- <script type="text/javascript">
    $("#datepickup").hide();
    $(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            if($(this).attr("value")=="Pick-up"){
               
                $("#datepickup").show(200);
               
            }
            else{
                $("#datepickup").hide();
               
            }

        });
    }).change();
    });
    </script> -->
    

</body>

</html>