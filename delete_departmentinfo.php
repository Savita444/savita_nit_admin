<?php
include "config.php";




$delete1 = mysqli_query($connect,"Delete from tbl_department where id='".$_GET['id']."' ")or die(mysqli_error($connect));


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