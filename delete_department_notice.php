<?php
include "config.php";



$delete1 = mysqli_query($connect,"delete from department_notice where department_notice_id='".$_GET['department_notice_id']."' ")or die(mysqli_error($connect));


$back="department_notice_view.php";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Department Notice Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Department Notice not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>