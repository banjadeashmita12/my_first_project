<?php 
include "include/header.php";
include "../connection.php";
$sql = "SELECT * FROM admin";
$result = mysqli_query($conn,$sql);

?>


<div class="panel-body">
                            <div class="table-r">
                                 <div id="page-wrapper">
                                 
            <div class="row">
                <div class="col-lg-6">
              
                    <h1 class="page-header" >Users Details</h1>
                </div><br><br>
                <div>
             <a href="add_users_form.php"  class="btn btn-primary" style="float:right; margin-right:40px;">Add-Users
</a>
           </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         User Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                             <th>Id</th>
                                            <th>Name</th>
                                            <th>E-mail</th>
                                            <th>Address</th>
                                            <th>Phone</th>
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
                                            echo $row['name'];
                                            ?></td>
                                            
                                            <td><?php
                                            echo $row['email'];
                                            ?></td>
                                            <td><?php
                                            echo $row['address'];
                                            ?></td>
                                            <td><?php
                                            echo $row['phone'];
                                            ?></td>

                                            <td><?php
                                            echo $row['status'];
                                            ?></td>
                                             
                                               <td class="center">
                                            <a href="edit_user_form.php?id=<?php echo $row['id'];?>"><button class="btn btn-sm">Edit</button></a>
                                             <a href="delete_user_process.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure want to delete?');"><button class="btn btn-sm">Delete</button> </a> 
                                          
                                             <?php

      if($row['status'] == 'Active') { ?>                                            
       <a href="activate/users_deactive.php?id=<?php echo $row['id'];?>"><button type="reset" class="btn btn-sm btn-danger">Deactive</button></a>

     <?php } else { ?>
      <a href="activate/user_active.php?id=<?php echo $row['id'];?>"><button type="reset" class="btn btn-sm btn-success">Active</button></a>

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