<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	 <!-- <style>
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
        </script> -->     

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
								<h4>View Marquee</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item"><a href="view_marquee.php">Marquee</a></li>
									<li class="breadcrumb-item active" aria-current="page">View Marquee</li>
								</ol>
							</nav>
						</div>
            <div class="col-md-6 col-sm-12 text-right">
              <div class="dropdown">
                <a class="btn btn-primary" href="view_marquee.php" role="button">
                  View Marquee
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
						<!-- <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Title<span style="color: red;">*</span></label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Slider Image Title" name="Slider_title" required="">
							</div>
						</div> -->
            <!-- <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Subtitle<span style="color: red;">*</span></label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" placeholder="Enter Slider Image Subtitle" name="Slider_subtitle" required="">
              </div>
            </div> -->
						<!-- <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Slider Images<span style="color: red;">*</span></label>
							<div class="col-sm-12 col-md-10">
								<input  name="files[]" type="file" multiple required="" accept=" .jpg , .jpeg , .png , .gif" id="fileupload">
                <p class="help-block" style="color: red">Select multiple images. In width-1680 X height-700 Size.</p>
                <br>
                <div id="dvPreview"></div>
							</div>
						</div> -->
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Marquee Description</label>
							<div class="col-sm-12 col-md-10">
								<textarea class="textarea_editor form-control border-radius-0" name="marquee_text" placeholder="Enter Marquee Description"></textarea>
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-5"></div>
							<div class="col-sm-6">
								<input type="submit" name="submit" class="btn btn-success" value="Submit">&nbsp;
								<input type="reset" name="reset" class="btn btn-danger" value="Reset">&nbsp;
                <a href="view_marquee.php" class="btn btn-warning">Back</a>
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


//error_reporting(0);

    if(isset($_POST['submit']))
    {
        extract($_POST);

        $query="insert into tbl_marquee(marquee_text) VALUES('$marquee_text'); ";
     
         $add2=mysqli_query($connect,$query); 

                

        if($add2)
       {
         echo '<script type="text/javascript">';
         echo " alert('Marquee Added Successfully.');";
         echo 'window.location.href = "view_marquee.php";';
         echo '</script>';
        }
        else
       {
         echo '<script type="text/javascript">';
         echo " alert('Marquee Not Added.');";
         echo 'window.location.href = "add_marquee.php";';
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