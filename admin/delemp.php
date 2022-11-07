<?php

include "../connection.php";
$id=$_GET['id'];
$sql="DELETE FROM employeetable
WHERE id='$id'";

$result=mysqli_query($conn,$sql);
echo $result;

if($result)
{
    header("Location: table.php");
}
?>
