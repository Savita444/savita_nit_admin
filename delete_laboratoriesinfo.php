<?php
include "config.php";




$delete1 = mysqli_query($connect,"Update tbl_laboratories set fld_delete='1' where fld_laboratories_id='".$_GET['fld_laboratories_id']."' ")or die(mysqli_error($connect));


$back="laboratoriesinfo_view.php";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Laboratories Information Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Laboratories Information not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>