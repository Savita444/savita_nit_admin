<?php
include "config.php";




$delete1 = mysqli_query($connect,"update cap set fld_delete='1' where cap_id='".$_GET['cap_id']."' ")or die(mysqli_error($connect));


$back="cap_view.php";

  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('CAP Round Process  Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('CAP Round Process  not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>