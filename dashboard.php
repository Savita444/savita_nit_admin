<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
</head>
<body>
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="row clearfix progress-box">
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<a href="view_slider.php"><div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-blue text-white">
									<i class="fa fa-sliders"></i>
								</div>
							</div>
							<?php
                            $res1=mysqli_query($connect,"select * from tbl_slider where is_deleted='0' order by id desc") or die (mysqli_error($connect));
                            $count1=mysqli_num_rows($res1);
                            ?>
							<div class="project-info-right">
								<span class="no text-blue weight-500 font-24"><?php echo $count1; ?></span>
								<p class="weight-400 font-18">Home Slider</p>
							</div>
						</div>
						<div class="project-info-progress">
							<!-- <div class="row clearfix">
								<div class="col-sm-6 text-muted weight-500">Target</div>
								<div class="col-sm-6 text-right weight-500 font-14 text-muted">40</div>
							</div> -->
							<div class="progress" style="height: 10px;">
								<div class="progress-bar bg-blue progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						</a>
					</div>
				</div>
			
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<a href="view_image.php"><div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-light-orange text-white">
									<i class="fa fa-picture-o"></i>
								</div>
							</div>
							<?php
                            $res2=mysqli_query($connect,"select * from tbl_gallery_image_title where fld_delete='0' order by fld_image_title_id desc") or die (mysqli_error($connect));
                            $count5=mysqli_num_rows($res2);
                            ?>
							<div class="project-info-right">
								<span class="no text-light-orange weight-500 font-24"><?php echo $count5; ?></span>
								<p class="weight-400 font-18">Image Title</p>
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
					<a href="view_photo.php"><div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-light-purple text-white">
									<i class="fa fa-camera"></i>
								</div>
							</div>
							<?php
                            $res2=mysqli_query($connect,"select * from tbl_gallery_images where fld_delete='0' order by fld_gallery_id desc") or die (mysqli_error($connect));
                            $count6=mysqli_num_rows($res2);
                            ?>
							<div class="project-info-right">
								<span class="no text-light-purple weight-500 font-24"><?php echo $count6; ?></span>
								<p class="weight-400 font-18">Photo</p>
							</div>
						</div>
						<div class="project-info-progress">
							<!-- <div class="row clearfix">
								<div class="col-sm-6 text-muted weight-500">Target</div>
								<div class="col-sm-6 text-right weight-500 font-14 text-muted">50</div>
							</div> -->
							<div class="progress" style="height: 10px;">
								<div class="progress-bar bg-light-purple progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<a href="view_marquee.php"><div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-blue text-white">
									<i class="fa fa-sliders"></i>
								</div>
							</div>
							<?php
                            $res1=mysqli_query($connect,"select * from tbl_marquee where fld_delete='0' order by fld_marquee_id desc") or die (mysqli_error($connect));
                            $count11=mysqli_num_rows($res1);
                            ?>
							<div class="project-info-right">
								<span class="no text-blue weight-500 font-24"><?php echo $count11; ?></span>
								<p class="weight-400 font-18">Marquee</p>
							</div>
						</div>
						<div class="project-info-progress">
							<!-- <div class="row clearfix">
								<div class="col-sm-6 text-muted weight-500">Target</div>
								<div class="col-sm-6 text-right weight-500 font-14 text-muted">40</div>
							</div> -->
							<div class="progress" style="height: 10px;">
								<div class="progress-bar bg-blue progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						</a>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<a href="view_affiliation_images.php"><div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-light-orange text-white">
									<i class="fa fa-certificate"></i>
								</div>
							</div>
							<?php
                            $res7=mysqli_query($connect,"select * from tbl_affiliation_certificates where fld_delete='0' order by fld_affiliation_id desc") or die (mysqli_error($connect));
                            $count7=mysqli_num_rows($res7);
                            ?>
							<div class="project-info-right">
								<span class="no text-light-orange weight-500 font-24"><?php echo $count7 ?></span>
								<p class="weight-400 font-18">Affiliation Certificates</p>
							</div>
						</div>
						<div class="project-info-progress">
							<!-- <div class="row clearfix">
								<div class="col-sm-6 text-muted weight-500">Review</div>
								<div class="col-sm-6 text-right weight-500 font-14 text-muted">Good</div>
							</div> -->
							<div class="progress" style="height: 10px;">
								<div class="progress-bar bg-light-orange progress-bar-striped progress-bar-animated" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<a href="designation_view.php"><div class="bg-white pd-20 box-shadow border-radius-5 margin-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-light-purple text-white">
									<i class="fa fa-cogs"></i>
								</div>
							</div>
							<?php
                            $res4=mysqli_query($connect,"select * from designation where Designation_delete='0' order by Designation_id desc") or die (mysqli_error($connect));
                            $count4=mysqli_num_rows($res4);
                            ?>
							<div class="project-info-right">
								<span class="no text-light-purple weight-500 font-24"><?php echo $count4 ?></span>
								<p class="weight-400 font-18">Designation</p>
							</div>
						</div>
						<div class="project-info-progress">
							<!-- <div class="row clearfix">
								<div class="col-sm-6 text-muted weight-500">Review</div>
								<div class="col-sm-6 text-right weight-500 font-14 text-muted">Average</div>
							</div> -->
							<div class="progress" style="height: 10px;">
								<div class="progress-bar bg-light-purple progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div></a>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<a href="department_view.php"><div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-blue text-white">
									<i class="fa fa-university"></i>
								</div>
							</div>
							<?php
                            $res3=mysqli_query($connect,"select * from department where Department_delete='0' order by id desc") or die (mysqli_error($connect));
                            $count3=mysqli_num_rows($res3);
                            ?>
							<div class="project-info-right">
								<span class="no text-blue weight-500 font-24"><?php echo $count3 ?></span>
								<p class="weight-400 font-18">Department</p>
							</div>
						</div>
						<div class="project-info-progress">
							<!-- <div class="row clearfix">
								<div class="col-sm-6 text-muted weight-500">Review</div>
								<div class="col-sm-6 text-right weight-500 font-14 text-muted">Good</div>
							</div> -->
							<div class="progress" style="height: 10px;">
								<div class="progress-bar bg-blue progress-bar-striped progress-bar-animated" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<a href="view_principal_desk.php"><div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-light-green text-white">
									<i class="fa fa-user-circle-o"></i>
								</div>
							</div>
							<?php
                            $res6=mysqli_query($connect,"select * from tbl_principal_desk where fld_delete='0' order by fld_principal_id desc") or die (mysqli_error($connect));
                            $count6=mysqli_num_rows($res6);
                            ?>
							<div class="project-info-right">
								<span class="no text-light-green weight-500 font-24"><?php echo $count6; ?></span>
								<p class="weight-400 font-18">Principal Desk</p>
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
					<a href="view_alumini_committee.php"><div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-light-purple text-white">
									<i class="fa fa-users"></i>
								</div>
							</div>
							<?php
                            $res9=mysqli_query($connect,"select * from tbl_alumini_committee where fld_delete='0' order by fld_ac_id desc") or die (mysqli_error($connect));
                            $count9=mysqli_num_rows($res9);
                            ?>
							<div class="project-info-right">
								<span class="no text-light-purple weight-500 font-24"><?php echo $count9 ?></span>
								<p class="weight-400 font-18">Alumini Committee</p>
							</div>
						</div>
						<div class="project-info-progress">
							<!-- <div class="row clearfix">
								<div class="col-sm-6 text-muted weight-500">Target</div>
								<div class="col-sm-6 text-right weight-500 font-14 text-muted">40</div>
							</div> -->
							<div class="progress" style="height: 10px;">
								<div class="progress-bar bg-light-purple progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						</a>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<a href="view_gove.php"><div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-blue text-white">
									<i class="fa fa-users"></i>
								</div>
							</div>
							<?php
                            $res10=mysqli_query($connect,"select * from tbl_board_members where fld_delete='0' order by fld_bm_id desc") or die (mysqli_error($connect));
                            $count10=mysqli_num_rows($res10);
                            ?>
							<div class="project-info-right">
								<span class="no text-blue weight-500 font-24"><?php echo $count10 ?></span>
								<p class="weight-400 font-18">Governing Board Members</p>
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
					<a href="view_staff.php"><div class="bg-white pd-20 box-shadow border-radius-5 margin-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-light-purple text-white">
									<i class="fa fa-users"></i>
								</div>
							</div>
							<?php
                            $res8=mysqli_query($connect,"select * from tbl_staff where fld_delete='0' order by fld_staff_id desc") or die (mysqli_error($connect));
                            $count8=mysqli_num_rows($res8);
                            ?>
							<div class="project-info-right">
								<span class="no text-light-purple weight-500 font-24"><?php echo $count8 ?></span>
								<p class="weight-400 font-18">Staff</p>
							</div>
						</div>
						<div class="project-info-progress">
							<!-- <div class="row clearfix">
								<div class="col-sm-6 text-muted weight-500">Review</div>
								<div class="col-sm-6 text-right weight-500 font-14 text-muted">Average</div>
							</div> -->
							<div class="progress" style="height: 10px;">
								<div class="progress-bar bg-light-purple progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div></a>
				</div>
				
					
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<a href="view_fee_structure.php"><div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-light-orange text-white">
									<i class="fa fa-money"></i>
								</div>
							</div>
							<?php
                            $res14=mysqli_query($connect,"select * from tbl_fee_structure where fld_delete='0' order by fld_fee_id desc") or die (mysqli_error($connect));
                            $count14=mysqli_num_rows($res14);
                            ?>
							<div class="project-info-right">
								<span class="no text-light-orange weight-500 font-24"><?php echo $count14 ?></span>
								<p class="weight-400 font-18">Fee Structre</p>
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
				
			</div>

			<div class="row clearfix progress-box">
				
		
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<a href="view_alumini_contact.php"><div class="bg-white pd-20 box-shadow border-radius-5 margin-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-light-purple text-white">
									<i class="fa fa-phone-square"></i>
								</div>
							</div>
							<?php
                            $res8=mysqli_query($connect,"select * from tbl_alumini where fld_delete='0' order by fld_a_id desc") or die (mysqli_error($connect));
                            $count8=mysqli_num_rows($res8);
                            ?>
							<div class="project-info-right">
								<span class="no text-light-purple weight-500 font-24"><?php echo $count8 ?></span>
								<p class="weight-400 font-18">Alumini Contact</p>
							</div>
						</div>
						<div class="project-info-progress">
							<!-- <div class="row clearfix">
								<div class="col-sm-6 text-muted weight-500">Review</div>
								<div class="col-sm-6 text-right weight-500 font-14 text-muted">Average</div>
							</div> -->
							<div class="progress" style="height: 10px;">
								<div class="progress-bar bg-light-purple progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div></a>
				</div>
				
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<a href="update_contact_us.php"><div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-blue text-white">
									<i class="fa fa-envelope-o"></i>
								</div>
							</div>
							<?php
                            $res2=mysqli_query($connect,"select * from contact_us where fld_delete='0' order by contact_us_id desc") or die (mysqli_error($connect));
                            $count2=mysqli_num_rows($res2);
                            ?>
							<div class="project-info-right">
								<span class="no text-blue weight-500 font-24"><?php echo $count2 ?></span>
								<p class="weight-400 font-18">Contact Us</p>
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
					<a href="contact.php"><div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-light-green text-white">
									<i class="fa fa-phone"></i>
								</div>
							</div>
							<?php
                            $res2=mysqli_query($connect,"select * from tbl_contact where fld_delete='0' order by fld_contact_id desc") or die (mysqli_error($connect));
                            $count2=mysqli_num_rows($res2);
                            ?>
							<div class="project-info-right">
								<span class="no text-light-green weight-500 font-24"><?php echo $count2 ?></span>
								<p class="weight-400 font-18">Contact</p>
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
				
			</div>
			

			
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
	<script src="src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
	<script src="src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
	<script type="text/javascript">
		Highcharts.chart('areaspline-chart', {
			chart: {
				type: 'areaspline'
			},
			title: {
				text: ''
			},
			legend: {
				layout: 'vertical',
				align: 'left',
				verticalAlign: 'top',
				x: 70,
				y: 20,
				floating: true,
				borderWidth: 1,
				backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
			},
			xAxis: {
				categories: [
					'Monday',
					'Tuesday',
					'Wednesday',
					'Thursday',
					'Friday',
					'Saturday',
					'Sunday'
				],
				plotBands: [{
					from: 4.5,
					to: 6.5,
				}],
				gridLineDashStyle: 'longdash',
                gridLineWidth: 1,
                crosshair: true
			},
			yAxis: {
				title: {
					text: ''
				},
				gridLineDashStyle: 'longdash',
			},
			tooltip: {
				shared: true,
				valueSuffix: ' units'
			},
			credits: {
				enabled: false
			},
			plotOptions: {
				areaspline: {
					fillOpacity: 0.6
				}
			},
			series: [{
				name: 'John',
				data: [0, 5, 8, 6, 3, 10, 8],
				color: '#f5956c'
			}, {
				name: 'Jane',
				data: [0, 3, 6, 3, 7, 5, 9],
				color: '#f56767'
			}, {
				name: 'Johnny',
				data: [0, 2, 5, 3, 2, 4, 0],
				color: '#a683eb'
			}, {
				name: 'Daniel',
				data: [0, 4, 7, 3, 0, 7, 4],
				color: '#41ccba'
			}]
		});


		// Device Usage chart
		Highcharts.chart('device-usage', {
			chart: {
				type: 'pie'
			},
			title: {
				text: ''
			},
			subtitle: {
				text: ''
			},
			credits: {
				enabled: false
			},
			plotOptions: {
				series: {
					dataLabels: {
						enabled: false,
						format: '{point.name}: {point.y:.1f}%'
					}
				},
				pie: {
					innerSize: 127,
					depth: 45
				}
			},

			tooltip: {
				headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
				pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
			},
			series: [{
				name: 'Brands',
				colorByPoint: true,
				data: [{
					name: 'IE',
					y: 10,
					color: '#ecc72f'
				}, {
					name: 'Chrome',
					y: 40,
					color: '#46be8a'
				}, {
					name: 'Firefox',
					y: 30,
					color: '#f2a654'
				}, {
					name: 'Safari',
					y: 10,
					color: '#62a8ea'
				}, {
					name: 'Opera',
					y: 10,
					color: '#e14e50'
				}]
			}]
		});

		// gauge chart
		Highcharts.chart('ram', {

			chart: {
				type: 'gauge',
				plotBackgroundColor: null,
				plotBackgroundImage: null,
				plotBorderWidth: 0,
				plotShadow: false
			},
			title: {
				text: ''
			},
			credits: {
				enabled: false
			},
			pane: {
				startAngle: -150,
				endAngle: 150,
				background: [{
					borderWidth: 0,
					outerRadius: '109%'
				}, {
					borderWidth: 0,
					outerRadius: '107%'
				}, {
				}, {
					backgroundColor: '#fff',
					borderWidth: 0,
					outerRadius: '105%',
					innerRadius: '103%'
				}]
			},

			yAxis: {
				min: 0,
				max: 200,

				minorTickInterval: 'auto',
				minorTickWidth: 1,
				minorTickLength: 10,
				minorTickPosition: 'inside',
				minorTickColor: '#666',

				tickPixelInterval: 30,
				tickWidth: 2,
				tickPosition: 'inside',
				tickLength: 10,
				tickColor: '#666',
				labels: {
					step: 2,
					rotation: 'auto'
				},
				title: {
					text: 'RAM'
				},
				plotBands: [{
					from: 0,
					to: 120,
					color: '#55BF3B'
				}, {
					from: 120,
					to: 160,
					color: '#DDDF0D'
				}, {
					from: 160,
					to: 200,
					color: '#DF5353'
				}]
			},

			series: [{
				name: 'Speed',
				data: [80],
				tooltip: {
					valueSuffix: '%'
				}
			}]
		});
		Highcharts.chart('cpu', {

			chart: {
				type: 'gauge',
				plotBackgroundColor: null,
				plotBackgroundImage: null,
				plotBorderWidth: 0,
				plotShadow: false
			},
			title: {
				text: ''
			},
			credits: {
				enabled: false
			},
			pane: {
				startAngle: -150,
				endAngle: 150,
				background: [{
					borderWidth: 0,
					outerRadius: '109%'
				}, {
					borderWidth: 0,
					outerRadius: '107%'
				}, {
				}, {
					backgroundColor: '#fff',
					borderWidth: 0,
					outerRadius: '105%',
					innerRadius: '103%'
				}]
			},

			yAxis: {
				min: 0,
				max: 200,

				minorTickInterval: 'auto',
				minorTickWidth: 1,
				minorTickLength: 10,
				minorTickPosition: 'inside',
				minorTickColor: '#666',

				tickPixelInterval: 30,
				tickWidth: 2,
				tickPosition: 'inside',
				tickLength: 10,
				tickColor: '#666',
				labels: {
					step: 2,
					rotation: 'auto'
				},
				title: {
					text: 'CPU'
				},
				plotBands: [{
					from: 0,
					to: 120,
					color: '#55BF3B'
				}, {
					from: 120,
					to: 160,
					color: '#DDDF0D'
				}, {
					from: 160,
					to: 200,
					color: '#DF5353'
				}]
			},

			series: [{
				name: 'Speed',
				data: [120],
				tooltip: {
					valueSuffix: ' %'
				}
			}]
		});
	</script>
</body>
</html>