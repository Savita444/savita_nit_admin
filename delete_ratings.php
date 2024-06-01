<?php
include "config.php";


          $delete1 = mysqli_query($connect,"Update tbl_ratings set fld_delete='1' where ratings_id='".$_GET['ratings_id']."' ")or die(mysqli_error($connect));

         

$back="javascript:history.back()";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Ratings Details Deleted');";
            echo 'window.location.href = "view_ratings.php";';
            // echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('Ratings Details Not Delete');";
            // echo 'window.location.href = "'.$back.'"';
            echo 'window.location.href = "view_ratings.php";';
            echo "</script>";
             
             }

             ?>