
<?php
include "include/header.php";
include "../connection.php";
$sql= "SELECT * FROM employeetable";
$result =mysqli_query($conn,$sql);


?>

                        <div class="panel-body">
                            <div class="table-r">
                                 <div id="page-wrapper">
                                 
            <div class="row">
                <div class="col-lg-6">
              
                    <h1 class="page-header" >Employee Details</h1>
                </div><br><br>
                <div>
             <a href="employeeadd.php"  class="btn btn-primary" style="float:right; margin-right:40px;">AddEmployee
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
                                            <th>Name</th>
                                            <th>Department</th>
                                            <th>Platform</th>
                                            <th>Qualification</th>
                                            <th>Salary</th>
                                            <th>E-mail</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
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
                                        $row1=mysqli_fetch_array($result1);

                                           
                                       
                                   ?>
                                    <tr class="odd gradeX">
                                            <td><?php
                                            echo $i; ?></td>
                                            <td><?php
                                            echo $row['name'];
                                            ?></td>
                                            
                                            <td><?php
                                            echo $row1['department_name'];
                                            ?></td>
                                            <td class="center"><?php
                                            echo $row['platform'];
                                            ?></td>
                                            <td class="center"><?php
                                            echo $row['qualification'];
                                            ?></td>
                                            <td class="center"><?php
                                            echo $row['salary'];
                                            ?></td>
                                              <td class="center"><?php
                                            echo $row['email'];
                                            ?></td>
                                            <td class="center">
                                            <img src="../image/<?php echo $row['image'];?>" style="height:50px;width:50px;">
                                            </td>

                                     <td class="center"><?php
                                            echo $row['status'];
                                            ?></td>
                        
                                            
                                            <td class="center">
                                            <a href="editemp.php?id=<?php echo $row['id'];?>"  onclick="return confirm('Are you sure want to edit?');"><button class="btn btn-sm">Edit</button></a>
                                             <a href="delemp.php?id=<?php echo $row['id'];?>"  onclick="return confirm('Are you sure want to delete?');"><button class="btn btn-sm">Delete</button> </a> 
                                             <a href="reset_password_form.php?id=<?php echo $row['id'];?>"><button type="reset" class="btn btn-sm btn-info">Reset Password</button></a>
                            

                                             <?php
                       if($row['status'] == 'Active') { ?>                                            
                   <a href="activate/emp_deactive.php?id=<?php echo $row['id'];?>"><button type="reset" class="btn btn-sm btn-danger">Deactive</button></a>
                     <?php } else { ?>
  
                        <a href="activate/emp_active.php?id=<?php echo $row['id'];?>"><button type="reset" class="btn btn-sm btn-success">Active</button></a>

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

                   <?php
                   include "include/footer.php";
                   ?>             