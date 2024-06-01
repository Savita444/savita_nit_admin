<?php
include "config.php";




$delete1 = mysqli_query($connect,"delete from msbte where msbte_id='".$_GET['msbte_id']."' ")or die(mysqli_error($connect));


$back="msbte_view.php";

  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('MSBTE Affiliation Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('MSBTE Affiliation not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>