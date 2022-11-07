<?php

include "../connection.php";
$id =$_GET['id'];
$name=$_POST['name'];
$title=$_POST['title'];
$priority=$_POST['priority'];
$description=$_POST['description'];
$status=$_POST['status'];
 $selectquery="SELECT image FROM `task` WHERE id='$id'";
 

$updateimg=$_FILES['image']['name'];

if($updateimg)
{
$result=mysqli_query($conn,$selectquery);
$row=mysqli_fetch_array($result); 
$imagename=$row['image'];
echo $imagename;
$filePath="../image/$imagename";
   if (is_file($filePath)) 
              {
                  unlink($filePath);
      
              }

        $filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
        $extension  = pathinfo( $_FILES["image"]["name"], PATHINFO_EXTENSION ); // jpg
        $basename   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg

            
   $updateimgTmp = $_FILES['image']['tmp_name'];
    $directory="../image/$basename";
    $sql="UPDATE `task` SET task_id='$name',title='$title',priority='$priority',image='$basename',description='$description',status='$status' WHERE id='$id';";
    $result=mysqli_query($conn,$sql);
     

      if($result)
     {
        move_uploaded_file($updateimgTmp,$directory);
        header('location:view_task_table.php');   
        
      }
    }

    else
    {
        $sql="UPDATE `task` SET task_id='$name',title='$title',priority='$priority',description='$description',status='$status' WHERE id='$id';";
        $result=mysqli_query($conn,$sql);
        if($result) 
        {
            header('location:view_task_table.php');
        }
    }




?>