<?php
include "config.php";




$delete1 = mysqli_query($connect,"Update tbl_facility set fld_delete='1' where fld_facility_id='".$_GET['fld_facility_id']."' ")or die(mysqli_error($connect));


$back="facilitiesinfo_view.php";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Facility Information Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Facility Information not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>