<?php
include "config.php";

$delete1 = mysqli_query($connect,"delete from non_teaching_staff where non_teaching_staff_id='".$_GET['non_teaching_staff_id']."' ")or die(mysqli_error($connect));


$back="view_non_teaching_staff.php";

  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Non Teaching Staff Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Non Teaching Staff not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>