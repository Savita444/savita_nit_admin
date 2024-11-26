<?php
include "config.php";


// $sel=mysqli_query($connect,"select * from expert_lecture where expert_lecture_id='".$_GET['expert_lecture_id']."' ");
// 		while ($fetch=mysqli_fetch_array($sel))
//          {
//                    $img=$fetch["file"];
//          }
//          $isrc="assets/images/expertlecture/".$img;
//           unlink($isrc);

$delete1 = mysqli_query($connect,"update expert_lecture set expert_lecture_delete='1' where expert_lecture_id='".$_GET['expert_lecture_id']."' ")or die(mysqli_error($connect));


$back="expert_lecture_view.php";

  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Expert lecture Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Expert lecture not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>