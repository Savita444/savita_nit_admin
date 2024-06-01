<?php
include "config.php";


          $delete1 = mysqli_query($connect,"Update tbl_fee_structure set fld_delete='1' where fld_fee_id='".$_GET['fld_fee_id']."' ")or die(mysqli_error($connect));

          

$back="javascript:history.back()";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Fee Structure Details Deleted');";
            echo 'window.location.href = "view_fee_structure.php";';
            // echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('Fee Structure Details Not Delete');";
            // echo 'window.location.href = "'.$back.'"';
            echo 'window.location.href = "view_fee_structure.php";';
            echo "</script>";
             
             }

             ?>