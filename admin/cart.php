<?php

include 'includes/connection.php';

session_start();
// $user_id = $_SESSION['user_id'];

// if(!isset($user_id)){
//    header('location:login.php');
// }
// session_start();
// $confirm = $_SESSION['confirm'];



// $cus_id = $_SESSION['cus_id'];

// if(!isset($cus_id)){
//    header('location:log-in.php');
// }

if(isset($_POST['update_cart'])){
   $cart_id = $_POST['cart_id'];
   $cart_quantity = $_POST['cart_quantity'];
   include "includes/connection.php";
   mysqli_query($con, "UPDATE `cart` SET pro_quantity = '$cart_quantity' WHERE cart_id = '$cart_id'") or die('query failed');
   $message[] = 'cart quantity updated!';
}


if(isset($_REQUEST['delete'])){

    $p_id = $_REQUEST['p_id'];

    foreach($_SESSION['cart'] AS $key=>$value){
        if($value['p_id'] == $p_id){
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            echo "<script>alert('ITEM REMOVED')</script>";
        }
    }
}


// if(isset($_REQUEST['delete'])){
//    $delete_id = $_GET['delete'];
//    mysqli_query($con, "DELETE FROM `cart` WHERE cart_id = '$delete_id'") or die('query failed');
//    header('location:cart.php');
// }

// if(isset($_GET['delete_all'])){
//    mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
//    header('location:cart.php');
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="shortcut icon" href="images/card-icon.png" type="image/x-icon">
</head>
<body>
   
<?php include 'includes/header.php'; ?>

<!-- main-body part -->

<div class="bg-main-body contact-page">
    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered table-hover text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                    <?php
         $grand_total = 0;
        //  $select_cart = mysqli_query($con, "SELECT * FROM `cart` ") or die('query failed');
        // WHERE cus_id = '$cus_id'
      
    //      if(mysqli_num_rows($select_cart) > 0){
    //         while($fetch_cart = mysqli_fetch_assoc($select_cart)){   
    //   
    

    if(isset($_SESSION['cart'])){

    foreach($_SESSION['cart'] as $key=>$value){

    ?>
                    <tr>
                       
                                <td class="align-middle"><img src="uploads/<?php echo $value['p_image']; ?>" alt="" style="width: 50px;"> <?php echo $value['p_name']; ?></td>


                               

                                <td class="align-middle" id="pPrice" class="pPrice">Rs <?php echo $value['p_price']; ?>/-</td>
                                <td class="align-middle">
                                    <!-- <div class="input-group quantity mx-auto" style="width: 100px;">

                                        <input type="number" class="form-control form-control-sm bg-secondary text-center text-white" value="1">

                                    </div> -->
                                    <form action="" method="post">
            <input type="hidden" name="cart_id" value="<?php echo $value['p_id']; ?>">
            <input type="hidden" name="pPriceEach" id="pPriceEach" class="pPriceEach" value="<?php echo $value['p_price']; ?>">
            
            <input type="number" min="1" max="10" name="cart_quantity" value="1" id="pQuantity" class="pQuantity" onchange="updateTotal(event);">
            
            <!-- <input type="submit" name="update_cart" value="update" class="option-btn"> -->
         </form>
                                </td>
                                <td class="align-middle">
                                    <!-- <span>Rs <?php echo $sub_total = ($value['p_quantity'] * $value['p_price']); ?>/-</span>  -->

                                    <input type="text" name="" id="pTotalPrice" class="pTotalPrice" value="<?php echo $value['p_price'] ?>" readonly>
                                
                                </td>
                               <td>
                                
                               <!-- <a href="cart.php?delete=<?php echo $value['p_id']; ?>" class="fas fa-times" onclick="return confirm('delete this from cart?');">  </a> -->
                            
                               <form action="" method="GET">
                                   <input type="hidden" name="p_id" value="<?php echo $value['p_id']; ?>">
    
                                   <input type="submit" name="delete" value="delete" class="btn btn-danger btn-sm">

                               </form>
                            
                            </td>
                                <!-- <td class="align-middle"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></td> -->
                            </tr>
                            <?php
      $grand_total += $sub_total;
         }
      }else{
         echo '<p class="empty">your cart is empty</p>';
      }
      
      ?>
                            </tbody>
                    </table>
                </div>
                <div class="col-lg-4">

                    <div class="card border-secondary h-auto mb-5">
                        <div class="card-header bg-secondary border-0">
                            <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                        </div>
                        <!-- <div class="card-body">
                            <div class="d-flex justify-content-between mb-3 pt-1">
                                <h6 class="font-weight-medium">Subtotal</h6>
                                <h6 class="font-weight-medium">$150</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-medium">Shipping</h6>
                                <h6 class="font-weight-medium">$10</h6>
                            </div>
                        </div> -->
                        <div class="card-footer border-secondary h-auto bg-transparent">
                            <div class="d-flex justify-content-between mt-2">
                                <h5 class="font-weight-bold">Total</h5>
                                <h5 class="font-weight-bold"><span>Rs <span class="grandTotal"><?php echo $grand_total; ?></span>/-</h5>
                            </div>

                            <?php 
                            $sql = "SELECT * FROM cart ";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_assoc($result);
                            ?>



<form action="purchase.php" method="get" >
    <div class="form-check">
      <input class="form-check-input" type="radio" name="payment_mode" id="COD" value="COD" checked>
      <label class="form-check-label" for="COD">
        Cash On Delievery
      </label>
    </div>



    <div class="mb-3">
      <label for="c_name" class="form-label">Name</label>
      <input type="text"
        class="form-control" name="c_name" id="c_name" placeholder="Enter Your Name" required>
    </div>
   
    <div class="mb-3">
      <label for="c_email" class="form-label">Email</label>
      <input type="text"
        class="form-control" name="c_email" id="c_email" placeholder="Enter Your Email">
    </div>
   
    <div class="mb-3">
      <label for="c_mobile" class="form-label">Mobile No</label>
      <input type="text"
        class="form-control" name="c_mobile" id="c_mobile" placeholder="Enter Your Mobile">
    </div>

    <div class="mb-3">
      <label for="c_address" class="form-label">Your Address</label>
      <textarea class="form-control" name="c_address" id="c_address" rows="3"></textarea>
    </div>

   

    <button type="submit"  name="purchase" class="btn btn-block btn-1 my-3 py-3">Proceed To Checkout</button>

</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart End -->
    </div>


    
    
    
    
    
    
    
    <?php include 'includes/footer.php'; ?>
    
    <!-- custom js file link  -->
    <script src="js/script.js"></script>
    
<script>

    


   $(function () {


    $('.pQuantity').change(function (e) { 
 
        var pPriceEach = document.getElementsByClassName('pPriceEach');
        var pQuantity = document.getElementsByClassName('pQuantity');
        var pTotalPrice = document.getElementsByClassName('pTotalPrice');
        var Total = 0;

        for(i=0; i<pQuantity.length; i=i+1){
            
            pTotalPrice[i].value = pPriceEach[i].value * pQuantity[i].value;

                
        }

        var total = 0;

        for(let i=0; i<pTotalPrice.length; i++){
            total = total + parseInt(pTotalPrice[i].value);
        }
        
        $('.grandTotal').html(total);
        // alert(total);
        
        
    });

   });


</script>


</body>
</html>