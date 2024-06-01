<?php
include "config.php";
if (isset($_POST['update'])) 
    {
        
        extract($_POST);

        $department1=$_POST['department'];
         $department=ucwords(strtolower($department1));
        $coulmn=array();
        $query1=mysqli_query($connect,"select * from department where Department_id!='".$_GET['department_id']."' and Department_delete='0'");
        while ($row=mysqli_fetch_assoc($query1))
        {
          $coulmn[]=$row['Department'];
        }

        

		if (in_array($department, $coulmn)) 
		{
			echo '<script type="text/javascript">'; 
			echo 'alert("Department Is Already Exist");';
			echo "window.location.href = 'department_view.php';";
			echo '</script>'; 
			return true;

		}    
        else
        {

            $query="Update department set Department='".$department."' where Department_id='".$_GET['department_id']."' ";
            //echo $query."<br>";
            $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
            if ($row) 
            {
                echo "<script>";
                echo "alert('Department Daetails Updated Successfully');";
                echo "window.location.href='department_view.php';";
                echo "</script>";                 
            }
            else
            {
                echo "<script>";
                echo "alert('Department Daetails Not Update.);";
                echo "window.location.href='department_view.php';";
                echo "</script>";
            }
        }    
    }
?>