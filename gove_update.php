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
								<h4>Update Governing Board Members</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                  					<li class="breadcrumb-item"><a href="view_gove.php">Governing Board Members</a></li>
                  					<li class="breadcrumb-item">Update Governing Board Members</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary" href="view_gove.php" role="button">
									View Governing Board Members
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
			              $sel=mysqli_query($connect,"select * from tbl_board_members where fld_bm_id='".$_GET['fld_bm_id']."'") or die(mysqli_error($connect));
			              $fetch=mysqli_fetch_array($sel);
			            ?>
									<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Name<span style="color: red;">*</span> : </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Name" name="fld_bm_name" required="" value="<?php echo $fetch['fld_bm_name'];?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Designation<span style="color: red;">*</span> : </label>
							<div class="col-sm-12 col-md-10">
								<select name="Designation_id" class="form-control" required="" id="Designation_id">
									<option value="">--Select Designation--</option>
									<?php 
											$query=mysqli_query($connect,"select * from designation where Designation_delete='0' order by Designation_id asc");
											while ($row=mysqli_fetch_assoc($query)) {
												extract($row);
											
									?>
									<option value="<?php echo $row['Designation_id']; ?>"<?php if ($fetch['Designation_id']==$row['Designation_id']) {echo "selected";} ?>><?php echo $row['Designation']; ?></option>	
									<?php } ?>
								</select>
							</div>
						</div>

						<br>

						<div class="form-group row">
							<div class="col-md-5"></div>
							<div class="col-sm-6">
								<input type="submit" name="update" class="btn btn-success" value="Update">&nbsp;
								
                				<a href="view_gove.php" class="btn btn-warning">Back</a>
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
     $asv="update tbl_board_members set
                fld_bm_name='".$_POST['fld_bm_name']."',
                Designation_id='".$_POST['Designation_id']."'             
                where fld_bm_id='".$_GET['fld_bm_id']."'";

     $update=mysqli_query($connect,$asv) or die(mysqli_error($connect));
     if($update)
                              {
           echo '<script type="text/javascript">';
           echo " alert('Governing Board Members Updated Successfully');";
           echo 'window.location.href = "view_gove.php";';
           echo '</script>';
      
                          }
                         else
                         {
           echo '<script type="text/javascript">';
           echo "alert('Governing Board Members Updated  not Successfully');";
             echo '<script>';
                          
      
        }
    }


?>                 