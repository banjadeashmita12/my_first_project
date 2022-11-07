<?php 
include "include/header.php";
include "../connection.php";
$id = $_GET['id'];
$sql = "SELECT * FROM departmenttable WHERE id='$id'";
 $result = mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($result);

?>



<div id="page-wrapper">
<div class="row">
                <div class="col-lg-12" >
                    <div class="panel panel-default" style="margin-top:32px;">
                        <div class="panel-heading">
                           Department Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="editdep.php?id=<?php echo $row['id'];?>" method="POST">
                                        <div class="form-group">
                                            <label>Add Department</label>
                                            <input class="form-control" type="text" name="name" placeholder="Enter department...." value="<?php echo $row['department_name'];?>" required>   
     
                       </div>
                                      

                                        <div class="form-group">
                                                 <label for="field" name="status">Status</label> 
                                                <select id="select" class="form-control" name="status" value="<?php echo $row['status'];?>">
                                                    <option value="Active">Active</option>
                                                    <option value="Deactive">Inactive</option>
                                                </select>
                                            </div>
                                       
                                        <div class="form-group">
                                           
                                           <button type="submit"  class="btn btn-success">Submit</button>
                                       </div>

                                    </form>
                                        </div>
                                       
                                        </div>
                                       
</div>