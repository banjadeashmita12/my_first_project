
<?php
include "include/header.php";
include "../connection.php";
$id=$_GET['id'];
$sql="SELECT * FROM task WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
?>


<div id="page-wrapper">
<div class="row">
                <div class="col-lg-12" >
                    <div class="panel panel-default" style="margin-top:32px;">
                        <div class="panel-heading">
                          Task Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="edit_task_process.php?id=<?php echo $row['id'];?>" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Title For</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name="name" placeholder="Enter title for..." value="<?php echo $row['task_id'];?>" required>  
                                        </div>
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name="title" placeholder="Enter title for..." value="<?php echo $row['title'];?>" required>  
                                        </div>
                                        <div class="form-group">
                                            <label>Priority</label>
                                            <select id="select" class="form-control" name="priority" value="<?php echo $row['priority'];?>">
                                                    <option value="Low">Low</option>
                                                    <option value="Medium">Medium</option>
                                                    <option value="High">High</option>
                                                    <option value="Average">Average</option> 
                                                </select>     
                                        </div>


                                        <div class="form-group">
                    <img src="../image/<?php echo $row['image'];?>" style="height:100px;width:100px;"> 
                                          
                   <input type="file" name="image">
                <input type="hidden" name="id" value="<?php echo $row['id'];?>"><br>
                                        </div>


 


                                        <div class="form-group">
                                        <label for="exampleFormControlTextarea4">Task Description</label><br>
  <textarea class="form-control" id="exampleFormControlTextarea4" rows="3" name="description" placeholder="Description of task...."><?php echo $row['description'];?></textarea>
                                        </div>

                                      
                                       
                                        <div class="form-group">
                                                 <label for="field" name="status">Status</label> 
                                                <select id="select" class="form-control" name="status">
                                                    <option value="Active">Active</option>
                                                    <option value="Deactive">Inactive</option>
                                                </select>
                                            </div>
                                        <div class="form-group">
                                           
                                           <button type="submit"  class="btn btn-primary">Submit</button>
                                       </div>

                                    </form>
                                        </div>
                                       
                                        </div>
                                       
</div>




<?php
           include "include/footer.php";
           ?>

