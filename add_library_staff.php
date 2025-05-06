<?php include('include/header_session.php'); ?>
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
                        <div class="col-md-8 col-sm-12">
                            <div class="title">
                                <h4>ADD Library staff</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                    <li class="breadcrumb-item">View Library staff </li>
                                    <li class="breadcrumb-item">ADD Library staff</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-4 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary" href="library_staff_view.php" role="button">
                                    View Library staff
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <!-- <h4 class="text-blue">Add Photo</h4> -->
                        </div>

                    </div><br>

                    <form method="post" enctype="multipart/form-data">
                        <?php

error_reporting(0);

    if(isset($_POST['submit']))
    {
        extract($_POST);

        $name=$_FILES['files']['name']; 
        $type=$_FILES['files']['type'];
        $size=$_FILES['files']['size'];  
        $temp=$_FILES['files']['tmp_name']; 
        if($name){
        
                    $upload= "assets/images/librarystaff/";  
                    $imgExt=strtolower(pathinfo($name, PATHINFO_EXTENSION)); 
                    $valid_ext= array('jpg','png','jpeg' );  
                    $files= rand(1000,1000000).".".$imgExt;  
                    move_uploaded_file($temp,$upload.$files);   
        }
		$add2 = mysqli_query($connect,"insert into library_staff(name_staff, designation, qualification, email, files) values('$name_staff','$designation','$qualification','$email','$files')");
        if($add2)
        {
       echo '<script type="text/javascript">';
       echo " alert('Library Staff Added Successfully.');";
       echo 'window.location.href = "library_staff_view.php";';
       echo '</script>';
  
                      }
                     else
                     {
       echo '<script type="text/javascript">';
       echo " alert('Library Staff Not Added.');";
       echo '<script>';
                        
  
                     }


    }

?>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Name Of Staff<span
                                    class="text-danger">*</span> </label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" placeholder="Enter Name Of Staff"
                                    name="name_staff" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Designation<span
                                    class="text-danger">*</span> </label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" placeholder="Enter Designation"
                                    name="designation" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Qualification<span
                                    class="text-danger">*</span> </label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" placeholder="Enter Qualification"
                                    name="qualification" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">E-mail ID<span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" placeholder="Enter E-mail ID" name="email"
                                    required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Photo <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-12 col-md-10">
                            <div id="dvPreview"></div>
                                <input name="files" type="file" multiple required=""
                                    accept=" .jpg , .jpeg , .png , .gif" id="fileupload">
                                <!-- <p class="help-block" style="color: red">Select multiple images. In width=4928px X height=3264px Size.</p> -->
                               
                               
                            </div>
                        </div>

                        <!-- <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Description </label>
							<div class="col-sm-12 col-md-10">
								<textarea class="textarea_editor form-control border-radius-0"  name="photo_description" placeholder="Enter text..."></textarea>
							</div>
						</div> -->

                        <div class="form-group row">
                            <div class="col-sm-12 col-md-10">
                                <center><input class="btn btn-success" value="Submit" type="submit" name="submit">&nbsp;
                                    <input class="btn btn-danger" value="Reset" type="reset">&nbsp;
                                    <a href="library_staff_view.php" class="btn btn-warning">Back</a>
                                </center>
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