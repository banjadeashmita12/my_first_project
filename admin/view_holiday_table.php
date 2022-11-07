<?php 
include "include/header.php";
include "../connection.php";
$sql = "SELECT * FROM holidaytable";
$result = mysqli_query($conn,$sql);

?>


<div class="panel-body">
                            <div class="table-r">
                                 <div id="page-wrapper">
                                 
            <div class="row">
                <div class="col-lg-6">
              
                    <h1 class="page-header" >Holiday Details</h1>
                </div><br><br>
                <div>
             <a href="holiday_form.php"  class="btn btn-primary" style="float:right; margin-right:40px;">Add-Holiday
</a>
           </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         Holiday Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                             <th>Id</th>
                                            <th>Title</th>
                                            <th>Start-date</th>
                                            <th>End-date</th>
                                            <th>Reason</th>
                                            <th>Status</th>
                                            <th>Action</th>

                                        </tr>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i=1;
                                        while($row=mysqli_fetch_array($result))
                                        {      
                                       ?>
                                    <tr class="odd gradeX">
                                            <td><?php
                                            echo $i; ?></td>
                                            <td><?php
                                            echo $row['title'];
                                            ?></td>
                                            
                                            <td><?php
                                            echo $row['sdate'];
                                            ?></td>
                                            <td><?php
                                            echo $row['edate'];
                                            ?></td>
                                            <td><?php
                                            echo $row['reason'];
                                            ?></td>
                                            <td><?php
                                            echo $row['status'];
                                            ?></td>
                                              <td class="center">
                                            <a href="edit_holiday_form.php?id=<?php echo $row['id'];?>"><button class="btn btn-sm">Edit</button></a>
                                             <a href="delete_holiday_process.php?id=<?php echo $row['id'];?>"><button class="btn btn-sm">Delete</button> </a> 
                                           
                                             <?php

                         if($row['status'] == 'Active') { ?>                                            
                     <a href="activate/holiday_deactive.php?id=<?php echo $row['id'];?>"><button type="reset" class="btn btn-sm btn-danger">Deactive</button></a>

                        <?php } else { ?>
                          <a href="activate/holiday_active.php?id=<?php echo $row['id'];?>"><button type="reset" class="btn btn-sm btn-success">Active</button></a>

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
                <!-- /.col-lg-12 -->
            </div>
                                </div>


<?php
include "include/footer.php"
?>