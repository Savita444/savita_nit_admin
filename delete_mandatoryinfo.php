<?php
include "config.php";




$delete1 = mysqli_query($connect,"delete from Mandatory_Disclosure where mandatory_id='".$_GET['mandatory_id']."' ")or die(mysqli_error($connect));


$back="mandatory_view.php";

  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Mandatory Disclosure Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Mandatory Disclosure not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>