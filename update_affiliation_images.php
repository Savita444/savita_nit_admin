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
								<h4>Update Affiliation Certificates</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Affiliation Certificates</li>
                  <li class="breadcrumb-item active" aria-current="page">View Affiliation Certificates</li>
                  <li class="breadcrumb-item active" aria-current="page">Update Affiliation Certificates</li>
								</ol>
							</nav>
						</div>
			
					</div>
				</div>


				
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<!-- <h4 class="text-blue">Update Photo</h4> -->
						</div>
						
					</div><br> 
					
					<form method="post" enctype="multipart/form-data">
		 				  <?php 
                $sel=mysqli_query($connect,"select * from tbl_affiliation_certificates where  fld_affiliation_id='".$_GET['fld_affiliation_id']."'") or die(mysqli_error($connect));
                $fetch=mysqli_fetch_array($sel);
              ?>       
						<!-- <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Image Title</label>
							<div class="col-sm-12 col-md-10">
                  <input type="text" name="image_title" class="form-control" value="<?php //echo $fetch['image_title'];?>">
							</div>
						</div> -->
						
						<div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Photo</label>
              <div class="col-sm-12 col-md-10">               
                 <div class="preview_box">
                    <?php
                        if ($fetch['fld_affiliation_image']=="") 
                        {
                    ?>
                            <img src="../images/admin/No-image-full.jpg" alt="John Doe" id="preview_img" height="100px" width="100px"/>
                    <?php
                        }
                        else
                        {
                    ?>                                        
                            <img src="../images/affiliation_certificates/<?php echo $fetch['fld_affiliation_image'];?>" alt="John Doe" id="preview_img" height="100px" width="100px" />
                    <?php
                        }
                    ?>
                    
                </div>
                <input type="file" name="photo" id="image"  />     
              </div>
            </div>

						<!-- <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Description</label>
							<div class="col-sm-12 col-md-10">
								<textarea class="textarea_editor form-control border-radius-0"  name="photo_description" placeholder="Enter text..."><?php //echo $fetch['photo_description'];?></textarea>
							</div>
						</div> -->
												
						<div class="form-group row">
							<div class="col-sm-12 col-md-10">
							<center><input class="btn btn-success" value="Update" type="submit" name="update">&nbsp;
								
								<a href="view_affiliation_images.php" class="btn btn-warning">Back</a></center>
							</div>
						</div>
					</form>
          <?php

error_reporting(0);
    
    if(isset($_POST['update']))
    {
     extract($_POST);


    $name=$_FILES['photo']['name'];
    $size=$_FILES['photo']['size'];
    $type=$_FILES['photo']['type'];
    $temp=$_FILES['photo']['tmp_name'];

        if($name)
            {
                 $desired_dir="../images/affiliation_certificates/";  
                 unlink($desired_dir.$fetch['photo']);             
                $gallery_photo=uniqid().$name;
                
                
                 move_uploaded_file($temp,"$desired_dir/".$gallery_photo);
                // $a1 = $a;
                  $save = "$desired_dir/" . $gallery_photo; //This is the new file you saving
                  $file = "$desired_dir/" . $gallery_photo; //This is the original file

                  list($width, $height) = getimagesize($file) ;

                  $modwidth = 7016;

                  // $diff = $width / $modwidth;

                  // $modheight = $height / $diff;
                  $modheight = 4961;
                  $tn = imagecreatetruecolor($modwidth, $modheight) ;
                  $image = imagecreatefromjpeg($file) ;
                  imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ;

                  imagejpeg($tn, $save, 100) ;

            }
        else
            {
                $gallery_photo=$fetch['fld_affiliation_image'];
            }  
      
     $update=mysqli_query($connect,"update tbl_affiliation_certificates set
                fld_affiliation_image='".$gallery_photo."'
                where fld_affiliation_id='".$_GET['fld_affiliation_id']."'") or die(mysqli_error($connect));
     if($update)
                              {
           echo '<script type="text/javascript">';
           echo " alert('Photo Updated Successfully');";
           echo 'window.location.href = "view_affiliation_images.php";';
           echo '</script>';
      
                          }
                         else
                         {
           echo '<script type="text/javascript">';
           echo "alert('Photo not Updated');";
             echo '<script>';
                            //echo $cQry;
      
                         }
    }


?>                 
	</div>
			 <?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
	
</body>
</html>
