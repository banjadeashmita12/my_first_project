<?php
include "include/header.php";
include "../connection.php";
$id=$_SESSION['id'];
$sql="SELECT * FROM admin WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
?>


<div id="page-wrapper">
<div class="row">
                <div class="col-lg-12" >
                    <div class="panel panel-default" style="margin-top:32px;">
                        <div class="panel-heading">
                            User Profile Information
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="edit_profile_form_process.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                          <img src="../image/<?php echo $row['image'];?>" style="height:100px; width:100px border-radius:100px;">
                                          
                                          <input type="file" name="image">
                                          <input type="hidden" name="id" value="<?php echo $row['id'];?>"><br>
                                        </div>
                                        <div class="form-group">
                                            
                                            <input class="form-control" name="name" value="<?php echo $row['name'];?>" placeholder="Enter name...." required>
                                        </div>
                                        <div class="form-group">
                                           
                                            <input class="form-control" value="<?php echo $row['address']; ?>" name="address"  placeholder="Enter address...." required>
                                        </div>

                                        <div class="form-group">
                                           
                                            <input class="form-control" name="phone" value="<?php echo $row['phone'];?>"  placeholder="Enter phone...." required>
                                        </div>

                                        <div class="form-group">
                                           
                                            <input class="form-control"  value="<?php echo $row['email'];?>" name="email"  placeholder="Enter email...." required>
                                        </div>
                                       
                                        <div class="form-group">
                                           
                                           <button type="submit" class="btn btn-lg btn-success">Update</button>
                                       </div>

                                    </form>
                                        </div>
                                       
                                        </div>
                                       
</div>

<?php

include "include/footer.php";
?>