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
                                <h4>Add Department Information</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                    <li class="breadcrumb-item"><a href="departmentinfo_view.php">Department Information</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Department Information</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary" href="departmentinfo_view.php" role="button">
                                    View Department Information
                                </a>
                            </div>
                        </div>						
                    </div>
                </div>
                <!-- Default Basic Forms Start -->
                <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                    <div class="clearfix">
                        <div class="pull-left"></div>
                    </div>
                    <br>
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Department<span style="color: red;">*</span></label>
                            <div class="col-sm-12 col-md-10">
                                <select name="department_id" class="form-control" required="">
                                    <option value="">Select Department</option>
                                    <?php
                                        $query1 = mysqli_query($connect, "SELECT * FROM department WHERE Department_delete='0' ORDER BY id DESC");
                                        while ($row = mysqli_fetch_assoc($query1)) {
                                            echo '<option value="' . $row['id'] . '">' . $row['Department'] . '</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Department Description</label>
                            <div class="col-sm-12 col-md-10">
                                <textarea class="textarea_editor form-control border-radius-0" name="department_description" placeholder="Enter Department Description" required></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Department Mission</label>
                            <div class="col-sm-12 col-md-10">
                                <textarea class="textarea_editor form-control border-radius-0" name="department_mission" placeholder="Enter Department Mission"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Department Vision</label>
                            <div class="col-sm-12 col-md-10">
                                <textarea class="textarea_editor form-control border-radius-0" name="department_vision" placeholder="Enter Department Vision"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Photo<span style="color: red;">*</span></label>
                            <div class="col-sm-12 col-md-10">
                                <div id="dvPreview"></div>
                                <input name="files[]" type="file" multiple accept=".jpg, .jpeg, .png, .gif" id="fileupload">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-5"></div>
                            <div class="col-sm-6">
                                <input type="submit" name="submit" class="btn btn-success" value="Submit">&nbsp;
                                <input type="reset" name="reset" class="btn btn-danger" value="Reset">&nbsp;
                                <a href="view_staff.php" class="btn btn-warning">Back</a>
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

if (isset($_POST['submit'])) {
    extract($_POST);

    if (isset($_FILES['files'])) {
        $errors = array();
        foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
            $file_name = $key . $_FILES['files']['name'][$key];
            $file_size = $_FILES['files']['size'][$key];
            $file_tmp = $_FILES['files']['tmp_name'][$key];
            $file_type = $_FILES['files']['type'][$key];  
            $a = uniqid() . $file_name;
            $extension = strtolower(pathinfo($a, PATHINFO_EXTENSION));

            // Check file size
            if ($file_size > 10485760) {
                $errors[] = 'File size must be less than 10 MB';
            }

            // Only proceed if no errors
            if (empty($errors)) {
                $query = "INSERT INTO tbl_department (Department_id, department_description, department_mission, department_vision, photo) 
                          VALUES ('$department_id', '$department_description', '$department_mission', '$department_vision', '$a')";
                $desired_dir = "src/images/NIT/department";

                if (!is_dir($desired_dir)) {
                    mkdir($desired_dir, 0700);
                }

                if (move_uploaded_file($file_tmp, "$desired_dir/$a")) {
                    $add2 = mysqli_query($connect, $query);

                    if ($add2) {
                        echo '<script type="text/javascript">';
                        echo "alert('Department Information Added Successfully.');";
                        echo 'window.location.href = "departmentinfo_view.php";';
                        echo '</script>';
                    } else {
                        echo '<script type="text/javascript">';
                        echo "alert('Department Information Not Added.');";
                        echo 'window.location.href = "add_department.php";';
                        echo '</script>';
                    }
                }
            }
        }

        if (!empty($errors)) {
            echo '<script type="text/javascript">';
            echo "alert('". implode(', ', $errors) ."');";
            echo 'window.location.href = "add_department.php";';
            echo '</script>';
        }
    }
}
?>
