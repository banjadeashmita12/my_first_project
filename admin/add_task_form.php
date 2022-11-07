
<?php
include "include/header.php";
include "../connection.php";
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
                                    <form action="add_insert_task_process.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Title For</label>
                                            <select id="select" class="form-control" name="name">
      <?php
      $sql="SELECT * FROM employeetable";
      $result=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_array($result))
      {
       
      ?>
        <option value="<?php echo $row['id'];?>"><?php echo $row['name']; ?></option>
      <?php
}
      ?>
    </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name="title" placeholder="Enter title for..." required>  
                                        </div>
                                        <div class="form-group">
                                            <label>Priority</label>
                                            <select id="select" class="form-control" name="priority">
                                                    <option value="Low">Low</option>
                                                    <option value="Medium">Medium</option>
                                                    <option value="High">High</option>
                                                    <option value="Average">Average</option> 
                                                </select>     
                                        </div>


                                        
                               <div class="form-group">
                <!-- <img src="image" style="height:100px; width:100px border-radius:100px;"> -->
                                          
                   <input type="file" name="image"> 
                
                                        </div>


                                        <div class="form-group">
                                        <label for="exampleFormControlTextarea4">Task Description</label>
  <textarea class="form-control" id="exampleFormControlTextarea4" rows="3" name="description" placeholder="Description of task...."></textarea>
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

