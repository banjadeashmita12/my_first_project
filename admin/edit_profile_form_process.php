<?php
include "../connection.php";
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];


$filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
$extension  = pathinfo( $_FILES["image"]["name"], PATHINFO_EXTENSION ); // jpg
$basename   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg



if($basename)
{
    $basenameTmp = $_FILES['image']['tmp_name'];
     $directory="../image/$basename";
      $sql="UPDATE admin SET name='$name',email='$email',address='$address',phone='$phone',image='$basename' WHERE id='$id';";
      $result=mysqli_query($conn,$sql);
     

      if($result)
     {
        move_uploaded_file($basenameTmp,$directory);
        header('location:profile_form.php');   
        
      }
    }

    else
    {
        $sql="UPDATE admin SET name='$name',email='$email',address='$address',phone='$phone' WHERE id='$id';";
        $result=mysqli_query($conn,$sql); 
        if($result) 
        {
            header('location:profile_form.php');
        }
    }

 

?>
