<?php
include "../../connection.php";
$status= "Deactive";
$id=$_GET['id'];

$sql="UPDATE departmenttable SET status='$status' WHERE id='$id'";
$result=mysqli_query($conn,$sql);

if($result)
{
    header("location:../departtable.php");
}

else
{
    echo "<script> alert('Error')</script>";
}

?>