
<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	<title> Change Password</title>
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
								<h4>Change Password</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item"><a href="#">Setting</a></li>
									<li class="breadcrumb-item active" aria-current="page">Change Password</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>


				
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<!-- <h4 class="text-blue">Change Password</h4> -->
						</div>
						
					</div><br> 	
					<form method="post">
						<div class="form-group row">
							<label class="col-sm-12 col-form-label">Old Password <span class="text-danger">*</span>  </label>
							<div class="col-sm-12 col-md-10">
								<input type="password" name="old_password" class="form-control" placeholder="Old Password" required=""/>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-12 col-form-label">New Password <span class="text-danger">*</span>  </label>
							<div class="col-sm-12 col-md-10">
								<input type="password" name="new_password" class="form-control" placeholder="New Password" required=""/>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-12 col-form-label">Confirm Password <span class="text-danger">*</span>  </label>
							<div class="col-sm-12 col-md-10">
							<input type="password" name="con_password" class="form-control" placeholder="Confirm Password" required=""/>
							</div>
						</div>
						
						
						
						<div class="form-group row">
							<div class="col-sm-12 col-md-10">
							<center><input class="btn btn-success" value="Change Password" type="submit" name="change">&nbsp;
								<input class="btn btn-danger" value="Reset" type="reset"></center>
							</div>
						</div>
					</form>

<?php
    if(isset($_POST['change']))
    {
        extract($_POST);
        include 'config.php';
        
        $chpass=mysqli_query($connect,"select * from tbl_admin where fld_email='".$_SESSION['email']."' and fld_password='".$_POST['old_password']."'") or die(mysqli_error($connect));
        if(mysqli_num_rows($chpass)==1)
        {
            if(strlen($_POST['new_password'])>=3)
            {
                if($_POST['new_password']==$_POST['con_password'])
                {
                    $update=mysqli_query($connect,"update tbl_admin set fld_password='".$_POST['new_password']."' , fld_password='".$_POST['con_password']."' where fld_email='".$_SESSION['email']."' " )or die(mysqli_error($connect));
                    if($update)
                    {
                        echo "<script>";
                        echo "alert('Password Change Successfully..');";
                        echo 'window.location.href="change_password.php";';
                        echo "</script>";  
                        
                    }else
                    {
                       	echo '<script type="text/javascript">';
			            echo 'alert("Password is not matched... Try again !!!! ");';
			            echo 'window.location.href = "change_password.php";';
			            echo '</script>';
                        
                    }
                    
                    
                }else
                {
                    echo '<script type="text/javascript">';
			        echo 'alert("Password length not match");';
			        echo 'window.location.href = "change_password.php";';
			        echo '</script>';
                }           
                
            }else
	        {
	            echo '<script type="text/javascript">';
			    echo 'alert("Old password is not matched... Try again");';
			    // $query1;
			    //echo 'window.location.href = "change_passwordassword.php";';
			    echo '</script>';
            }           
            
        }
        // else
        // {
        //     echo "<script>";
        //     echo "alert('Entry not match');";
        //     echo "</script>";
                    
        // }
    }

?>

	</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>