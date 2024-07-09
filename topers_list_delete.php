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

$delete1 = mysqli_query($connect,"Update topers_list set is_deleted='1' where topers_list_id='".$_GET['topers_list_id']."' ")or die(mysqli_error($connect));

$back="topers_list_view.php";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Topers list Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('Topers list not delete');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
             }

             ?>