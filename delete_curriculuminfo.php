<?php
include "config.php";




$delete1 = mysqli_query($connect,"delete from curriculum  where curriculum_id='".$_GET['curriculum_id']."' ")or die(mysqli_error($connect));


$back="curriculuminfo_view.php";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Curriculum Information Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Curriculum Information not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>