<?php

session_start();

function create_cat(){
    if(isset($_REQUEST['create_cat'])){
        $title=$_REQUEST['cat_title'];
        $details=$_REQUEST['cat_details'];
         //file uploading
         $file=$_FILES['c_file']['name'];
         $file_name = cat_file_uploading($file);
        include "connection.php";
    $q="INSERT INTO categories (c_name, c_details, c_file) VALUES ('$title','$details','$file_name')";
        $q_run =  mysqli_query($con, $q);
    if($q_run){
        ?>
        <div class="alert alert-success">
            Category Created
        </div>
        <script>
            setTimeout(function(){window.location="categories.php";},2000);
        </script>
        <?php
    }else{
        ?>
        <div class="alert alert-danger">
            Error please Try Again
        </div>
        <?php
    }//else
    }//isset
}//function
function cat_file_uploading($file_name){
    $folder="../uploads/";

    $temp = explode(".", $file_name);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    move_uploaded_file($_FILES["c_file"]["tmp_name"], $folder . $newfilename);
    return $newfilename;
}


function create_post(){
    if(isset($_REQUEST['create_post'])){
        $code=$_REQUEST['p_code'];
        $title=$_REQUEST['p_title'];
        
        $details=$_REQUEST['p_details'];
        $scope=$_REQUEST['p_scope'];
        $dimension=$_REQUEST['p_dimension'];
        $cat=$_REQUEST['p_cat'];
        //file uploading
        $file=$_FILES['p_file']['name'];
        $file_name = file_uploading($file);
        //file uploading closed
        // if(isset($_REQUEST['p_publish'])){
        //     $publish=$_REQUEST['p_publish'];
        // }else{
        //     $publish=0;
        // }
        // if(isset($_REQUEST['p_feature'])){
        //     $feature=$_REQUEST['p_feature'];
        // }else{
        //     $feature=0;
        // }
        include "connection.php";
        $q="INSERT INTO products (p_code,p_name, p_category, p_details, p_dimension,p_scope,p_file) VALUES 
                                                        ('$code','$title','$cat','$details','$dimension','$scope','$file_name')";
        $q_run =  mysqli_query($con, $q);
        echo mysqli_error($con);
        if($q_run){
            ?>
            <div class="alert alert-success">
                Post Created
            </div>
            <script>
                setTimeout(function(){window.location="post.php";},2000);
            </script>
            <?php
        }else{
            ?>
            <div class="alert alert-danger">
                Error please Try Again
            </div>
            <?php
        }//else
    }//isset
}//function

function file_uploading($file_name){
    $folder="../uploads/";

    $temp = explode(".", $file_name);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    move_uploaded_file($_FILES["p_file"]["tmp_name"], $folder . $newfilename);
    return $newfilename;
}


    function display_cat_single(){
        include "connection.php";
        $q="SELECT * FROM categories";
        $q_run =  mysqli_query($con, $q);
        while($data = mysqli_fetch_array($q_run)){
        ?>  <option value="<?php echo $data['c_id']; ?>"><?php echo $data['c_name']; ?></option>  <?php
        }
    }

    function display_cat(){
        include "connection.php";
        $q="SELECT * FROM categories";
        $q_run =  mysqli_query($con, $q);
        $sr=1;
        while($data = mysqli_fetch_array($q_run)){
            ?>
            <tr>
                <th scope="row"><?php echo $sr; $sr++; ?> </th>
                <td ><img src="../uploads/<?php echo $data['c_file']; ?>" title="<?php echo $data['c_name']; ?>" alt="<?php echo $data['c_name']; ?>" style="max-width: 150px;"> </td>
                <td ><?php echo $data['c_name']; ?> </td>
                <td><?php echo $data['c_details']; ?></td>
                <td><a href="?del_cat=<?php echo $data['c_id']; ?>" class="btn btn-danger">Delete</a></td>
                <td><a href="categories.php?edit_cat=<?php echo $data['c_id']; ?>" class="btn btn-primary">Edit</a></td>
            </tr>
            <?php
        }
    }

function display_pro(){
    include "connection.php";
    $q="SELECT * FROM products";
    $q_run =  mysqli_query($con, $q);
    $sr=1;
    while($data = mysqli_fetch_array($q_run)){
        ?>
        <tr>
            <th scope="row"><?php echo $sr; $sr++; ?> </th>
            <td ><img src="../uploads/<?php echo $data['p_file']; ?>" title="<?php echo $data['p_name']; ?>" alt="<?php echo $data['p_name']; ?>" style="max-width: 150px;"> </td>
            <td ><?php echo $data['p_code']; ?> </td>
            <td ><?php echo $data['p_name']; ?> </td>
            <td><?php echo $data['p_details'] ; ?>/-</td>
            <td><?php echo $data['p_scope'] ; ?></td>
            <td><?php echo substr( $data['p_dimension'] ,0,20 ); ?></td>
            <td><a href="?del_post=<?php echo $data['p_id']; ?>" class="btn btn-danger">Delete</a></td>
            <td><a href="post.php?edit_post=<?php echo $data['p_id']; ?>" class="btn btn-primary">Edit</a></td>
        </tr>
        <?php
    }
}

function create_user(){
    if(isset($_REQUEST['create_user'])){
        $name=$_REQUEST['u_name'];
        $phone=$_REQUEST['u_phone'];
        $email=$_REQUEST['u_email'];
        $pass=$_REQUEST['u_pass'];
        $type=$_REQUEST['u_type'];
        $status=1;
        include "connection.php";
        $q="INSERT INTO admin (a_name, a_email, a_password , a_phone, a_type) VALUES 
                                                        ('$name','$email','$pass','$phone','$type')";
        $q_run =  mysqli_query($con, $q);
        echo mysqli_error($con);
        if($q_run){
            ?>
            <div class="alert alert-success">
                User Created
            </div>
            <script>
                setTimeout(function(){window.location="user.php";},2000);
            </script>
            <?php
        }else{
            ?>
            <div class="alert alert-danger">
                Error please Try Again
            </div>
            <?php
        }//else
    }//isset
}

function display_user(){
    include "connection.php";
    $q="SELECT * FROM admin";
    $q_run =  mysqli_query($con, $q);
    $sr=1;
    while($data = mysqli_fetch_array($q_run)){
        ?>
        <tr>
            <th scope="row"><?php echo $sr; $sr++; ?> </th>
            <td ><?php echo $data['a_name']; ?> </td>
            <td><?php echo $data['a_email'] ; ?></td>
            <td><?php echo $data['a_phone']; ?></td>
            <td><?php echo $data['a_type']; ?></td>
            <td><a href="?del_user=<?php echo $data['a_id']; ?>" class="btn btn-danger">Delete</a></td>
            <td><a href="?edit_user=<?php echo $data['a_id']; ?>" class="btn btn-primary">Edit</a></td>
        </tr>
        <?php
    }
}

function del_cat(){
    if(isset($_REQUEST['del_cat'])){
        $id=$_REQUEST['del_cat'];
        include "connection.php";
        $q="DELETE from categories WHERE c_id=".$id;
        $q_run =  mysqli_query($con, $q);
    if($q_run){
        ?>
        <script>
            setTimeout(function(){window.location="view-categories.php";},1000);
        </script>
        <?php
                }
    }
}
function del_post(){
    if(isset($_REQUEST['del_post'])){
        $id=$_REQUEST['del_post'];
        include "connection.php";
        $q="DELETE from products WHERE p_id=".$id;
        $q_run =  mysqli_query($con, $q);
        if($q_run){
            ?>
            <script>
                setTimeout(function(){window.location="view-products.php";},1000);
            </script>
            <?php
        }
    }
}
function del_user(){
    if(isset($_REQUEST['del_user'])){
        $id=$_REQUEST['del_user'];
        include "connection.php";
        $q="DELETE from admin WHERE a_id=".$id;
        $q_run =  mysqli_query($con, $q);
        if($q_run){
            ?>
            <script>
                setTimeout(function(){window.location="view-users.php";},1000);
            </script>
            <?php
        }
    }
}

function edit_cat(){
    if(isset($_REQUEST['edit_cat'])){
     $id=$_REQUEST['edit_cat'];
        include "connection.php";
        $q="SELECT * FROM categories WHERE c_id=".$id;
        $q_run =  mysqli_query($con, $q);
        $data = mysqli_fetch_array($q_run);
        ?>
        <div class="container">
            <div class="row mt-3 mb-3">
                <div class="col-md-12">
                    <h2>Edit Category</h2>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <!-----content--------------------->
                    <div class="row">
                        <!-------------form ------------->
                        <form class="row g-3" method="post">
                            <div class="col-md-12">
                                <label for="cat_title" class="form-label">Category Title</label>
                                <input type="text" class="form-control" id="cat_title" value="<?php echo $data['c_name']; ?>" name="cat_title">
                            </div>
                            <div class="col-md-12">
                                <label for="details" class="form-label">Category Details</label>
                                <textarea class="form-control" name="cat_details" id="details"  cols="30" rows="10"><?php echo $data['c_details']; ?></textarea>
                            </div>

                            <div class="col-12">
                                <button type="submit" name="update_cat" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                        <!-------------form close------------->
                    </div>
                    <!-----content-closed------------->
                </div>
            </div>
            <div class="row mt-3">
                <?php //// on success
                if(isset($_REQUEST['update_cat'])){
                    $title=$_REQUEST['cat_title'];
                    $details=$_REQUEST['cat_details'];

                    $q="UPDATE categories SET c_name='$title', c_details = '$details' WHERE c_id='$id'";
                    $q_run =  mysqli_query($con, $q);

                    if($q_run){
                        ?>
                        <div class="alert alert-success">
                            Category Updated
                        </div>
                        <script>
                            setTimeout(function(){window.location="view-categories.php";},2000);
                        </script>
                    <?php
                    }else{
                    ?>
                        <div class="alert alert-danger">
                            Error please Try Again
                        </div>
                        <?php
                    }//else
                }

                 ?>
            </div>
        </div>
        <?php
    }
}

function edit_post(){
    if(isset($_REQUEST['edit_post'])){
        $id=$_REQUEST['edit_post'];
        include "connection.php";
        $q="SELECT * FROM products WHERE p_id=".$id;
        $result =  mysqli_query($con, $q);
        $data = mysqli_fetch_array($result);
        ?>
        <div class="container">
            <div class="row mt-3 mb-3">
                <div class="col-md-12">
                    <h2>Post</h2>
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
                                <input type="text" name="p_code" class="form-control" value="<?php echo $data['p_code']; ?>" id="code">
                            </div>    
                        <div class="col-md-6">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="p_title" value="<?php echo $data['p_name']; ?>" class="form-control" id="title">
                            </div>
                           
                            <div class="col-md-6">
                                <label for="price" class="form-label">Characteristics</label>
                                <textarea  class="form-control" id="details" name="p_details" rows="5"><?php echo $data['p_details']; ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="price" class="form-label">Scope</label>
                                <textarea  class="form-control" id="scope" name="p_scope"  rows="5"><?php echo $data['p_scope']; ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="price" class="form-label">Dimension</label>
                                <textarea  class="form-control" id="dimension" name="p_dimension"  rows="5"><?php echo $data['p_dimension']; ?></textarea>
                            </div>

                            <div class="col-md-12">
                                <label for="inputState" class="form-label">Category</label>
                                <select id="inputState" class="form-select" name="p_cat">
                                    <option value="0" selected>Choose...</option>
                                    <?php display_cat_single(); ?>
                                </select>
                            </div>

                            <div class="col-12">
                                <button type="submit" name="update_post" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                        <!-------------form close------------->
                    </div>
                    <!-----content-closed------------->
                </div>
            </div>
            <div class="row mt-3">
                <?php //// on success
                if(isset($_REQUEST['update_post'])){
                    $code=$_REQUEST['p_code'];
                    $title=$_REQUEST['p_title'];
                    $details=$_REQUEST['p_details'];
                    $scope=$_REQUEST['p_scope'];
                    $dimension=$_REQUEST['p_dimension'];
                    $cat=$_REQUEST['p_cat'];
                    include "connection.php";
                    $q="UPDATE products SET p_code='$code', p_name='$title', p_category='$cat', p_details='$details', p_scope='$scope' , p_dimension='$dimension' WHERE p_id=".$id;
                    $q_run =  mysqli_query($con, $q);
                    echo mysqli_error($con);
                    if($q_run){
                        ?>
                        <div class="alert alert-success">
                            Post Updated
                        </div>
                        <script>
                            setTimeout(function(){window.location="view-products.php";},2000);
                        </script>
                    <?php
                    }else{
                    ?>
                        <div class="alert alert-danger">
                            Error please Try Again
                        </div>
                        <?php
                    }//else
                }

                ?>
            </div>
        </div>
        <?php
    }
}


function login(){
    if(isset($_REQUEST['login'])){
        $email = $_REQUEST['email'];
        $pass = $_REQUEST['pass'];
        if($email!="" && $pass!=""){
            include "connection.php";
            $query="SELECT * FROM admin WHERE a_email='$email' AND a_password='$pass'";
            $q_run = mysqli_query($con, $query);
            $login_data = mysqli_fetch_array($q_run);
            if($login_data['a_email']==$email && $login_data['a_password']==$pass ){
                ?>
                <div class="alert alert-success">Login successful! Please Wait...</div>
                <?php
                $_SESSION['id']=$login_data['a_id'];
                $_SESSION['email']=$login_data['a_email'];
                ?>
                <script>
                    setTimeout( function(){window.location="home.php" } ,3000);
                </script>

                <?php
            }else{
                ?>
                <div class="alert alert-danger">Invalid Email or Password</div>
                <?php
            }


        }else{
            ?>
            <div class="alert alert-danger">Please Enter Email or Password</div>
            <?php
        }

    }
}

function logout(){
    if(isset($_REQUEST['logout'])){
        session_destroy();
        ?>
        <script>
            setTimeout( function(){window.location="index.php" } ,2000);
        </script>

        <?php
    }

}


function display_cat_count(){
    include "connection.php";
    $q="SELECT * FROM categories";
    $q_run =  mysqli_query($con, $q);
    echo mysqli_num_rows($q_run);

}
function display_customer_count(){
    include "connection.php";
    $q="SELECT * FROM customer";
    $q_run =  mysqli_query($con, $q);
    echo mysqli_num_rows($q_run);

}
function display_pro_count(){
    include "connection.php";
    $q="SELECT * FROM products";
    $q_run =  mysqli_query($con, $q);
    echo mysqli_num_rows($q_run);

}
function display_user_count(){
    include "connection.php";
    $q="SELECT * FROM admin";
    $q_run =  mysqli_query($con, $q);
    echo mysqli_num_rows($q_run);

}
function display_query_count(){
    include "connection.php";
    $q="SELECT * fROM query";
    $q_run = mysqli_query($con, $q);
    echo mysqli_num_rows($q_run);
}
function del_order(){
    if(isset($_REQUEST['del_order'])){
        $id=$_REQUEST['del_order'];
        include "connection.php";
        $q="DELETE from orders WHERE o_id=".$id;
        $q_run =  mysqli_query($con, $q);
        if($q_run){
            ?>
            <script>
                setTimeout(function(){window.location="view-orders.php";},1000);
            </script>
            <?php
        }
    }
}
function display_orders(){
    include "connection.php";
    $q="SELECT * FROM orders ORDER BY o_id DESC";
    $q_run =  mysqli_query($con, $q);
    // $sr=1;
    $date=date("d:M:Y");
    while($data = mysqli_fetch_array($q_run)){
        ?>
        <tr>
            <!-- <th scope="row"><?php //echo $sr; $sr++; ?> </th> -->
            <th scope="row"><?php echo $data['o_id']; ?> </th>
            <td ><?php echo $data['o_name']; ?> </td>
            <td><?php echo $data['o_address'] ; ?></td>
            <td><?php echo $data['o_phone']; ?></td>
            <td><?php echo $data['o_product']; ?></td>
            <td><?php echo $data['o_quantity']; ?></td>
            <!-- <td><?php //echo $date;?></td> -->
            <td><?php echo $data['o_date'];?></td>
            <!-- <td><?php //echo $data['p_file']; ?></td> -->
            <!-- <td><?php // echo $data['status'];?></td> -->

            <td><a href="?del_order=<?php echo $data['o_id']; ?>" class="btn btn-danger">Delete</a></td>
            <!-- <td><form method="post" action=""></td> -->
<!-- <td>
<form method="post" action="">
 <button type="submit" name="approved" value="1" class="btn btn-primary">Approve</button>
 <button type="submit" name="rejected"  value="0" class="btn btn-primary">Reject</button>
    </form>
</td> -->
      <!-- </form></td> -->
                       <!-- <td><a href="?edit_query=--><?php //echo $data['q_id']; ?><!--" class="btn btn-primary">Edit</a></td> -->

        </tr>
        <?php
    }
}

function display_query(){
    include "connection.php";
    $q="SELECT * FROM query ORDER BY q_id DESC";
    $q_run =  mysqli_query($con, $q);
    // $count=100;
    while($data = mysqli_fetch_array($q_run)){
        ?>
        <tr>
            <!-- <th scope="row"><?php //echo $count; $count--; ?> </th> -->
            <th scope="row"><?php echo $data['q_id']; ?> </th>
            <td ><?php echo $data['q_name']; ?> </td>
            <td><?php echo $data['q_email'] ; ?></td>
            <td><?php echo $data['q_details']; ?></td>

            <td><a href="?del_query=<?php echo $data['q_id']; ?>" class="btn btn-danger">Delete</a></td>
            <!--            <td><a href="?edit_query=--><?php //echo $data['q_id']; ?><!--" class="btn btn-primary">Edit</a></td>
-->
        </tr>
        <?php
    }
}
function del_query(){
    if(isset($_REQUEST['del_query'])){
        $id=$_REQUEST['del_query'];
        include "connection.php";
        $q="DELETE from query WHERE q_id=".$id;
        $q_run =  mysqli_query($con, $q);
        if($q_run){
            ?>
            <script>
                setTimeout(function(){window.location="view-query.php";}, 1000);
            </script>
            <?php
        }
    }
}

