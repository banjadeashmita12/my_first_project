
<?php
include "../connection.php";
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$mdpassword=md5($password);
$sql="SELECT * FROM admin WHERE email='$email' AND password='$mdpassword';";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
    $_SESSION['is_logged_in']= true;
    $userdata=mysqli_fetch_array($result);
    $_SESSION['id']=$userdata['id'];
    $_SESSION['name']=$userdata['name'];
    $_SESSION['email']=$userdata['email'];
     $_SESSION['admin']='admin';
 


echo "<script> alert('login successfully');
window.open('index.php','_SELF');
</script>;";

}
else
{

echo "<script> alert('email or password invalid');
window.open('login.php','_SELF');
</script>;";

}


?> 