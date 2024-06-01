<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	<title>Add Department</title>
</head>
<body>
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Add Department</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item"><a href="department_view.php">Department</a></li>
									<li class="breadcrumb-item active" aria-current="page">Add Department</li>
								</ol>
							</nav>
						</div>
						
					</div>
				</div>


				
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<!-- <h4 class="text-blue">Add Department</h4> -->
						</div>
					</div><br>
								<?php
                                    
                                    if (isset($_POST['submit'])) 
                                    {
                                        
                                        extract($_POST);

                                        $all_department=array();
                                        $abc=array();

                                        $nm=mysqli_query($connect,"select * from department where Department_delete='0' ");

                                        while($ert=mysqli_fetch_array($nm))
                                        {
                                          $all_department[]=$ert['Department'];
                                        }


                                        $post_department=$_POST['department'];

                                        // $abc=array_diff($all_size, $post_size);

                                        

                                        foreach ($post_department as  $value) {

                                          if(!in_array($value, $all_size))
                                          {
                                            // $abc[]=$value;

                                            $query = "INSERT INTO department(Department) VALUES ('" . $value . "')" ;
                                            $result = mysqli_query($connect,$query)or die(mysqli_error($connect));
      
                                            if(!empty($result)) 

                                                {
                                                    echo "<script>";
                                                    echo "alert('Department Added Successfully');";
                                                    echo "window.location.href='department_view.php';";
                                                    echo "</script>";                 
                                                }
                                                else
                                                {
                                                    echo "<script>";
                                                    echo "alert('Error');";
                                                    echo "</script>";
                                                }
                                            }
                                            
                                        }

                                        // echo "unique". $tyu=implode(',', $abc);


//                                         $itemCount = count($_POST['product_size']);
        
    
//     $itemValues=0;
//     $query = "INSERT INTO product_size(Product_category_id, Product_subcategory_id, Size, Product_size_for) VALUES" ;
//     $queryValue = "";
//     for($i=0;$i<$itemCount;$i++)
//      {
   
//       if(isset($_POST['product_size'][$i])) 
//       {
//         $itemValues++;
//         if($queryValue!="")
//          {
//           $queryValue .= ",";
//         }
      
// $queryValue .= "('".$_POST['product_category_id']."','".$_POST['product_subcategory_id']."','" . $_POST["product_size"][$i] . "','".$_POST['department_for']."')" or die(mysqli_error($connect));
//       }
//     }
//     $sql = $query.$queryValue;
    
    
//     if($itemValues!=0)
//      {
//       $result = mysqli_query($connect,$sql)or die(mysqli_error($connect));
      
//       if(!empty($result)) 
      
//             {
//                 echo "<script>";
//                 echo "alert('Department Added Successfully');";
//                 echo "window.location.href='department_view.php';";
//                 echo "</script>";                 
//             }
//             else
//             {
//                 echo "<script>";
//                 echo "alert('Error');";
//                 echo "</script>";
//             }
//     }


                                        
                                    }
                                ?>						
					<form method="post">
						

						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Department <span class="text-danger">*</span> : </label>
							<div class="col-sm-12 col-md-9">
								<!-- <input class="form-control" type="text" id="product_size" name="product_size" placeholder="Enter Department" required="" > -->
								<table  class="table table-hover small-text" id="tb">
									<tr class="tr-header">
										<th><a href="javascript:void(0);" style="font-size:18px;" id="addMore" title="Add More Person"><span class="fa fa-plus text-success"></span></a></th>
										<th>Department</th>
									</tr>
									<tr>
										<td><a href='javascript:void(0);'  class='remove'><span class='fa fa-remove text-danger'></span></a></td>
										<td><input type="text" name="product_size[]" placeholder="Enter Department" class="form-control" required="" onBlur="checkExistance(this.value)"></td>
									</table>
							</div>
						</div>

						

						
						<div class="form-group row">
<!-- 							<label class="col-sm-12 col-md-3 col-form-label">Submit</label>
 -->							<div class="col-sm-12 col-md-9">
							<center><input class="btn btn-success" value="Submit" type="submit" name="submit">
								<input class="btn btn-danger" value="Reset" type="reset">
								<a href="department_view.php"><input class="btn btn-warning" value="Back" type="button"></a>
							</center>
							</div>
						</div>
					</form>

					 
	</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>

<script type="text/javascript">
  $(document).ready(function(){
    $("select#product_category_id").change(function(){
          var c = $("#product_category_id option:selected").val();
          var f = $("#department_for").val();
      
      	// alert(f);
          $.ajax({
              type: "POST",
              url: "subcategory1.php", 
              data: { product_category : c, department_for : f  } 
          }).done(function(data){
              $("#product_subcategory_id").html(data);
          });
      });
  });
</script>

<script>
$(function(){
    $('#addMore').on('click', function() {
              var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
              data.find("input").val('');
     });
     $(document).on('click', '.remove', function() {
         var trIndex = $(this).closest("tr").index();
            if(trIndex>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>

<script type="text/javascript">
    function checkExistance(size){
       if(size){

			var c = $("#product_category_id option:selected").val();
			var f = $("#department_for").val();
			var s = $("#product_subcategory_id option:selected").val();

         jQuery.ajax({
        url: "check_size_exist.php",
        data:{size : size, category_id: c, size_for : f, subcategory_id : s},
        type: "POST",
        success:function(data){
            responseData = JSON.parse(data)
            console.log(responseData.isExist)
            if(responseData.isExist)
            {
                alert(responseData.message)
            }
     },
    error:function (){}
    });
 
        }
    }
</script>
