<?php
include "config.php";


// $delete1 = mysqli_query($connect,"Delete from service_add where service_id='".$_GET['service_id']."' ")or die(mysqli_error($connect));

$delete1 = mysqli_query($connect,"Update tbl_plan set fld_delete='1' where fld_bm_id='".$_GET['fld_bm_id']."'")or die(mysqli_error($connect));
// $delete13 = mysqli_query($connect,"Update service_data set fld_delete='1' where service_id='".$_GET['service_id']."' ")or die(mysqli_error($connect));

// $delete12 = mysqli_query($connect,"Update service_reg set fld_delete='1' where service_id='".$_GET['service_id']."' ")or die(mysqli_error($connect));

$back="plan_view.php";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Syllabus Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Syllabus Not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>