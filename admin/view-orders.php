<?php include 'includes/header.php';
?>
<!-------------Header------------------>
<?php include 'includes/nav.php';?>
<!--------------bar------------------->
<div class="container-fluid bg-info p-1">
</div>
<!--------------main content area------------------->
<div class="container">
    <div class="row mt-3 mb-3">
    <div class="col-md-12">
        <h2 class="text-danger">Kunde registrieren</h2>
        <a href="" onClick="window.print();return false" class="btn btn-info float-end  pull-right hidden-print wow fadeInDown">Kundendatensatz drucken</a>
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
                        
                        <th scope="col">E-mail</th>
                        <th scope="col">Telefon</th>
                        
                        <th scope="col">Name der Firma</th>
                        <th scope="col">Firma Rg-Nr.</th>
                        <th scope="col">Datum</th>
                        
                        <!-- <th scope="col">Order</th> -->
                        

                        <!-- <th colspan="2"></th> -->
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    // $sr = 1;
                //    $date=date("d:m:Y i:s");
                   include "includes/connection.php";
                    $sql1 = "SELECT * FROM customer ORDER BY cus_id DESC";                    
                    $result1 = mysqli_query($con, $sql1);
                    while($row1 = mysqli_fetch_assoc($result1)){
                    ?>
                    <tr>
                        <!-- <td><?php  //echo $sr++; ?></td> -->
                        <td><?php echo $row1['cus_id'] ?></td>
                        <td><a href="mailto:" class="text-decoration-none text-dark"><?php echo $row1['cus_email'] ?></a> </td>
                        <td><?php echo $row1['cus_phone'] ?></td>
                        <td><?php echo $row1['company_name'] ?></td>
                        <td><?php echo $row1['com_reg_no']; ?></td>
                        <td><?php echo $row1['reg_date']; ?></td>                        
                        <td ><a href="slip.php?order_id=<?php echo $row1['order_id'] ?>" class="btn btn-sm btn-info">Sicht</a>
                       </td>
                    </tr>                    
                    <?php                     
                } ?>
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