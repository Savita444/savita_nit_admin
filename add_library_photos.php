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
                                <h4>Add Library Photo</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                    <li class="breadcrumb-item">Library Photo</li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Library Photo</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary" href="library_photos_view.php" role="button">
                                    View Library Photo
                                </a>
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                    <form method="post" enctype="multipart/form-data">            
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Library Photo<span style="color: red;">*</span></label>
                            <div class="col-sm-12 col-md-10">
                                <div id="dvPreview"></div>
                                <input name="library_photo" type="file" multiple accept=".jpg, .jpeg, .png, .gif" id="fileupload" required>
                                <!-- <p class="help-block" style="color: red">In width-750 X height-500 Size.</p>  -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-5"></div>
                            <div class="col-sm-6">
                                <input type="submit" name="submit" class="btn btn-success" value="Submit">
                                <input type="reset" name="reset" class="btn btn-danger" value="Reset">
                                <a href="library_photos_view.php" class="btn btn-warning">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
                <?php include('include/footer.php'); ?>
            </div>
        </div>
    </div>
    <?php include('include/script.php'); ?>
</body>
</html>
<?php


// error_reporting(0);

    if(isset($_POST['submit']))
    {
        extract($_POST);


        $name=$_FILES['library_photo']['name']; 
        $type=$_FILES['library_photo']['type'];
        $size=$_FILES['library_photo']['size'];  
        $temp=$_FILES['library_photo']['tmp_name']; 
        if($name){
        
                    $upload= "assets/images/libraryphoto/";  
                    $imgExt=strtolower(pathinfo($name, PATHINFO_EXTENSION)); 
                    $valid_ext= array('jpg','png','jpeg' );  
                    $library_photo= rand(1000,1000000).".".$imgExt;  
                    move_uploaded_file($temp,$upload.$library_photo);   
        }
		$add2 = mysqli_query($connect,"insert into library_photo(library_photo) values('$library_photo')");

        if($add2)
       {
         echo '<script type="text/javascript">';
         echo " alert('Library Photo Added Successfully.');";
         echo 'window.location.href = "library_photos_view.php";';
         echo '</script>';
        }
        else
       {
         echo '<script type="text/javascript">';
         echo " alert('Library Photo Not Added.');";
         echo 'window.location.href = "library_photos_view.php";';
         echo '<script>';
       }
    }
?>       