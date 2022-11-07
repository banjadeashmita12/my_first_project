<?php 

include "include/header.php";
include "../connection.php";
$sql="SELECT * FROM payment";
$result=mysqli_query($conn,$sql);
 ?>


<div class="panel-body">
                            <div class="table-r">
                                 <div id="page-wrapper">
                                 
            <div class="row">
                <div class="col-lg-6">
              
                    <h1 class="page-header" >Payments</h1>
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
                           Employee Payment
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Sno</th>
                                            <th>E-Name</th>
                                            <th>E-Field</th>
                                            <th>Payment</th>
                                            
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
                                            echo $row['name']
                                            ?></td>
                                            <td><?php
                                            echo $row['field']
                                            ?></td>
                                            
                                            <td class="center"><?php
                                            echo $row['payment']
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
                                include "include/footer.php";
                                ?>
