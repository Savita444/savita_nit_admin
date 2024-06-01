<!DOCTYPE html>
<html>
<head>
  <?php include('include/head.php'); ?> 
<style>
        .form_box{width:500px; margin:0 auto; margin-top:10px; margin-bottom: 40px; text-align: left;}
        .fileinput{margin-left:0px;}
        .preview_box{clear: both; padding: 5px; margin-top: 10px; text-align:left;}
        .preview_box img{max-width: 150px; max-height: 150px;}
</style>

    <script type="text/javascript">
            $(document).ready(function(){
                //Image file input change event
                $("#image").change(function(){
                    readImageData(this);//Call image read and render function
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
                <h4>Result</h4>
              </div>
              <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="view_slider.php">Home Result</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Result</li>
                </ol>
              </nav>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
              <div class="dropdown">
                <a class="btn btn-primary" href="view_result.php" role="button">
                  View Result
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
          <?php 
                            if(isset($_GET['result_id']))
                            {

                              $asd="select * from tbl_result where fld_student_id='".$_GET['result_id']."'";
                              $view=mysqli_query($connect,$asd) or die(mysqli_error($connect));

                              $fetch=mysqli_fetch_array($view);
                              extract($fetch);
                             ?>
          <form method="POST" enctype="multipart/form-data">

            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Department<span style="color: red;">*</span></label>
              <div class="col-sm-12 col-md-10">
               <select name="Department" required="" class="form-control">
                                     <option value="">--Select Department--</option>
  <?php 
  $cat=mysqli_query($connect,"select * from department order by Department_id desc");
  while ($row=mysqli_fetch_array($cat)){
  ?>
      <option value="<?php echo $row['Department_id'];?>"<?php if($row['Department_id']==$fetch['Department_id']){ echo "selected";} ?>><?php echo $row['Department'] ?></option>

<?php      
    }
  ?> 
                </select> 

              </div>
            </div>
            
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Exam</label>
              <div class="col-sm-12 col-md-10">
                <select name="fld_exam" required="" class="form-control">
                 <option>--Select--</option>
                 <option value="Summer" <?php if($fld_exam=='Summer'){ echo "selected";} ?>>Summer</option>
                 <option value="Winter"<?php if($fld_exam=='Winter'){ echo "selected";} ?>>Winter</option>
               </select>
              </div>
            </div>


             <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Exam Year</label>
              <div class="col-sm-12 col-md-10">
                <input type="text" placeholder="Enter Your Exam Year" name="fld_exam_year" required="" class="form-control" value="<?php echo $fld_exam_year; ?>">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Class</label>
              <div class="col-sm-12 col-md-10">
               <select name="fld_class" required="" class="form-control">
                 <option>--Select Class--</option>
                 <option value="First Year" <?php if($fld_class=='First Year'){ echo "selected";} ?>>First Year</option>
                 <option value="Second Year"<?php if($fld_class=='Second Year'){ echo "selected";} ?>>Second Year</option>
                 <option value="Third Year"<?php if($fld_class=='Third Year'){ echo "selected";} ?>>Third Year</option>
               </select>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Student Name</label>
              <div class="col-sm-12 col-md-10">
                <input type="text" placeholder="Enter Your Name" name="fld_student_name" required="" class="form-control" value="<?php echo $fld_student_name; ?>">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Student Photo<span style="color: red;">*</span></label>
              <div class="preview_box">
                  <div>
          <?php 
              if($fetch['fld_student_photo']=="")
              {
          ?>
          <img id="preview_img" src="images/No-image-full.jpg" height="100" width="100"/>
          <?php }
              else
              {
           ?>
              <img id="preview_img" src="images/<?php echo $fetch['fld_student_photo']?>" height="100" width="100" />

              <?php } ?>
            
          <input type="file" id="image" name="fld_student_photo"  accept=" .png, .jpg, .jpeg " />
           
        </div>
            </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Student Percentage</label>
              <div class="col-sm-12 col-md-10">
                <input type="text" placeholder="Enter Your Percentag" name="fld_student_percentage" required="" class="form-control" value="<?php echo $fld_student_percentage; ?>">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-5"></div>
              <div class="col-sm-6">
               <!--  <button type="submit" class="btn btn-success" name="submit">Submit</button> -->
               <!-- <button type="submit" name="submit" class="btn"><b>Submit</b></button> -->
                <input type="submit" name="update" class="btn btn-success" value="update">&nbsp;
                <input type="reset" name="reset" class="btn btn-danger" value="Reset">&nbsp;
                <a href="view_result.php" class="btn btn-warning">Back</a>
              </div>
            </div>
          </form>
<?php         
//session_start(); 
include "config.php";
 
if(isset($_POST['update']))
{ 
    
    extract($_POST);

     $sname=$_FILES['fld_student_photo']['name'];
        $type=$_FILES['fld_student_photo']['type'];
        $size=$_FILES['fld_student_photo']['size'];
        $temp=$_FILES['fld_student_photo']['tmp_name'];
  if($sname){
  
            $upload= "images/";
            $imgExt=strtolower(pathinfo($sname, PATHINFO_EXTENSION));
            $valid_ext= array('jpg','png','jpeg' );
            $photo= rand(1000,1000000).".".$imgExt;
            move_uploaded_file($temp,$upload.$photo);
            }

    $up="update tbl_result set
       Department_id='".$Department."',
       fld_exam='".$fld_exam."', 
       fld_exam_year='".$fld_exam_year."',
       fld_class='".$fld_class."',
       fld_student_name='".$fld_student_name."',
       fld_student_photo='".$photo."',
       fld_student_percentage='".$fld_student_percentage."'
       where fld_student_id='".$_GET['result_id']."'";
    
    $result=mysqli_query($connect,$up) or die(mysqli_error($connect));
    if($result)
    {
      echo "<script>";
      echo "alert('Updated successfully');";
      echo 'window.location.href="view_result.php";';
      echo "</script>";
    }
    else
    {
      echo "<script>";
      echo "alert('Error in update');";
      
      echo "</script>";
    }
  }
?>
<?php } ?>
      </div>
      <?php include('include/footer.php'); ?>
    </div>
  </div>
  <?php include('include/script.php'); 
       
  ?>
</body>
</html>


