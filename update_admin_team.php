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
								<h4>Add Admin Team</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item"><a href="view_admin_team.php">View Admin Team</a></li>
									<li class="breadcrumb-item active" aria-current="page">Add Admin Team</li>
								</ol>
							</nav>
						</div>
            <div class="col-md-6 col-sm-12 text-right">
              <div class="dropdown">
                <a class="btn btn-primary" href="view_admin_team.php" role="button">
                  View Admin Team
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
          <?php 
                $sel=mysqli_query($connect,"select * from tbl_admin_team where fld_admin_id='".$_GET['fld_admin_id']."'") or die(mysqli_error($connect));
                $fetch=mysqli_fetch_array($sel);
              ?> 
					<form method="post" enctype="multipart/form-data">
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Name<span style="color: red;">*</span></label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Name" name="name" required="" value="<?php echo $fetch['fld_admin_name'];?>">
							</div>
						</div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Desgination<span style="color: red;">*</span></label>
              <div class="col-sm-12 col-md-10">
                <select name="designation" class="form-control"  required="">
                    <option value="">Select Designation</option>
                        <?php
                            $query1=mysqli_query($connect,"select * from designation where Designation_delete='0' order by Designation_id desc");
                            while($row=mysqli_fetch_assoc($query1)){
                              extract($row);
                          ?>
                    <option value="<?php echo $row['Designation_id'];?>" <?php if ($fetch['Designation_id']==$row['Designation_id']){echo "selected";} ?>><?php echo $row['Designation'];?></option>
                    <?php  }?>
                 </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Department<span style="color: red;">*</span></label>
              <div class="col-sm-12 col-md-10">
                <select name="department" class="form-control"  required="">
                    <option value="">Select Department</option>
                        <?php
                            $query1=mysqli_query($connect,"select * from department where Department_delete='0' order by Department_id desc");
                            while($row=mysqli_fetch_assoc($query1)){
                              extract($row);
                          ?>
                    <option value="<?php echo $row['Department_id'];?>" <?php if ($fetch['Department_id']==$row['Department_id']){echo "selected";} ?>><?php echo $row['Department'];?></option>
                    <?php  }?>
                 </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Qualification<span style="color: red;">*</span></label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" placeholder="Enter Qualification" name="qualification" value="<?php echo $fetch['fld_admin_qualification'];?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Experiance<span style="color: red;">*</span></label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" placeholder="Enter Experiance" name="experiance" required="" value="<?php echo $fetch['fld_admin_experiance'];?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Email<span style="color: red;">*</span></label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="email" placeholder="Enter Email" name="email" value="<?php echo $fetch['fld_admin_email'];?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Mobile<span style="color: red;">*</span></label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="tel" maxlength="10" minlength="10" pattern="[789]{1}[0-9]{9}" placeholder="Enter Mobile" name="mobile" value="<?php echo $fetch['fld_admin_mobile'];?>">
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
                        if ($fetch['fld_admin_photo']=="") 
                        {
                    ?>
                            <img src="../images/No-image-full.jpg" alt="John Doe" id="preview_img" height="100px" width="100px"/>
                    <?php
                        }
                        else
                        {
                    ?>                                        
                            <img src="../images/admin_team/<?php echo $fetch['fld_admin_photo'];?>" alt="John Doe" id="preview_img" height="100px" width="100px" />
                    <?php
                        }
                    ?>
                </div>
							</div>
						</div>
						

						<div class="form-group row">
							<div class="col-md-5"></div>
							<div class="col-sm-6">
								<input type="submit" name="update" class="btn btn-success" value="Update">&nbsp;
								<input type="reset" name="reset" class="btn btn-danger" value="Reset">&nbsp;
                <a href="view_admin_team.php" class="btn btn-warning">Back</a>
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
                // if($file_size > 10485760){
                //     $errors[]='File size must be less than 10 MB';
                // }       
                $query=mysqli_query($connect,"update tbl_admin_team set
                fld_admin_name='".$name."', 
                Designation_id='".$_POST['designation']."',
                Department_id='".$_POST['department']."',
                fld_admin_qualification='".$_POST['qualification']."',
                fld_admin_experiance='".$_POST['experiance']."',
                fld_admin_email='".$_POST['email']."',
                fld_admin_mobile='".$_POST['mobile']."',
                fld_admin_photo='".$a."'
                where fld_admin_id='".$_GET['fld_admin_id']."'") or die(mysqli_error($connect));

                $desired_dir="../images/admin_team/";
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

                 $save = "$desired_dir/" . $a; //This is the new file you saving
                  $file = "$desired_dir/" . $a; //This is the original file

                  list($width, $height) = getimagesize($file) ;

                  $modwidth = 121;

                  // $diff = $width / $modwidth;

                  // $modheight = $height / $diff;
                  $modheight = 120;
                  $tn = imagecreatetruecolor($modwidth, $modheight) ;
                  $image = imagecreatefromjpeg($file) ;
                  imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ;

                  imagejpeg($tn, $save, 100) ;        
                // }else{
                //         print_r($errors);
                // }
            }
            if(empty($error)){
                // echo "Success";
            }
        }

        if($add2)
       {
         echo '<script type="text/javascript">';
         echo " alert('Admin Member Update Successfully.');";
         echo 'window.location.href = "view_admin_team.php";';
         echo '</script>';
        }
        else
       {
         echo '<script type="text/javascript">';
         echo " alert('Admin Member Not Update.');";
         echo 'window.location.href = "update_admin_team.php";';
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