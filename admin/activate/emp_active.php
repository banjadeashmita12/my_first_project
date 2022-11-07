<?php
include "../../connection.php";
$status= "Active";
$id=$_GET['id'];

$sql="UPDATE employeetable SET status='$status' WHERE id='$id'";
$result=mysqli_query($conn,$sql);

if($result)
{
    header("location:../table.php");
}

else
{
    echo "<script> alert('Error')</script>";
}

?>