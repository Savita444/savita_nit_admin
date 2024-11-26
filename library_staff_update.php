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
								<h4>Update  Library staff</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item">View  Library staff</li>
                                    <li class="breadcrumb-item active" aria-current="page">Update Library staff</li>
								</ol>
							</nav>
						</div>
			       <div class="col-md-6 col-sm-12 text-right">
              <div class="dropdown">
                <a class="btn btn-primary" href="view_photo.php" role="button">
                  View Library staff
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
                                $sel=mysqli_query($connect,"select * from library_staff where library_staff_id='".$_GET['library_staff_id']."'") or die(mysqli_error($connect));
                                $fetch=mysqli_fetch_array($sel);
                            ?>       
						<div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Name Of Staff<span
                                    class="text-danger">*</span> </label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" placeholder="Enter Name Of Staff"
                                    name="name_staff" value="<?php echo $fetch['name_staff'];?>" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Designation<span
                                    class="text-danger">*</span> </label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" placeholder="Enter Designation"
                                    name="designation" value="<?php echo $fetch['designation'];?>" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Qualification<span
                                    class="text-danger">*</span> </label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" placeholder="Enter Qualification"
                                    name="qualification" value="<?php echo $fetch['qualification'];?>" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">E-mail ID<span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" placeholder="Enter E-mail ID" name="email" value="<?php echo $fetch['email'];?>"
                                    required="">
                            </div>
                        </div>
						
						<div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Photo <span class="text-danger">*</span> : </label>
              <div class="col-sm-12 col-md-10">               
                 <div class="preview_box">
                    <?php
                        if ($fetch['files']=="") 
                        {
                    ?>
                            <img src="assets/images/librarystaff/No-image-full.jpg" alt="John Doe" id="preview_img" height="100px" width="100px"/>
                    <?php
                        }
                        else
                        {
                    ?>                                        
                            <img src="assets/images/librarystaff/<?php echo $fetch['files'];?>" alt="John Doe" id="preview_img" height="100px" width="100px" />
                    <?php
                        }
                    ?>
                    
                </div>
                <input type="file" name="files" id="image"  />  
                <!-- <p class="help-block" style="color: red">Images in width-760 X height-503 Size.</p>    -->
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
								
								<a href="library_staff_view.php" class="btn btn-warning">Back</a></center>
							</div>
						</div>
					</form>
<?php
error_reporting(0);
    if(isset($_POST['update']))
    {
     extract($_POST);

    $name=$_FILES['files']['name']; 
	  $type=$_FILES['files']['type'];
	  $size=$_FILES['files']['size'];  
	  $temp=$_FILES['files']['tmp_name']; 
	  if($name){
	  
	            $upload= "assets/images/librarystaff/";  
	            $imgExt=strtolower(pathinfo($name, PATHINFO_EXTENSION)); 
	            $valid_ext= array('jpg','png','jpeg' );  
	            $files= rand(1000,1000000).".".$imgExt;  
	            move_uploaded_file($temp,$upload.$files);   
	  }
	  else
        {

            $files=$fetch['files'];
        }  
      
     $update=mysqli_query($connect,"update library_staff set
                name_staff='".$name_staff."', 
                designation='".$designation."', 
                qualification='".$qualification."', 
                email='".$email."', 
                files='".$files."' 
                where library_staff_id='".$_GET['library_staff_id']."'") or die(mysqli_error($connect));
     if($update)
                              {
           echo '<script type="text/javascript">';
           echo " alert('Library Staff Updated Successfully');";
           echo 'window.location.href = "library_staff_view.php";';
           echo '</script>';
      
                          }
                         else
                         {
           echo '<script type="text/javascript">';
           echo "alert('Library Staff not Updated');";
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
