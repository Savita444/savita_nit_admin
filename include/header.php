<?php include "config.php";
include "include/header_session.php";
 ?>
	<div class="pre-loader"></div>
	<div class="header clearfix">
		<div class="header-right">
			<div class="brand-logo">
				<a href="#">
					<img src="vendors/images/logo.png" alt="" class="mobile-logo">
				</a>
			</div>
			<div class="menu-icon">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<?php 
                                    
                            $query=mysqli_query($connect,"select * from tbl_admin where fld_email='".$_SESSION['email']."'") or die(mysqli_error($connect));
                            $fetch=mysqli_fetch_array($query);
                            extract($fetch);
                            
                            if ($fetch['fld_photo']=="") 
                            {
                        ?>
                                <!--<img src="../images/admin/No-image-full.jpg" alt="No Image" style="border-radius: 100%;height: 40px;width: 40px" />-->
                        <?php
                            }
                            else
                            {
                        ?>                                        
                                <!--<img src="../images/admin/<?php echo $fetch['fld_photo'];?>" alt="No Image" style="border-radius: 100%;height: 40px;width: 40px" />-->
                        <?php
                            }
                        ?>
						<span class="user-name"><?php echo $fetch['fld_email']; ?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<!-- <a class="dropdown-item" href="profile.php"><i class="fa fa-user-md" aria-hidden="true"></i> Profile</a>
						<a class="dropdown-item" href="profile.php"><i class="fa fa-cog" aria-hidden="true"></i> Setting</a>
						<a class="dropdown-item" href="faq.php"><i class="fa fa-question" aria-hidden="true"></i> Help</a> -->
						<a class="dropdown-item" href="index.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a>
					</div>
				</div>
			</div>
			
		</div>
	</div>