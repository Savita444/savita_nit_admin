<?php
include "config.php";

$delete1 = mysqli_query($connect,"update academic_calendar set academic_cal_delete='1' where academic_cal_id='".$_GET['academic_cal_id']."' ")or die(mysqli_error($connect));


$back="academic_calendar_view.php";

  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Academic Calendar Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Academic Calendar not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>