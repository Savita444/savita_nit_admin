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
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Add Books section</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Books section</li>
                                </ol>
                            </nav>
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

		$add2 = mysqli_query($connect,"insert into books_section(course_name, aicte, available, aicte_norms, available1) values('$course_name','$aicte','$available','$aicte_norms','$available1')");
        if($add2)
        {
       echo '<script type="text/javascript">';
       echo " alert('Books section Added Successfully.');";
       echo 'window.location.href = "books_section_view.php";';
       echo '</script>';
  
                      }
                     else
                     {
       echo '<script type="text/javascript">';
       echo " alert('Books section Not Added.');";
       echo '<script>';
                        
  
                     }


    }

?>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Course Name<span
                                    class="text-danger">*</span> </label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" placeholder="Enter Course Name"
                                    name="course_name" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Required As Per AICTE Norms<span
                                    class="text-danger">*</span> </label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" placeholder="Enter Required As Per AICTE Norms"
                                    name="aicte" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Available<span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" placeholder="Enter Available" name="available"
                                    required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Required As Per AICTE Norms<span
                                    class="text-danger">*</span> </label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" placeholder="Enter Required As Per AICTE Norms"
                                    name="aicte_norms" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Available<span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" placeholder="Enter Available" name="available1"
                                    required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12 col-md-10">
                                <center><input class="btn btn-success" value="Submit" type="submit" name="submit">&nbsp;
                                    <input class="btn btn-danger" value="Reset" type="reset">&nbsp;
                                    <a href="books_section_view.php" class="btn btn-warning">Back</a>
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