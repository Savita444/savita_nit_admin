<?php
include "config.php";
// $sel=mysqli_query($connect,"select * from tbl_affiliation_certificates where fld_affiliation_id='".$_GET['fld_affiliation_id']."'") or die(mysqli_error($connect));
//         while ($fetch=mysqli_fetch_array($sel))
//          {
//                    $photo=$fetch["fld_affiliation_image"];                   
//          }

//           $photo="../images/affiliation_certificates/".$photo;
//           unlink($photo);

          

          $delete1 = mysqli_query($connect,"Update tbl_alumini_committee set fld_delete='1' where fld_ac_id='".$_GET['fld_ac_id']."'")or die(mysqli_error($connect));

$back="view_alumini_committee.php";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Admin Record Delete Successfully');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('Admin Record not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

 ?>