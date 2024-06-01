<!DOCTYPE html>
<html>
<head>
	<title>View Designation</title>
	<?php include('include/head.php'); ?>
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/responsive.dataTables.css">
</head>
<body>
	<?php include('include/header.php');
include('include/sidebar.php'); ?>


	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-10 col-sm-10">
							<div class="title">
								<h4>Designation Details</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active" aria-current="page">Designation Details</li>
								</ol>
							</nav>
						</div>

						<div class="col-md-2 col-sm-2">
							<a  href="#" data-toggle="modal" data-target="#designation_add" type="button"><button  class="btn btn-primary">Add Designation</button></a>
						</div>
						
					</div>
				</div>


				<div class="modal fade bs-example-modal-lg" id="designation_add" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myLargeModalLabel">Add Designation</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>

										<form method="post">
											<div class="modal-body">
												<div class="form-group row">
													<label class="col-sm-12 col-md-3 col-form-label">Designation<span class="text-danger">*</span> : </label>
													<div class="col-sm-12 col-md-9">
														<input class="form-control" type="text" name="designation" id="designation" placeholder="Enter Designation" required=""  oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/(\..*)\./g, '$1');">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<input class="btn btn-success" value="Submit" type="submit" name="submit">
												<input class="btn btn-danger" value="Reset" type="reset">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												
											</div>
										</form>
									</div>
								</div>
							</div>

<?php
                                    
                                    if (isset($_POST['submit'])) 
                                    {
                                        
                                        extract($_POST);

                                        $designation=$_POST['designation'];
                                        $coulmn=array();
								        $query1=mysqli_query($connect,"select * from designation where fld_delete='0'");
								        while ($row=mysqli_fetch_assoc($query1))
								        {
								          $coulmn[]=$row['Designation'];
								        }

								        if (in_array($designation, $coulmn)) 
										{
											echo '<script type="text/javascript">'; 
											echo 'alert("Designation Is Already Exist");';
											echo "window.location.href = 'designation_view.php';";
											echo '</script>'; 
											return true;

										}    
								        else
								        {


	                                        $query="INSERT INTO designation(Designation) VALUES ('$designation')";
	                                        //echo $query."<br>";
	                                        $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
	                                        if ($row) 
	                                        {
	                                            echo "<script>";
	                                            echo "alert('Designation Added Successfully');";
	                                            echo "window.location.href='designation_view.php';";
	                                            echo "</script>";                 
	                                        }
	                                        else
	                                        {
	                                            echo "<script>";
	                                            echo "alert('Error');";
	                                            echo "window.location.href='designation_view.php';";
	                                            echo "</script>";
	                                        }
	                                    }    
                                    }
                                ?>							
				
				
				<!-- Export Datatable start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<!-- <h5 class="text-blue">View Designation</h5> -->
						</div>
					</div>
					<div class="row">
						<!-- <table class="stripe hover multiple-select-row data-table-export nowrap"> -->
						<table class="stripe hover data-table-export nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">Sr No</th>
									<th class="datatable-nosort">Action</th>
                                    <th>Designation</th>
                                    <th>Date</th>
                                    
								</tr>
							</thead>
							<tbody>
								<?php 
                                    $count=0; 
                                    $query="select * from designation where Designation_delete='0' order by Designation_id desc ";
                                    $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
                                    
                                    while($fetch=mysqli_fetch_array($row)) {

                                    extract($fetch);

                                    
                                
                                ?>
								<tr>
									<td class="table-plus"><?php echo ++$count; ?></td>
									<td><a href="#" data-toggle="modal" data-target="#designation_update<?php echo $fetch['Designation_id'] ?>"  title="Edit Designation"><i class="fa fa-pencil-square-o text-success" style="font-size: 20px" ></i> </a>
										

										
										<a href="designation_trash.php?designation_id=<?php echo $fetch['Designation_id'] ?>" onclick="return confirm('Are You Sure To Delete Designation.')" title="Delete Designation" ><i class="fa fa-trash text-danger" style="font-size: 20px; padding-left: 10px" ></i></a>

										
									</td>
									<td><?php echo $fetch['Designation'];?></td>                     
									<td><?php echo $fetch['Designation_date'];?></td>

<div class="modal fade bs-example-modal-lg" id="designation_update<?php echo $fetch['Designation_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myLargeModalLabel">Update Designation</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>

<?php 

	$abc=mysqli_query($connect,"select * from designation where Designation_id='".$fetch['Designation_id']."'") or die(mysqli_error($connect));
	$view=mysqli_fetch_array($abc);
?>
										<form method="post" action="designation_update.php?designation_id=<?php echo $fetch['Designation_id'] ?>">
											<div class="modal-body">
												<div class="form-group row">
													<label class="col-sm-12 col-md-3 col-form-label">Designation<span class="text-danger">*</span> : </label>
													<div class="col-sm-12 col-md-9">
														<input class="form-control" type="text" name="designation" id="designation1" placeholder="Enter Designation" required="" value="<?php echo $view['Designation'] ?>" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/(\..*)\./g, '$1');" >
													</div>
												</div>
											</div>
												
											<div class="modal-footer">
												<input class="btn btn-success" value="Update" type="submit" name="update">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												
											</div>
										</form>
									</div>
								</div>
							</div>	
													
									
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
				<!-- Export Datatable End -->
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
	<script src="src/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/media/js/dataTables.bootstrap4.js"></script>
	<script src="src/plugins/datatables/media/js/dataTables.responsive.js"></script>
	<script src="src/plugins/datatables/media/js/responsive.bootstrap4.js"></script>
	<!-- buttons for Export datatable -->
	<script src="src/plugins/datatables/media/js/button/dataTables.buttons.js"></script>
	<script src="src/plugins/datatables/media/js/button/buttons.bootstrap4.js"></script>
	<script src="src/plugins/datatables/media/js/button/buttons.print.js"></script>
	<script src="src/plugins/datatables/media/js/button/buttons.html5.js"></script>
	<script src="src/plugins/datatables/media/js/button/buttons.flash.js"></script>
	<script src="src/plugins/datatables/media/js/button/pdfmake.min.js"></script>
	<script src="src/plugins/datatables/media/js/button/vfs_fonts.js"></script>
	<script>
		$('document').ready(function(){
			$('.data-table').DataTable({
				scrollCollapse: true,
				autoWidth: false,
				responsive: true,
				columnDefs: [{
					targets: "datatable-nosort",
					orderable: false,
				}],
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"language": {
					"info": "_START_-_END_ of _TOTAL_ entries",
					searchPlaceholder: "Search"
				},
			});
			$('.data-table-export').DataTable({
				scrollCollapse: true,
				autoWidth: false,
				responsive: true,
				columnDefs: [{
					targets: "datatable-nosort",
					orderable: false,
				}],
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"language": {
					"info": "_START_-_END_ of _TOTAL_ entries",
					searchPlaceholder: "Search"
				},
				dom: 'Bfrtip',
				buttons: [
				'copy', 'csv', 'pdf', 'print'
				]
			});
			var table = $('.select-row').DataTable();
			$('.select-row tbody').on('click', 'tr', function () {
				if ($(this).hasClass('selected')) {
					$(this).removeClass('selected');
				}
				else {
					table.$('tr.selected').removeClass('selected');
					$(this).addClass('selected');
				}
			});
			var multipletable = $('.multiple-select-row').DataTable();
			$('.multiple-select-row tbody').on('click', 'tr', function () {
				$(this).toggleClass('selected');
			});
		});
	</script>

	<script type="text/javascript">
	function titleCase1() {
		var str=document.getElementById("designation").value;
   var splitStr = str.toLowerCase().split(' ');
   for (var i = 0; i < splitStr.length; i++) {
       // You do not need to check if i is larger than splitStr length, as your for does that for you
       // Assign it back to the array
       splitStr[i] = splitStr[i].charAt(0).toUpperCase() + splitStr[i].substring(1);     
   }
   // Directly return the joined string
   document.getElementById("designation").value = splitStr.join(' '); 
}

</script>

<script type="text/javascript">
	function titleCase2() {
		var str=document.getElementById("designation1").value;
   var splitStr = str.toLowerCase().split(' ');
   for (var i = 0; i < splitStr.length; i++) {
       // You do not need to check if i is larger than splitStr length, as your for does that for you
       // Assign it back to the array
       splitStr[i] = splitStr[i].charAt(0).toUpperCase() + splitStr[i].substring(1);     
   }
   // Directly return the joined string
   document.getElementById("designation1").value = splitStr.join(' '); 
}

</script>

</body>
</html>