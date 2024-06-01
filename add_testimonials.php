<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	 <style>
        .preview_box{clear: both; padding: 5px; margin-top: 10px; text-align: left;}
        .preview_box img{max-width: 150px; max-height: 150px;}
    </style>
</head>
<body>
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Add Testimonials Information</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item"><a href="view_testimonial.php">Testimonials Information</a></li>
									<li class="breadcrumb-item active" aria-current="page">Add Testimonials Information</li>
								</ol>
							</nav>
						</div>
            <div class="col-md-6 col-sm-12 text-right">
              <div class="dropdown">
                <a class="btn btn-primary" href="view_testimonial.php" role="button">
                  View Testimonials Information
                </a>
              </div>
            </div>						
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<!-- <h4 class="text-blue">Add Slider Images</h4> -->
						</div>
					</div>
					<br>
					<form method="post" enctype="multipart/form-data">
						<!--<div class="form-group row">-->
						<!--	<label class="col-sm-12 col-md-2 col-form-label">Name<span style="color: red;">*</span></label>-->
						<!--	<div class="col-sm-12 col-md-10">-->
						<!--		<input class="form-control" type="text" placeholder="Enter Name" name="name" required="">-->
						<!--	</div>-->
						<!--</div>-->
					<div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Name Of Person<span style="color: red;">*</span></label>
                   <div class="col-sm-12 col-md-10">
                   <input class="form-control" type="text" placeholder="Enter Name Of Person" name="personName">
                   </div>
                   </div>	
          
                  <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Feedback</label>
							<div class="col-sm-12 col-md-10">
								<!--<textarea class="textarea_editor form-control border-radius-0" name="feedback" placeholder="Enter Feedback"></textarea>-->
								<input class="form-control" type="text" placeholder="Enter Feedback" name="feedback">
							</div>
				 </div>
				 
				 		<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Photo<span style="color: red;">*</span></label>
							<div class="col-sm-12 col-md-10">
                <!-- <div id="preview_img"></div> -->
                <div id="dvPreview"></div>
								<input name="files[]" type="file" multiple accept=" .jpg , .jpeg , .png , .gif" id="fileupload">
                <p class="help-block" style="color: red">In width-750 X height-500 Size.</p> 

							</div>
						</div>
	
						

						<div class="form-group row">
							<div class="col-md-5"></div>
							<div class="col-sm-6">
								<input type="submit" name="submit" class="btn btn-success" value="Submit">&nbsp;
								<input type="reset" name="reset" class="btn btn-danger" value="Reset">&nbsp;
                <a href="view_testimonial.php" class="btn btn-warning">Back</a>
							</div>
						</div>
					</form>
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); 
        // include('include/footer.php');
  ?>
</body>
</html>

// <?php
                                    
//                                     if (isset($_POST['submit'])) 
//                                     {
                                        
//                                         extract($_POST);
                                        

//                                         $feedback=$_POST['feedback'];
//                                         $coulmn=array();
// 								        $query1=mysqli_query($connect,"select * from tbl_testimonials where fld_delete='0'");
// 								        while ($row=mysqli_fetch_assoc($query1))
// 								        {
// 								          $coulmn[]=$row['feedback'];
// 								        }

// 								        if (in_array($feedback, $coulmn)) 
// 										{
// 											echo '<script type="text/javascript">'; 
// 											echo 'alert("Feedback Is Already Exist");';
// 											echo "window.location.href = 'view_testimonial.php';";
// 											echo '</script>'; 
// 											return true;

// 										}    
// 								        else
// 								        {

//                                             if(isset($_FILES['files'])){
//                                                 $errors= array();
//             foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
//                 $file_name = $key.$_FILES['files']['name'][$key];
//                 $file_size =$_FILES['files']['size'][$key];
//                 $file_tmp =$_FILES['files']['tmp_name'][$key];
//                 $file_type=$_FILES['files']['type'][$key];  
//                 $a=uniqid().$file_name;
//                 $extension = strtolower(pathinfo($a,PATHINFO_EXTENSION));
// 	                                        $query="INSERT INTO tbl_testimonials(personName,feedback) VALUES ('$personName','$feedback')";
// 	                                        $desired_dir="../images/facility/";
// 	                                        //echo $query."<br>";
// 	                                        $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
//                                  }
                                 
//                                             }
// 	                                        if ($row) 
// 	                                        {
// 	                                            echo "<script>";
// 	                                            echo "alert('Testimonials Added Successfully');";
// 	                                            echo "window.location.href='view_testimonial.php';";
// 	                                            echo "</script>";                 
// 	                                        }
// 	                                        else
// 	                                        {
// 	                                            echo "<script>";
// 	                                            echo "alert('Error');";
// 	                                            echo "window.location.href='view_testimonial.php';";
// 	                                            echo "</script>";
// 	                                        }
// 	                                    }    
//                                     }
//                                 ?>


<?php


// error_reporting(0);

    if(isset($_POST['submit']))
    {
        extract($_POST);


        if(isset($_FILES['files'])){
            $errors= array();
            foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
                $file_name = $key.$_FILES['files']['name'][$key];
                $file_size =$_FILES['files']['size'][$key];
                $file_tmp =$_FILES['files']['tmp_name'][$key];
                $file_type=$_FILES['files']['type'][$key];  
                $a=uniqid().$file_name;
                $extension = strtolower(pathinfo($a,PATHINFO_EXTENSION));
                // if($file_size > 10485760){
                //     $errors[]='File size must be less than 10 MB';
                // }       
                $query="insert into tbl_testimonials(personName,feedback,photo) VALUES('$personName','$feedback','$a');";
                $desired_dir="../images/testimonials/";
                move_uploaded_file($file_tmp,"$desired_dir/".$a);
        //         if(empty($errors)==true){
        //             if(is_dir($desired_dir)==false)
        // {                mkdir("$desired_dir", 0700);       // Create directory if it does not exist
        //             }
        //             if(is_dir("$desired_dir/".$a)==false){
        //                 move_uploaded_file($file_tmp,"$desired_dir/".$a);
        //             }else{                                  // rename the file if another one exist
        //                 $new_dir="$desired_dir/".$a.time();
        //                  rename($file_tmp,$new_dir) ;               
        //             }
                 $add2=mysqli_query($connect,$query); 

                //  $save = "$desired_dir/" . $a; //This is the new file you saving
                //   $file = "$desired_dir/" . $a; //This is the original file

                //   list($width, $height) = getimagesize($file) ;

                //   $modwidth = 750;

                 
                //   $modheight = 500;
                //   $tn = imagecreatetruecolor($modwidth, $modheight) ;
                //  if($extension=="jpg" || $extension=="jpeg" )
                //   {
                 
                //   $image = imagecreatefromjpeg($file);

                //   }
                //   else if($extension=="png")
                //   {
                  
                //   $image = imagecreatefrompng($file);

                //   }

                //   imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ;

                //   imagejpeg($tn, $save, 100) ;        
                
            }
            if(empty($error)){
                // echo "Success";
            }
        }

        if($add2)
       {
         echo '<script type="text/javascript">';
         echo " alert('Testimonials Information Added Successfully.');";
         echo 'window.location.href = "view_testimonial.php";';
         echo '</script>';
        }
        else
       {
         echo '<script type="text/javascript">';
         echo " alert('Testimonials Information Not Added.');";
         echo 'window.location.href = "add_testimonials.php";';
         echo '<script>';
       }
    }
?> 