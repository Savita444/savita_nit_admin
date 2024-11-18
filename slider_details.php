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

    <script type="text/javascript">
    $(document).ready(function() {

        $("#image").change(function() {
            readImageData(this);
        });
    });

    function readImageData(imgData) {
        if (imgData.files && imgData.files[0]) {
            var readerObj = new FileReader();

            readerObj.onload = function(element) {
                $('#preview_img').attr('src', element.target.result);
            }

            readerObj.readAsDataURL(imgData.files[0]);
        }
    }
    </script>

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
                                <h4>Update Home Slider</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                    <!-- <li class="breadcrumb-item active" aria-current="page">View Slider</li> -->
                                    <li class="breadcrumb-item active" aria-current="page">Update Home Slider</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary" href="view_slider.php" role="button">
                                    View Slider
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Default Basic Forms Start -->
                <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <!-- <h4 class="text-blue">Slider Details</h4> -->
                        </div>
                    </div>
                    <br>
                    <?php 
                $sel=mysqli_query($connect,"select * from  tbl_slider where id='".$_GET['id']."'") or die(mysqli_error($connect));
                $fetch=mysqli_fetch_array($sel);
            ?>
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Title</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" placeholder="Enter Slider Image Title"
                                    value="<?php echo $fetch['fld_slider_title'];?>" name="Slider_title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Slider Images</label>
                            <div class="col-sm-12 col-md-10">
                                <div class="preview_box">
                                    <?php 
                                        if($fetch['fld_slider_image']=="")
                                        { 
                                    ?>
                                    <img id="preview_img" src="assets/images/slider_img/" height="100" width="100" />
                                    <?php }
                                        else
                                        {
                                    ?>
                                    <img id="preview_img" src="assets/images/slider_img/<?php echo $fetch['fld_slider_image']?>" height="100"
                                        width="100" />

                                    <?php } ?>

                                    <input type="file" id="image" name="fld_slider_image" accept=" .png, .jpg, .jpeg " />

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Slider Description</label>
                            <div class="col-sm-12 col-md-10">
                                <textarea class="form-control border-radius-0" name="Slider_description"
                                    placeholder="Enter text ..."><?php echo $fetch['fld_slider_subtitle'];?></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-5"></div>
                            <div class="col-sm-6">
                                <input type="submit" name="submit" class="btn btn-success" value="Submit">&nbsp;
                                <a href="javascript:history.back()"><button class="btn btn-warning btn-lg"
                                        type="button">Back</button></a>
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


// error_reporting(0);

    if(isset($_POST['submit']))
    {
        extract($_POST);

        $name=$_FILES['fld_slider_image']['name'];
        $size=$_FILES['fld_slider_image']['size'];
        $type=$_FILES['fld_slider_image']['type'];
        $temp=$_FILES['fld_slider_image']['tmp_name'];

        if($name){
	  
            $upload= "assets/images/slider_img/";  
            $imgExt=strtolower(pathinfo($name, PATHINFO_EXTENSION)); 
            $valid_ext= array('jpg','png','jpeg' );  
            $fld_slider_image= rand(1000,1000000).".".$imgExt;  
            move_uploaded_file($temp,$upload.$fld_slider_image);   
        }
        else
        {
        $fld_slider_image=$fetch['fld_slider_image'];
        }
        
        $query=mysqli_query($connect,"update tbl_slider set
        
        fld_slider_title='".$_POST['Slider_title']."',
        fld_slider_image='".$fld_slider_image."',
        fld_slider_subtitle='".$_POST['Slider_description']."'
        
        where id='".$_GET['id']."'") or die(mysqli_error($connect));

             

        if($query)
       {
         echo '<script type="text/javascript">';
         echo " alert('Home Slider Update Successfully.');";
         echo 'window.location.href = "view_slider.php";';
         echo '</script>';
        }
        else
       {
         echo '<script type="text/javascript">';
         echo " alert('Home Slider Not Update.');";
         echo 'window.location.href = "slider_details.php";';
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