<?php
include "../../connection.php";
$status= "Deactive";
$id=$_GET['id'];

$sql="UPDATE `task` SET status='$status' WHERE id='$id'";
$result=mysqli_query($conn,$sql);

if($result)
{
    header("location:../view_task_table.php");
}

else
{
    echo "<script> alert('Error')</script>";
}

?>