<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	
	<!-- <title>Add Gallery </title> -->
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
								<h4>Update Principal Desk</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
				  <li class="breadcrumb-item active" aria-current="page">Principal Desk</li>
                  <li class="breadcrumb-item active" aria-current="page">View Principal Desk</li>
                  <li class="breadcrumb-item active" aria-current="page">Update Principal Desk</li>
								</ol>
							</nav>
						</div>
			
					</div>
				</div>


				
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<!-- <h4 class="text-blue">Update Photo</h4> -->
						</div>
						
					</div><br> 
					
					<form method="post" enctype="multipart/form-data">
		 				<?php             
	              $sel=mysqli_query($connect,"select * from  tbl_principal_desk where fld_principal_id='".$_GET['fld_principal_id']."' ") or die(mysqli_error($connect));
	                        $fetch=mysqli_fetch_array($sel);
                ?>  
						<!-- <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Image Title</label>
							<div class="col-sm-12 col-md-10">
                  <input type="text" name="image_title" class="form-control" value="<?php //echo $fetch['image_title'];?>">
							</div>
						</div> -->
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Principal Name</label>
							<div class="col-sm-12 col-md-10">
							<input class="form-control" type="text" placeholder="Enter Principal Name" name="principal_name" value="<?php echo $fetch['fld_principal_name'];?>">
							</div>
						</div>
                             
                    <?php
                  $abc=mysqli_query($connect,"select * from tbl_principal_desk where fld_principal_id='".$_GET['fld_principal_id']."'") or die(mysqli_error($connect));
                 while($fetch_image=mysqli_fetch_array($abc))
        {
          
            
            ?>

                  	<div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Principal Photo</label>
              <div class="col-sm-12 col-md-10">               
                 <div class="preview_box">
                    <?php
                        if ($fetch['fld_principal_photo']=="") 
                        {
                    ?>
                            <img src="../images/admin/No-image-full.jpg" alt="John Doe" id="preview_img" height="100px" width="100px"/>
                    <?php
                        }
                        else
                        {
                    ?>                                        
                           <input  name="files[]" type="file" multiple required="" accept=" .jpg , .jpeg , .png , .gif" id="fileupload">
								<img src="../images/principal/<?php echo $fetch['fld_principal_photo'];?>" height="75px" width="75px" ></a></td>
                <p class="help-block" style="color: red"> In width-709 X height-482 Size.</p>
                    <?php
                        }
                    ?>
                    
                </div>
               
              </div>
            </div>
						<!-- <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Description</label>
							<div class="col-sm-12 col-md-10">
								<textarea class="textarea_editor form-control border-radius-0"  name="photo_description" placeholder="Enter text..."><?php //echo $fetch['photo_description'];?></textarea>
							</div>
						</div> -->
												
						<div class="form-group row">
							<div class="col-md-5"></div>
							<div class="col-sm-6">
								<input type="submit" name="update" class="btn btn-success" value="Update">&nbsp;
                				<a href="view_principal_desk.php" class="btn btn-warning">Back</a>
							</div>
						</div>
					<?php } ?>
					
						</div>

						</form>
			</div>
						
</div>
	</div>

					
			<?php include('include/footer.php'); ?>
		
	<?php include('include/script.php'); 
        // include('include/footer.php');
  ?>
</body>
</html>

<?php
    
    if(isset($_POST['update']))
    {
        extract($_POST);
  $asd=mysqli_query($connect,"select * from tbl_principal_desk where fld_principal_id!='".$_GET['fld_principal_id']."' and fld_principal_name='".$_POST['principal_name']."' and fld_delete='0'") or die(mysqli_error($connect));
        if (mysqli_num_rows($asd)==1) {
          echo "<script>";
          echo "alert('Principal Already Exist...!')";
          echo "</script>";
      }
        else{

 $update=mysqli_query($connect,"update tbl_principal_desk set fld_principal_name='".$_POST['principal_name']."' where fld_principal_id='".$_GET['fld_principal_id']."'") or die(mysqli_error($connect));
     if($update)
                              {
           echo '<script type="text/javascript">';
           echo " alert('Principal Desk Updated Successfully');";
           echo 'window.location.href = "view_principal_desk.php";';
           echo '</script>';
      
                          }
                         else
                         {
           echo '<script type="text/javascript">';
           echo "alert('Principal Desk not  Updated Successfully');";
             echo '<script>';
                          
      
        }
    }

}
?>                         