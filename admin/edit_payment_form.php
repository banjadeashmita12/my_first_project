<?php
include "include/header.php";
include "../connection.php";
$id = $_GET['id'];
$sql="SELECT * FROM payment WHERE id='$id';";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
?>


                                    <div id="page-wrapper">
<div class="row">
                <div class="col-lg-12" >
                    <div class="panel panel-default" style="margin-top:32px;">
                        <div class="panel-heading">
                           Employee Payment
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="edit_payment_process.php?id=<?php echo $row['id'];?>" method="POST">
                                        <div class="form-group">
                                            <label>E-name</label>
                                            <input class="form-control" type="text" name="name" value="<?php echo $row['eid'];?>" required> 
                                        </div>
                                        <div class="form-group">
                                            <label>Field</label>
                                            <input class="form-control" type="text" name="field" value="<?php echo $row['field'];?>" required>
                                        </div> 
                                        <div class="form-group">
                                            <label>Payment</label>
                                            <input class="form-control" type="number" name="payment"  value="<?php echo $row['payment'];?>" required>
                                        </div>
                                       
                                        

                                        <div class="form-group">
                                                 <label for="field" name="status">Status</label> 
                                                <select id="select" class="form-control" name="status">
                                                    <option value="Active">Active</option>
                                                    <option value="Deactive">Inactive</option>
                                                </select>
                                            </div>
                                        <div class="form-group">
                                           
                                           <button type="submit"  class="btn btn-success">Edit</button>
                                       </div>
                                        </div>
                                       
                                        </div>
                                       
</div>



                                    <?php
                                    include "include/footer.php";
                                    ?>

