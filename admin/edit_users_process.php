<?php

include "../connection.php";
$id =$_GET['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$status=$_POST['status'];


 $sql="UPDATE admin SET name='$name',email='$email',address='$address',phone='$phone',status='$status' WHERE id='$id';";
 $result=mysqli_query($conn,$sql);

  if($result)
{
          header('location:view_users_table.php');
          
    }


?>