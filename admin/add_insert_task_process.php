<?php
include "../connection.php";
$name=$_POST['name'];
$title=$_POST['title'];

$priority=$_POST['priority'];
$description=$_POST['description'];
$status=$_POST['status'];
$id=$_POST['id'];
$filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
$extension  = pathinfo( $_FILES["image"]["name"], PATHINFO_EXTENSION ); // jpg
$basename   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg

// $updateimage=$_FILES['image']['name'];



$updateimgaeTmp=$_FILES['image']['tmp_name'];
$directory="../image/$basename";

$sql= "INSERT INTO `task`(tname,title,image,priority,description,status) VALUES('$name','$title','$basename','$priority','$description','$status');";
$result=mysqli_query($conn,$sql);




if($result)
{
   move_uploaded_file($updateimgaeTmp,$directory);
   header('location:view_task_table.php');   
   
 }

 ?>