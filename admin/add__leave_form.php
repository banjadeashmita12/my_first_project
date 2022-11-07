
<?php
include "include/header.php";
include "../connection.php";
?>
 


<div id="page-wrapper">
<div class="row">
                <div class="col-lg-12" >
                    <div class="panel panel-default" style="margin-top:32px;">
                        <div class="panel-heading">
                          Add Leave
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="add_insert_leave_process.php" method="POST">
                                        <div class="form-group">
                                            <label>E-name</label>
                                            <select id="select" class="form-control" name="ename">
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
                                            <label>Start-Date </label>
                                            <input class="form-control" type="date" name="sdate" placeholder="Enter start date...." required>
                                        </div>
                                        <div class="form-group">
                                            <label>End-Date</label>
                                            <input class="form-control" type="date" name="edate" placeholder="Enter address...." required>
                                        </div>

                                        <div class="form-group">
                                            <label>Cause</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea4" rows="3" name="cause"></textarea>
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

