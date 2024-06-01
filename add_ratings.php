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
								<h4>Add Ratings</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item"><a href="view_testimonial.php">Ratings</a></li>
									<li class="breadcrumb-item active" aria-current="page">Add Ratings</li>
								</ol>
							</nav>
						</div>
            <div class="col-md-6 col-sm-12 text-right">
              <div class="dropdown">
                <a class="btn btn-primary" href="view_ratings.php" role="button">
                  View Ratings
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
							<label class="col-sm-12 col-md-2 col-form-label">Title</label>
							<div class="col-sm-12 col-md-10">
								
								<input class="form-control" type="text" placeholder="Enter Title" name="title">
							</div>
				 </div>
					
				  <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Name Of Person<span style="color: red;">*</span></label>
                   <div class="col-sm-12 col-md-10">
                   <input class="form-control" type="text" placeholder="Enter Name Of Person" name="personName">
                   </div>
                   </div>	
                  
                     <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Rating<span style="color: red;">*</span></label>
              <div class="col-sm-12 col-md-10">
                <select name="rating" class="form-control">
                    <option value="">Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    
                        
                 </select>
              </div>
            </div>
                  
	
						

						<div class="form-group row">
							<div class="col-md-5"></div>
							<div class="col-sm-6">
								<input type="submit" name="submit" class="btn btn-success" value="Submit">&nbsp;
								<input type="reset" name="reset" class="btn btn-danger" value="Reset">&nbsp;
                <a href="view_testimonial.php" class="btn btn-warning">Back</a>
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
                                    
                                    if (isset($_POST['submit'])) 
                                    {
                                        
                                        extract($_POST);

                                        $feedback=$_POST['feedback'];
                                        $coulmn=array();
								        $query1=mysqli_query($connect,"select * from tbl_testimonials where fld_delete='0'");
								        while ($row=mysqli_fetch_assoc($query1))
								        {
								          $coulmn[]=$row['feedback'];
								        }

								        if (in_array($feedback, $coulmn)) 
										{
											echo '<script type="text/javascript">'; 
											echo 'alert("Feedback Is Already Exist");';
											echo "window.location.href = 'view_testimonial.php';";
											echo '</script>'; 
											return true;

										}    
								        else
								        {


	                                        $query="INSERT INTO tbl_ratings(title,personName,rating) VALUES ('$title','$personName','$rating')";
	                                        //echo $query."<br>";
	                                        $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
	                                        if ($row) 
	                                        {
	                                            echo "<script>";
	                                            echo "alert('Ratings Added Successfully');";
	                                            echo "window.location.href='view_ratings.php';";
	                                            echo "</script>";                 
	                                        }
	                                        else
	                                        {
	                                            echo "<script>";
	                                            echo "alert('Error');";
	                                            echo "window.location.href='view_ratings.php';";
	                                            echo "</script>";
	                                        }
	                                    }    
                                    }
                                ?>

