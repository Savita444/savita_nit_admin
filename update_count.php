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
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Count</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item"><a href="#">Count</a></li>
                  					<li class="breadcrumb-item" aria-current="page">Update Count</li>
                  
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary" href="view_count.php" role="button">
									View Count
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<!-- <h4 class="text-blue">Services</h4> -->
						</div>
					</div>
					<br>
					<form method="post">
						<?php          
	                        $sel=mysqli_query($connect,"select * from index_count where count_id='".$_GET['count_id']."'") or die(mysqli_error($connect));
	                        $fetch=mysqli_fetch_array($sel);
                        ?>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Title : </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Title" name="count_title" value="<?php echo $fetch['count_title'];?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Count : </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Count" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="count_record" value="<?php echo $fetch['count_record'];?>">
							</div>
						</div>
						<br>

						<div class="form-group row">
							<div class="col-md-5"></div>
							<div class="col-sm-6">
								<input type="submit" name="update" class="btn btn-success" value="Update">&nbsp;
                				<a href="view_count.php" class="btn btn-warning">Back</a>
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
      //   $asd=mysqli_query($connect,"select * from index_count where service_id!='".$_GET['service_id']."' and service_name='".$_POST['service_name']."' and fld_delete='0'") or die(mysqli_error($connect));
      //   if (mysqli_num_rows($asd)==1) {
      //     echo "<script>";
      //     echo "alert('Service Already Exist...!')";
      //     echo "</script>";
      // }
      //   else{


     $update=mysqli_query($connect,"update index_count set count_title='".$_POST['count_title']."',	count_record='".$_POST['count_record']."'
        where count_id='".$_GET['count_id']."'") or die(mysqli_error($connect));
     if($update)
                              {
           echo '<script type="text/javascript">';
           echo " alert('Count Title Updated Successfully');";
           echo 'window.location.href = "view_count.php";';
           echo '</script>';
      
                          }
                         else
                         {
           echo '<script type="text/javascript">';
           echo "alert('Count Title Updated  not Successfully');";
             echo '<script>';
                          
      
        }
    }

// }
?>                         