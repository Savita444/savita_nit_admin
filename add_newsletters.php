<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	 <style>
        .preview_box{clear: both; padding: 5px; margin-top: 10px; text-align: left;}
        .preview_box img{max-width: 150px; max-height: 150px;}
    </style>
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
								<h4>Add Newsletters</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item">Add Newsletters</li>
								</ol>
							</nav>
						</div>
            
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<!-- <h4 class="text-blue">Add Slider Images</h4> -->
						</div>
					</div>
					<br>
					<form method="post" enctype="multipart/form-data">
					<div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Department<span style="color: red;">*</span></label>
                            <div class="col-sm-12 col-md-10">
                                <select name="department_id" class="form-control" required="">
                                    <option value="">Select Department</option>
                                    <?php
                                        $query1 = mysqli_query($connect, "SELECT * FROM department WHERE Department_delete='0' ORDER BY id DESC");
                                        while ($row = mysqli_fetch_assoc($query1)) {
                                            echo '<option value="' . $row['id'] . '">' . $row['Department'] . '</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
				
           
            
				<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Upload Newsletters PDf<span style="color: red;">*</span></label>
							<div class="col-sm-12 col-md-10">
              				<input type="file" name="file" >
              	</div>
						</div>
										<div class="form-group row">
							<div class="col-md-5"></div>
							<div class="col-sm-6">
								<input type="submit" name="submit" class="btn btn-success" value="Submit">&nbsp;
								<input type="reset" name="reset" class="btn btn-danger" value="Reset">&nbsp;
                                <a href="newsletters_view.php" class="btn btn-warning">Back</a>
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


// error_reporting(0);

    if(isset($_POST['submit']))
    {
        extract($_POST);
        
            $fileName=$_FILES["file"]["name"];
            $fileSize=$_FILES["file"]["size"];
            $fileType=$_FILES["file"]["type"];
            $fileTmpName=$_FILES["file"]["tmp_name"];  
            $a=uniqid().$fileName;
            $extension = strtolower(pathinfo($a,PATHINFO_EXTENSION));  

            $query="insert into newsletters(Department_id,file) VALUES('$department_id','$a');";
            $desired_dir="assets/images/newsletters/";
            move_uploaded_file($fileTmpName,"$desired_dir/".$a);
            $add2=mysqli_query($connect,$query); 
    

        if($add2)
       {
         echo '<script type="text/javascript">';
         echo " alert('Newsletters Added Successfully.');";
         echo 'window.location.href = "newsletters_view.php";';
         echo '</script>';
        }
        else
       {
         echo '<script type="text/javascript">';
         echo " alert('Newsletters Not Added.');";
         echo 'window.location.href = "newsletters_view.php";';
         echo '<script>';
       }
    }
?>               
