<?php include('include/header_session.php'); ?>
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
                                <h4>View Staff Download Section</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                    <li class="breadcrumb-item">View Staff Download Section</li>

                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary" href="add_staffdt.php" role="button">
                                    Add Staff Download Section
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
                                    <th class="datatable-nosort">Action</th>
                                    <th>Title</th>
                                    <th>File</th>
                                    <th>Created Date</th>
                                    <th>Modified Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $count=0; 
                                $query="select * from staff_download where fld_delete='0' order by staff_id desc";
                                $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
                                
                                while($fetch=mysqli_fetch_array($row)) {

                                extract($fetch);
                            
                            	?>
                                <tr>
                                    <td><?php echo ++$count; ?></td>
                                    <td>
                                        <a href="staffdt_delete.php?staff_id=<?php echo $fetch['staff_id'] ?>"
                                            onclick="return confirm('Are you sure to Delete Student Download Section Record')"
                                            class="fa fa-trash-o" style="color: red;font-size: 20px;">
                                        </a>
										<a href="staffdt_update.php?staff_id=<?php echo $fetch['staff_id'] ?>"
                                            class="fa fa-edit" style="color: green;font-size: 20px;">
                                        </a>
                                    </td>

                                    <td><?php echo $fetch['title'];?></td>
                                    <td class="td-actions">
                                            <a href="assets/images/staff_download/<?php echo $fetch['file'];?>"
                                                class="btn btn-small btn-primary" target="_blank">
                                                <i class="btn-icon-only icon-ok">Download</i>
                                            </a>
                                    </td>
                                    <td><?php echo $fetch['fld_created_date'];?></td>
                                    <td><?php echo $fetch['fld_modified_date'];?></td>
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
    $('document').ready(function() {
        $('.data-table').DataTable({
            scrollCollapse: true,
            autoWidth: false,
            responsive: true,
            columnDefs: [{
                targets: "datatable-nosort",
                orderable: false,
            }],
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
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
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
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
        $('.select-row tbody').on('click', 'tr', function() {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            } else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        });
        var multipletable = $('.multiple-select-row').DataTable();
        $('.multiple-select-row tbody').on('click', 'tr', function() {
            $(this).toggleClass('selected');
        });
    });
    </script>
</body>

</html>