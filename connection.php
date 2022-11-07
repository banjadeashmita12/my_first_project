<?php
$server_name ="localhost";
$user = "root";
$password="";
$database_name ="employee";

$conn = mysqli_connect($server_name,$user,$password,$database_name);

if(!$conn)
{
    die("connection failed:" .mysqli_connect_error());

}
// else
// {
//     echo "connected successfully";
// }



?>