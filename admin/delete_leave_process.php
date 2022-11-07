<?php
include "../connection.php";
$id=$_GET['id'];

$sql="DELETE FROM `leave` WHERE id='$id';";
$result=mysqli_query($conn,$sql);

if($result)
{
    header('location:view_leave_table.php');
}

?>