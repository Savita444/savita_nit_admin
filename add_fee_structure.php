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
                  <li class="breadcrumb-item active" aria-current="page">Add Fee Structure </li>
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
					<form method="post" name="Form" onsubmit="return validateForm()" id="myform" enctype="multipart/form-data">
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Acadamic Year <span style="color: red;">*</span> : </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Acadamic Year" name="ayear" required="">
							</div>
						</div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Year<span style="color: red;">*</span> : </label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" placeholder="Enter Year" name="year" required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Tution Fees <span style="color: red;">*</span> : </label>
              <div class="col-sm-12 col-md-10">
                <input type="text" name="tfees" id="n1" class="form-control" placeholder="Enter Tution Fees" required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Development Fees <span style="color: red;">*</span> : </label>
              <div class="col-sm-12 col-md-10">
                <input type="text" class="form-control" name="dfees" placeholder="Enter Development Fees" required="" id="n2" onkeyup="fn1()">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Total <span style="color: red;">*</span> : </label>
              <div class="col-sm-12 col-md-10">
                <input type="text" name="total" id="n3" class="form-control" placeholder="Total" required readonly="" />
              </div>
            </div>
						<div class="form-group row">
							<div class="col-sm-12">
                <center>
                  <input type="submit" name="submit" class="btn btn-success" value="Submit">
                </center>
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
                      
if (isset($_POST['submit'])) 
{
  extract($_POST);
  $query="insert into tbl_fee_structure(fld_fee_acadamic_year,fld_fee_year,fld_fee_tution_fees,fld_fee_development_fees,fld_fee_total) VALUES('$ayear','$year','$tfees','$dfees','$total')";
  //echo $query."<br>";
  $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
  if ($row) 
  {
      echo "<script>";
      echo "alert('Fees Detail Added Successfully');";
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
