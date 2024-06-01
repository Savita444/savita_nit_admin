<?php
include "config.php";




$delete1 = mysqli_query($connect,"delete from tbl_redressal_members where fld_bm_id='".$_GET['fld_bm_id']."' ")or die(mysqli_error($connect));


$back="redressal_view.php";

  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Grievance Redressal Committee Member Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Grievance Redressal Committee Member not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>