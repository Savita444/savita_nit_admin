<?php
include "config.php";


          $delete1 = mysqli_query($connect,"Update facility set facility_delete='1' where facility_id='".$_GET['facility_id']."' ")or die(mysqli_error($connect));

          

$back="javascript:history.back()";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Facility Details Deleted');";
            echo 'window.location.href = "facilities_view.php";';
            // echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('Facility Details Not Delete');";
            // echo 'window.location.href = "'.$back.'"';
            echo 'window.location.href = "facilities_view.php";';
            echo "</script>";
             
             }

             ?>