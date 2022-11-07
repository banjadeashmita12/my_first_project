<?php
include "../connection.php";
session_start();
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$userid=$_SESSION['id'];
$tpassword=$_POST['tpassword'];
$mdpassword=md5($tpassword);
$npassword=$_POST['npassword'];
$cpassword=$_POST['cpassword'];


$sql="SELECT id FROM admin WHERE id='$userid' AND password='$mdpassword';";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if($row)
{
if($npassword==$cpassword)
{
   header('location:view_payment.php');
}
else{
    echo "<script> alert('password does not changed');
    window.open('reset_password_form.php','_SELF');</script>";
}

}
else{
    echo "<script> alert('old password does not matched');
    window.open('reset_password_form.php','_SELF');</script>"; 
}
?>