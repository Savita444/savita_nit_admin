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
								<h4>Update Activities and Events</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Update Activities and Events</li>
								</ol>
							</nav>
						</div>
			       <div class="col-md-6 col-sm-12 text-right">
              <div class="dropdown">
                <a class="btn btn-primary" href="events_view.php" role="button">
                  View Activities and Events
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
                                $sel=mysqli_query($connect,"select * from tbl_events where fld_gallery_id='".$_GET['fld_gallery_id']."'") or die(mysqli_error($connect));
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
							<label class="col-sm-12 col-md-2 col-form-label">Image Title<span style="color: red;">*</span> : </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Image Title" name="imageTitle" required="" value="<?php echo $fetch['imageTitle']?>">
							</div>
						</div>

						<div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Photo <span class="text-danger">*</span> : </label>
                        <div class="col-sm-12 col-md-10">               
                            <div class="preview_box">
                                <?php
                                    if ($fetch['fld_gallery_photo']=="") 
                                    {
                                ?>
                                        <img src="assets/images/events/No-image-full.jpg" id="preview_img" height="100px" width="100px"/>
                                <?php
                                    }
                                    else
                                    {
                                ?>                                        
                                        <img src="assets/images/events/<?php echo $fetch['fld_gallery_photo'];?>"  id="preview_img" height="100px" width="100px" />
                                <?php
                                    }
                                ?>
                                
                            </div>
                            <input type="file" name="photo" id="image"  />  
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
								
								<a href="events_view.php" class="btn btn-warning">Back</a></center>
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
                 $desired_dir="assets/images/events/";  
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
                $gallery_photo=$fetch['fld_gallery_photo'];
            }  

            
      
     $update=mysqli_query($connect,"update tbl_events set
                Department_id='".$Department_id."',
                imageTitle='".$imageTitle."',
                fld_gallery_photo='".$gallery_photo."'
                where fld_gallery_id='".$_GET['fld_gallery_id']."'") or die(mysqli_error($connect));
     if($update)
                              {
           echo '<script type="text/javascript">';
           echo " alert('Activities and Events Update Successfully.');";
           echo 'window.location.href = "events_view.php";';
           echo '</script>';
      
                          }
                         else
                         {
           echo '<script type="text/javascript">';
           echo "alert('Activities and Events Not Update.');";
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
