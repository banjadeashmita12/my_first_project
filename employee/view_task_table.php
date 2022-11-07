
<?php
include "include/header.php";
include "../connection.php";
$sql= "SELECT * FROM `task`";
$result =mysqli_query($conn,$sql);




?>

                        <div class="panel-body">
                            <div class="table-r">
                                 <div id="page-wrapper">
                           
            <div class="row">
                <div class="col-lg-6">
              
                    <h1 class="page-header" >Task</h1>
                </div><br><br>
                <div>
               
           </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Task Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Sno</th>
                                            <th>Task For</th>
                                            <th>Task Title</th>
                                            <th>Priority</th>
                                            <th>Upload Image</th>
                                             <th>Status</th>
                                            <th>Task Description</th>
                                           
                                          
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i=1;
                                        while($row=mysqli_fetch_array($result))
                                    
                                        { 

                                            $id=$row['task_id'];
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
                                            echo $row['title'];
                                            ?></td>
                                            <td class="center"><?php
                                            echo $row['priority'];
                                            ?></td>
                                            <td class="center"><img src="../image/<?php echo $row['image'];?>" style="height:50px;width:50px;">
                                          
                                           </td>
                                            <td class="center"><?php
                                            echo $row['status'];
                                            ?></td>
                                            <td class="center"><?php
                                            echo $row['description'];
                                            ?></td>
                                           

                                   
                                             
                                        </tr>
                                        <?php
                                        $i++;
                                        }
                                        ?>
                                       
                                       
                                       
                                    </tbody>
                                </table>
                            </div>
                           
                </div>
                 
            </div>
                                </div>

                   <?php
                   include "include/footer.php";
                   ?>             