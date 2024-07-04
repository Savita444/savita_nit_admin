<?php
include "config.php";

// $sel=mysqli_query($connect,"select * from newsletters where newsletters_id='".$_GET['newsletters_id']."' ");
// 		while ($fetch=mysqli_fetch_array($sel))
//          {
//                    $img=$fetch["file"];
//          }
//          $isrc="assets/images/newsletters/".$img;
//           unlink($isrc);

$delete1 = mysqli_query($connect,"update newsletters set newsletters_delete='1' where newsletters_id='".$_GET['newsletters_id']."' ")or die(mysqli_error($connect));


$back="newsletters_view.php";

  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Newsletters Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Newsletters not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>