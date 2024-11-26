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
								<h4>Update Faculty</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<!-- <li class="breadcrumb-item"><a href="view_staff.php">Faculty</a></li> -->
									<li class="breadcrumb-item active" aria-current="page">Update Faculty</li>
								</ol>
							</nav>
						</div>
            <div class="col-md-6 col-sm-12 text-right">
              <div class="dropdown">
                <a class="btn btn-primary" href="view_staff.php" role="button">
                  View Faculty
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
                        
              $view=mysqli_query($connect,"select * from tbl_staff where fld_staff_id='".$_GET['fld_staff_id']."'") or die(mysqli_error($connect));
              $fetch = mysqli_fetch_array($view);
              ?>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Name<span style="color: red;">*</span></label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Name" name="fld_staff_name" required="" value="<?php echo $fetch['fld_staff_name'];?>">
							</div>
						</div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Designation<span
                      style="color: red;">*</span></label>
              <div class="col-sm-12 col-md-10">
                  <select name="Designation_id" class="form-control">
                      <option value="">Select Designation</option>
                      <?php
                $query1=mysqli_query($connect,"select * from designation where fld_delete='0' order by Designation_id desc");
                while($row=mysqli_fetch_assoc($query1)){
                  extract($row);
              ?>
                      <option value="<?php echo $row['Designation_id']; ?>"
                          <?php if($fetch['Designation_id']==$row['Designation_id']) {echo "selected";} ?>>
                          <?php echo $row['Designation']; ?></option>
                      <?php  }?>
                  </select>
              </div>
          </div>
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
              <label class="col-sm-12 col-md-2 col-form-label">Qualification<span style="color: red;">*</span></label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" placeholder="Enter Qualification" name="qualification" value="<?php echo $fetch['fld_staff_qualification'];?>">
              </div>
            </div>
           
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Email<span style="color: red;">*</span></label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="email" placeholder="Enter Email" name="email" value="<?php echo $fetch['fld_staff_email'];?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Mobile<span style="color: red;">*</span></label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="tel" maxlength="10" minlength="10" pattern="[789]{1}[0-9]{9}" placeholder="Enter Mobile" name="mobile" value="<?php echo $fetch['fld_staff_mobile'];?>">
              </div>
            </div>
						<div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Photo<span style="color: red;">*</span></label>
              <div class="col-sm-12 col-md-10">
                <div id="dvPreview">
                  <?php
                    if($fetch['fld_staff_photo'] =="")
                    {
                        ?>
                            <img src="assets/images/staff/No-image-full.jpg" alt="" id="preview_img" height="100px" width="100px" />
                    <?php
                        }
                        else
                        {
                    ?>                                        
                            <img src="assets/images/staff/<?php echo $fetch['fld_staff_photo'];?>" id="preview_img" height="100px" width="100px"/>
                    <?php
                        }
                   ?>
                </div>
                <input name="photo" type="file" accept=" .jpg , .jpeg , .png , .gif" id="fileupload">
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
    
    error_reporting(0);

    if(isset($_POST['submit']))
    {
     extract($_POST);


    $name=$_FILES['photo']['name'];
    $size=$_FILES['photo']['size'];
    $type=$_FILES['photo']['type'];
    $temp=$_FILES['photo']['tmp_name'];

    if($name)
        {
            $upload_dir = 'assets/images/staff/';
            $imgExt = strtolower(pathinfo($name,PATHINFO_EXTENSION)); // get image extension
            $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
            $photo = rand(1000,1000000).".".$imgExt;
            unlink($upload_dir.$fetch['photo']);
            move_uploaded_file($temp,$upload_dir.$photo);

        }
    else
        {
            $photo=$fetch['fld_staff_photo'];
        }
      
      $update=mysqli_query($connect,"update tbl_staff set
                fld_staff_name='".$fld_staff_name."', 
                Designation_id='".$_POST['Designation_id']."',
                Department_id='".$_POST['Department_id']."',
                fld_staff_qualification='".$_POST['qualification']."',
                fld_staff_photo='".$photo."'
                where fld_staff_id='".$_GET['fld_staff_id']."'") or die(mysqli_error($connect));
     if($update)
      {
        echo '<script type="text/javascript">';
        echo " alert('Faculty Member Update Successfully.');";
        echo 'window.location.href = "view_staff.php";';
        echo '</script>';
      }
      else
      {
        echo '<script type="text/javascript">';
        echo "alert('Faculty Member Not Update.');";
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