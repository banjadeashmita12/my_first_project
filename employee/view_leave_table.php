
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
                                            echo $row1['name']
                                            ?></td>
                                            <td><?php
                                            echo $row['sdate']
                                            ?></td>
                                            <td class="center"><?php
                                            echo $row['edate']
                                            ?></td>
                                            <td class="center"><?php
                                            echo $row['cause']
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
                 /.col-lg-12
            </div>
                                </div>

                   <?php
                   include "include/footer.php";
                   ?>             