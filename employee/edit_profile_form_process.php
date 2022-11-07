<?php
include "../connection.php";
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$salary=$_POST['salary'];
$post=$_POST['post'];
$updateimg=$_FILES['image']['name'];

if($updateimg)
{
    $updateimgTmp = $_FILES['image']['tmp_name'];
     $directory="../image/$updateimg";
      $sql="UPDATE emlployeetable SET name='$name',email='$email',address='$address',phone='$phone',image='$updateimg',salary='$salary',post='$post' WHERE id='$id';";
      $result=mysqli_query($conn,$sql);
     

      if($result)
     {
        move_uploaded_file($updateimgTmp,$directory);
        header('location:profile_form.php');   
        
      }
    }

    else
    {
        $sql="UPDATE employeetable SET name='$name',email='$email',address='$address',phone='$phone',salary='$salary',post='$post' WHERE id='$id';";
        $result=mysqli_query($conn,$sql); 
        if($result) 
        {
            header('location:profile_form.php');
        }
    }

 

?>
