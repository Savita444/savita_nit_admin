<!DOCTYPE html>
<html>
<head>
    <?php include('include/head.php'); ?>
    <title>Add Gallery Title</title>
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
                                <h4>Update Image Title</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                    <li class="breadcrumb-item">Gallery</li>
                                    <li class="breadcrumb-item">View Image Title</li>
                                    <li class="breadcrumb-item">Update Image Title</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                
                <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <!-- <h4 class="text-blue">Update Image Title</h4> -->
                        </div>
                        
                    </div><br> 

                                <?php
                                    
                                    $sel=mysqli_query($connect,"select * from tbl_gallery_image_title where fld_image_title_id='".$_GET['fld_image_title_id']."' ") or die(mysqli_error($connect));
                                    $fetch=mysqli_fetch_array($sel);
                                ?>          
                    <form method="post">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Image Title</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" name="image_title" value="<?php echo $fetch['fld_image_title'];?>">
                            </div>
                        </div>

                        
                        <div class="form-group row">

                           <div class="col-sm-12 col-md-10">
                            <center><input class="btn btn-success" value="Update" type="submit" name="update">&nbsp;
                                <a href="view_image.php" class="btn btn-warning">Back</a></center>
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
    
    if(isset($_POST['update']))
    {
      
      
     $update=mysqli_query($connect,"update tbl_gallery_image_title set
        
                fld_image_title='".$_POST['image_title']."'
                where fld_image_title_id='".$_GET['fld_image_title_id']."'") or die(mysqli_error($connect));
     if($update)
                              {
           echo '<script type="text/javascript">';
           echo " alert('Image Title Updated Successfully');";
           echo 'window.location.href = "view_image.php";';
           echo '</script>';
      
                          }
                         else
                         {
           echo '<script type="text/javascript">';
           echo "alert('Image Title Not Update');";
             echo '<script>';
                            //echo $cQry;
      
                         }
    }


?> 