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
            include "connection.php";
            $query="SELECT * FROM customer WHERE cus_email='$email' AND cus_password=md5('$password')";
            $q_run = mysqli_query($con, $query);
            $login = mysqli_fetch_array($q_run);
            if($login['cus_email']==$email && $login['cus_password']==md5($password)){
                ?>
                <div class="alert alert-success">Login successful! Please Wait...</div>
                <?php
                $_SESSION['id']=$login['cus_id'];
                $_SESSION['email']=$login['cus_email'];
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
// testimonial display
function display_testimonial(){
    include "connection.php";
    $q="SELECT * FROM testimonial";
    $q_run =  mysqli_query($con, $q);
    while($data = mysqli_fetch_array($q_run)){
    ?> 
    <div>
		<div class="testimonial  testimonial-style-3 custom-testimonial-style-1">
			<blockquote>
				<p class="mb-0"><?php echo $data['cl_review']; ?></p>
			</blockquote>
			<div class="testimonial-author">
				<!-- <div class="testimonial-author-thumbnail">
					<img src="img/clients/client-1.jpg" class="img-fluid rounded-circle" alt="">
				</div> -->
				<p><strong class="text-color-light font-weight-semibold text-4 mb-1"><?php echo $data['cl_name']; ?></strong><span class="text-color-light text-2"><?php echo $data['cl_city']; ?></span></p>
			</div>
		</div>
	</div>
    <?php
}    
}
// display team member
function display_team_member(){
    include "connection.php";
    $q="SELECT * FROM team_member";
    $q_run =  mysqli_query($con, $q);
    while($data = mysqli_fetch_array($q_run)){
    ?>
    <div class="">
	<div class="card custom-card-style-1  d-flex custom-card-style-1-variation" style="height: 500px;">
		<div class="card-body  text-center bg-color-light-scale-1 py-5">
			<div class="custom-card-style-1-image-wrapper bg-primary rounded-circle p-relative mb-3">
				
					<img src="uploads/<?php echo $data['m_image']; ?>" class="img-fluid  rounded-circle" alt="" style="height: 250px;" />
				
			</div>
			<h4 class="text-color-secondary font-weight-bold line-height-1 text-5 mb-0"><a href="#" class="text-color-secondary text-color-hover-primary text-decoration-none"><?php echo $data['m_name']; ?></a></h4>
			<p class="text-2 pb-1 mb-2"><?php echo $data['m_post']; ?></p>
			<ul class="social-icons custom-social-icons social-icons-big">
				<li class="social-icons-instagram"><a href="<?php echo $data['instagram_link']; ?>" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
				<li class="social-icons-twitter mx-2"><a href="<?php echo $data['twitter_link']; ?>" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
				<li class="social-icons-facebook"><a href="<?php echo $data['facebook_link']; ?>" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
			</ul>
		</div>
	</div>
    </div>
    <?php } 
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
    <table class="p-4 mb-3 table table-hover border-bottom bg-light">
      <tbody>
        
      <tr scope="col">
      <td><img src="uploads/<?php echo $data['p_file']; ?>" class="img-fluid float-start custom-max-width-1 w-75 my-3 me-4" alt="" /></td>
      <td colspan="" ><h3 class="mt-5 text-color-primary"><?php echo $data['p_code']; ?>
      <h3><?php echo $data['p_name']; ?></h3>
      </td>
      <td >      
         <div class="d-flex align-items-start mt-5 me-4">
           <ul class="social-icons social-icons-medium social-icons-clean-with-border social-icons-clean-with-border-border-grey social-icons-clean-with-border-icon-dark me-3 mb-0">
           <!-- whatsapp -->
           <li class="social-icons-whatsapp pb-2">
           <a href="https://wa.me/491606767001?&text=Product Code: [ <?php echo $data['p_code']; ?> ] Product Name: [ <?php echo $data['p_name']; ?> ] 'we want to get Information in detail of this product.'" target="_blank" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="top" title="Get Info By Whatsapp">
           <i class="fab fa-whatsapp"></i>
           </a>
           </li>
           
           <!-- I%20saw%20this%20and%20thought%20of%20you!%20-->
           <!-- Email -->
           <!-- <li class="social-icons-email">
           <a href="mailto:info@invictus-diamantinstrumente.de?Subject=Product Code :<?php echo $data['p_code']; ?>&amp;Body=I Saw <?php  echo  $data['p_name'];  ?> on your website.I want to get price" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="top" title="Get Info By Email">
           <i class="far fa-envelope"></i> -->
          <li class="social-icons-email">
           <a href="" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="top" title="Get Info By Email">
           <a href="email_script.php?function=send_email&to=Husnain325@gmail.com&subject=Test&message=Hello" onclick="<?php get_info(); ?>" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="top" title="Get Info By Email">
           <i class="far fa-envelope"></i>
           <!-- <li class="social-icons-email">
           <button type="submit" name="get_info" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="top" title="Get Info By Email">
           <i class="far fa-envelope"></i> -->
           </a>
           </li>
           </ul>
											
         </div> 
        </td>
      </tr>
      <tr scope="col">
      <td class="text-bold ps-3">Eigenschaften:</td>
      <td colspan="2"><p class="text-justify pe-5"><?php echo $data['p_details']; ?></p></td>
      </tr>
      <tr scope="col">
      <td class="text-bold ps-3">Geltungsbereich:</td>
      <td colspan="2"><p class="text-justify pe-5"><?php echo $data['p_scope']; ?></p></td>
      </tr>
      
      <tr>
       <td class="text-bold ps-3">Maschine:</td>
       <td colspan="2" class="text-justify pe-5"><?php echo $data['machine']; ?></td>
       </tr>
       <tr>
      <td class="text-bold ps-3">Abmessung in mm:</td>
      <td colspan="2"><p class="text-justify pe-5"><?php echo $data['p_dimension']; ?></p></td>
      </tr>
       
       <tr>
       <td colspan="2" scope="col" class="row-col-12 text-bold p-3"> "Alle Werkzeuge entsprechen der neusten Norm EN13236 !

       Preis auf Anfrage"</td>
       <td>

       </td>
       </tr>
       
       </tbody>
      </table>

     <?php
}
}
function get_info(){
   session_start();
if (!isset($_SESSION['id'])) {
    
}

if (isset($_GET['send_email'])) {
    // Show email form
    // ...
    ?>
    <a href="email_script.php?function=send_email&to=recipient@example.com&subject=Test&message=Hello" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="top" title="Get Info By Email">
    <?php
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
function display_cat_name(){
    include "connection.php";
    $q="SELECT * FROM categories";
    $q_run =  mysqli_query($con, $q);
    while($data = mysqli_fetch_array($q_run)){
    ?> 
    <option value="<?php echo $data['c_id']; ?>"><?php echo $data['c_name']; ?></option>  <?php
    }
}
function send_request(){
    if(isset($_REQUEST['send_request'])){
        $email=$_REQUEST['email'];
        $password=$_REQUEST['password'];
        $request=$_REQUEST['request'];
        

       

    }
}
function display_brand(){
    include "connection.php";
    $q="SELECT * FROM brand_logo";
    $q_run =  mysqli_query($con, $q);
    while($data = mysqli_fetch_array($q_run)){
          ?> 
		    <div class="col-12 ">
			<img src="uploads/<?php echo $data['brand_pic']; ?>" alt="" class="img-fluid" style="max-width: 140px;">
			</div>    
             <?php
            }
        }
        session_destroy();
?>

