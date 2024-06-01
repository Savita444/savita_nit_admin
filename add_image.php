<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	<title>Add Gallery Title</title>
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
								<h4>Add Image Title</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item">Gallery</li>
									<li class="breadcrumb-item">Image Title</li>
									<li class="breadcrumb-item">Add Image Title</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>


				
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<!-- <h4 class="text-blue">Add Image Title</h4> -->
						</div>
						
					</div><br> 

								<?php
                                    
                                    if (isset($_POST['submit'])) 
                                    {
                                        
                                        extract($_POST);


                                        $query="INSERT INTO tbl_gallery_image_title(fld_image_title) VALUES ('$image_title')";
                                        //echo $query."<br>";
                                        $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
                                        if ($row) 
                                        {
                                            echo "<script>";
                                            echo "alert('Image Title Added Successfully');";
                                            echo "window.location.href='view_image.php';";
                                            echo "</script>";                 
                                        }
                                        else
                                        {
                                            echo "<script>";
                                            echo "alert('Error');";
                                            echo "</script>";
                                        }
                                    }
                                ?>						
					<form method="post">
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Image Title <span class="text-danger">*</span></label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="image_title" placeholder="Enter Image Title" required="" >
							</div>
						</div>

						
						<div class="form-group row">
<!-- 							<label class="col-sm-12 col-md-2 col-form-label">Submit</label>
 -->							<div class="col-sm-12 col-md-10">
							<center><input class="btn btn-success" value="Submit" type="submit" name="submit">&nbsp;
								<input class="btn btn-danger" value="Reset" type="reset">&nbsp;
								<a href="view_image.php" class="btn btn-warning">Back</a></center>
							</div>
						</div>
					</form>
				</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>