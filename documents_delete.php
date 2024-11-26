<?php
include "config.php";
$delete1 = mysqli_query($connect,"Update documents set fld_delete='1' where documents_id='".$_GET['documents_id']."'")or die(mysqli_error($connect));

$back="documents_view.php";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Documents deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Documents not deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>