
<?php
include "include/header.php";
include "../connection.php";

?>


<div id="page-wrapper">
<div class="row">
                <div class="col-lg-12" >
                    <div class="panel panel-default" style="margin-top:32px;">
                        <div class="panel-heading">
                          Employee Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="action.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" placeholder="Enter text" type="text" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Department</label>
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
                                            <label>Platform</label>
                                            <input class="form-control" type="text" name="platform" placeholder="Enter address...." required>
                                        </div>

                                        <div class="form-group">
                                            <label>Qualification</label>
                                            <input class="form-control" type="text" name="qualification" placeholder="Enter qualification...." required>
                                        </div>

                                        <div class="form-group">
                                            <label>Salary</label>
                                            <input class="form-control" type="number" name="salary" placeholder="Enter salary...." required>
                                        </div>

                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input class="form-control" type="email" name="email" placeholder="Enter email...." required>
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="password" name="password" placeholder="Enter password...." required>
                                       </div>

                             
                                       <div class="form-group">
                    <!-- <img src="../image/<?php echo $row['image'];?>" style="height:100px;width:100px;">  -->
                                          
                   <input type="file" name="image">
                <!-- <input type="hidden"><br> -->
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