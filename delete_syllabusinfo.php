<?php
include "config.php";




$delete1 = mysqli_query($connect,"delete from syllabus  where syllabus_id='".$_GET['syllabus_id']."' ")or die(mysqli_error($connect));


$back="syllabusinfo_view.php";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Syllabus Information Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Syllabus Information not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>