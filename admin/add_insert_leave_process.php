<?php
include "../connection.php";
$name=$_POST['ename'];
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];
$cause=$_POST['cause'];
$status=$_POST['status'];

$sql ="INSERT INTO `leave`(name,sdate,edate,cause,status) VALUES('$name','$sdate','$edate','$cause','$status');";
$result=mysqli_query($conn,$sql);


if($result)
{
  header('location:view_leave_table.php');
}


 ?>