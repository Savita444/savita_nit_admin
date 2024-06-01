<?php
include "config.php";


          $delete1 = mysqli_query($connect,"Update academics set academics_delete='1' where academics_id='".$_GET['academics_id']."' ")or die(mysqli_error($connect));

          

$back="javascript:history.back()";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Academics Details Deleted');";
            echo 'window.location.href = "academics_view.php";';
            // echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('Academics Details Not Delete');";
            // echo 'window.location.href = "'.$back.'"';
            echo 'window.location.href = "academics_view.php";';
            echo "</script>";
             
             }

             ?>