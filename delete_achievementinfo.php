<?php
include "config.php";




$delete1 = mysqli_query($connect,"Update tbl_achievement set fld_delete='1' where fld_achievement_id='".$_GET['fld_achievement_id']."' ")or die(mysqli_error($connect));


$back="achievementsinfo_view.php";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Achievement Information Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Achievement Information not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>