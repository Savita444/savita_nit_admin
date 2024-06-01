<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
</head>
<body>
	<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20">
		<div class="login-box bg-white box-shadow pd-30 border-radius-5">
			<img src="vendors/images/login-img.png" alt="login" class="login-img">
			<h2 class="text-center mb-30">Admin Login</h2>
			<form method="post">
				<div class="input-group custom input-group-lg">
					<input type="email" name="email" class="form-control" placeholder="Email ID">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="input-group custom input-group-lg">
					<input type="password" name="password" class="form-control" placeholder="Password">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-sm-6">
						<div class="input-group">
							<!-- <a class="btn btn-outline-primary btn-lg btn-block" name="login">Sign In</a> -->
							<input type="submit" name="login" class="btn btn-outline-primary btn-lg btn-block" value="Sign In">
						</div>
					</div>
					
				</div>
			</form>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>

<?php
    include 'config.php';
    if(isset($_POST['login']))
    {
        extract($_POST);
        
        $log=mysqli_query($connect,"select * from tbl_admin where fld_email='$email' and fld_password='$password'") or die (mysqli_error($connect));
            
        if(mysqli_num_rows($log)>0)
        {
            $fetch=mysqli_fetch_array($log);
            
            $_SESSION['email']=$fetch['fld_email'];
            $_SESSION['name']=$fetch['fld_name'];
            
            
            echo "<script>";
            echo "alert('Login successfull');";
            echo 'window.location.href="dashboard.php";';
            echo "</script>";
        }else
        {
            echo "<script>";
            echo "alert('Login failed');";
            echo "</script>";
            
        }
        
    }

?>
