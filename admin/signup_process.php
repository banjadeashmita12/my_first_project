<?php
include "../connection.php";
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$mdpassword=md5($password);

$sql="INSERT INTO admin(name,email,password) VALUES('$name','$email','$mdpassword');";

if($_POST['password']!=$_POST['cpassword'])
{
echo "<script> alert('password did not match');
window.open('signup_form.php','_SELF');
</script>;";
}

else
{
    $result=mysqli_query($conn,$sql);
if($result)
{
echo "<script> alert('password match');
window.open('login.php','_SELF');
</script>;";
}
else{
    echo "<script> alert('error'); </script>;";
}
}

?>