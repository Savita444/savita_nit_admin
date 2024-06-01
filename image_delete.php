<?php
include "config.php";
// $sel=mysqli_query($connect,"select * from image where image_id='".$_GET['image_id']."'") or die(mysqli_error($connect));
//         while ($fetch=mysqli_fetch_array($sel))
//          {
//                    $photo=$fetch["photo"];                   
//          }

//           $photo="images/gallery/".$photo;
//           unlink($photo);

$delete1 = mysqli_query($connect,"Update tbl_gallery_image_title set fld_delete='1' where fld_image_title_id='".$_GET['fld_image_title_id']."'")or die(mysqli_error($connect));

$delete1 = mysqli_query($connect,"Update tbl_gallery_images set fld_delete='1' where fld_image_title_id='".$_GET['fld_image_title_id']."'")or die(mysqli_error($connect));

$back="view_image.php";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Gallery Image delete');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('Gallery image not delete');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

 ?>