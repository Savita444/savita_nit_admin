<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	 <style>
        .preview_box{clear: both; padding: 5px; margin-top: 10px; text-align: left;}
        .preview_box img{max-width: 150px; max-height: 150px;}
    </style>

    <script type="text/javascript">
            $(document).ready(function(){
               
                $("#image").change(function(){
                    readImageData(this);
                });
            });
             
            function readImageData(imgData){
                if (imgData.files && imgData.files[0]) {
                    var readerObj = new FileReader();
                    
                    readerObj.onload = function (element) {
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
								<h4>Slider Details</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Home Slider</li>
                                    <li class="breadcrumb-item active" aria-current="page">View Slider</li>
									<li class="breadcrumb-item active" aria-current="page">Slider Details</li>
								</ol>
							</nav>
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
                $sel=mysqli_query($connect,"select * from  home_slider where Slider_id='".$_GET['Slider_id']."'") or die(mysqli_error($connect));
                $fetch=mysqli_fetch_array($sel);
            ?>  
					<form method="post" enctype="multipart/form-data">
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Title</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Slider Image Title" value="<?php echo $fetch['Slider_title'];?>" name="Slider_title" readonly="">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Slider Images</label>
							<div class="col-sm-12 col-md-10">
								<div class="preview_box">
                    <?php
                        if ($fetch['photo']=="") 
                        {
                    ?>
                            <img src="../images/No-image-full.jpg" alt="John Doe" id="preview_img" height="100px" width="100px"/>
                    <?php
                        }
                        else
                        {
                    ?>                                        
                            <img src="../images/home/<?php echo $fetch['photo'];?>" alt="John Doe" id="preview_img" height="100px" width="100px" />
                    <?php
                        }
                    ?>
                    
                </div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Slider Description</label>
							<div class="col-sm-12 col-md-10">
								<textarea class="form-control border-radius-0" name="Slider_description" placeholder="Enter text ..." readonly=""><?php echo $fetch['Slider_description'];?></textarea>
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-5"></div>
							<div class="col-sm-6">
								<a href="javascript:history.back()"><button class="btn btn-warning btn-lg" type="button">Back</button></a>
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


error_reporting(0);

    if(isset($_POST['submit']))
    {
        extract($_POST);


        if(isset($_FILES['files'])){
            $errors= array();
            foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
                $file_name = $key.$_FILES['files']['name'][$key];
                $file_size =$_FILES['files']['size'][$key];
                $file_tmp =$_FILES['files']['tmp_name'][$key];
                $file_type=$_FILES['files']['type'][$key];  
                $a=uniqid().$file_name;
                // if($file_size > 10485760){
                //     $errors[]='File size must be less than 10 MB';
                // }       
                $query="INSERT into home_slider(Slider_title,photo,Slider_description) VALUES('$Slider_title','$a','$Slider_description'); ";
                $desired_dir="images/home/";
                move_uploaded_file($file_tmp,"$desired_dir/".$a);
        //         if(empty($errors)==true){
        //             if(is_dir($desired_dir)==false)
        // {                mkdir("$desired_dir", 0700);       // Create directory if it does not exist
        //             }
        //             if(is_dir("$desired_dir/".$a)==false){
        //                 move_uploaded_file($file_tmp,"$desired_dir/".$a);
        //             }else{                                  // rename the file if another one exist
        //                 $new_dir="$desired_dir/".$a.time();
        //                  rename($file_tmp,$new_dir) ;               
        //             }
                 $add2=mysqli_query($connect,$query); 

                 $save = "$desired_dir/" . $a; //This is the new file you saving
                  $file = "$desired_dir/" . $a; //This is the original file

                  list($width, $height) = getimagesize($file) ;

                  $modwidth = 760;

                  // $diff = $width / $modwidth;

                  // $modheight = $height / $diff;
                  $modheight = 503;
                  $tn = imagecreatetruecolor($modwidth, $modheight) ;
                  $image = imagecreatefromjpeg($file) ;
                  imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ;

                  imagejpeg($tn, $save, 100) ;        
                // }else{
                //         print_r($errors);
                // }
            }
            if(empty($error)){
                // echo "Success";
            }
        }

        if($add2)
                          {
       echo '<script type="text/javascript">';
       echo " alert('Slider Images Added Successfully.');";
       echo 'window.location.href = "add_slider.php";';
       echo '</script>';
  
                      }
                     else
                     {
       echo '<script type="text/javascript">';
       echo " alert('Slider Images Not Added.');";
       echo '<script>';
                        
  
                     }


    }

?>               

<script language="javascript" type="text/javascript">
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
</script>