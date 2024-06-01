<?php
include "config.php";




$delete1 = mysqli_query($connect,"Update timetable set syllabus_delete='1' where timetable_id='".$_GET['timetable_id']."' ")or die(mysqli_error($connect));


$back="timetableinfo_view.php";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Time Table Information Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Time Table Information not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>