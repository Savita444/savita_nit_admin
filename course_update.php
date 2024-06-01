<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
   

</head>
<body>
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-8 col-sm-12">
							<div class="title">
								<h4>Update Coures Offered</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                  					<li class="breadcrumb-item"><a href="view_course.php">Coures Offered</a></li>
                  					<li class="breadcrumb-item">View Coures Offered</li>
                  					<li class="breadcrumb-item">Update Coures Offered</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-4 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary" href="view_course.php" role="button">
									View Courese Offered
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<!-- <h4 class="text-blue">Add Services</h4> -->
						</div>
					</div>
					<br>
					<form method="post">
						<?php
			              $sel=mysqli_query($connect,"select * from tbl_courese_offered where fld_co_id='".$_GET['fld_co_id']."'") or die(mysqli_error($connect));
			              $fetch=mysqli_fetch_array($sel);
			            ?>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Course Name<span style="color: red;">*</span> : </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Course Name" name="fld_co_course_name" value="<?php echo $fetch['fld_co_course_name'];?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Year<span style="color: red;">*</span> : </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Year" name="fld_co_year" value="<?php echo $fetch['fld_co_year'];?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Intake<span style="color: red;">*</span> : </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Intake" name="fld_co_intake" value="<?php echo $fetch['fld_co_intake'];?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Choice Code<span style="color: red;">*</span> : </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Choice Code" name="fld_co_choice_code" value="<?php echo $fetch['fld_co_choice_code'];?>">
							</div>
						</div>
						

						<br>

						<div class="form-group row">
							<div class="col-md-5"></div>
							<div class="col-sm-6">
								<input type="submit" name="update" class="btn btn-success" value="Update">&nbsp;
								
                				<a href="view_course.php" class="btn btn-warning">Back</a>
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
    
    if(isset($_POST['update']))
    {
      extract($_POST);
     $asv="update tbl_courese_offered set
                fld_co_course_name='".$_POST['fld_co_course_name']."',
                fld_co_year='".$_POST['fld_co_year']."',
                fld_co_intake='".$_POST['fld_co_intake']."' ,
                fld_co_choice_code='".$_POST['fld_co_choice_code']."'              
                where fld_co_id='".$_GET['fld_co_id']."'";

     $update=mysqli_query($connect,$asv) or die(mysqli_error($connect));
     if($update)
                              {
           echo '<script type="text/javascript">';
           echo " alert('Courese Offered Updated Successfully');";
           echo 'window.location.href = "view_course.php";';
           echo '</script>';
      
                          }
                         else
                         {
           echo '<script type="text/javascript">';
           echo "alert('Courese Offered Updated  not Successfully');";
             echo '<script>';
                          
      
        }
    }


?>               