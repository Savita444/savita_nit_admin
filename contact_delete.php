<?php
include "config.php";
// $delete1 = mysqli_query($connect,"Delete from contact where Contact_id='".$_GET['Contact_id']."' ")or die(mysqli_error($connect));
$delete1 = mysqli_query($connect, "update tbl_contact set fld_delete='1' where fld_contact_id='".$_GET['fld_contact_id']."'")or die(mysqli_error($connect));

$back="contact.php";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Contact deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Contact not deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>