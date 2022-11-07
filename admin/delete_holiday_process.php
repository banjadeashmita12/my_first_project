<?php
include "../connection.php";
$id=$_GET['id'];
$sql="DELETE FROM holidaytable WHERE id='$id';";

$result=mysqli_query($conn,$sql);


if($result)
{
    header("location: view_holiday_table.php");
}
?>

