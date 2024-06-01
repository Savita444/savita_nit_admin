<?php
include "config.php";
if (isset($_POST['update'])) 
    {
        
        extract($_POST);

        $activities1=$_POST['activities'];
         $activities=ucwords(strtolower($activities1));
        $coulmn=array();
        $query1=mysqli_query($connect,"select * from activities where activity_id!='".$_GET['activity_id']."' and activities_delete='0'");
        while ($row=mysqli_fetch_assoc($query1))
        {
          $coulmn[]=$row['activities'];
        }

        

		if (in_array($activities, $coulmn)) 
		{
			echo '<script type="text/javascript">'; 
			echo 'alert("Activities Is Already Exist");';
			echo "window.location.href = 'activities_view.php';";
			echo '</script>'; 
			return true;

		}    
        else
        {

            $query="Update activities set activities='".$activities."' where activity_id='".$_GET['activity_id']."' ";
            //echo $query."<br>";
            $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
            if ($row) 
            {
                echo "<script>";
                echo "alert('Activities Details Updated Successfully');";
                echo "window.location.href='activities_view.php';";
                echo "</script>";                 
            }
            else
            {
                echo "<script>";
                echo "alert('Activities Details Not Update.);";
                echo "window.location.href='activities_view.php';";
                echo "</script>";
            }
        }    
    }
?>