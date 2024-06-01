<?php
include "config.php";




$delete1 = mysqli_query($connect,"Update tbl_activity set fld_delete='1' where fld_activity_id='".$_GET['fld_activity_id']."' ")or die(mysqli_error($connect));


$back="activitiesinfo_view.php";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Activity Information Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Activity Information not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>