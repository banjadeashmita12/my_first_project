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