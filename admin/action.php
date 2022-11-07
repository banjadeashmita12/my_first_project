<?php
include "../connection.php";
$name =$_POST['name'];
$department =$_POST['department'];
$platform =$_POST['platform'];
$qualification =$_POST['qualification'];
$salary =$_POST['salary'];
$status=$_POST['status'];
$email=$_POST['email'];
$password=$_POST['password'];
$mdpassword=md5($password);




$filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
$extension  = pathinfo( $_FILES["image"]["name"], PATHINFO_EXTENSION ); // jpg
$basename   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg

// $updateimage=$_FILES['image']['name'];



$updateimgTmp=$_FILES['image']['tmp_name'];
$directory="../image/$basename";



  $sql ="INSERT INTO employeetable(name,department_id,platform,qualification,salary,image,email,password,status) VALUES('$name','$department','$platform','$qualification','$salary','$basename','$email','$mdpassword','$status');";
    $result= mysqli_query($conn,$sql);





if($result)
{
    move_uploaded_file($updateimgTmp,$directory);
 header("Location:table.php");
}
?>