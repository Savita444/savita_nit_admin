<?php
include "config.php";




$delete1 = mysqli_query($connect,"delete from termscondition where term_id='".$_GET['term_id']."' ")or die(mysqli_error($connect));


$back="termcondition_view.php";

  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Terms And Condition  Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Terms And Condition not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>