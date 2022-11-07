<?php
include "../connection.php";
$id=$_GET['id'];
$department=$_POST['department'];
$post=$_POST['post'];

$sql="UPDATE designation SET department_id='$department',post='$post'WHERE id='$id';";
$result=mysqli_query($conn,$sql);

if($result)
{
    header('location:view_designation_table.php');
}

?>
