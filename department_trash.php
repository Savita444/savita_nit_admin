<?php
include "config.php";


          $delete1 = mysqli_query($connect,"Update department set Department_delete='1' where Department_id='".$_GET['department_id']."' ")or die(mysqli_error($connect));

          

$back="javascript:history.back()";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Department Details Deleted');";
            echo 'window.location.href = "department_view.php";';
            // echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('Department Details Not Delete');";
            // echo 'window.location.href = "'.$back.'"';
            echo 'window.location.href = "department_view.php";';
            echo "</script>";
             
             }

             ?>