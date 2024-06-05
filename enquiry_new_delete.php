<?php
include "config.php";

$delete1 = mysqli_query($connect,"update tbl_enquiry_new set is_deleted='1' where id='".$_GET['id']."'")or die(mysqli_error($connect));
$back="enquiry_view.php";
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