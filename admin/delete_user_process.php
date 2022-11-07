<?php
include "../connection.php";
$id=$_GET['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];


$sql="DELETE FROM admin WHERE id='$id';";
$result=mysqli_query($conn,$sql);

if($result)
{
    header('location:view_users_table.php');
}

?>