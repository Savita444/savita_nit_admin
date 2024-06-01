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
								<h4>Add Facility Information</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item"><a href="facilitiesinfo_view.php">Facility Information</a></li>
									<li class="breadcrumb-item active" aria-current="page">Add Facility Information</li>
								</ol>
							</nav>
						</div>
            <div class="col-md-6 col-sm-12 text-right">
              <div class="dropdown">
                <a class="btn btn-primary" href="facilitiesinfo_view.php" role="button">
                  View Facility Information
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
						<!--<div class="form-group row">-->
						<!--	<label class="col-sm-12 col-md-2 col-form-label">Name<span style="color: red;">*</span></label>-->
						<!--	<div class="col-sm-12 col-md-10">-->
						<!--		<input class="form-control" type="text" placeholder="Enter Name" name="name" required="">-->
						<!--	</div>-->
						<!--</div>-->
						
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Facility<span style="color: red;">*</span></label>
              <div class="col-sm-12 col-md-10">
                <select name="facility_id" class="form-control"  required="">
                    <option value="">Select Facility</option>
                        <?php
                            $query1=mysqli_query($connect,"select * from facility where facility_delete='0' order by facility_id desc");
                            while($row=mysqli_fetch_assoc($query1)){
                              extract($row);
                          ?>
                    <option value="<?php echo $row['facility_id'];?>"><?php echo $row['facility'];?></option>
                        <?php  }?>
                 </select>
              </div>
            </div>
            <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Facility Description</label>
							<div class="col-sm-12 col-md-10">
								<textarea class="textarea_editor form-control border-radius-0" name="facility_description" placeholder="Enter Facility Description"></textarea>
							</div>
						</div>
						
						<!--<div class="form-group row">-->
						<!--	<label class="col-sm-12 col-md-2 col-form-label">Facility Specification</label>-->
						<!--	<div class="col-sm-12 col-md-10">-->
						<!--		<textarea class="textarea_editor form-control border-radius-0" name="facility_specification" placeholder="Enter Facility Specification"></textarea>-->
						<!--	</div>-->
						<!--</div>-->
            
            
           						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Photo<span style="color: red;">*</span></label>
							<div class="col-sm-12 col-md-10">
                <!-- <div id="preview_img"></div> -->
                <div id="dvPreview"></div>
								<input name="files[]" type="file" multiple accept=" .jpg , .jpeg , .png , .gif" id="fileupload">
                <p class="help-block" style="color: red">In width-750 X height-500 Size.</p> 

							</div>
						</div>
						

						<div class="form-group row">
							<div class="col-md-5"></div>
							<div class="col-sm-6">
								<input type="submit" name="submit" class="btn btn-success" value="Submit">&nbsp;
								<input type="reset" name="reset" class="btn btn-danger" value="Reset">&nbsp;
                <a href="view_staff.php" class="btn btn-warning">Back</a>
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
                $extension = strtolower(pathinfo($a,PATHINFO_EXTENSION));
                // if($file_size > 10485760){
                //     $errors[]='File size must be less than 10 MB';
                // }       
                $query="insert into tbl_facility(facility_id,facility_description,photo) VALUES('$facility_id','$facility_description','$a');";
                $desired_dir="../images/facility/";
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

                //  $save = "$desired_dir/" . $a; //This is the new file you saving
                //   $file = "$desired_dir/" . $a; //This is the original file

                //   list($width, $height) = getimagesize($file) ;

                //   $modwidth = 750;

                 
                //   $modheight = 500;
                //   $tn = imagecreatetruecolor($modwidth, $modheight) ;
                //  if($extension=="jpg" || $extension=="jpeg" )
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

        if($add2)
       {
         echo '<script type="text/javascript">';
         echo " alert('Facility Information Added Successfully.');";
         echo 'window.location.href = "facilitiesinfo_view.php";';
         echo '</script>';
        }
        else
       {
         echo '<script type="text/javascript">';
         echo " alert('Facility Information Not Added.');";
         echo 'window.location.href = "add_facility.php";';
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