<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
  <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet" type="text/css" />
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
								<h4>Update Staff Industrial Training</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item"><a href="view_staff_training.php">Staff Industrial Training</a></li>
									<li class="breadcrumb-item active" aria-current="page">Update Staff Industrial Training</li>
								</ol>
							</nav>
						</div>
            <div class="col-md-6 col-sm-12 text-right">
              <div class="dropdown">
                <a class="btn btn-primary" href="view_staff_training.php" role="button">
                  View Staff Industrial Training
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
                $sel=mysqli_query($connect,"select * from tbl_staff_training where staff_taining_id='".$_GET['staff_taining_id']."'") or die(mysqli_error($connect));
                $fetch=mysqli_fetch_array($sel);
            ?> 
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Name<span style="color: red;">*</span></label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Name" name="name" value="<?php echo $fetch['name_of_staff']; ?>">
							</div>
						</div>
            
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Department<span style="color: red;">*</span></label>
              <div class="col-sm-12 col-md-10">
                <select name="department" class="form-control">
                    <option value="">Select Department</option>
                        <?php
                            $query1=mysqli_query($connect,"select * from department where Department_delete='0' order by Department_id desc");
                            while($row=mysqli_fetch_assoc($query1)){
                              extract($row);
                          ?>
                    <option value="<?php echo $row['Department_id'];?>" <?php if ($fetch['Department_id']==$row['Department_id']){echo "selected";} ?>><?php echo $row['Department'];?></option>
                    <?php  }?>
                 </select>
              </div>
            </div>
             <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Name and Address of Organization<span style="color: red;">*</span></label>
              <div class="col-sm-12 col-md-10">
                <textarea class="form-control" name="organization" placeholder="Enter Name and Address of Organization"><?php echo $fetch['name_and_address_of_organization'];?></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Date From<span style="color: red;">*</span></label>
              <div class="col-sm-12 col-md-10">
                    <script language="javascript">
                        $(document).ready(function () {
                            $("#txtdate").datepicker({
                                minDate: 0
                            });
                        });
                    </script>
                <input type="text" id="TextBox1" name="form_date" class="form-control" value="<?php echo $fetch['from_date']; ?>"  />
              </div>
            </div>
              <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Date To<span style="color: red;">*</span></label>
                <div class="col-sm-12 col-md-10">
                    <input type="text" id="TextBox2" name="to_date" class="form-control" value="<?php echo $fetch['to_date']; ?>" />
                </div>
              </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">No. of Day's<span style="color: red;">*</span></label>
              <div class="col-sm-12 col-md-10">
                <input type="text" id="TextBox3" name="difference" class="form-control" placeholder="Enter days" value="<?php echo $fetch['no_of_days']; ?>" />
              </div>
            </div>
            <!-- <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Mobile<span style="color: red;">*</span></label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="tel" maxlength="10" minlength="10" pattern="[789]{1}[0-9]{9}" placeholder="Enter Mobile" name="mobile">
              </div>
            </div> -->
						<!-- <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Photo<span style="color: red;">*</span></label>
							<div class="col-sm-12 col-md-10">
                <div id="preview_img"></div>
								<input  name="files[]" type="file" multiple accept=" .jpg , .jpeg , .png , .gif" id="fileupload">
                <p class="help-block" style="color: red">In width-121 X height-120 Size.</p>              
							</div>
						</div> -->
						

						<div class="form-group row">
							<div class="col-md-5"></div>
							<div class="col-sm-6">
								<input type="submit" name="update" class="btn btn-success" value="Submit">&nbsp;
								<input type="reset" name="reset" class="btn btn-danger" value="Reset">&nbsp;
                <a href="view_staff_training.php" class="btn btn-warning">Back</a>
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
  <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script>
 $("#TextBox1").datepicker({
      dateFormat: "dd-M-yy",
    minDate: 0,
    maxDate: '+1Y+6M',
    onSelect: function (dateStr) {
        var min = $(this).datepicker('getDate'); // Get selected date
        min.setDate(min.getDate() + 1);
//       $("#TextBox2").datepicker('setDate', min);
        $("#TextBox2").datepicker('option', 'minDate', min || '0'); // Set other min, default to today
    }
});

$("#TextBox2").datepicker({
     dateFormat: "dd-M-yy",
    minDate: '0',
    maxDate: '+1Y+6M',
    onSelect: function (dateStr) {
        var max = $(this).datepicker('getDate'); // Get selected date
         //max.setDate(max.getDate() + 1);
        $('#datepicker').datepicker('option', 'maxDate', max || '+1Y+6M'); // Set other max, default to +18 months
        var start = $("#TextBox1").datepicker("getDate");
        var end = $("#TextBox2").datepicker("getDate");
        var days = (end - start) / (1000 * 60 * 60 * 24);
        $("#TextBox3").val(days);
    }
});
</script>
</body>
</html>


<?php


// error_reporting(0);

    if(isset($_POST['update']))
    {
        extract($_POST);

        $date=$_POST['form_date'];
        $new_form_date =date("Y-m-d",strtotime($date));

        $date1=$_POST['to_date'];
        $new_to_date =date("Y-m-d",strtotime($date1));

       $update=mysqli_query($connect,"update tbl_staff_training set
                name_of_staff='".$name."',
                Department_id='".$department."',
                name_and_address_of_organization='".$organization."',  
                from_date='".$new_form_date."',
                to_date='".$new_to_date."',
                no_of_days='".$difference."'
                where staff_taining_id='".$_GET['staff_taining_id']."'") or die(mysqli_error($connect));
       
       // $add2=mysqli_query($connect,$update) or die(mysqli_error($connect));
        if($update)
       {
         echo '<script type="text/javascript">';
         echo " alert('Staff Training Details Update Successfully.');";
         echo 'window.location.href = "view_staff_training.php";';
         echo '</script>';
        }
        else
       {
         echo '<script type="text/javascript">';
         echo " alert('Staff Training Details Not Update.');";
         echo 'window.location.href = "update_staff_training.php";';
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