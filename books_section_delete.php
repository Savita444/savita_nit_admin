<?php
include "config.php";
$delete1 = mysqli_query($connect,"update books_section set books_section_delete='1' where books_section_id ='".$_GET['books_section_id']."'")or die(mysqli_error($connect));

$back="books_section_view.php";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Books section delete');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('Books section not delete');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

 ?>