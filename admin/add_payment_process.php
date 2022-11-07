<?php
include "../connection.php";
$name = $_POST['name'];
$field= $_POST['field'];
$payment= $_POST['payment'];
$status= $_POST['status'];
$sql="INSERT INTO payment(name,field,payment,status) VALUES('$name','$field','$payment','$status')";
$result=mysqli_query($conn,$sql);

if($result)
{
    header('location:view_payment.php');
}

?>