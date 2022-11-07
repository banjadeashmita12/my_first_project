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
                  <h1 class="page-header">Holiday Details</h1>
                </div><br><br>
                <div>
            
           </div>
               
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         Holiday Table
                        </div>
                      
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                             <th>Id</th>
                                            <th>Title</th>
                                            <th>Start-date</th>
                                              <th>End-date</th>
                                              <th>Status</th>
                                            <th>Reason</th>
                                           
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
include "include/footer.php"
?>