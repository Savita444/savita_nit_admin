<?php
include "config.php";




$delete1 = mysqli_query($connect,"delete from msbte_notice where msbte_notice_id='".$_GET['msbte_notice_id']."' ")or die(mysqli_error($connect));


$back="msbte_notice_view.php";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('MSBTE Notice Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('MSBTE Notice not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>