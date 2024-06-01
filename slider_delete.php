<?php
include "config.php";
// $sel=mysqli_query($connect,"select * from home_slider where Slider_id='".$_GET['Slider_id']."'") or die(mysqli_error($connect));
//         while ($fetch=mysqli_fetch_array($sel))
//          {
//                    $photo=$fetch["photo"];                   
//          }

//           $photo="images/home/".$photo;
//           unlink($photo);

//           $delete1 = mysqli_query($connect,"Delete from home_slider where Slider_id='".$_GET['Slider_id']."'")or die(mysqli_error($connect));

$delete1 = mysqli_query($connect,"Update tbl_slider set fld_delete='1' where fld_slider_id='".$_GET['fld_slider_id']."' ")or die(mysqli_error($connect));

$back="view_slider.php";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Home slider Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('Home slider not delete');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
             }

             ?>