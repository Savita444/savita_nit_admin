<?php
include "config.php";


// $delete1 = mysqli_query($connect,"Delete from index_count where count_id='".$_GET['count_id']."' ")or die(mysqli_error($connect));

$delete1 = mysqli_query($connect,"Update tbl_marquee set fld_delete='1' where fld_marquee_id='".$_GET['fld_marquee_id']."' ")or die(mysqli_error($connect));

// $delete13 = mysqli_query($connect,"Update service_data set fld_delete='1' where service_id='".$_GET['service_id']."' ")or die(mysqli_error($connect));

// $delete12 = mysqli_query($connect,"Update service_reg set fld_delete='1' where service_id='".$_GET['service_id']."' ")or die(mysqli_error($connect));

$back="view_marquee.php";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Latest News Marquee deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Latest News Marquee not deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>