<?php
include "config.php";

$delete1 = mysqli_query($connect,"update scholarship set fld_delete='1' where scholarship_id='".$_GET['scholarship_id']."' ")or die(mysqli_error($connect));

$back="scholarship_view.php";

  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Scholarship Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Scholarship not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>