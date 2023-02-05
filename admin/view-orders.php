<?php include 'includes/header.php';

$conn = mysqli_connect("localhost", "root", "", "invictus_db");




// DELETE Button CLicked
if(isset($_REQUEST['delete'])){
    $orderId = $_REQUEST['orderId'];
    $sql3 = "DELETE FROM `order_manager` WHERE order_id = '$orderId'";
    if(mysqli_query($conn, $sql3)){
        $sql4 = "DELETE FROM `user_orders` WHERE order_id = '$orderId'";
        if(mysqli_query($conn, $sql4)){
            echo "<script>alert('Record Deleted');</script>";
        }
    }
}

?>
<!-------------Header------------------>
<?php include 'includes/nav.php';?>
<!--------------bar------------------->
<div class="container-fluid bg-dark p-1">
</div>
<!--------------main content area------------------->
<div class="container">
    <div class="row mt-3 mb-3">
    <div class="col-md-12">
        <h2 class="text-danger">Register Customer</h2>
        <a href="" onClick="window.print();return false" class="btn btn-info float-end  pull-right hidden-print wow fadeInDown">Print Order Record</a>
    </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <!-----content--------------------->
            <div class="row">
                <!-------------form ------------->
                <table class="table text-center">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Date</th>
                        <th scope="col">Request For Service</th>
                        <!-- <th scope="col">Order</th> -->
                        

                        <!-- <th colspan="2"></th> -->
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                   // $sr = 1;
                //    $date=date("d:m:Y i:s");
                    $sql1 = "SELECT * FROM customer ORDER BY id DESC";
                    $result1 = mysqli_query($conn, $sql1);
                    while($row1 = mysqli_fetch_assoc($result1)){

                    ?>

                    <tr>
                        <!-- <td><?php // echo $sr++; ?></td> -->
                        <td><?php echo $row1['id'] ?></td>
                        <td><?php echo $row1['cus_name'] ?></td>
                        <td><?php echo $row1['cus_phone'] ?></td>
                        <td><a href="mailto:" class="text-decoration-none text-dark"><?php echo $row1['cus_email'] ?></a> </td>
                        <td><?php echo $row1['cus_request'] ?></td>
                        <td><?php echo $row1['reg_date']; ?></td>
                        
                        <td ><a href="slip.php?order_id=<?php echo $row1['order_id'] ?>" class="btn btn-sm btn-info">View</a>

                        <!-- <form action="" method="GET">
                            <input type="hidden" name="orderId" value="<?php //echo $row1['order_id'] ?>">
                            <button type="submit" name="delete" class="btn btn-danger btn-sm ms-2">Delete</button>
                        </form> -->
                    </td>
                        <!-- <td>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php

                            $orderId = $row1['order_id'];                             
                              $sql2 = "SELECT * FROM user_orders WHERE order_id = '$orderId'";
                              $result2 = mysqli_query($conn, $sql2);
                              while($row2 = mysqli_fetch_assoc($result2)){
                            
                            ?>

                                <tr>
                                    <td scope="row"><?php echo $row2['item_name'] ?></td>
                                    <td scope="row"><?php echo $row2['item_price'] ?></td>
                                    <td scope="row"><?php echo $row2['item_quantity'] ?></td>
                                    
                                </tr>

                                <?php } ?>
                               
                            </tbody>
                        </table>                      
                               

                            
                        </td> -->
                    </tr>

                    
                    <?php 
                    
                } ?>






                    <?php
                 
                    // display_orders();
                    // del_order();
                    ?>

                
                    

                    </tbody>
                </table>
                <!-------------form close------------->
            </div>
            <!-----content-closed------------->
        </div>
    </div>
</div>
<script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>