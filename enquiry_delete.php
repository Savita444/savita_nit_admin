<?php
include "config.php";
// $delete1 = mysqli_query($connect,"Delete from enquiry where Enquiry_id='".$_GET['Enquiry_id']."'")or die(mysqli_error($connect));

$delete1 = mysqli_query($connect,"update tbl_enquiry set fld_delete='1' where fld_enquiry_id='".$_GET['fld_enquiry_id']."'")or die(mysqli_error($connect));
$back="enquiry.php";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Enquiry deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Enquiry not deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>