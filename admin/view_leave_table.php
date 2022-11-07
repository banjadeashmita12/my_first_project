
<?php
include "include/header.php";
include "../connection.php";
$sql= "SELECT * FROM `leave`";
$result =mysqli_query($conn,$sql);



?>

                        <div class="panel-body">
                            <div class="table-r">
                                 <div id="page-wrapper">
                                   
            <div class="row">
                <div class="col-lg-6">
              
                    <h1 class="page-header" >Leave</h1>
                </div><br><br>
                <div>
             <a href="add__leave_form.php"  class="btn btn-primary" style="float:right; margin-right:40px;">Add-Leave
</a>
           </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Employee Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Sno</th>
                                            <th>E-Name</th>
                                            <th>Start-Date</th>
                                            <th>End-Date</th>
                                            <th>Cause</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i=1;
                                        while($row=mysqli_fetch_array($result))
                                        {  
                                            $id=$row['leave_id'];
                                            $sql1="SELECT name FROM employeetable WHERE id='$id'";
                                            $result1=mysqli_query($conn,$sql1);
                                            $row1=mysqli_fetch_array($result1); 
                                   ?>
                                    <tr class="odd gradeX">
                                            <td><?php
                                            echo $i; ?></td>
                                            <td><?php
                                            echo $row1['name'];
                                            ?></td>
                                            <td><?php
                                            echo $row['sdate'];
                                            ?></td>
                                            <td class="center"><?php
                                            echo $row['edate'];
                                            ?></td>
                                            <td class="center"><?php
                                            echo $row['cause'];
                                            ?></td>
                                            
                                            <td class="center"><?php
                                            echo $row['status'];
                                            ?></td>
                                            
                                             
                                             <td class="center">
                                            <a href="edit_leave_form.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure want to edit?');"><button class="btn btn-sm">Edit</button></a>
                                            <a href="delete_leave_process.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure want to delete?');"><button class="btn btn-sm">Delete</button> </a>
                                            <a href="leave_reset_password_form.php?id=<?php echo $row['id'];?>"><button type="reset" class="btn btn-sm btn-info">Reset Password</button></a>
                            
                                            <?php

                  if($row['status'] == 'Active') { ?>                                            
            <a href="activate/leave_deactive.php?id=<?php echo $row['id'];?>"><button type="reset" class="btn btn-sm btn-danger">Deactive</button></a>

              <?php } else { ?>
          <a href="activate/leave_active.php?id=<?php echo $row['id'];?>"><button type="reset" class="btn btn-sm btn-success">Active</button></a>

            <?php } ?>
</td>
                                        
                                        </td> 
                                        </tr>
                                        <?php
                                        $i++;
                                        }
                                        ?>
                                       
                                       
                                       
                                    </tbody>
                                </table>
                            </div>
                           
                </div>
                 /.col-lg-12
            </div>
                                </div>

                   <?php
                   include "include/footer.php";
                   ?>             