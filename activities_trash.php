<?php
include "config.php";


          $delete1 = mysqli_query($connect,"Update activities set is_delete='1' where id='".$_GET['activity_id']."' ")or die(mysqli_error($connect));

          

$back="javascript:history.back()";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Activities Details Deleted');";
            echo 'window.location.href = "activities_view.php";';
            // echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('Activities Details Not Delete');";
            // echo 'window.location.href = "'.$back.'"';
            echo 'window.location.href = "activities_view.php";';
            echo "</script>";
             
             }

             ?>