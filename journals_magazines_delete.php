<?php
include "config.php";

$delete1 = mysqli_query($connect,"update journals_magazines set fld_delete='1' where journals_magazines_id='".$_GET['journals_magazines_id']."' ")or die(mysqli_error($connect));


$back="journals_magazines_view.php";

  if($delete1)
          {
            echo '<script type="text/javascript">';
            echo "alert('Journals and magazines Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Journals and magazines not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>