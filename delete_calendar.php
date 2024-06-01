<?php
include "config.php";




$delete1 = mysqli_query($connect,"delete from academiccalendar where calendar_id='".$_GET['calendar_id']."' ")or die(mysqli_error($connect));


$back="academiccalendar_view.php";

  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Academic Calendar Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Academic Calendar not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>