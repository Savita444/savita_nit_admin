<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
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
								<h4>Update Laboratories Information</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<!-- <li class="breadcrumb-item">Gallery</li> -->
                                    <li class="breadcrumb-item active" aria-current="page">Update Laboratories Information</li>
								</ol>
							</nav>
						</div>
			       <div class="col-md-6 col-sm-12 text-right">
              <div class="dropdown">
                <a class="btn btn-primary" href="laboratoriesinfo_view.php" role="button">
                  View Laboratories Information
                </a>
              </div>
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
                $sel=mysqli_query($connect,"select * from tbl_laboratories where fld_laboratories_id='".$_GET['fld_laboratories_id']."'") or die(mysqli_error($connect));
                $fetch=mysqli_fetch_array($sel);
              ?>       
						<div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Department<span
                                    style="color: red;">*</span></label>
                            <div class="col-sm-12 col-md-10">
                                <select name="Department_id" class="form-control">
                                    <option value="">Select Department</option>
                                    <?php
                              $query1=mysqli_query($connect,"select * from department where Department_delete='0' order by id desc");
                              while($row=mysqli_fetch_assoc($query1)){
                                extract($row);
                            ?>
                                    <option value="<?php echo $row['id']; ?>"
                                        <?php if($fetch['Department_id']==$row['id']) {echo "selected";} ?>>
                                        <?php echo $row['Department']; ?></option>
                                    <?php  }?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Laboratories Description</label>
							<div class="col-sm-12 col-md-10">
								<textarea class="textarea form-control border-radius-0" name="laboratories_description" placeholder="Enter Laboratories Description"><?php echo $fetch['laboratories_description'];?></textarea>
							</div>
                        </div>
						
						<div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Photo <span class="text-danger">*</span> : </label>
              <div class="col-sm-12 col-md-10">               
                 <div class="preview_box">
                    <?php
                        if ($fetch['photo']=="") 
                        {
                    ?>
                            <img src="assets/images/laboratories/No-image-full.jpg" alt="John Doe" id="preview_img" height="100px" width="100px"/>
                    <?php
                        }
                        else
                        {
                    ?>                                        
                            <img src="assets/images/laboratories/<?php echo $fetch['photo'];?>" alt="John Doe" id="preview_img" height="100px" width="100px" />
                    <?php
                        }
                    ?>
                    
                </div>
                <input type="file" name="photo" id="image"  />  
                <p class="help-block" style="color: red">In width-121 X height-120 Size.</p>   
              </div>
            </div>

						<!-- <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Description : </label>
							<div class="col-sm-12 col-md-10">
								<textarea class="textarea_editor form-control border-radius-0"  name="photo_description" placeholder="Enter text..."><?php //echo $fetch['photo_description'];?></textarea>
							</div>
						</div> -->
												
						<div class="form-group row">
							<div class="col-sm-12 col-md-10">
							<center><input class="btn btn-success" value="Update" type="submit" name="update">&nbsp;
								
								<a href="view_photo.php" class="btn btn-warning">Back</a></center>
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
                 $desired_dir="assets/images/laboratories/";  
                 unlink($desired_dir.$fetch['photo']);             
                $gallery_photo=uniqid().$name;
                
                
                 move_uploaded_file($temp,"$desired_dir/".$gallery_photo);
                // $a1 = $a;
                  $save = "$desired_dir/" . $gallery_photo; //This is the new file you saving
                  $file = "$desired_dir/" . $gallery_photo; //This is the original file

                  list($width, $height) = getimagesize($file) ;

                  $modwidth = 4928;

                  // $diff = $width / $modwidth;

                  // $modheight = $height / $diff;
                  $modheight = 3264;
                  $tn = imagecreatetruecolor($modwidth, $modheight) ;
                  $image = imagecreatefromjpeg($file) ;
                  imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ;

                  imagejpeg($tn, $save, 100) ;

            }
        else
            {
                $gallery_photo=$fetch['photo'];
            }  
      
                $query=mysqli_query($connect,"update tbl_laboratories set
                
                Department_id='".$_POST['Department_id']."',
                laboratories_description='".$_POST['laboratories_description']."',
                photo='".$gallery_photo."'
                where fld_laboratories_id='".$_GET['fld_laboratories_id']."'") or die(mysqli_error($connect));
     if($update)
                              {
           echo '<script type="text/javascript">';
           echo " alert('Laboratories Information Update Successfully.');";
           echo 'window.location.href = "laboratoriesinfo_view.php";';
           echo '</script>';
      
                          }
                         else
                         {
           echo '<script type="text/javascript">';
           echo "alert('Laboratories Information Update Successfully.');";
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
