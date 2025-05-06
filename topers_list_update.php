<?php include('include/header_session.php'); ?>
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
								<h4>Update Topers list</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Update Topers list</li>
								</ol>
							</nav>
						</div>
			       <div class="col-md-6 col-sm-12 text-right">
              <div class="dropdown">
                <a class="btn btn-primary" href="topers_list_view.php" role="button">
                  View Topers list
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
                            $sel=mysqli_query($connect,"select * from topers_list where topers_list_id='".$_GET['topers_list_id']."'") or die(mysqli_error($connect));
                            $fetch=mysqli_fetch_array($sel);
                        ?>       
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Title<span style="color: red;">*</span></label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Slider Image Title" name="title" required="" value="<?php echo $fetch['title']?>">
							</div>
						</div>
                        <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Topers Name<span style="color: red;">*</span></label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Topers Name" name="topers_name" required="" value="<?php echo $fetch['topers_name']?>">
							</div>
						</div>
                        <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Topers Grade<span style="color: red;">*</span></label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Topers Grade" name="topers_grade" required="" value="<?php echo $fetch['topers_grade']?>">
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
                            <img src="assets/images/topers/No-image-full.jpg"  id="preview_img" height="100px" width="100px"/>
                    <?php
                        }
                        else
                        {
                    ?>                                        
                            <img src="assets/images/topers/<?php echo $fetch['photo'];?>"  id="preview_img" height="100px" width="100px" />
                    <?php
                        }
                    ?>
                    
                </div>
                <input type="file" name="photo" id="image"  accept=" .jpg , .jpeg , .png , .gif"/>  
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
								
								<a href="topers_list_view.php" class="btn btn-warning">Back</a></center>
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
                 $desired_dir="assets/images/topers/";  
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
            
     $update=mysqli_query($connect,"update topers_list set
                title='".$title."',
                topers_name='".$topers_name."',
                topers_grade='".$topers_grade."',
                photo='".$gallery_photo."'
                where topers_list_id='".$_GET['topers_list_id']."'") or die(mysqli_error($connect));
     if($update)
                              {
           echo '<script type="text/javascript">';
           echo " alert('Topers list Update Successfully.');";
           echo 'window.location.href = "topers_list_view.php";';
           echo '</script>';
      
                          }
                         else
                         {
           echo '<script type="text/javascript">';
           echo "alert('Topers list Not Update.');";
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
