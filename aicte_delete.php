<?php
include "config.php";




$delete1 = mysqli_query($connect,"delete from aicte where aicte_id='".$_GET['aicte_id']."' ")or die(mysqli_error($connect));


$back="aicte_view.php";

  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('AICTE Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('AICTE not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>