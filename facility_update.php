<?php
include "config.php";
if (isset($_POST['update'])) 
    {
        
        extract($_POST);

        $facility1=$_POST['facility'];
         $facility=ucwords(strtolower($facility1));
        $coulmn=array();
        $query1=mysqli_query($connect,"select * from facility where facility_id!='".$_GET['facility_id']."' and facility_delete='0'");
        while ($row=mysqli_fetch_assoc($query1))
        {
          $coulmn[]=$row['facility'];
        }

        

		if (in_array($facility, $coulmn)) 
		{
			echo '<script type="text/javascript">'; 
			echo 'alert("Facility Is Already Exist");';
			echo "window.location.href = 'facilities_view.php';";
			echo '</script>'; 
			return true;

		}    
        else
        {

            $query="Update facility set facility='".$facility."' where facility_id='".$_GET['facility_id']."' ";
            //echo $query."<br>";
            $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
            if ($row) 
            {
                echo "<script>";
                echo "alert('Facility Details Updated Successfully');";
                echo "window.location.href='facilities_view.php';";
                echo "</script>";                 
            }
            else
            {
                echo "<script>";
                echo "alert('Facility Details Not Update.);";
                echo "window.location.href='facilities_view.php';";
                echo "</script>";
            }
        }    
    }
?>