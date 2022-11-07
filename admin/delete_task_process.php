<?php
include "../connection.php";
$id=$_GET['id'];

$sql="DELETE FROM `task` WHERE id='$id';";
$result=mysqli_query($conn,$sql);

if($result)
{
    header('location:view_task_table.php');
}

?>