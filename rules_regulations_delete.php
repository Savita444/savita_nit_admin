<?php
include "config.php";


$delete1 = mysqli_query($connect,"Update library_rules_regulations set fld_delete='1' where rules_regulations_id='".$_GET['rules_regulations_id']."'")or die(mysqli_error($connect));

$back="rules_regulations_view.php";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Rules And Regulations deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Rules And Regulations not deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>