<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	
	<!-- <title>Add Gallery </title> -->
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
								<h4>Add Achievements and Awards</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									
									<li class="breadcrumb-item active" aria-current="page">Achievements and Awards</li>
                  
								</ol>
							</nav>
						</div>
			
					</div>
				</div>


				
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<!-- <h4 class="text-blue">Add Photo</h4> -->
						</div>
						
					</div><br> 
					
					<form method="post" enctype="multipart/form-data">
								<?php


error_reporting(0);

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
                // if($file_size > 10485760){
                //     $errors[]='File size must be less than 10 MB';
                // }    

               $extension = strtolower(pathinfo($a,PATHINFO_EXTENSION));  
                 
                $query="INSERT into tbl_awards(Department_id,imageTitle,fld_gallery_photo) VALUES('$department','$imageTitle','$a'); ";
                $desired_dir="../images/awards/";
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

    //              $save = "$desired_dir/" . $a; //This is the new file you saving
    //               $file = "$desired_dir/" . $a; //This is the original file

    //               list($width, $height) = getimagesize($file) ;

    //               $modwidth = 4928;

                  
    //               $modheight = 3264;
    //               $tn = imagecreatetruecolor($modwidth, $modheight) ;
                  

    //               if($extension=="jpg" || $extension=="jpeg" )
				// 	{
				// 	$size = $_FILES['file']['tmp_name'];
				// 	$image = imagecreatefromjpeg($file);

				// 	}
				// 	else if($extension=="png")
				// 	{
				// 	$size = $_FILES['file']['tmp_name'];
				// 	$image = imagecreatefrompng($file);

				// 	}

                  
    //               imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ;

    //               imagejpeg($tn, $save, 100) ;        
                
            }
            if(empty($error)){
                // echo "Success";
            }
        }

        if($add2)
                          {
       echo '<script type="text/javascript">';
       echo " alert('Information Added Successfully.');";
       echo 'window.location.href = "achievements_view.php";';
       echo '</script>';
  
                      }
                     else
                     {
       echo '<script type="text/javascript">';
       echo " alert('Information Not Added.');";
       echo '<script>';
                        
  
                     }


    }

?> 				
					
					
					    <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Department<span style="color: red;">*</span></label>
              <div class="col-sm-12 col-md-10">
                <select name="department" class="form-control">
                    <option value="">Select Department</option>
                        <?php
                            $query1=mysqli_query($connect,"select * from department where Department_delete='0' order by Department_id desc");
                            while($row=mysqli_fetch_assoc($query1)){
                              extract($row);
                          ?>
                    <option value="<?php echo $row['Department_id'];?>"><?php echo $row['Department'];?></option>
                        <?php  }?>
                 </select>
              </div>
            </div>
					
					
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Image Title<span style="color: red;">*</span> : </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Image Title" name="imageTitle" required="">
							</div>
						</div>
						
						<div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Photo <span class="text-danger">*</span> </label>
              <div class="col-sm-12 col-md-10">               
                <input  name="files[]" type="file" multiple required="" accept=" .jpg , .jpeg , .png , .gif" id="fileupload">
                <!--<p class="help-block" style="color: red">Select multiple images. In width=4928px X height=3264px Size.</p>-->
                <br>
                <div id="dvPreview"></div>      
              </div>
            </div>

						<!-- <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Description </label>
							<div class="col-sm-12 col-md-10">
								<textarea class="textarea_editor form-control border-radius-0"  name="photo_description" placeholder="Enter text..."></textarea>
							</div>
						</div> -->
												
						<div class="form-group row">
							<div class="col-sm-12 col-md-10">
							<center><input class="btn btn-success" value="Submit" type="submit" name="submit">&nbsp;
								<input class="btn btn-danger" value="Reset" type="reset">&nbsp;
								<a href="achievements_view.php" class="btn btn-warning">Back</a></center>
							</div>
						</div>
					</form>
	     </div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
	
</body>
</html>
