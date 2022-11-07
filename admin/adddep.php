<?php 
 include "../connection.php";
 $name = $_POST['name'];
 $status=$_POST['status'];
  $sql = "INSERT INTO departmenttable(department_name,status) VALUES('$name','$status')";
 $result = mysqli_query($conn,$sql);


if($result)
{
header('location:departtable.php');
   
}
?>
