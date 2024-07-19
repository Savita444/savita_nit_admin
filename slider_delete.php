<?php
    include "config.php";
    $sel=mysqli_query($connect,"select * from tbl_slider where fld_slider_id='".$_GET['fld_slider_id']."'") or die(mysqli_error($connect));
    while ($fetch=mysqli_fetch_array($sel))
      {
                $fld_slider_image=$fetch["fld_slider_image"];                   
      }

      $fld_slider_image="assets/images/slider_img/".$fld_slider_image;
      unlink($fld_slider_image);

      $delete1 = mysqli_query($connect,"Delete from tbl_slider where fld_slider_id='".$_GET['fld_slider_id']."'")or die(mysqli_error($connect));

// $delete1 = mysqli_query($connect,"Update tbl_slider set is_deleted='1' where id='".$_GET['id']."' ")or die(mysqli_error($connect));

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