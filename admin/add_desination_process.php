<?php
include "../connection.php";
$department=$_POST['department'];
$post=$_POST['post'];
$status=$_POST['status'];
$sql="INSERT INTO designation(department,post,status) VALUES('$department','$post','$status');";
$result=mysqli_query($conn,$sql);

if($result)
{
    header('location:view_designation_table.php');
}
?>