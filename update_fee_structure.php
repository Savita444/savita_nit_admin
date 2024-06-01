<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>

	 <script type="text/javascript">
  function fn1()
{
  var pri=parseInt(document.getElementById('n1').value);
  // alert(pri);
  var qui=parseInt(document.getElementById('n2').value);
  // alert(qui);
  var result=pri + qui;
  // alert(result);
  document.getElementById('n3').value=result;
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
								<h4>Fee Structure</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item"><a href="view_fee_structure.php">Fee Structure</a> </li>
                  <li class="breadcrumb-item active" aria-current="page">Update Fee Structure </li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
              <div class="dropdown">
                <a class="btn btn-primary" href="view_fee_structure.php" role="button">
                  View Fee Structure
                </a>
              </div>
            </div>  
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<!-- <h4 class="text-blue">Update Profile</h4> -->
						</div>
					</div>
					<br>
          <?php 
                $sel=mysqli_query($connect,"select * from tbl_fee_structure where fld_fee_id='".$_GET['fld_fee_id']."'") or die(mysqli_error($connect));
                $fetch=mysqli_fetch_array($sel);
           ?> 
					<form method="post" name="Form" onsubmit="return validateForm()" id="myform" enctype="multipart/form-data">
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Acadamic Year <span style="color: red;">*</span> : </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Acadamic Year" name="ayear" value="<?php echo $fetch['fld_fee_acadamic_year'];?>" required="" >
							</div>
						</div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Year<span style="color: red;">*</span> : </label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control" value="<?php echo $fetch['fld_fee_year'];?>" type="text" placeholder="Enter Year" name="year" required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Tution Fees <span style="color: red;">*</span> : </label>
              <div class="col-sm-12 col-md-10">
                <input type="text" name="tfees" value="<?php echo $fetch['fld_fee_tution_fees'];?>" id="n1" class="form-control" placeholder="Enter Tution Fees" required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Development Fees <span style="color: red;">*</span> : </label>
              <div class="col-sm-12 col-md-10">
                <input type="text" class="form-control" name="dfees" placeholder="Enter Development Fees" required="" value="<?php echo $fetch['fld_fee_development_fees'];?>" id="n2" onkeyup="fn1()">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Total <span style="color: red;">*</span> : </label>
              <div class="col-sm-12 col-md-10">
                <input type="text" name="total" value="<?php echo $fetch['fld_fee_total'];?>"  id="n3" class="form-control" placeholder="Total" required readonly="" />
              </div>
            </div>
						<div class="form-group row">
							<div class="col-sm-12">
                <center>
                  <input type="submit" name="submit" class="btn btn-success" value="Update">
                </center>
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
  $update=mysqli_query($connect,"update tbl_fee_structure set
                fld_fee_acadamic_year='".$ayear."',
                fld_fee_year='".$year."',
                fld_fee_tution_fees='".$tfees."',
                fld_fee_development_fees='".$dfees."',
                fld_fee_total='".$total."'
                where fld_fee_id='".$_GET['fld_fee_id']."'") or die(mysqli_error($connect));
  if ($update) 
  {
      echo "<script>";
      echo "alert('Fees Detail Update Successfully');";
      echo "window.location.href='view_fee_structure.php';";
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
