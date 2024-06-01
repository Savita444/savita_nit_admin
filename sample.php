<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<a href="enquiry.php"><div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-light-orange text-white">
									<i class="fa fa-envelope-open-o"></i>
								</div>
							</div>
							<?php
                            $res13=mysqli_query($connect,"select * from tbl_enquiry where fld_delete='0' order by fld_enquiry_id desc") or die (mysqli_error($connect));
                            $count13=mysqli_num_rows($res13);
                            ?>
							<div class="project-info-right">
								<span class="no text-light-orange weight-500 font-24"><?php echo $count13 ?></span>
								<p class="weight-400 font-18">Admission Enquiry</p>
							</div>
						</div>
						<div class="project-info-progress">
							<!-- <div class="row clearfix">
								<div class="col-sm-6 text-muted weight-500">Target</div>
								<div class="col-sm-6 text-right weight-500 font-14 text-muted">40</div>
							</div> -->
							<div class="progress" style="height: 10px;">
								<div class="progress-bar bg-light-orange progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						</a>
					</div>
				</div>
				
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<a href="view_student_training.php"><div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-light-green text-white">
									<i class="fa fa-graduation-cap"></i>
								</div>
							</div>
							<?php
                            $res6=mysqli_query($connect,"select * from tbl_student_training where fld_delete='0' order by student_id desc") or die (mysqli_error($connect));
                            $count6=mysqli_num_rows($res6);
                            ?>
							<div class="project-info-right">
								<span class="no text-light-green weight-500 font-24"><?php echo $count6; ?></span>
								<p class="weight-400 font-18">Student Implant Training</p>
							</div>
						</div>
						<div class="project-info-progress">
							<!-- <div class="row clearfix">
								<div class="col-sm-6 text-muted weight-500">Target</div>
								<div class="col-sm-6 text-right weight-500 font-14 text-muted">50</div>
							</div> -->
							<div class="progress" style="height: 10px;">
								<div class="progress-bar bg-light-green progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div></a>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<a href="view_staff_training.php"><div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-blue text-white">
									<i class="fa fa-user-plus"></i>
								</div>
							</div>
							<?php
                            $res10=mysqli_query($connect,"select * from tbl_staff_training where fld_delete='0' order by staff_taining_id desc") or die (mysqli_error($connect));
                            $count10=mysqli_num_rows($res10);
                            ?>
							<div class="project-info-right">
								<span class="no text-blue weight-500 font-24"><?php echo $count10 ?></span>
								<p class="weight-400 font-18">Staff Industrial Training</p>
							</div>
						</div>
						<div class="project-info-progress">
							<!-- <div class="row clearfix">
								<div class="col-sm-6 text-muted weight-500">Target</div>
								<div class="col-sm-6 text-right weight-500 font-14 text-muted">50</div>
							</div> -->
							<div class="progress" style="height: 10px;">
								<div class="progress-bar bg-blue progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div></a>
					</div>
				</div>
				
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<a href="view_course.php"><div class="bg-white pd-20 box-shadow border-radius-5 margin-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-light-orange text-white">
									<i class="fa fa-object-ungroup"></i>
								</div>
							</div>
							<?php
                            $res12=mysqli_query($connect,"select * from tbl_courese_offered where fld_delete='0' order by fld_co_id desc") or die (mysqli_error($connect));
                            $count12=mysqli_num_rows($res12);
                            ?>
							<div class="project-info-right">
								<span class="no text-light-orange weight-500 font-24"><?php echo $count12 ?></span>
								<p class="weight-400 font-18">Courese Offered</p>
							</div>
						</div>
						<div class="project-info-progress">
							<!-- <div class="row clearfix">
								<div class="col-sm-6 text-muted weight-500">Review</div>
								<div class="col-sm-6 text-right weight-500 font-14 text-muted">Average</div>
							</div> -->
							<div class="progress" style="height: 10px;">
								<div class="progress-bar bg-light-orange progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div></a>
				</div>
				
				
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<a href="view_pcm.php"><div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-light-green text-white">
									<i class="fa fa-users"></i>
								</div>
							</div>
							<?php
                            $res6=mysqli_query($connect,"select * from tbl_placement_cell_member where fld_delete='0' order by fld_pcm_id desc") or die (mysqli_error($connect));
                            $count6=mysqli_num_rows($res6);
                            ?>
							<div class="project-info-right">
								<span class="no text-light-green weight-500 font-24"><?php echo $count6; ?></span>
								<p class="weight-400 font-18">Placement Cell Member</p>
							</div>
						</div>
						<div class="project-info-progress">
							<!-- <div class="row clearfix">
								<div class="col-sm-6 text-muted weight-500">Target</div>
								<div class="col-sm-6 text-right weight-500 font-14 text-muted">50</div>
							</div> -->
							<div class="progress" style="height: 10px;">
								<div class="progress-bar bg-light-green progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div></a>
					</div>
				</div>
				
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<a href="view_admin_team.php"><div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-light-orange text-white">
									<i class="fa fa-universal-access"></i>
								</div>
							</div>
							<?php
                            $res6=mysqli_query($connect,"select * from tbl_admin_team where fld_delete='0' order by fld_admin_id desc") or die (mysqli_error($connect));
                            $count6=mysqli_num_rows($res6);
                            ?>
							<div class="project-info-right">
								<span class="no text-light-orange weight-500 font-24"><?php echo $count6; ?></span>
								<p class="weight-400 font-18">Admin Team</p>
							</div>
						</div>
						<div class="project-info-progress">
							<!-- <div class="row clearfix">
								<div class="col-sm-6 text-muted weight-500">Target</div>
								<div class="col-sm-6 text-right weight-500 font-14 text-muted">50</div>
							</div> -->
							<div class="progress" style="height: 10px;">
								<div class="progress-bar bg-light-orange progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div></a>
					</div>
				</div>
				
								<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<a href="view_count.php"><div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-light-green text-white">
									<i class="fa fa-spinner"></i>
								</div>
							</div>
							<?php
                            $res1=mysqli_query($connect,"select * from index_count where fld_delete='0' order by count_id desc") or die (mysqli_error($connect));
                            $count1=mysqli_num_rows($res1);
                            ?>
							<div class="project-info-right">
								<span class="no text-light-green weight-500 font-24"><?php echo $count1 ?></span>
								<p class="weight-400 font-18">Count</p>
							</div>
						</div>
						<div class="project-info-progress">
							<!-- <div class="row clearfix">
								<div class="col-sm-6 text-muted weight-500">Target</div>
								<div class="col-sm-6 text-right weight-500 font-14 text-muted">40</div>
							</div> -->
							<div class="progress" style="height: 10px;">
								<div class="progress-bar bg-light-green progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						</a>
					</div>
				</div>
				
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<a href="view_pslider.php"><div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-light-green text-white">
									<i class="fa fa-sliders"></i>
								</div>
							</div>
							<?php
                            $res2=mysqli_query($connect,"select * from tbl_prize_slider where fld_delete='0' order by fld_pslider_id desc") or die (mysqli_error($connect));
                            $count3=mysqli_num_rows($res2);
                            ?>
							<div class="project-info-right">
								<span class="no text-light-green weight-500 font-24"><?php echo $count3; ?></span>
								<p class="weight-400 font-18">Prize Slider</p>
							</div>
						</div>
						<div class="project-info-progress">
							<!-- <div class="row clearfix">
								<div class="col-sm-6 text-muted weight-500">Target</div>
								<div class="col-sm-6 text-right weight-500 font-14 text-muted">50</div>
							</div> -->
							<div class="progress" style="height: 10px;">
								<div class="progress-bar bg-light-green progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div></a>
					</div>
				</div>
				