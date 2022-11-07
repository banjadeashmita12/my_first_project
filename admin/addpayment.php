<?php
include "include/header.php";
include "../connection.php";

?>
 

          
                                    <div id="page-wrapper">
<div class="row">
                <div class="col-lg-12" >
                    <div class="panel panel-default" style="margin-top:32px;">
                        <div class="panel-heading">
                            Employee Payment Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="add_payment_process.php" method="POST">
                                        <div class="form-group">
                                            <label>E-name</label>
                                            <select id="select" class="form-control" name="name">
      <?php
      $sql="SELECT * FROM employeetable";
      $result=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_array($result))
      {
       
      ?>
        <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
      <?php
}
      ?>
    </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Field</label>
                                            <input class="form-control" type="text" name="field" placeholder="Enter the field..." required>
                                        </div> 
                                        <div class="form-group">
                                            <label>Payment</label>
                                            <input class="form-control" type="number" name="payment" placeholder="Enter employee payment..." required>
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
                                        </div>
                                       
                                        </div>
                                       
</div>








                                    <?php
           include "include/footer.php";
           ?>