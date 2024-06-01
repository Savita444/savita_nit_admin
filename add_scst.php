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
								<h4>Add SC/ST Cell Members</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                  					<li class="breadcrumb-item"><a href="scst_view.php">SC/ST Cell Members</a></li>
                  					
								</ol>
							</nav>
						</div>
						<div class="col-md-4 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary" href="scst_view.php" role="button">
									View SC/ST Cell Members
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
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Name<span style="color: red;">*</span> : </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Name" name="fld_bm_name" required="">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Designation<span style="color: red;">*</span> : </label>
							<div class="col-sm-12 col-md-10">
								<select name="fld_bm_designation" class="form-control" required="">
									<option value="">--Select Designation--</option>
									<?php 
											$query=mysqli_query($connect,"select * from designation where Designation_delete='0' order by Designation_id asc");
											while ($row=mysqli_fetch_assoc($query)) {
												extract($row);
											
									?>
									<option value="<?php echo $row['Designation_id']; ?>"><?php echo $row['Designation']; ?></option>	
									<?php } ?>
								</select>
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Mobile Number<span style="color: red;">*</span> : </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Mobile Number" name="mobilenumber" required="">
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Email ID<span style="color: red;">*</span> : </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Email ID" name="email" required="">
							</div>
						</div>

						<br>

						<div class="form-group row">
							<div class="col-md-5"></div>
							<div class="col-sm-6">
								<input type="submit" name="submit" class="btn btn-success" value="Submit">&nbsp;
								<input type="reset" name="submit" class="btn btn-danger" value="Cancel">&nbsp;
                				<a href="scst_view.php" class="btn btn-warning">Back</a>
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
      //   $asd=mysqli_query($connect,"select * from tbl_alumini_committee where service_name='".$_POST['service_name']."' and fld_delete='0'") or die(mysqli_error($connect));
      //   if (mysqli_num_rows($asd)==1) {
      //     echo "<script>";
      //     echo "alert('Service Already Exist...!')";
      //     echo "window.location.href='service_add.php';";
      //     echo "</script>";
      // }
      //   else{

	$query="INSERT INTO tbl_scst_members(fld_bm_name,Designation_id,mobilenumber,email) VALUES ('$fld_bm_name','$fld_bm_designation','$mobilenumber','$email')";
		        
		        $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
		        if ($row) 
		        {
		            echo "<script>";
		            echo "alert('SC/ST Cell Members Added Successfully');";
		            echo "window.location.href='scst_view.php';";
		            echo "</script>";                 
		        }
		        else
		        {
		            echo "<script>";
		            echo "alert('Error');";
		            echo "</script>";
		        }
		    }    
    // }
?>