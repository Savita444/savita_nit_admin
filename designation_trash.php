<?php
include "config.php";


          $delete1 = mysqli_query($connect,"Update designation set Designation_delete='1' where Designation_id='".$_GET['designation_id']."' ")or die(mysqli_error($connect));

         

$back="javascript:history.back()";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Designation Details Deleted');";
            echo 'window.location.href = "designation_view.php";';
            // echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('Designation Details Not Delete');";
            // echo 'window.location.href = "'.$back.'"';
            echo 'window.location.href = "designation_view.php";';
            echo "</script>";
             
             }

             ?>