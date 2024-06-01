<?php
include "config.php";




$delete1 = mysqli_query($connect,"delete from staff_download where staff_id='".$_GET['staff_id']."' ")or die(mysqli_error($connect));


$back="staff_view.php";

  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Staff Download Section Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Staff Download Section not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>