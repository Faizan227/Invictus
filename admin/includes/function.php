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
        Kategorie erstellt
        </div>
        <script>
            setTimeout(function(){window.location="categories.php";},2000);
        </script>
        <?php
    }else{
        ?>
        <div class="alert alert-danger">
        Fehler bitte versuchen Sie es erneut
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
        $machine = $_REQUEST['machine'];
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
        $q="INSERT INTO products (p_code,p_name, p_category, p_details, p_dimension,p_scope,machine,p_file) VALUES 
                                                        ('$code','$title','$cat','$details','$dimension','$scope','$machine','$file_name')";
        $q_run =  mysqli_query($con, $q);
        echo mysqli_error($con);
        if($q_run){
            ?>
            <div class="alert alert-success">
            Produkt erstellt
            </div>
            <script>
                setTimeout(function(){window.location="post.php";},2000);
            </script>
            <?php
        }else{
            ?>
            <div class="alert alert-danger">
            Fehler bitte versuchen Sie es erneut
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
                <td><a href="?del_cat=<?php echo $data['c_id']; ?>" class="btn btn-danger">Löschen</a></td>
                <td><a href="categories.php?edit_cat=<?php echo $data['c_id']; ?>" class="btn btn-primary">Bearbeiten</a></td>
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
            <!-- <th scope="row"><?php // echo $sr; $sr++; ?> </th> -->
            <td ><?php echo $data['p_code']; ?> </td>
            <td ><img src="../uploads/<?php echo $data['p_file']; ?>" title="<?php echo $data['p_name']; ?>" alt="<?php echo $data['p_name']; ?>" style="max-width: 150px;"> </td>
            
            <td ><?php echo $data['p_name']; ?> </td>
            
            <td><?php echo $data['p_details'] ; ?></td>
            <td><?php echo $data['p_scope'] ; ?></td>
            <td ><?php echo $data['machine']; ?> </td>
            <td><?php echo substr( $data['p_dimension'] ,0,20 ); ?></td>
            <td><a href="?del_post=<?php echo $data['p_id']; ?>" class="btn btn-danger">Löschen</a></td>
            <td><a href="post.php?edit_post=<?php echo $data['p_id']; ?>" class="btn btn-primary">Bearbeiten</a></td>
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
                                                        ('$name','$email',md5('$pass'),'$phone','$type')";
        $q_run =  mysqli_query($con, $q);
        echo mysqli_error($con);
        if($q_run){
            ?>
            <div class="alert alert-success">
            Benutzer erstellt
            </div>
            <script>
                setTimeout(function(){window.location="user.php";},2000);
            </script>
            <?php
        }else{
            ?>
            <div class="alert alert-danger">
            Fehler, bitte versuchen Sie es erneut
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
            <td><a href="?del_user=<?php echo $data['a_id']; ?>" class="btn btn-danger">Löschen</a></td>
            <td><a href="?edit_user=<?php echo $data['a_id']; ?>" class="btn btn-primary">Bearbeiten</a></td>
        </tr>
        <?php
    }
}
function create_team_member(){
    if(isset($_REQUEST['create_member'])){
        $name=$_REQUEST['m_name'];
        $position=$_REQUEST['m_position'];
        $facebook=$_REQUEST['facebook_link'];
        $twitter=$_REQUEST['twitter_link'];
        $instagram=$_REQUEST['instagram_link'];
        $file=$_FILES['p_file']['name'];
        $file_name = file_uploading($file);
        include "connection.php";
        $q="INSERT INTO team_member (m_name, m_post, m_image ,facebook_link , twitter_link,instagram_link ) VALUES 
                            ('$name','$position','$file_name','$facebook','$twitter','$instagram')";
        $q_run =  mysqli_query($con, $q);
        echo mysqli_error($con);
        if($q_run){
            ?>
            <div class="alert alert-success">
            Teammitglied erstellt
            </div>
            <script>
                setTimeout(function(){window.location="team-member.php";},2000);
            </script>
            <?php
        }else{
            ?>
            <div class="alert alert-danger">
            Fehler bitte versuchen Sie es erneut
            </div>
            <?php
        }//else
    }//isset
}
function display_team_member(){
    include "connection.php";
    $q="SELECT * FROM team_member";
    $q_run =  mysqli_query($con, $q);
    $sr=1;
    while($data = mysqli_fetch_array($q_run)){
        ?>
        <tr>
            <th scope="row"><?php echo $sr; $sr++; ?> </th>
            <td ><img src="../uploads/<?php echo $data['m_image']; ?>" title="<?php echo $data['m_name']; ?>" alt="<?php echo $data['m_name']; ?>" style="max-width: 150px;"> </td>
            <td ><?php echo $data['m_name']; ?> </td>
            <td ><?php echo $data['m_post']; ?> </td>
            <td><a href="?del_member=<?php echo $data['m_id']; ?>" class="btn btn-danger">Mitglied löschen</a></td>
            <!-- <td><a href="post.php?edit_post=<?php //echo $data['p_id']; ?>" class="btn btn-primary">Edit</a></td> -->
        </tr>
        <?php
    } 
}
function del_team_member(){
    if(isset($_REQUEST['del_member'])){
        $id=$_REQUEST['del_member'];
        include "connection.php";
        $q="DELETE from team_member WHERE m_id=".$id;
        $q_run =  mysqli_query($con, $q);
    if($q_run){
        ?>
        <script>
            setTimeout(function(){window.location="view-team-member.php";},1000);
        </script>
        <?php
                }
    }
}
function create_testimonial(){
    if(isset($_REQUEST['create_testimonial'])){
        $name=$_REQUEST['cl_name'];
        $address=$_REQUEST['cl_address'];
        $review=$_REQUEST['cl_review'];
        
        include "connection.php";
        $q="INSERT INTO testimonial (cl_name, cl_city, cl_review ) VALUES 
                            ('$name','$address','$review')";
        $q_run =  mysqli_query($con, $q);
        echo mysqli_error($con);
        if($q_run){
            ?>
            <div class="alert alert-success">
                Testimonial Erstellt
            </div>
            <script>
                setTimeout(function(){window.location="add-testimonial.php";},2000);
            </script>
            <?php
        }else{
            ?>
            <div class="alert alert-danger">
            Fehler, bitte versuchen Sie es erneut
            </div>
            <?php
        }//else
    }//isset
}
function display_testimonial(){
    include "connection.php";
    $q="SELECT * FROM testimonial";
    $q_run =  mysqli_query($con, $q);
    $sr=1;
    while($data = mysqli_fetch_array($q_run)){
        ?>
        <tr>
            <th scope="row"><?php echo $sr; $sr++; ?> </th>
            <td colspan="4"><?php echo $data['cl_name']; ?> </td>
            <td colspan="4"><?php echo $data['cl_city']; ?> </td>
            <td><?php echo $data['cl_review'] ; ?></td>
            
            <td><a href="?del_testi=<?php echo $data['cl_id']; ?>" class="btn btn-danger">Testimonial löschen</a></td>
            <!-- <td><a href="post.php?edit_post=<?php //echo $data['p_id']; ?>" class="btn btn-primary">Edit</a></td> -->
        </tr>
        <?php
    }
}
function del_testimonial(){
    if(isset($_REQUEST['del_testi'])){
        $id=$_REQUEST['del_testi'];
        include "connection.php";
        $q="DELETE from testimonial WHERE cl_id=".$id;
        $q_run =  mysqli_query($con, $q);
    if($q_run){
        ?>
        <script>
            setTimeout(function(){window.location="view-testimonial.php";},1000);
        </script>
        <?php
                }
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
                    <h2>Kategorie bearbeiten</h2>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <!-----content--------------------->
                    <div class="row">
                        <!-------------form ------------->
                        <form class="row g-3" method="post" enctype="multipart/form-data">
                            <div class="col-md-12">
                                <label for="cat_title" class="form-label">Kategorietitel</label>
                                <input type="text" class="form-control" id="cat_title" value="<?php echo $data['c_name']; ?>" name="cat_title">
                            </div>
                            <div class="col-md-12">
                                <label for="details" class="form-label">Kategoriedetails</label>
                                <textarea class="form-control" name="cat_details" id="details"  cols="30" rows="10"><?php echo $data['c_details']; ?></textarea>
                            </div>
                            <div class="col-md-3">
                                <label for="price" class="form-label">Bild</label>
                                <img src="../uploads/<?php echo $data['c_file']; ?>" title="<?php echo $data['c_name']; ?>" alt="<?php echo $data['c_name']; ?>" style="max-width: 150px;"> 
                                
                            </div>
                            <div class="col-md-3">
                                <label for="file" class="form-label">Bild ändern</label>
                                <input type="file" name="new_file"  class="form-control"  id="file">
                                <input type="hidden" name="old_file" value="<?php echo $data['c_file']; ?>" class="form-control"  id="file">
                            </div>

                            <div class="col-12">
                                <button type="submit" name="update_cat" class="btn btn-primary">Aktualisieren</button>
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
                    $oldimage=$_REQUEST['old_file'];
                    $file = $_FILES['new_file']['name'];
                   
                    
                    if(empty($_REQUEST['cat_title'])||empty($_REQUEST['cat_details']))
		            {
                        ?>
                        <div class="alert alert-danger">
                        Alle Felder erforderlich
                        </div>
                        <?php

                    }
                    else
                        { 
                            if($file != '')
                            {
                               $file_name = cat_update_file_uploading($file);
                            }else{
                               $file_name = $oldimage;
                            }    
                            
                    
                    
                    $q="UPDATE categories SET c_name='$title', c_details = '$details', c_file='$file_name' WHERE c_id='$id'";
                    $q_run =  mysqli_query($con, $q);
                    
                    if($q_run){
                        ?>
                        <div class="alert alert-success">
                        Kategorie aktualisiert
                        </div>
                        <script>
                            setTimeout(function(){window.location="view-categories.php";},2000);
                        </script>
                    <?php
                    }else{
                    ?>
                        <div class="alert alert-danger">
                        Fehler Bitte versuchen Sie es erneut
                        </div>
                        <?php
                    }//else
                }
            }

                 ?>
            </div>
        </div>
        <?php
    }
}
function cat_update_file_uploading($file_name){
    $folder="../uploads/";

    $temp = explode(".", $file_name);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    move_uploaded_file($_FILES["new_file"]["tmp_name"], $folder . $newfilename);
    return $newfilename;
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
                    <h2>Produkt bearbeiten</h2>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <!-----content--------------------->
                    <div class="row">
                        <!-------------form ------------->
                        <form class="row g-3" method="post" enctype="multipart/form-data">
                        <div class="col-md-3">
                                <label for="price" class="form-label">Code *</label>
                                <input type="text" name="p_code" class="form-control" value="<?php echo $data['p_code']; ?>" id="code">
                            </div>    
                        <div class="col-md-4">
                                <label for="title" class="form-label">Titel *</label>
                                <input type="text" name="p_title" value="<?php echo $data['p_name']; ?>" class="form-control" id="title">
                            </div>
                            <div class="col-md-4">
                                <!-- <label for="price" class="form-label">Images</label> -->
                                <img src="../uploads/<?php echo $data['p_file']; ?>" title="<?php echo $data['p_name']; ?>" alt="<?php echo $data['p_name']; ?>" style="max-width: 150px;"> 
                                
                           
                                <label for="file" class="form-label">Bild ändern</label>
                                <input type="file" name="new_p_file" value="" class="form-control"  id="file">
                                <input type="hidden" name="old_file" value="<?php echo $data['p_file']; ?>" class="form-control"  id="file">
                            </div>

                            <div class="col-md-6">
                                <label for="price" class="form-label">Eigenschaften *</label>
                                <textarea  class="form-control" id="details" name="p_details" rows="5"><?php echo $data['p_details']; ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="price" class="form-label">Umfang *</label>
                                <textarea  class="form-control" id="scope" name="p_scope"  rows="5"><?php echo $data['p_scope']; ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="machine" class="form-label">Maschine *</label>
                                <textarea  class="form-control" id="machine" name="machine"  rows="5"><?php echo $data['machine']; ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="price" class="form-label">Abmessungen * (Verwenden Sie & dort, wo Sie den Wert in der nächsten Zeile anzeigen möchten)</label>
                                <textarea  class="form-control" id="dimension" name="p_dimension"  rows="5"><?php echo $data['p_dimension']; ?></textarea>
                            </div>
                           
                            <div class="col-md-12">
                                <label for="inputState" class="form-label">Kategorie *</label>
                                <select id="inputState" class="form-select" name="p_cat">
                                    <option value="0" selected>Wählen...</option>
                                    <?php display_cat_single(); ?>
                                </select>
                            </div>

                            <div class="col-12">
                                <button type="submit" name="update_post" class="btn btn-primary">Aktualisieren</button>
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
                    $machine=$_REQUEST['machine'];
                    $dimension=$_REQUEST['p_dimension'];
                    $cat=$_REQUEST['p_cat'];
                    $oldfile=$_REQUEST['old_file'];
                    //file uploading
                   $file=$_FILES['new_p_file']['name'];
                //    if(empty($_REQUEST['p_title'])||empty($_REQUEST['p_details'])||empty($_REQUEST['p_scope'])||empty($_REQUEST['p_cat']))
                   if(empty($_REQUEST['p_cat']))

                   {
                       ?>
                       <div class="alert alert-danger">
                       Alle Felder erforderlich
                       </div>
                       <?php

                   }
                   else{
                    if($file != '')
                    {
                       $file_name = pro_update_file_uploading($file);
                    }else{
                       $file_name = $oldfile;
                    }   
                    include "connection.php";
                    $q="UPDATE products SET p_code='$code', p_name='$title', p_category='$cat', p_details='$details', p_scope='$scope' , machine='$machine' , p_dimension='$dimension' ,p_file='$file_name' WHERE p_id=".$id;
                    $q_run =  mysqli_query($con, $q);
                    echo mysqli_error($con);
                    if($q_run){
                        ?>
                        <div class="alert alert-success">
                        Produkt aktualisiert
                        </div>
                        <script>
                            setTimeout(function(){window.location="view-products.php";},2000);
                        </script>
                    <?php
                    }else{
                    ?>
                        <div class="alert alert-danger">
                        Fehler bitte versuchen Sie es erneut
                        </div>
                        <?php
                    }//else
                }
            }

                ?>
            </div>
        </div>
        <?php
    }
}
function pro_update_file_uploading($file_name){
    $folder="../uploads/";

    $temp = explode(".", $file_name);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    move_uploaded_file($_FILES["new_p_file"]["tmp_name"], $folder . $newfilename);
    return $newfilename;
}
function update_file_uploading($file_name){
    $folder="../uploads/";

    $temp = explode(".", $file_name);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    move_uploaded_file($_FILES["p_file"]["tmp_name"], $folder . $newfilename);
    return $newfilename;
}


function login(){
    if(isset($_REQUEST['login'])){
        $email = $_REQUEST['email'];
        $pass = $_REQUEST['pass'];
        if($email!="" && $pass!=""){
            include "connection.php";
            $query="SELECT * FROM admin WHERE a_email='$email' AND a_password=md5('$pass')";
            $q_run = mysqli_query($con, $query);
            $login_data = mysqli_fetch_array($q_run);
            if($login_data['a_email']==$email && $login_data['a_password']==md5($pass) ){
                ?>
                <div class="alert alert-success">Anmeldung erfolgreich! Warten Sie mal...</div>
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
                <div class="alert alert-danger">Ungültige E-Mail oder Passwort</div>
                <?php
            }


        }else{
            ?>
            <div class="alert alert-danger">Bitte E-Mail oder Passwort eingeben</div>
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
    $q="SELECT * fROM messages";
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
    $q="SELECT * FROM messages ORDER BY msg_id DESC";
    $q_run =  mysqli_query($con, $q);
    // $count=100;
    while($data = mysqli_fetch_array($q_run)){
        ?>
        <tr>
            <!-- <th scope="row"><?php //echo $count; $count--; ?> </th> -->
            <th scope="row"><?php echo $data['msg_id']; ?> </th>
            <td ><?php echo $data['sen_name']; ?> </td>
            <td><?php echo $data['sen_email'] ; ?></td>
            <td><?php echo $data['sen_phone'] ; ?></td>
            <td><?php echo $data['date'] ; ?></td>
            <td ><p class="text-justify"><?php echo $data['message']; ?></p></td>

            <td><a href="?del_query=<?php echo $data['msg_id']; ?>" class="btn btn-danger">Löschen</a></td>
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
        $q="DELETE from messages WHERE msg_id=".$id;
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
function create_company_brand(){
    if(isset($_REQUEST['create_brand'])){
        $file=$_FILES['p_file']['name'];
        $file_name = file_uploading($file);
        include "connection.php";
        $q="INSERT INTO brand_logo (brand_pic) VALUES 
                            ('$file_name')";
        $q_run =  mysqli_query($con, $q);
        echo mysqli_error($con);
        if($q_run){
            ?>
            <div class="alert alert-success">
            Marke erstellt
            </div>
            <script>
                setTimeout(function(){window.location="add-company-logo.php";},2000);
            </script>
            <?php
        }else{
            ?>
            <div class="alert alert-danger">
            Fehler bitte versuchen Sie es erneut
            </div>
            <?php
        }//else
    }//isset
}
function display_company_brand(){
    include "connection.php";
    $q="SELECT * FROM brand_logo";
    $q_run =  mysqli_query($con, $q);
    $sr=1;
    while($data = mysqli_fetch_array($q_run)){
        ?>
         <tr>
            <th scope="row"><?php echo $sr; $sr++; ?> </th>
            <td ><img src="../uploads/<?php echo $data['brand_pic']; ?>" title="" alt="" style="max-width: 150px;"> </td>
           
            <td><a href="?del_brand=<?php echo $data['id']; ?>" class="btn btn-danger">Firmenlogo löschen</a></td>
            <!-- <td><a href="post.php?edit_post=<?php //echo $data['p_id']; ?>" class="btn btn-primary">Edit</a></td> -->
        </tr>
        <?php
    } 
}
function del_company_brand(){
    if(isset($_REQUEST['del_brand'])){
        $id=$_REQUEST['del_brand'];
        include "connection.php";
        $q="DELETE from brand_logo WHERE id=".$id;
        $q_run =  mysqli_query($con, $q);
    if($q_run){
        ?>
        <script>
            setTimeout(function(){window.location="view-company-brand.php";},1000);
        </script>
        <?php
                }
    }
}
?>
