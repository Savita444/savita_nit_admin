<?php
include "config.php";
if (isset($_POST['update'])) 
    {
        
        extract($_POST);

        $academics1=$_POST['academics'];
         $academics=ucwords(strtolower($academics1));
        $coulmn=array();
        $query1=mysqli_query($connect,"select * from academics where academics_id!='".$_GET['academics_id']."' and academics_delete='0'");
        while ($row=mysqli_fetch_assoc($query1))
        {
          $coulmn[]=$row['academics'];
        }

        

		if (in_array($academics, $coulmn)) 
		{
			echo '<script type="text/javascript">'; 
			echo 'alert("academics Is Already Exist");';
			echo "window.location.href = 'academics_view.php';";
			echo '</script>'; 
			return true;

		}    
        else
        {

            $query="Update academics set academics='".$academics."' where academics_id='".$_GET['academics_id']."' ";
            //echo $query."<br>";
            $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
            if ($row) 
            {
                echo "<script>";
                echo "alert('Academics Details Updated Successfully');";
                echo "window.location.href='academics_view.php';";
                echo "</script>";                 
            }
            else
            {
                echo "<script>";
                echo "alert('Academics Details Not Update.);";
                echo "window.location.href='academics_view.php';";
                echo "</script>";
            }
        }    
    }
?>