<?php
include "include/header.php";
include "../connection.php";
$id=$_GET['id'];
$sql="SELECT * FROM holidaytable WHERE id='$id';";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
?>


<div id="page-wrapper">
<div class="row">
                <div class="col-lg-12" >
                    <div class="panel panel-default" style="margin-top:32px;">
                        <div class="panel-heading">
                           Edit Holiday Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="edit_holiday_process.php?id=<?php echo $row['id']; ?>" method="POST">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" type="text" placeholder="Enter title.." name="title" value="<?php echo $row['title'];?>" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Start-Date</label>
                                            <input class="form-control" placeholder="Enter text" type="date" name="sdate" value="<?php echo $row['sdate'];?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>End-Date</label>
                                            <input class="form-control" type="date" name="edate" value="<?php echo $row['edate'];?>" required>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Reason</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter reason...." name="reason"  required><?php echo $row['reason'];?> </textarea>
                                        </div>
                                        <div class="form-group">
                                           
                                           <button type="submit"  class="btn btn-primary">Update</button>
                                       </div>
                                        </div>
                                       
                                        </div>
                                       
</div>

<?php

include "include/footer.php";
?>