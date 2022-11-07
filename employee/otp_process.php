
<?php
session_start();
include "../connection.php"; 
$id=$_SESSION['id'];
$otp=$_POST['otp'];
$sql="SELECT name FROM employeetable WHERE id='$id' AND otp='$otp'";
$result=mysqli_query($conn,$sql);
$s1=mysqli_num_rows($result);






 if(mysqli_num_rows($result)==1)


 {
  
    header('location:reset_form.php');
   

}

else
{
    echo "<script>alert('otp does not match');
   window.open('otp_form.php','_SELF');</script>";
}
