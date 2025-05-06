<?php include('include/header_session.php'); ?>
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
								<h4>Update Documents </h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                  					<li class="breadcrumb-item">View Documents </li>
                  					<li class="breadcrumb-item">Update Documents </li>
								</ol>
							</nav>
						</div>
						<div class="col-md-4 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary" href="documents_view.php" role="button">
									View Documents 
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
                            $view = mysqli_query($connect,"select * from documents where fld_delete='0' order by documents_id desc") or die (mysqli_error($connect));
                            $fetch = mysqli_fetch_array($view);
                        ?>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Documents Required<span style="color: red;">*</span> : </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Documents Required" name="documents_required" required="" value="<?php echo $fetch['documents_required']?>">
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Category<span style="color: red;">*</span> : </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Category" name="category" required="" value="<?php echo $fetch['category']?>">
							</div>
						</div>

						<br>

						<div class="form-group row">
							<div class="col-md-5"></div>
							<div class="col-sm-6">
								<input type="submit" name="submit" class="btn btn-success" value="Submit">&nbsp;
								<input type="reset" name="submit" class="btn btn-danger" value="Cancel">&nbsp;
                				<a href="documents_view.php" class="btn btn-warning">Back</a>
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

<?php
                                    
    if (isset($_POST['submit'])) 
    {
        
        extract($_POST);
     
	            $query=mysqli_query($connect,"update documents set
                documents_required='".$documents_required."',
                category='".$category."'
                where documents_id='".$_GET['documents_id']."'") or die(mysqli_error($connect));
		        if ($query) 
		        {
		            echo "<script>";
		            echo "alert('Documents Update Successfully');";
		            echo "window.location.href='documents_view.php';";
		            echo "</script>";                 
		        }
		        else
		        {
		            echo "<script>";
		            echo "alert('Documents Not Update.');";
		            echo "</script>";
		        }
		    }    
    // }
?>