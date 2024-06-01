<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	 <style>
        .preview_box{clear: both; padding: 5px; margin-top: 10px; text-align: left;}
        .preview_box img{max-width: 150px; max-height: 150px;}
    </style>

    <script type="text/javascript">
            $(document).ready(function(){
               
                $("#image").change(function(){
                    readImageData(this);
                });
            });
             
            function readImageData(imgData){
                if (imgData.files && imgData.files[0]) {
                    var readerObj = new FileReader();
                    
                    readerObj.onload = function (element) {
                        $('#preview_img').attr('src', element.target.result);
                    }
                    
                    readerObj.readAsDataURL(imgData.files[0]);
                }
            }
        </script>     

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
								<h4>Update Admin Profile</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item">Setting</li>
									<li class="breadcrumb-item active" aria-current="page">Update Admin Profile</li>
								</ol>
							</nav>
						</div>
						
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<!-- <h4 class="text-blue">Update Profile</h4> -->
						</div>
					</div>
					<br>
					<form method="post" enctype="multipart/form-data">
             <?php                                       
              $query=mysqli_query($connect,"select * from tbl_admin where fld_email='".$_SESSION['email']."'") or die (mysqli_error($connect));
              $fetch=mysqli_fetch_array($query);
            ?>    
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Name" name="uname" required="" value="<?php echo $fetch['fld_name']; ?>">
							</div>
						</div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Email</label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="email" placeholder="Enter Email" name="email" required="" value="<?php echo $fetch['fld_email']; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Address</label>
              <div class="col-sm-12 col-md-10">
                <textarea name="address" class="form-control" placeholder="Enter Address" required="" style="height: 50px;"><?php echo $fetch['fld_address'];  ?></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Mobile No</label>
              <div class="col-sm-12 col-md-10">
                <input type="text"  maxlength="10" pattern="[7-9]{1}[0-9]{9}" value="<?php echo $fetch['fld_mobile']; ?>" name="mobile" class="form-control" placeholder="Enter Mobile Number" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
              </div>
            </div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Photo</label>
							<div class="col-sm-12 col-md-10">
						      <div class="preview_box">
                    <?php
                        if($fetch['fld_photo'] =="")
                        {

                            ?>
                                <img src="../images/admin/No-image-full.jpg" alt="" id="preview_img" height="100px" width="100px" />
                        <?php
                            }
                            else
                            {
                        ?>                                        
                                <img src="../images/admin/<?php echo $fetch['fld_photo'];?>" id="preview_img" height="100px" width="100px"/>
                        <?php
                            }
                        ?>
                                                                        
                    </div>
                    <input type="file" name="photo" id="image" />
							</div>
						</div>
						
						<div class="form-group row">
							<div class="col-md-5"></div>
							<div class="col-sm-6">
								<input type="submit" name="submit" class="btn btn-success" value="Save">
							</div>
						</div>
					</form>
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); 
       
  ?>
</body>
</html>

<?php
    
    if(isset($_POST['submit']))
    {
     extract($_POST);


    $name=$_FILES['photo']['name'];
    $size=$_FILES['photo']['size'];
    $type=$_FILES['photo']['type'];
    $temp=$_FILES['photo']['tmp_name'];

        if($name)
            {
                $upload_dir = '../images/admin/';
                $imgExt = strtolower(pathinfo($name,PATHINFO_EXTENSION)); // get image extension
                $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
                $photo = rand(1000,1000000).".".$imgExt;
                unlink($upload_dir.$fetch['Photo']);
                move_uploaded_file($temp,$upload_dir.$photo);

            }
        else
            {
                $photo=$fetch['fld_photo'];
            }

      
      
     $update=mysqli_query($connect,"update tbl_admin set
                fld_name='".$uname."', 
                fld_address='".$_POST['address']."',
                fld_mobile='".$_POST['mobile']."',  
                fld_photo='".$photo."'
                where fld_email='".$_SESSION['email']."'") or die(mysqli_error($connect));
     if($update)
                              {
           echo '<script type="text/javascript">';
           echo " alert('Profile updated successfully');";
           echo 'window.location.href = "update_profile.php";';
           echo '</script>';
      
                          }
                         else
                         {
           echo '<script type="text/javascript">';
           echo "alert('Eror Occured');";
             echo '<script>';
                            //echo $cQry;
      
                         }
    }


?>
