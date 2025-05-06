<?php
include "config.php";


$delete1 = mysqli_query($connect,"delete from trainingplacement where trainingplacement_id='".$_GET['trainingplacement_id']."' ")or die(mysqli_error($connect));


$back="trainingplacement_view.php";

  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Training And Placement Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Training And Placement not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>