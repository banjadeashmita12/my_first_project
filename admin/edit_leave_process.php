<?php

include "../connection.php";
$id =$_GET['id'];
$name=$_POST['name'];
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];
$cause=$_POST['cause'];
 $sql="UPDATE `leave` SET leave_id='$name',sdate='$sdate',edate='$edate',cause='$cause' WHERE id='$id';";
 $result=mysqli_query($conn,$sql);


 if($result)
 {
     header('location:view_leave_table.php');
 }


?>