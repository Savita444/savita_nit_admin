<?php include('include/header_session.php'); ?>
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
                                <h4>Update Department Notice</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Update Department Notice</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary" href="department_notice_view.php" role="button">
                                    View Department Notice
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
                        $view = mysqli_query($connect,"select * from department_notice where department_notice_id='".$_GET['department_notice_id']."' and department_notice_delete='0' order by department_notice_id") or die (mysqli_error($connect));
                        $fetch = mysqli_fetch_array($view);
                    ?>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Title<span
                                    style="color: red;">*</span></label>
                            <div class="col-sm-12 col-md-10">
                                <input name="title" type="text" Placeholder="Enter Title" class="form-control"
                                    value="<?php echo $fetch['title']?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Department Name<span
                                    style="color: red;">*</span></label>
                            <div class="col-sm-12 col-md-10">
                                <input name="department_name" type="text" Placeholder="Enter Department Name"
                                    class="form-control" value="<?php echo $fetch['department_name']?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Notice<span
                                    style="color: red;">*</span></label>
                            <div class="col-sm-12 col-md-10">
                                <input name="notice" type="text" Placeholder="Enter Notice" class="form-control"
                                    value="<?php echo $fetch['notice']?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Upload PDf<span
                                    style="color: red;">*</span></label>
                            <div class="col-sm-12 col-md-10">
                                <div class="preview_box">
                                    <?php 
                                        if(empty($fetch['file']))
                                        { 
                                    ?>
                                        <img id="preview_img" src="assets/documents/departmentnotice/placeholder.jpg" height="100" width="100" />
                                    <?php 
                                        }
                                        else
                                        {
                                            $file_extension = pathinfo($fetch['file'], PATHINFO_EXTENSION);
                                            if (in_array($file_extension, ['jpg', 'jpeg', 'png'])) {
                                    ?>
                                        <img id="preview_img" src="assets/documents/departmentnotice/<?php echo $fetch['file']?>" height="100" width="100" />
                                    <?php 
                                            } elseif ($file_extension == 'pdf') {
                                    ?>
                                        <p>PDF File: <?php echo $fetch['file']?></p>
                                    <?php 
                                            } else {
                                    ?>
                                        <p>Unsupported file type: <?php echo $fetch['file']?></p>
                                    <?php 
                                            }
                                        }
                                    ?>

                                    <input type="file" id="image" name="file" accept=".png, .jpg, .jpeg, .pdf" />
                                </div>
                              
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-5"></div>
                            <div class="col-sm-6">
                                <input type="submit" name="submit" class="btn btn-success" value="Submit">&nbsp;
                                <input type="reset" name="reset" class="btn btn-danger" value="Reset">&nbsp;
                                <a href="department_notice_view.php" class="btn btn-warning">Back</a>
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

        $add2=mysqli_query($connect,"update department_notice set
        title='".$title."',
        department_name='".$department_name."',
        notice='".$notice."',
        file='".$a."'
        where department_notice_id='".$_GET['department_notice_id']."'") or die(mysqli_error($connect)); 
               
        $desired_dir="assets/documents/departmentnotice/";
        move_uploaded_file($fileTmpName,"$desired_dir/".$a);

        if($add2)
       {
         echo '<script type="text/javascript">';
         echo " alert('Department Notice Update Successfully.');";
         echo 'window.location.href = "department_notice_view.php";';
         echo '</script>';
        }
        else
       {
         echo '<script type="text/javascript">';
         echo " alert('Department Notice Not Update.');";
         echo 'window.location.href = "department_notice_view.php";';
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