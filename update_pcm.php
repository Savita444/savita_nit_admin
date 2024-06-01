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
								<h4>Add Placement Cell Member</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item"><a href="view_staff.php">Placement Cell Member</a></li>
									<li class="breadcrumb-item active" aria-current="page">Add Placement Cell Member</li>
								</ol>
							</nav>
						</div>
            <div class="col-md-6 col-sm-12 text-right">
              <div class="dropdown">
                <a class="btn btn-primary" href="view_pcm.php" role="button">
                  View Placement Cell Member
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
                $sel=mysqli_query($connect,"select * from tbl_placement_cell_member where fld_pcm_id='".$_GET['fld_pcm_id']."'") or die(mysqli_error($connect));
                $fetch=mysqli_fetch_array($sel);
          ?> 
					<form method="post" enctype="multipart/form-data">
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Name<span style="color: red;">*</span></label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Name" name="name" required="" value="<?php echo $fetch['fld_name'];?>">
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
                <select name="department" class="form-control">
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
            <!-- <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Qualification<span style="color: red;">*</span></label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" placeholder="Enter Qualification" name="qualification">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Experiance<span style="color: red;">*</span></label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" placeholder="Enter Experiance" name="experiance">
              </div>
            </div> -->
            <!-- <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Email<span style="color: red;">*</span></label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="email" placeholder="Enter Email" name="email">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Mobile<span style="color: red;">*</span></label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="tel" maxlength="10" minlength="10" pattern="[789]{1}[0-9]{9}" placeholder="Enter Mobile" name="mobile">
              </div>
            </div> -->
						<!-- <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Photo<span style="color: red;">*</span></label>
							<div class="col-sm-12 col-md-10">
                <div id="preview_img"></div>
								<input  name="files[]" type="file" multiple accept=" .jpg , .jpeg , .png , .gif" id="fileupload">
                <p class="help-block" style="color: red">In width-121 X height-120 Size.</p>              
							</div>
						</div> -->
						

						<div class="form-group row">
							<div class="col-md-5"></div>
							<div class="col-sm-6">
								<input type="submit" name="update" class="btn btn-success" value="Submit">&nbsp;
								<input type="reset" name="reset" class="btn btn-danger" value="Reset">&nbsp;
                <a href="view_pcm.php" class="btn btn-warning">Back</a>
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


       
                $query=mysqli_query($connect,"update tbl_placement_cell_member set
                fld_name='".$name."', 
                Designation_id='".$_POST['designation']."',
                Department_id='".$_POST['department']."'
                where fld_pcm_id='".$_GET['fld_pcm_id']."'") or die(mysqli_error($connect));

                

            

        if($query)
       {
         echo '<script type="text/javascript">';
         echo " alert('Placement Cell Member Update Successfully.');";
         echo 'window.location.href = "view_pcm.php";';
         echo '</script>';
        }
        else
       {
         echo '<script type="text/javascript">';
         echo " alert('Placement Cell Member Not Update.');";
         echo 'window.location.href = "add_pcm.php";';
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