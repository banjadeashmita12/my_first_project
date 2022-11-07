<?php 
include "include/header.php";
include "../connection.php";
$sql = "SELECT * FROM designation";
$result = mysqli_query($conn,$sql);

?>


<div class="panel-body">
                            <div class="table-r">
                                 <div id="page-wrapper">
                                 
            <div class="row">
                <div class="col-lg-6">
              
                    <h1 class="page-header" >Designation Details</h1>
                </div><br><br>
                <div>
             <a href="add_designation_form.php"  class="btn btn-primary" style="float:right; margin-right:40px;">Add-Designation
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
                                            <th>Department</th>
                                            <th>Designation Post</th>
                                            <th>Designation Status</th>
                                            <th>Action</th>

                                        </tr>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i=1;
                                        while($row=mysqli_fetch_array($result))

                                       
                                        {  
                                            $id=$row['department_id'];
                                            $sql1="SELECT department_name FROM departmenttable WHERE id='$id'";
                                           $result1=mysqli_query($conn,$sql1);
                                           $row1=mysqli_fetch_array($result1)    
                                       ?>
                                    <tr class="odd gradeX">
                                            <td><?php
                                            echo $i; ?></td>
                                            <td><?php
                                            echo $row1['department_name'];
                                            ?></td>
                                            <td><?php
                                            echo $row['post'];
                                            ?></td>

                                           <td><?php
                                            echo $row['status'];
                                            ?></td>
                                
                                               <td class="center">
                                            <a href="edit_designation_form.php?id=<?php echo $row['id'];?>"  onclick="return confirm('Are you sure want to edit');"><button class="btn btn-sm">Edit</button></a>
                                             <a href="delete_designation_process.php?id=<?php echo $row['id'];?>"  onclick="return confirm('Are you sure want to delete');"><button class="btn btn-sm">Delete</button> </a> 
                                          
                                             <?php

             if($row['status'] == 'Active') { ?>                                            
            <a href="activate/des_deactive.php?id=<?php echo $row['id'];?>"><button type="reset" class="btn btn-sm btn-danger">Deactive</button></a>

            <?php } else { ?>
           <a href="activate/des_active.php?id=<?php echo $row['id'];?>"><button type="reset" class="btn btn-sm btn-success">Active</button></a>

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