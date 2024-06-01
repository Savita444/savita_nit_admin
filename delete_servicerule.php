<?php
include "config.php";




$delete1 = mysqli_query($connect,"delete from service_rule where service_id='".$_GET['service_id']."' ")or die(mysqli_error($connect));


$back="servicerule_view.php";

  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Service Rule Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Service Rule not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>