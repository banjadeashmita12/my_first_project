
<?php
 include "include/header.php";
include "../connection.php";
 $id=$_GET['id'];
 $sql="SELECT * FROM `leave` WHERE id='$id';";
 $result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
?>
 <!-- <div id="page-wrapper">
    <br>
    <br>
    <div class="container-fluid">
        <div class="row md-4">
            <div class="col-md-2"> </div>
            <div class="col-md-8">
            <form action="edit_leave_process.php?id=<?php echo $row['id'];?>" method="POST">

            <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><h3><u>Add Leave</u></h3></label>
   
  </div>
   
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">E-Name</label>
    <select id="select" class="form-control" name="ename">
      <?php
      $sql2="SELECT * FROM employeetable";
      $result2=mysqli_query($conn,$sql2);
      while($row2=mysqli_fetch_array($result2))
      {
       
      ?>
        <option value="<?php echo $row2['name'];?>"><?php echo $row2['name']; ?></option>
      <?php
}
      ?>
    </select>
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Start-Date</label>
    <input type="date" class="form-control" id="exampleInputPassword1" name="sdate" value="<?php echo $row['sdate'];?>" required><br>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">End-Date</label>
    <input type="date" class="form-control" id="exampleInputPassword1" name="edate" value="<?php echo $row['edate'];?>" required><br>
  </div>
  <div class="form-group purple-border">
  <label for="exampleFormControlTextarea4">Cause</label>
  <textarea class="form-control" id="exampleFormControlTextarea4" rows="3" name="cause"><?php echo $row['cause'];?></textarea>
</div>

  
  
  <button type="submit" class="btn btn-primary">Update</button></div>
</form>

        
        
        </div>
            <div class="col-md-2"> </div>




</div>
</div>
</div> 

 -->










<div id="page-wrapper">
<div class="row">
                <div class="col-lg-12" >
                    <div class="panel panel-default" style="margin-top:32px;">
                        <div class="panel-heading" style="background-color:lightgreen;">
                          Edit Leave
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="edit_leave_process.php?id=<?php echo $row['id'];?>" method="POST">
                                        <div class="form-group">
                                            <label>E-name</label>
                                            <input class="form-control" type="text" name="name" placeholder="Enter name...." value="<?php echo $row['leave_id'];?>" required>
  
                                        </div>
                                        <div class="form-group">
                                            <label>Start-Date </label>
                                            <input class="form-control" type="date" name="sdate" placeholder="Enter start date...." value="<?php echo $row['sdate'];?>" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>End-Date</label>
                                            <input class="form-control" type="date" name="edate" placeholder="Enter address...."  value="<?php echo $row['edate'];?>" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Cause</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea4" rows="3" name="cause"><?php echo $row['cause'];?>"</textarea>
                                        </div>

                                       
                                        <div class="form-group">
                                                 <label for="field" name="status">Status</label> 
                                                <select id="select" class="form-control" name="status">
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

