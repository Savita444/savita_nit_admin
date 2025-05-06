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
								<h4>Update Staff Download Section</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item">Update Staff Download Section</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary" href="cap_view.php" role="button">
                                    View Staff Download Section
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
                        
                        $view=mysqli_query($connect,"select * from staff_download where staff_id='".$_GET['staff_id']."'") or die(mysqli_error($connect));
                        $fetch = mysqli_fetch_array($view);
                        
                    
                        ?>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Title<span style="color: red;">*</span> :
                            </label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" placeholder="Enter Title" name="title"
                                    required="" value="<?php echo $fetch['title']?>">
                            </div>
                        </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Upload PDf<span style="color: red;">*</span></label>
                        <div class="col-sm-12 col-md-10">
                        <div class="preview_box">
                                    <?php 
                                        if(empty($fetch['file']))
                                        { 
                                    ?>
                                        <img id="preview_img" src="assets/images/staff_download/placeholder.jpg" height="100" width="100" />
                                    <?php 
                                        }
                                        else
                                        {
                                            $file_extension = pathinfo($fetch['file'], PATHINFO_EXTENSION);
                                            if (in_array($file_extension, ['.pdf'])) {
                                    ?>
                                        <img id="preview_img" src="assets/images/staff_download/<?php echo $fetch['file']?>" height="100" width="100" />
                                    <?php 
                                            } elseif ($file_extension == 'pdf') {
                                    ?>
                                        <p>PDF File: <?php echo $fetch['file']?></p>
                                    <?php 
                                            } else {
                                    ?>
                                        <p>Unsupported file type: <?php echo $fetch['file']?></p>
                                    <?php 
                                            }
                                        }
                                    ?>

                                    <input type="file" id="image" name="file" accept="application/pdf" />
                                </div>
                        <!-- <input name="file" type="file"  accept="application/pdf"> -->
                    </div>
						</div>
										<div class="form-group row">
							<div class="col-md-5"></div>
							<div class="col-sm-6">
								<input type="submit" name="submit" class="btn btn-success" value="Submit">&nbsp;
								<input type="reset" name="reset" class="btn btn-danger" value="Reset">&nbsp;
                                <a href="staff_view.php" class="btn btn-warning">Back</a>
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
    
    $fileName=$_FILES["file"]["name"];
    $fileSize=$_FILES["file"]["size"];
    $fileType=$_FILES["file"]["type"];
    $fileTmpName=$_FILES["file"]["tmp_name"];  
    $a=uniqid().$fileName;
    $extension = strtolower(pathinfo($a,PATHINFO_EXTENSION));  

    $add2=mysqli_query($connect,"update staff_download set
    title='".$title."',
    file='".$a."'
    where staff_id='".$_GET['staff_id']."'") or die(mysqli_error($connect)); 
           
    $desired_dir="assets/images/staff_download/";
    move_uploaded_file($fileTmpName,"$desired_dir/".$a);

    if($add2)
   {
     echo '<script type="text/javascript">';
     echo " alert('Staff Download Section Update Successfully.');";
     echo 'window.location.href = "staff_view.php";';
     echo '</script>';
    }
    else
   {
     echo '<script type="text/javascript">';
     echo " alert('Staff Download Section Not Update.');";
     echo 'window.location.href = "staff_view.php";';
     echo '<script>';
   }
}
?>               

