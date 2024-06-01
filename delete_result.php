<?php 
include "config.php";
if(isset($_GET['result_id']))
{
$sel=mysqli_query($connect,"select * from tbl_result where fld_student_id='".$_GET['result_id']."' ");
        while ($fetch=mysqli_fetch_array($sel))
         {
                   $img=$fetch["fld_student_photo"];
         }

          $isrc="images/".$img;
          unlink($isrc);

		  
	$del=mysqli_query($connect,"delete from tbl_result where fld_student_id='".$_GET['result_id']."' ") or die(mysqli_error($connect));
	if($del)
	{
		echo "<script>";
		echo "alert('Result Deleted');";
		echo "window.location.href='view_result.php';";
		echo "</script>";
	}
	else
	{
		echo "<script>";
		echo "alert('error in record delete');";
		echo "window.location.href='view_result.php';";
		echo "</script>";
	}
}

$delete1 = mysqli_query($connect,"Update tbl_result set fld_delete='1' where fld_student_id='".$_GET['result_id']."' ")or die(mysqli_error($connect));

$back="view_result.php";
//   if($delete1)

//           {
//             echo '<script type="text/javascript">';
//             echo "alert('Result Deleted');";
//             echo 'window.location.href = "'.$back.'"';
//             echo "</script>";

//           }
//          else
//          {
//             echo '<script type="text/javascript">';
//             echo "alert('Result not delete');";
//             echo 'window.location.href = "'.$back.'"';
//             echo "</script>";
             
//              }

// ?>
