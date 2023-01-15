
<?php
if(!isset($_SESSION)){
    session_start();

}
$conn = mysqli_connect("localhost", "root", "", "e-stationary");


if(isset($_REQUEST['order_id'])){
    $orderId = $_REQUEST['order_id'];
}else {
    $sql = "SELECT * FROM order_manager ORDER BY order_id DESC";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $orderId = $row['order_id'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unique E-Stationary</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="shortcut icon" href="images/card-icon.png" type="image/x-icon">
</head>

<body>


<div class="container text-center">
    <div class="row my-5">
        <div class="col-md-6">
            <table class="table shadow p-3">

            <tr>
                <td colspan='4'>
                    <h4>Customer Details</h4>
                </td>
            </tr>
            
            <tr>
                <th> Name</th>
                <th> Email</th>
                <th> Phone</th>
                <th> Address</th>
                <th> Date </th>
            </tr>

            <?php 
            $sql1 = "SELECT * FROM `order_manager` WHERE order_id = '$orderId'";
            $result1 = mysqli_query($conn, $sql1);
            while($row1 = mysqli_fetch_assoc($result1)){
            ?>

            <tr>
                <td><?php echo $row1['c_name']; ?></td>
                <td><?php echo $row1['c_email']; ?></td>
                <td><?php echo $row1['c_mobile']; ?></th>
                <td><?php echo $row1['c_address']; ?></td>
                <td><?php echo $row1['o_date']; ?></td>

            </tr>

            <?php } ?>

            <tr>
                <td colspan='4'>
                    <h4>Order Details</h4>
                </td>
            </tr>

                        
            <tr>
                <th>Order ID</th>
                <th>Item Name</th>
                <th>Item Price</th>
                <th>Item Quantity</th>
            </tr>
          

            <?php 
            $sql2 = "SELECT * FROM `user_orders` WHERE order_id = '$orderId'";
            $result2 = mysqli_query($conn, $sql2);
            $grandTotal = 0;
            while($row2 = mysqli_fetch_assoc($result2)){
            ?>
            <tr>
                <td><?php echo $row2['order_id']; ?></td>
                <td><?php echo $row2['item_name']; ?></td>
                <td><?php echo $row2['item_price']; ?></td>
                <td><?php echo $row2['item_quantity']; ?></td>
            </tr>

            

            <?php 
        $grandTotal = $grandTotal + $row2['item_price'] * $row2['item_quantity'] ;
        } ?>


            <tr>
                <th colspan="2">Grand Total</th>
                <td colspan="2">Rs <?php echo $grandTotal; ?></td>
            </tr>

            <tr>
                <td class="d-flex">
                    <button class="btn btn-danger btn-sm d-print-none ms-4" onclick="print();">Print</button> 
                
                    <a href="home.php" class="btn btn-primary btn-sm d-print-none mx-2">Home</a>
                </td>

            </tr>
            </table>
        </div>
    </div>
</div>
    



<script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>