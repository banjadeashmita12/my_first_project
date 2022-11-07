<?php
include "../connection.php";
$id=$_GET['id'];
$name = $_POST['name'];
$field = $_POST['field'];
$payment =$_POST['payment'];

$sql="DELETE FROM payment WHERE id='$id'";
$result=mysqli_query($conn,$sql);

if($result)
{
    header('location:view_payment.php');
}


?>
