<?php
include "../connection.php";
$id=$_GET['id'];
$name=$_POST['name'];
$field=$_POST['field'];
$payment=$_POST['payment'];
$status=$_POST['status'];
$sql="UPDATE payment SET eid='$name',field='$field',payment='$payment',status='$status' WHERE id='$id';";
$result=mysqli_query($conn,$sql);

if($result)
{
    header('location:view_payment.php');
}
?>