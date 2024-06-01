<?php
include "config.php";




$delete1 = mysqli_query($connect,"delete from fees where fees_id='".$_GET['fees_id']."' ")or die(mysqli_error($connect));


$back="fees_view.php";

  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Fees Regulating Authority Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Fees Regulating Authority not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>