<?php
include "config.php";


// $delete1 = mysqli_query($connect,"Delete from index_count where count_id='".$_GET['count_id']."' ")or die(mysqli_error($connect));

$delete1 = mysqli_query($connect,"Update tbl_staff_training set fld_delete='1' where staff_taining_id='".$_GET['staff_taining_id']."' ")or die(mysqli_error($connect));

// $delete13 = mysqli_query($connect,"Update service_data set fld_delete='1' where service_id='".$_GET['service_id']."' ")or die(mysqli_error($connect));

// $delete12 = mysqli_query($connect,"Update service_reg set fld_delete='1' where service_id='".$_GET['service_id']."' ")or die(mysqli_error($connect));

$back="view_staff_training.php";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Staff Training Details deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Staff Training Details not deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>