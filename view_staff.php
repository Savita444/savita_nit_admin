<!DOCTYPE html>
<html>
<head>
  <?php include('include/head.php'); ?>
  <link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/responsive.dataTables.css">
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
                <h4>View Staff</h4>
              </div>
              <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="view_staff.php">Staff</a></li>
                  <li class="breadcrumb-item active" aria-current="page">View Staff</li>
                </ol>
              </nav>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
              <div class="dropdown">
                <a class="btn btn-primary" href="add_staff.php" role="button">
                  Add Staff
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- Export Datatable start -->
        <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
          <div class="clearfix mb-20">
            <div class="pull-left">
              <!-- <h5 class="text-blue">Data Table with Export Buttons</h5> -->
            </div>
          </div>
          <div class="row">
            <table class="stripe hover data-table-export nowrap">
              <thead>
                <tr>
                  <th class="table-plus datatable-nosort">Sr No</th>
                  <th>Action</th>
                  <th>Name</th>
                  <th>Designation</th>
                  <!-- <th>Department</th> -->
                  <th>Qualification</th>
                  <!--<th>Experiance</th>-->
                  <!-- <th>Email</th>-->
                  <!--<th>Mobile</th>-->
                  <!--<th>Photo</th>-->
                  <th>Created Date</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php 
                  $count=0; 
                  $query="select s.*,dp.*,de.* from tbl_staff s,department dp,designation de where s.Designation_id=de.Designation_id and s.Department_id=dp.Department_id and s.fld_delete='0' order by s. fld_staff_id desc";
                  $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  
                  while($fetch=mysqli_fetch_array($row)) {

                  extract($fetch);
                 ?> 
                <tr>
                    <td><?php echo ++$count; ?></td>
                    <td>
                        <!-- <a href="slider_details.php?Slider_id=<?php// echo $fetch['Slider_id'] ?>"  class="fa fa-eye text-primary" style="font-size: 20px;"></a> -->
                        
                        <a href="delete_staff.php?fld_staff_id=<?php echo $fetch['fld_staff_id'] ?>" onclick="refld_admin_idturn confirm('Are you sure to Delete Staff Record')" class="fa fa-trash-o"  style="color: red;font-size: 20px;"></a>
                        <a href="update_staff.php?fld_staff_id=<?php echo $fetch['fld_staff_id'] ?>"  class="fa fa-edit"  style="color: green;font-size: 20px;"></a>
                    </td> 
                    <td><?php echo $fetch['fld_staff_name'];?></td>
                    <td><?php echo $fetch['Designation'];?></td>
                    <!-- <td><?php //echo $fetch['Department'];?></td>    -->
                    <td><?php echo $fetch['fld_staff_qualification'];?></td>
                    <!--<td><?php echo $fetch['fld_staff_experiance'];?></td>-->
                    <!-- <td><?php //echo $fetch['fld_admin_email'];?></td>
                    <td><?php //echo $fetch['fld_admin_mobile'];?></td> -->
                    <!--<td><a href="../NIT/staff/<?php echo $fetch['fld_staff_photo'];?>" target="_blank"><img src="../images/staff/<?php echo $fetch['fld_staff_photo'];?>" height="75px" width="75px" ></a></td> -->
                    <td><?php echo $fetch['fld_created_date'];?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        
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
</body>
</html>