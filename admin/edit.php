
<?php
include "../connection.php";
$id =$_GET['id'];
$name =$_POST['name'];
$department =$_POST['department'];
$platform =$_POST['platform'];
$qualification =$_POST['qualification'];
$salary=$_POST['salary'];
$email=$_POST['email'];
$password=$_POST['password'];
$mdpassword=md5($password);



$updateimg=$_FILES['image']['name'];


$updateimgTmp = $_FILES['image']['tmp_name'];
$directory="../image/$updateimg";
$sql = "UPDATE employeetable SET name='$name',department='$department',platform='$platform',qualification='$qualification',salary='$salary',email='$email',password='mdpassword',image='$updateimg'
 WHERE id='$id';";
$result=mysqli_query($conn,$sql);
 

  if($result)
 {
    move_uploaded_file($updateimgTmp,$directory);
    header('location:table.php');   
    
  }


else
{
    $sql = "UPDATE employeetable SET name='$name',department='$department',platform='$platform',qualification='$qualification',password='mdpassword',salary='$salary' WHERE id='$id';";
    $result=mysqli_query($conn,$sql);
    if($result) 
    {
        header('location:table.php');
    }
}





?>p