<?php
include "include/header.php";
include "../connection.php";
$id=$_SESSION['id'];
$sql="SELECT * FROM admin WHERE id='$id';";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

?>




<div id="page-wrapper">
<div class="row">
                <div class="col-lg-12" >
                    <div class="panel panel-default" style="margin-top:32px;">
                        <div class="panel-heading" style="background-color:lightyellow;">
                           <h3>User Profile Information</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action='post' enctype="multipart/form-data">

                                    <div class="form-group">
                                           <img src="../image/<?php echo $row['image'];?>" style="height:200px; width:200px; border-radius:100px;" <?php echo $row['image'];?>>
                                        </div>
                                        <div class="form-group">
                                            <label><h2><i><?php echo $row['name'];?></i></h2></label><hr>
                                          
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo $row['address'];?></label>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo $row['phone'];?></label>
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><?php echo $row['email'];?></label>
                                           
                                        </div>
                                    
                                       
                                        <div class="form-group">
                                           
                                           <a href="edit_profile_form.php" class="btn btn-lg btn-success">Edit</a>
                                       </div>

                                    </form>
                                        </div>
                                       
                                        </div>
                                       
</div>

<?php

include "include/footer.php";
?>