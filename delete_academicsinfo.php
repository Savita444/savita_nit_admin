<?php
include "config.php";




$delete1 = mysqli_query($connect,"Update tbl_academics set fld_delete='1' where fld_academics_id='".$_GET['fld_academics_id']."' ")or die(mysqli_error($connect));


$back="academicsinfo_view.php";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Academics Information Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Academics Information not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>