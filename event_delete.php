<?php
include "config.php";




$delete1 = mysqli_query($connect,"delete from event where event_id='".$_GET['event_id']."' ")or die(mysqli_error($connect));


$back="event_view.php";

  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Event Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Event not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>