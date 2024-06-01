<?php
include "config.php";




$delete1 = mysqli_query($connect,"delete from medianews where media_id='".$_GET['media_id']."' ")or die(mysqli_error($connect));


$back="medianews_view.php";

  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Media News Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Media News Not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>