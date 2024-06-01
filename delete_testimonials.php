<?php
include "config.php";


          $delete1 = mysqli_query($connect,"Update tbl_testimonials set fld_delete='1' where testimonials_id='".$_GET['testimonials_id']."' ")or die(mysqli_error($connect));

         

$back="javascript:history.back()";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Testimonials Details Deleted');";
            echo 'window.location.href = "view_testimonial.php";';
            // echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('Testimonials Details Not Delete');";
            // echo 'window.location.href = "'.$back.'"';
            echo 'window.location.href = "view_testimonial.php";';
            echo "</script>";
             
             }

             ?>