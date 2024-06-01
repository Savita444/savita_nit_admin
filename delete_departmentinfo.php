<?php
include "config.php";




$delete1 = mysqli_query($connect,"Update tbl_department set fld_delete='1' where fld_department_id='".$_GET['fld_department_id']."' ")or die(mysqli_error($connect));


$back="departmentinfo_view.php";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Department Information Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Department Information not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>