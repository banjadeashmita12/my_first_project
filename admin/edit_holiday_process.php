<?php
include "../connection.php";
$id=$_GET['id'];
$title=$_POST['title'];
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];
$reason=$_POST['reason'];

$sql="UPDATE holidaytable SET title='$title',sdate='$sdate',edate='$edate',reason='$reason' WHERE id='$id';";
$result=mysqli_query($conn,$sql);


 if($result)
 {
    header('location:view_holiday_table.php');
 }
?>
