<?php
include "../connection.php";
$title=$_POST['title'];
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];
$reason=$_POST['reason'];
$status=$_POST['status'];


$sql="INSERT INTO holidaytable(title,sdate,edate,reason,status) VALUES('$title','$sdate','$edate','$reason','$status')";
$result=mysqli_query($conn,$sql);

if($result)
{
    header('location:view_holiday_table.php');
}

?>