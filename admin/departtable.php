<?php 
 include "include/header.php";
 include "../connection.php";
$sql = "SELECT * FROM departmenttable";
$result = mysqli_query($conn,$sql);
?>


<div class="panel-body">
                            <div class="table-r">
                                 <div id="page-wrapper">
                                 
            <div class="row">
                <div class="col-lg-6">
              
                    <h1 class="page-header" >Department Details</h1>
                </div><br><br>
                <div>
             <a href="adddepartment.php"  class="btn btn-primary" style="float:right; margin-right:40px;">AddDepartment
</a>
           </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Department Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Sno</th>
                                            <th>Department Name</th>
                                            <th>Department Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i=1;
                                        while($row=mysqli_fetch_array($result)){?>      
                                  
                                    <tr class="odd gradeX">
                                            <td><?php
                                            echo $i; ?></td>
                                            <td><?php
                                            echo $row['department_name'];
                                            ?></td>
                                             <td><?php
                                            echo $row['status'];
                                            ?></td>
                                            
                                            
                                             <td class="center">
                                            <a href="department_edit_form.php?id=<?php echo $row['id'];?>"  onclick="return confirm('Are you sure want to edit');"><button class="btn btn-sm btn-primary">Edit</button></a>
                                             <a href="depdel.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure want to delete');"><button class="btn btn-sm btn-danger">Delete</button></a> 
                                            

                                             <?php

                                             if($row['status'] == 'Active') { ?>                                            
                                                <a href="activate/depart_deactive.php?id=<?php echo $row['id'];?>"><button type="reset" class="btn btn-sm btn-danger">Deactive</button></a>
                                             
                                            <?php } else { ?>
                                                <a href="activate/depart_active.php?id=<?php echo $row['id'];?>"><button type="reset" class="btn btn-sm btn-success">Active</button></a>
                                             
                                            <?php } ?>
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
