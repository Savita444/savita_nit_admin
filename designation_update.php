<?php
include "config.php";
if (isset($_POST['update'])) 
    {
        
        extract($_POST);

        $designation=$_POST['designation'];
       //  $designation1=$_POST['designation'];
       // $designation=ucwords(strtolower($designation1));
        
        $coulmn=array();
        $query1=mysqli_query($connect,"select * from designation where Designation_id!='".$_GET['designation_id']."' and Designation_delete='0'");
        while ($row=mysqli_fetch_assoc($query1))
        {
          $coulmn[]=$row['Designation'];
        }

        

		if (in_array($designation, $coulmn)) 
		{
			echo '<script type="text/javascript">'; 
			echo 'alert("Designation Is Already Exist");';
			echo "window.location.href = 'designation_view.php';";
			echo '</script>'; 
			return true;

		}    
        else
        {

            $query="Update designation set Designation='".$designation."' where Designation_id='".$_GET['designation_id']."' ";
            //echo $query."<br>";
            $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
            if ($row) 
            {
                echo "<script>";
                echo "alert('Designation Daetails Updated Successfully');";
                echo "window.location.href='designation_view.php';";
                echo "</script>";                 
            }
            else
            {
                echo "<script>";
                echo "alert('Designation Daetails Not Update.);";
                echo "window.location.href='designation_view.php';";
                echo "</script>";
            }
        }    
    }
?>