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
                                <h4>Update Achievement Information</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                    <!--<li class="breadcrumb-item"><a href="achievementsinfo_view.php">Achievement Information</a></li>-->
                                    <li class="breadcrumb-item active" aria-current="page">Update Achievement Information
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary" href="achievementsinfo_view.php" role="button">
                                    View Achievement Information
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
                            $query=mysqli_query($connect,"select * from tbl_achievement  where fld_achievement_id='".$_GET['fld_achievement_id']."' and fld_delete='0'") or die(mysqli_error($connect));
                            $row = mysqli_fetch_array($query);
                        ?>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Achievement Title<span
                                    style="color: red;">*</span></label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" placeholder="Enter Title"
                                    name="achievement_title" required="" value="<?php echo $row['achievement_title']?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Achievement Description</label>
                            <div class="col-sm-12 col-md-10">
                                <textarea class="textarea_editor form-control border-radius-0"
                                    name="achievement_description"
                                    placeholder="Enter Achievement Description"><?php echo $row['achievement_description']?></textarea>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Photo<span
                                    style="color: red;">*</span></label>
                            <div class="col-sm-12 col-md-10">
                            <div id="dvPreview">
                                <?php
                                        if ($row['photo']=="") 
                                        {
                                    ?>
                                            <img src="assets/images/achievement/No-image-full.jpg" alt="John Doe" id="preview_img" height="100px" width="100px"/>
                                    <?php
                                        }
                                        else
                                        {
                                    ?>                                        
                                            <img src="assets/images/achievement/<?php echo $row['photo'];?>" alt="John Doe" id="preview_img" height="100px" width="100px" />
                                    <?php
                                        }
                                    ?>
                            </div>
                                <input name="files" type="file" multiple accept=" .jpg , .jpeg , .png , .gif"
                                    id="fileupload">
                                <p class="help-block" style="color: red">In width-750 X height-500 Size.</p>

                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-md-5"></div>
                            <div class="col-sm-6">
                                <input type="submit" name="submit" class="btn btn-success" value="Submit">&nbsp;
                                <input type="reset" name="reset" class="btn btn-danger" value="Reset">&nbsp;
                                <a href="achievementsinfo_view.php" class="btn btn-warning">Back</a>
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
if(isset($_POST['submit']))
{
    extract($_POST);
    
    $fileName=$_FILES["files"]["name"];
    $fileSize=$_FILES["files"]["size"];
    $fileType=$_FILES["files"]["type"];
    $fileTmpName=$_FILES["files"]["tmp_name"];  
    $a=uniqid().$fileName;
    $extension = strtolower(pathinfo($a,PATHINFO_EXTENSION));  

    $add2=mysqli_query($connect,"update tbl_achievement set
    achievement_title='".$achievement_title."',
    achievement_description='".$achievement_description."',
    photo='".$a."'
    where fld_achievement_id='".$_GET['fld_achievement_id']."'") or die(mysqli_error($connect)); 
           
    $desired_dir="assets/images/achievement/";
    move_uploaded_file($fileTmpName,"$desired_dir/".$a);

    if($add2)
   {
     echo '<script type="text/javascript">';
     echo " alert('Achievement Information Update Successfully.');";
     echo 'window.location.href = "achievementsinfo_view.php";';
     echo '</script>';
    }
    else
   {
     echo '<script type="text/javascript">';
     echo " alert('Achievement Information Not update.');";
     echo 'window.location.href = "achievementsinfo_view.php";';
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