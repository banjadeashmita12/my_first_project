<?php
include "include/header.php";
include "../connection.php";
?>


<div id="page-wrapper">
<div class="row">
                <div class="col-lg-12" >
                    <div class="panel panel-default" style="margin-top:32px;">
                        <div class="panel-heading">
                           Designation Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="add_desination_process.php" method="POST">
                                        <div class="form-group">
                                            <label>Department-Name</label>
                                            <select id="select" class="form-control" name="department">
      <?php
      $sql3="SELECT * FROM departmenttable";
      $result3=mysqli_query($conn,$sql3);
      while($row3=mysqli_fetch_array($result3))
      {
       
      ?>
        <option value="<?php echo $row3['id'];?>"><?php echo $row3['department_name']; ?></option>
      <?php
}
      ?>
    </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Designation Post</label>
                                            <input class="form-control" type="text" name="post" placeholder="Enter post...." required>
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