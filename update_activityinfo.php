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
								<h4>Update Activity Information</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item"><a href="activitiesinfo_view.php">Activity Information</a></li>
									<li class="breadcrumb-item active" aria-current="page">Update Activity Information</li>
								</ol>
							</nav>
						</div>
            <div class="col-md-6 col-sm-12 text-right">
              <div class="dropdown">
                <a class="btn btn-primary" href="activitiesinfo_view.php" role="button">
                  View Activity Information
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
            <?php 
                $sel=mysqli_query($connect,"select * from tbl_activity where fld_activity_id='".$_GET['fld_activity_id']."'") or die(mysqli_error($connect));
                $fetch=mysqli_fetch_array($sel);
              ?>
						<!--<div class="form-group row">-->
						<!--	<label class="col-sm-12 col-md-2 col-form-label">Name<span style="color: red;">*</span></label>-->
						<!--	<div class="col-sm-12 col-md-10">-->
						<!--		<input class="form-control" type="text" placeholder="Enter Name" name="name" required="" value="<?php echo $fetch['fld_staff_name'];?>">-->
						<!--	</div>-->
						<!--</div>-->
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Activity<span style="color: red;">*</span></label>
              <div class="col-sm-12 col-md-10">
                <select name="activity_id" class="form-control"  required="">
                    <option value="">Select Activity</option>
                        <?php
                            $query1=mysqli_query($connect,"select * from activities where activities_delete='0' order by activity_id desc");
                            while($row=mysqli_fetch_assoc($query1)){
                              extract($row);
                          ?>
                    <option value="<?php echo $row['activity_id'];?>" <?php if ($fetch['activity_id']==$row['activity_id']){echo "selected";} ?>><?php echo $row['activities'];?></option>
                    <?php  }?>
                 </select>
              </div>
            </div>
            	<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Activity Description</label>
							<div class="col-sm-12 col-md-10">
								<textarea class="textarea_editor form-control border-radius-0" name="activity_description" placeholder="Enter Activity Description"><?php echo $fetch['activity_description'];?></textarea>
							</div>
						</div>
							<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Activity Specification</label>
							<div class="col-sm-12 col-md-10">
								<textarea class="textarea_editor form-control border-radius-0" name="activity_specification" placeholder="Enter Activity Specification"><?php echo $fetch['activity_specification'];?></textarea>
							</div>
						</div>
           
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Photo<span style="color: red;">*</span></label>
              <div class="col-sm-12 col-md-10">
                <input  name="files[]" type="file" multiple required="" accept=" .jpg , .jpeg , .png , .gif" id="fileupload">
                
                <p class="help-block" style="color: red">In width-121 X height-120 Size.</p>
                <br>
                <div id="dvPreview">
                  <?php
                        if ($fetch['photo']=="") 
                        {
                    ?>
                            <img src="../images/admin/No-image-full.jpg" alt="John Doe" id="preview_img" height="100px" width="100px"/>
                    <?php
                        }
                        else
                        {
                    ?>                                        
                            <img src="../images/activity/<?php echo $fetch['photo'];?>" alt="John Doe" id="preview_img" height="100px" width="100px" />
                    <?php
                        }
                    ?>
                </div>
						

						<div class="form-group row">
							<div class="col-md-5"></div>
							<div class="col-sm-6">
								<input type="submit" name="update" class="btn btn-success" value="Submit">&nbsp;
								<input type="reset" name="reset" class="btn btn-danger" value="Reset">&nbsp;
                <a href="view_staff.php" class="btn btn-warning">Back</a>
							</div>
						</div>
					</form>
			</div>
			
		</div>
	</div>
  <?php include('include/footer.php'); ?>
	<?php include('include/script.php'); 
        // include('include/footer.php');
  ?>
</body>
</html>


<?php


// error_reporting(0);

    if(isset($_POST['update']))
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
                $query=mysqli_query($connect,"update tbl_activity set
                
                activity_id='".$_POST['activity_id']."',
                activity_description='".$_POST['activity_description']."',
                activity_specification='".$_POST['activity_specification']."',
                photo='".$a."'
                where fld_activity_id='".$_GET['fld_activity_id']."'") or die(mysqli_error($connect));

                $desired_dir="../images/activity/";
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
                 // $add2=mysqli_query($connect,$query); 

                //  $save = "$desired_dir/" . $a; //This is the new file you saving
                //   $file = "$desired_dir/" . $a; //This is the original file

                //   list($width, $height) = getimagesize($file) ;

                //   $modwidth = 750;

                //   $modheight = 500;
                //   $tn = imagecreatetruecolor($modwidth, $modheight) ;
                //   if($extension=="jpg" || $extension=="jpeg" )
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

        if($query)
       {
         echo '<script type="text/javascript">';
         echo " alert('Activity Information Added Successfully.');";
         echo 'window.location.href = "activitiesinfo_view.php";';
         echo '</script>';
        }
        else
       {
         echo '<script type="text/javascript">';
         echo " alert('Activity Information Not Added.');";
         echo 'window.location.href = "add_activity.php";';
         echo '<script>';
       }
    }
?>               

<!-- <script language="javascript" type="text/javascript">
$(function () {
    $("#fileupload").change(function () {
        if (typeof (FileReader) != "undefined") {
            var dvPreview = $("#dvPreview");
            dvPreview.html("");
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
            $($(this)[0].files).each(function () {
                var file = $(this);
                if (regex.test(file[0].name.toLowerCase())) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var img = $("<img />");
                        img.attr("style", "height:100px;width: 100px");
                        img.attr("src", e.target.result);
                        dvPreview.append(img);
                    }
                    reader.readAsDataURL(file[0]);
                } else {
                    alert(file[0].name + " is not a valid image file.");
                    dvPreview.html("");
                    return false;
                }
            });
        } else {
            alert("This browser does not support HTML5 FileReader.");
        }
    });
});
</script> -->