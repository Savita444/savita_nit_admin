<?php
include "config.php";

// $sel=mysqli_query($connect,"select * from industrial_visit where industrial_visit_id='".$_GET['industrial_visit_id']."' ");
// 		while ($fetch=mysqli_fetch_array($sel))
//          {
//                    $img=$fetch["file"];
//          }
//          $isrc="assets/images/industrialvisit/".$img;
//           unlink($isrc);

$delete1 = mysqli_query($connect,"update industrial_visit set industrial_visit_delete='1' where industrial_visit_id='".$_GET['industrial_visit_id']."' ")or die(mysqli_error($connect));


$back="industrial_visit_view.php";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Industrial visit and mentor meeting Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Industrial visit and mentor meeting Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>