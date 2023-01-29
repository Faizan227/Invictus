<?php
include "connection.php";
if(!isset($_SESSION)){
    session_start();
}
function message(){
    if(isset($_REQUEST['send_message'])){
      $name = $_REQUEST['name'];
      $email = $_REQUEST['email'];
      $phone = $_REQUEST['phone'];
      $message = $_REQUEST['message'];
      include "connection.php";
      $query = "INSERT INTO message (sen_name,sen_email,sen_phone,message) VALUES ('$name','$email','$phone',$message)";
      $q_run = mysqli_query($con, $query);
        
        echo mysqli_error($con);
        if($q_run){ ?> 
                             <div class="contact-form-success alert alert-success d-none mt-4">
                                    <strong>Success!</strong> Your message has been sent to us.
                                </div>
        <?php

    }else{ ?>
                          <div class="contact-form-error alert alert-danger d-none mt-4">
                                    <strong>Error!</strong> There was an error sending your message.
                                    <span class="mail-error-message text-1 d-block"></span>
                                </div>
        <?php
    }

    }
}


function insert($table, $data){
    $response=0;
    include "connection.php";
     $query= "INSERT INTO " . $table. " ( " .implode(" , ", array_keys( $data)) .")  VALUES ('"
    .implode("','", array_values($data)) ."')";
     $q_run = mysqli_query($con, $query);
     echo mysqli_error($con);
     if($q_run){
         $response=1;
     }else{
         $response=0;
     }
     return $response;
}
function insert_last_id($table, $data){
    $response=0;
    include "connection.php";

    $query= "INSERT INTO " . $table. " ( " . implode(" , ", array_keys( $data)) .")  VALUES ('"
        .implode("','", array_values($data)) ."')";
    $q_run = mysqli_query($con, $query);
    $last_id=mysqli_insert_id($con);
    mysqli_error($con);
    if($q_run){
        $response=$last_id;
    }else{
        $response=0;
    }
    return $response;
}
function upload_file($filed_name, $folder){
    $file_name = $_FILES[$filed_name]['name'];
    $temp = explode(".", $_FILES[$filed_name]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $path = $folder.$newfilename;
    $up_done = move_uploaded_file($_FILES[$filed_name]['tmp_name'],$path);
    if($up_done){
        return  $newfilename;
    }else{
        return 0;
    }
}
function display_simple($table){
    include "connection.php";
    $q="SELECT * FROM ".$table;
    $results = mysqli_query($con, $q);
    if(mysqli_num_rows($results)>0){
        while($data= mysqli_fetch_array($results)){
            $ary[]=$data;
        }//while
    }else{
        $ary["error"]=0;
    }
    return $ary;
    mysqli_free_result($results);
}//function display

function display_join_simple($tableA, $a_attribute, $tableB, $b_attribute ){
    include "connection.php";
    $q="SELECT * FROM ".$tableA." INNER JOIN ".$tableB." ON ".
        $tableA.$a_attribute." = ".$tableB.$b_attribute  ;
    $results = mysqli_query($con, $q);
    if(mysqli_num_rows($results)>0){
        while($data= mysqli_fetch_array($results)){
            $ary[]=$data;
        }//while
    }else{
        $ary["error"]=0;
    }
    return $ary;
    mysqli_free_result($results);
}//function display



function display_in($table, $field ,$in){
    include "connection.php";
     $q="SELECT * FROM ".$table." WHERE ".$field." IN (".$in.")";
    $results = mysqli_query($con, $q);
    if(mysqli_num_rows($results)>0){
        while($data= mysqli_fetch_array($results)){
            $ary[]=$data;
        }//while
    }else{
        $ary["error"]=0;
    }
    return $ary;
    mysqli_free_result($results);
}//function display

function display_where($table ,$condition){
    include "connection.php";

    $where="";
    foreach($condition as $ind=>$val){
        $where.= $ind."='".$val."' AND ";
    }
    $where = substr($where, 0,-5);
       $query="SELECT * FROM ".$table." WHERE ".$where;
    $results = mysqli_query($con, $query);
    $ar=array();
    if(mysqli_num_rows($results)>0){
        while($data= mysqli_fetch_array($results)){
            $ar[]=$data;
        }//while
    }else{
        $ar["error"]=0;
    }
    return $ar;
}
//this function return value where column is note matching some value other than a value like 0
function display_where_opps($table ,$condition){
    include "connection.php";
    $where="";
    foreach($condition as $ind=>$val){
        $where.= $ind."!='".$val."' AND ";
    }
    $where = substr($where, 0,-5);
    $query="SELECT * FROM ".$table." WHERE ".$where;
    $results = mysqli_query($con, $query);
    $ar=array();
    if(mysqli_num_rows($results)>0){
        while($data= mysqli_fetch_array($results)){
            $ar[]=$data;
        }//while
    }else{
        $ar["error"]=0;
    }
    return $ar;
}
function display_join_where($tableA, $a_attribute, $tableB, $b_attribute ,$condition){
    include "connection.php";

    $where="";
    foreach($condition as $ind=>$val){
        $where.= $ind."='".$val."' AND ";
    }
    $where = substr($where, 0,-5);
   $query="SELECT * FROM ".$tableA." INNER JOIN ".$tableB." ON ".
        $tableA.".".$a_attribute." = ".$tableB.".".$b_attribute ." WHERE ".$where ;
   $results = mysqli_query($con, $query);
    $ar=array();
    if(mysqli_num_rows($results)>0){
        while($data= mysqli_fetch_array($results)){
            $ar[]=$data;
        }//while
    }else{
        $ar["error"]=0;
    }
    return $ar;

}
function display_where_value($table ,$condition,$value){
    include "connection.php";
    $ary="";
    $where="";
    foreach($condition as $ind=>$val){
        $where.= $ind." = '".$val."' AND ";
    }
    $where = substr($where, 0,-5);
    $query="SELECT * FROM ".$table." WHERE ".$where;
    $q_run = mysqli_query($con , $query);
    if(mysqli_num_rows($q_run)>0){
        while($dataa=mysqli_fetch_array($q_run)){
            $ary=$dataa[$value];
        }
    }else{
        $ary = 0;
    }
    return $ary;
    //return $query;
    mysqli_free_result($q_run);
}

function clean_input($data) {
    /*include "connection.php";
    $data = mysqli_real_escape_string($con ,$data); */
    $data = trim($data);
    $data = addslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function clean_output($data) {
    /*include "connection.php";
    $data = mysqli_real_escape_string($con ,$data); */
    $data = trim($data);
    $data = stripslashes($data);
    $data=htmlspecialchars_decode($data);
    return $data;
}
/*navigation*/

 function nav($page){
    if(!empty($page)){
        $get_nav  = base64_encode($page);
    }else{
        $get_nav="home";
    }
    return $get_nav;
}


function display_count($table){
    include "connection.php";
    $q="SELECT * FROM ".$table;
    $results = mysqli_query($con, $q);
    if(mysqli_num_rows($results)>0){
        $count = mysqli_num_rows($results);
    }else{
        $count=0;
    }
    return $count;
}//function display

function display_count_where($table,$condition){
    include "connection.php";

    $where="";
    foreach($condition as $ind=>$val){
        $where.= $ind." = '".$val."' AND ";
    }
    $where = substr($where, 0,-5);
    $q="SELECT * FROM ".$table ." WHERE ".$where;
    $results = mysqli_query($con, $q);
    if(mysqli_num_rows($results)>0){
        $count = mysqli_num_rows($results);
    }else{
        $count=0;
    }
    return $count;
}//function display




function get_page($directory,  $type ){
     if(isset($_GET['nav'])){
   $p = $directory.base64_decode($_GET['nav']).$type;}
     else {
         $p = $directory."home".$type;
     }
    include_once  ($p);
}


function logout(){
    if(isset($_GET['logout'])){
        session_destroy();
        ?>
        <script>setTimeout(function(){
                window.location="index.php";
            }, 0) </script>
        <?php
    }
}





function update($table,$data, $where){
    include "connection.php";
    $sets = "";
    foreach($data as $ind=>$val){
        $sets.= $ind." = '".$val."', ";
    }
    $sets= substr($sets,0,-2);
    $wh="";
    foreach($where as $ind=>$val){
        $wh.= $ind." = '".$val."' AND ";
    }
    $wh= substr($wh,0,-5);
    $q="UPDATE ".$table." SET ". $sets ." WHERE ".$wh;
    $q_run = mysqli_query($con, $q);
    //echo mysqli_error($con);
    return $q_run;
}

function del($table,$condition){
    $where="";
    include "connection.php";
    foreach($condition as $ind=>$val){
        $where.= $ind." = ".$val." AND ";
    }
    $where= substr($where,0,-5);
    $q="DELETE FROM ".$table." WHERE ".$where;
    $q_run=mysqli_query($con , $q);
    return $q_run;
}

function email_send( $data ,$subject)
{
        include ("email.php");

// Set content-type header for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
    $headers .= 'From: ' . $fromName . '<' . $from . '>' . "\r\n";
    /*
    $headers .= 'Cc: welcome@example.com' . "\r\n";
    $headers .= 'Bcc: welcome2@example.com' . "\r\n";
     */
// Send email

    if (mail($to, $subject, $htmlContent, $headers)) {
        //echo 'Email has sent successfully.';
        return 1;
    } else {
        //echo 'Email sending failed.';
        return 0;
    }

}
// function login($log_dat, $dat){
//     if(!(isset($log_dat['error']))){
//         if($log_dat['cus_email']==$dat['cus_email'] || $log_dat['u_pass']==$dat['cus_pass'] ){
//             $_SESSION['email']=  $log_dat['cus_email'];
//             $_SESSION['id'] =  $log_dat['cus_id'];
//             $log_dat['error']=1;
//         }else{
//             $log_dat['error']=0;
//         }
//         return $log_dat['error'];
//     }else{

//     }
// }

function cus_login(){
    if(isset($_REQUEST['login'])){
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        if($email!="" && $password!=""){
            include "includes/connection.php";
            $query="SELECT * FROM customer WHERE cus_email='$email' AND cus_pass='$password'";
            $q_run = mysqli_query($con, $query);
            $login_data = mysqli_fetch_array($q_run);
            if($login_data['cus_email']==$email && $login_data['cus_pass']==$password ){
                ?>
                <div class="alert alert-success">Login successful! Please Wait...</div>
                <?php
                $_SESSION['id']=$login_data['cus_id'];
                $_SESSION['email']=$login_data['cus_email'];
                ?>
                <script>
                    setTimeout( function(){window.location="index.php" } ,3000);
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
// function use in services-detail page start
function display_cat_link(){
    include "connection.php";
    $q="SELECT * FROM categories";
    $q_run =  mysqli_query($con, $q);
    while($data = mysqli_fetch_array($q_run)){
    ?>  
    <li class="pb-1 mb-3"><a href="services-detail.php?id=<?php echo $data['c_id']?>" class="text-decoration-none text-color-dark text-color-hover-primary font-weight-bold custom-font-size-3"><?php echo $data['c_name']; ?></a></li>
    
    <?php
    }  
}
function display_product_cat_wise(){
$categories = $_GET['id'];
include "connection.php";
    $q="SELECT * FROM products WHERE p_category = '$categories'";
    $q_run =  mysqli_query($con, $q);
    while($data = mysqli_fetch_array($q_run)){
    ?>  
    <div class="row">
    <div class="col-6 col-md-3">
    <h3><?php echo $data['p_code']; ?></h3>
    </div>
    <div class="col-6 col-md-3">
    <h3><?php echo $data['p_name']; ?></h3>
    </div>	
    </div>
    <div class="row">
        <div class="col-md-3">
        <img src="uploads/<?php echo $data['p_file']; ?>" class="img-fluid float-start custom-max-width-1 my-3 me-4" alt="" />

        </div>

    </div> <?php
}
}
function display_header_name(){
    $categories = $_GET['id'];
    include "connection.php";
        $q="SELECT * FROM categories WHERE c_id = '$categories'";
        $q_run =  mysqli_query($con, $q);
        while($data = mysqli_fetch_array($q_run)){
            ?>
            <h1 class="font-weight-bold text-10"><?php echo $data['c_name'];?></h1>
            <?php
        }

}
// function use in services-detail page end
function display_footer_link(){
    include "connection.php";
    $q="SELECT * FROM categories";
    $q_run =  mysqli_query($con, $q);
    while($data = mysqli_fetch_array($q_run)){
    ?>  
    <li class="mb-1">
	<a href="services-detail.php?id=<?php echo $data['c_id']?>"><?php echo $data['c_name']; ?></a>
	</li>
    <?php
    }  
}

?>

