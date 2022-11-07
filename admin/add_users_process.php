<?php
include "../connection.php";
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$status=$_POST['status'];
$mdpassword=md5($password);

$sql="INSERT INTO admin(name,email,address,phone,password,status) VALUES('$name','$email','$address','$phone','$mdpassword','$status');";
$result=mysqli_query($conn,$sql);

if($result)
{
    header('location:view_users_table.php');
}
?>



