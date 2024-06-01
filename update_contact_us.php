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
								<h4>Contact Us</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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
              $query=mysqli_query($connect,"select * from contact_us where contact_us_id='1'") or die (mysqli_error($connect));
              $fetch=mysqli_fetch_array($query);
            ?>    
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Name <span style="color: red;">*</span> : </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Facebook :Enter Name" name="uname" required="" value="<?php echo $fetch['contact_us_name']; ?>" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/(\..*)\./g, '$1');">
							</div>
						</div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Email <span style="color: red;">*</span> : </label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="email" placeholder="Enter Email" name="email" required="" value="<?php echo $fetch['contact_us_email']; ?>" pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Address <span style="color: red;">*</span> : </label>
              <div class="col-sm-12 col-md-10">
                <textarea name="address" class="form-control" placeholder="Enter Address" required="" style="height: 50px;"><?php echo $fetch['contact_us_address'];  ?></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Mobile No <span style="color: red;">*</span> : </label>
              <div class="col-sm-12 col-md-10">
                <input type="text"  maxlength="10" minlength="10" pattern="[7-9]{1}[0-9]{9}" value="<?php echo $fetch['contact_us_mobile']; ?>" name="mobile" class="form-control" placeholder="Enter Mobile Number" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" />
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Telephone No <span style="color: red;">*</span> : </label>
              <div class="col-sm-12 col-md-10">
                <input type="text" minlength="11" maxlength="13" value="<?php echo $fetch['contact_us_telephone']; ?>" name="phone" class="form-control" placeholder="Enter Mobile Number" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" />
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">FAX No : </label>
              <div class="col-sm-12 col-md-10">
                <input type="text" minlength="11" maxlength="13" value="<?php echo $fetch['contact_us_fax']; ?>" name="fax" class="form-control" placeholder="Enter Mobile Number" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" />
              </div>
            </div>
						<div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Website : </label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" placeholder="Website" name="website" value="<?php echo $fetch['contact_us_website']; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Facebook : </label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" placeholder="Facebook URL" name="facebook" value="<?php echo $fetch['contact_us_facebook']; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Whats APP : </label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" placeholder="Whats APP URL" name="whatsapp" value="<?php echo $fetch['contact_us_whatsapp']; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Twitter : </label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" placeholder="Twitter URL" name="twitter" value="<?php echo $fetch['contact_us_twitter']; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Linkedin : </label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" placeholder="Linkedin URL" name="linkedin" value="<?php echo $fetch['contact_us_linkedin']; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Google+ : </label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" placeholder="Google+ URL" name="google" value="<?php echo $fetch['contact_us_google']; ?>">
              </div>
            </div>
						<div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Map<span style="color: red;">*</span> : </label>
              <div class="col-sm-12 col-md-10">
                <textarea name="map" class="form-control" placeholder="Enter Map Link..." required="" style="height: 130px;"><?php echo $fetch['contact_us_iframe']; ?></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Modified Date-Time : </label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" placeholder="Modified Date" name="modified_date" value="<?php echo $fetch['contact_us_modified_date']; ?>" disabled>
              </div>
            </div>
						<div class="form-group row">
							
							<div class="col-sm-12">
                <center><input type="submit" name="submit" class="btn btn-success" value="Save"></center>
								
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

<?php
    
    if(isset($_POST['submit']))
    {
     extract($_POST);

     $update=mysqli_query($connect,"update contact_us set
                contact_us_name='".$uname."', 
                contact_us_email='".$email."',
                contact_us_address='".$address."',  
                contact_us_mobile='".$mobile."',
                contact_us_telephone='".$phone."', 
                contact_us_fax='".$fax."',
                contact_us_website='".$website."',  
                contact_us_facebook='".$facebook."',
                contact_us_whatsapp='".$whatsapp."',
                contact_us_twitter='".$twitter."', 
                contact_us_linkedin='".$linkedin."',
                contact_us_google='".$google."',  
                contact_us_iframe='".$map."'       
                where contact_us_id='1'") or die(mysqli_error($connect));
     if($update)
                              {
           echo '<script type="text/javascript">';
           echo " alert('Contact updated successfully');";
           echo 'window.location.href = "update_contact_us.php";';
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
