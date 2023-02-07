<?php include 'includes/header.php';

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
        <h2 class="text-danger">Orders</h2>
        <a href="" onClick="window.print();return false" class="btn btn-info float-end  pull-right hidden-print wow fadeInDown">Print Order Record</a>
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
                        <th scope="col">Address</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Product</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Date</th>
                        <th scope="col">action</th>
                        <th scope="col">Status</th>

                        <th colspan="2"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                 
                    display_orders();
                    del_order();
                    ?>
                    
<?php

// if (isset($_POST['approved'])){
//     //$status=$_REQUEST['approved'];
//     // $id=$_POST['approved'];
//     $id="";
//  $status="Approved";
// //  $id= 'o_id';
// include 'includes/connection.php';
// //UPDATE `orders` SET `status` = 'approved' WHERE `orders`.`o_id` = 2
//         $q = "UPDATE orders SET status = '$status' where o_quantity >=10";
//         $q_run =  mysqli_query($con, $q);
//              echo mysqli_error($con);

// }

// if (isset($_POST['rejected'])){
// $id=$_POST['rejected'];
//  $status="Rejected"; 
// //  $id = 'o_id';   
// include 'includes/connection.php';
// $q = "UPDATE orders SET status = '$status' where o_quantity < 10";
// $q_run =  mysqli_query($con, $q);
//              echo mysqli_error($con);
// }

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