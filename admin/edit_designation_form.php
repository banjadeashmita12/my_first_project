<?php
include "include/header.php";
include "../connection.php";
$id=$_GET['id'];
$sql="SELECT * FROM designation WHERE id='$id';";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
?>


<div id="page-wrapper">
<div class="row">
                <div class="col-lg-12" >
                    <div class="panel panel-default" style="margin-top:32px;">
                        <div class="panel-heading" >
                           Designation Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="edit_designation_process.php?id=<?php echo $row['id'];?>" method="POST">
                                        <div class="form-group">
                                            <label>Department-Name</label>
                                            <input class="form-control" placeholder="Enter text" type="text" name="department" value="<?php echo $row['department_id'];?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Designation Post</label>
                                            <input class="form-control" type="text" name="post" placeholder="Enter post...." value="<?php echo $row['post'];?>" required>
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