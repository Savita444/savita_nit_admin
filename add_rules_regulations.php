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
								<h4>Add Rules And Regulations</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                  					<li class="breadcrumb-item">Add Rules And Regulations</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-4 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary" href="rules_regulations_view.php" role="button">
									View Rules And Regulations
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
							<label class="col-sm-12 col-md-2 col-form-label">Rules And Regulations<span style="color: red;">*</span> : </label>
							<div class="col-sm-12 col-md-10">
								<!-- <textarea class="form-control" type="text" placeholder="Enter Name" name="gov_address" required=""> -->
								<textarea class="textarea_editor form-control border-radius-0" name="rules_regulations" placeholder="Enter Rules And Regulations"></textarea>
							</div>
						</div>
						<br>
						<div class="form-group row">
							<div class="col-md-5"></div>
							<div class="col-sm-6">
								<input type="submit" name="submit" class="btn btn-success" value="Submit">&nbsp;
								<input type="reset" name="submit" class="btn btn-danger" value="Cancel">&nbsp;
                				<a href="rules_regulations_view.php" class="btn btn-warning">Back</a>
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

	$query="INSERT INTO library_rules_regulations(rules_regulations) VALUES ('$rules_regulations')";
		        
		        $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
		        if ($row) 
		        {
		            echo "<script>";
		            echo "alert('Rules And Regulations Added Successfully');";
		            echo "window.location.href='rules_regulations_view.php';";
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