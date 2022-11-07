<?php

include "../connection.php";
$id=$_GET['id'];
$sql="DELETE FROM departmenttable
WHERE id='$id'";

$result=mysqli_query($conn,$sql);
echo $result;

if($result)
{
    header("Location: departtable.php");
}
?>
