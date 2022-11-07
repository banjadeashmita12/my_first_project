<?php
session_start();
include "../connection.php";
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$mdpassword=md5($password);
$id=$_SESSION['id'];

$sql="UPDATE admin SET password='$mdpassword' WHERE id='$id';";

if($_POST['password']!=$_POST['cpassword'])
{

    echo "<script> alert('password did not match');
    window.open('reset_form.php','_SELF');
    </script>";
    
    

}

else
{
   $query = mysqli_query($conn,$sql);
   if($query)
   {
    echo "<script> alert('password reset successfully');
    window.open('login.php','_SELF');
    </script>";

   }
    else{
    echo "<script> alert('error!')</script>;";
   
   }
}

?>