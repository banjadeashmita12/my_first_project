
<?php
session_start();
include "../connection.php";
$otp=mt_rand(1000,9999);
$email=$_POST['email'];
$sql="SELECT * FROM admin WHERE email='$email';";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);


if($row)
{

   $_SESSION['id']=$row['id'];
   $id=$_SESSION['id'];
   $sql="UPDATE admin SET otp='$otp' WHERE id='$id'";
   $result=mysqli_query($conn,$sql);

   if($result)
   {
      header('location:otp_form.php');
   }
   else{
      echo "<script>alert('otp does not match');</script>";
   }

}
else
{
    echo "<script>
   window.open('forget_password_form.php?abc=1','_SELF');</script>";
}

?>