<?php
include "config.php";

$delete1 = mysqli_query($connect,"update rules_process set fld_delete='1' where rules_process_id='".$_GET['rules_process_id']."' ")or die(mysqli_error($connect));


$back="rules_process_view.php";

  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Admission Rules And Process Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Admission Rules And Process not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>