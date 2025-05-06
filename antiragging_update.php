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
								<h4>Update Antiragging Committee Members</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                  					<li class="breadcrumb-item">Update Antiragging Committee Members</li>
                  					
								</ol>
							</nav>
						</div>
						<div class="col-md-4 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary" href="antiragging_view.php" role="button">
									View Antiragging Committee Members
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
							$view=mysqli_query($connect,"select * from tbl_antiragging_members where fld_bm_id='".$_GET['fld_bm_id']."'") or die(mysqli_error($connect));
							$fetch = mysqli_fetch_array($view);
                        ?>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Name<span style="color: red;">*</span> : </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Name" name="fld_bm_name" required="" value="<?php echo $fetch['fld_bm_name']?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Designation<span style="color: red;">*</span> : </label>
							<div class="col-sm-12 col-md-10">
								<select name="fld_bm_designation" class="form-control" required="">
									<option value="">--Select Designation--</option>
									<?php 
											$query=mysqli_query($connect,"select * from designation where fld_delete='0' order by Designation_id asc");
											while ($row=mysqli_fetch_assoc($query)) {
												extract($row);
											
									?>
                                    <option value="<?php echo $row['Designation_id']; ?>"<?php if ($fetch['Designation_id']==$row['Designation_id']) {echo "selected";} ?>><?php echo $row['Designation']; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Mobile Number<span style="color: red;">*</span> : </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Mobile Number" name="mobilenumber" required="" value="<?php echo $fetch['mobilenumber']?>">
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Email ID<span style="color: red;">*</span> : </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Email ID" name="email" required="" value="<?php echo $fetch['email']?>">
							</div>
						</div>

						<br>

						<div class="form-group row">
							<div class="col-md-5"></div>
							<div class="col-sm-6">
								<input type="submit" name="submit" class="btn btn-success" value="Submit">&nbsp;
								<input type="reset" name="submit" class="btn btn-danger" value="Cancel">&nbsp;
                				<a href="antiragging_view.php" class="btn btn-warning">Back</a>
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
        
        $add2=mysqli_query($connect,"update tbl_antiragging_members set
        fld_bm_name='".$fld_bm_name."',
        Designation_id='".$fld_bm_designation."',
        mobilenumber='".$mobilenumber."',
        email='".$email."'
        where fld_bm_id='".$_GET['fld_bm_id']."'") or die(mysqli_error($connect));
		        
		        if ($add2) 
		        {
		            echo "<script>";
		            echo "alert('Antiragging Committee Members Update Successfully');";
		            echo "window.location.href='antiragging_view.php';";
		            echo "</script>";                 
		        }
		        else
		        {
		            echo "<script>";
		            echo "alert('Antiragging Committee Members Not Added');";
		            echo "</script>";
		        }
		    }    
    // }
?>