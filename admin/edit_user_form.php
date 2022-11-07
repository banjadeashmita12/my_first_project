<?php
include "include/header.php";
include "../connection.php";
$id=$_GET['id'];
$sql="SELECT * FROM admin WHERE id='$id';";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
?>


<div id="page-wrapper">
<div class="row">
                <div class="col-lg-12" >
                    <div class="panel panel-default" style="margin-top:32px;">
                        <div class="panel-heading">
                          Edit Users Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="edit_users_process.php?id=<?php echo $row['id'];?>" method="POST">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" placeholder="Enter text" type="text" name="name" value="<?php echo $row['name'];?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input class="form-control" type="text" name="email" placeholder="Enter email...." value="<?php echo $row['email'];?>"  required>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" type="text" name="address" placeholder="Enter address...." value="<?php echo $row['address'];?>" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input class="form-control" type="text" name="phone" placeholder="Enter phone...." value="<?php echo $row['phone'];?>" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="password" name="password" placeholder="Enter password...." value="<?php echo $row['password'];?>" required>
                                        </div>


                                        <div class="form-group">
                                                 <label for="field" name="status">Status</label> 
                                                <select id="select" class="form-control" name="status" value="<?php echo $row['status'];?>">
                                                    <option value="Active">Active</option>
                                                    <option value="Deactive">Inactive</option>
                                                </select>
                                            </div>
                                       
                                        <div class="form-group">
                                           
                                           <button type="submit"  class="btn btn-success">Update</button>
                                       </div>




                                    </form>
                                        </div>
                                       
                                        </div>
                                       
</div>

<?php

include "include/footer.php";
?>