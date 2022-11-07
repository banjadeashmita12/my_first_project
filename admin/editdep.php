<?php

include "../connection.php";
$id =$_GET['id'];
$name = $_POST['name'];
 $sql="UPDATE departmenttable SET department_name='$name' WHERE id='$id'";
 $result= mysqli_query($conn,$sql);
 echo $result;

 if($result)
 {
     header('location:departtable.php');
 }


?>