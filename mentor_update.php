<!DOCTYPE html>
<html>

<head>
    <?php include('include/head.php'); ?>
    <style>
    .preview_box {
        clear: both;
        padding: 5px;
        margin-top: 10px;
        text-align: left;
    }

    .preview_box img {
        max-width: 150px;
        max-height: 150px;
    }
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
                                <h4>Update Mentors</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                    <li class="breadcrumb-item">Update Mentors</li>

                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary" href="mentor_view.php" role="button">
                                    View Mentors
                                </a>
                            </div>
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

                        <?php 
                        
                        $view=mysqli_query($connect,"select * from tbl_mentors where fld_bm_id='".$_GET['fld_bm_id']."'") or die(mysqli_error($connect));
                        $fetch = mysqli_fetch_array($view);
                        
                    
                        ?>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Department<span
                                    style="color: red;">*</span></label>
                            <div class="col-sm-12 col-md-10">
                                <select name="Department_id" class="form-control">
                                    <option value="">Select Department</option>
                                    <?php
                              $query1=mysqli_query($connect,"select * from department where Department_delete='0' order by id desc");
                              while($row=mysqli_fetch_assoc($query1)){
                                extract($row);
                            ?>
                                    <option value="<?php echo $row['id']; ?>"
                                        <?php if($fetch['Department_id']==$row['id']) {echo "selected";} ?>>
                                        <?php echo $row['Department']; ?></option>
                                    <?php  }?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Class Name<span style="color: red;">*</span> : </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Class" name="class_name" required="" value="<?php echo $fetch['class_name']?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Roll Number<span style="color: red;">*</span> : </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Roll No." name="roll_no" required="" value="<?php echo $fetch['roll_no']?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Mentor Name<span style="color: red;">*</span> : </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Name" name="mentor_name" required="" value="<?php echo $fetch['mentor_name']?>">
							</div>
						</div>
                        <div class="form-group row">
                            <div class="col-md-5"></div>
                            <div class="col-sm-6">
                                <input type="submit" name="submit" class="btn btn-success" value="Submit">&nbsp;
                                <input type="reset" name="reset" class="btn btn-danger" value="Reset">&nbsp;
                                <a href="plan_view.php" class="btn btn-warning">Back</a>
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
        
        // $fileName=$_FILES["file"]["name"];
        // $fileSize=$_FILES["file"]["size"];
        // $fileType=$_FILES["file"]["type"];
        // $fileTmpName=$_FILES["file"]["tmp_name"];  
        // $a=uniqid().$fileName;
        // $extension = strtolower(pathinfo($a,PATHINFO_EXTENSION));  
    
        $add2=mysqli_query($connect,"update tbl_mentors set
        Department_id='".$Department_id."',
        class_name='".$class_name."',
        roll_no='".$roll_no."',
        mentor_name='".$mentor_name."'
        where fld_bm_id='".$_GET['fld_bm_id']."'") or die(mysqli_error($connect)); 
               
        // $desired_dir="assets/documents/syllabus/";
        // move_uploaded_file($fileTmpName,"$desired_dir/".$a); 
        
        if($add2)
       {
         echo '<script type="text/javascript">';
         echo " alert('Mentors Update Successfully.');";
         echo 'window.location.href = "mentor_view.php";';
         echo '</script>';
        }
        else
       {
         echo '<script type="text/javascript">';
         echo " alert('Mentors Not Update.');";
         echo 'window.location.href = "mentor_view.php";';
         echo '<script>';
       }
    }
?>

<!-- <script language="javascript" type="text/javascript">
$(function () {
    $("#fileupload").change(function () {
        if (typeof (FileReader) != "undefined") {
            var dvPreview = $("#dvPreview");
            dvPreview.html("");
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
            $($(this)[0].files).each(function () {
                var file = $(this);
                if (regex.test(file[0].name.toLowerCase())) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var img = $("<img />");
                        img.attr("style", "height:100px;width: 100px");
                        img.attr("src", e.target.result);
                        dvPreview.append(img);
                    }
                    reader.readAsDataURL(file[0]);
                } else {
                    alert(file[0].name + " is not a valid image file.");
                    dvPreview.html("");
                    return false;
                }
            });
        } else {
            alert("This browser does not support HTML5 FileReader.");
        }
    });
});
</script> -->