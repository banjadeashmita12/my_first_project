<?php 
include "include/header.php";
include "../connection.php";
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-sitemap fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                <?php 
                                 $sql="SELECT * FROM departmenttable";
                                 $result=mysqli_query($conn,$sql);
                                 $row=mysqli_num_rows($result);
                                        ?>
                                    <div class="huge">
                                        <?php
                                echo $row ;
                                        ?>
                                    </div>
                                    <div>Department!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <a href="departtable.php"><span class="pull-left">View Department</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right">
                                    
                                </i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-child fa-5x"></i>
                                    <?php 
                                 $sql1="SELECT * FROM employeetable";
                                 $result1=mysqli_query($conn,$sql1);
                                 $row1=mysqli_num_rows($result1);
                                 ?>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $row1 ;?></div>
                                    <div>Employee!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <a href="table.php"><span class="pull-left">View Employee</span></a>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-trophy fa-5x"></i>
                                    <?php 
                                 $sql2="SELECT * FROM designation";
                                 $result2=mysqli_query($conn,$sql2);
                                 $row2=mysqli_num_rows($result2);
                                 ?>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $row2 ;?></div>
                                    <div>Designation!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <a href="view_designation_table.php"><span class="pull-left">View Designation</span></a>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-bank fa-4x"></i>
                                    <?php 
                                 $sql3="SELECT * FROM designation";
                                 $result3=mysqli_query($conn,$sql3);
                                 $row3=mysqli_num_rows($result3);
                                 ?>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $row ;?></div>
                                    <div>Employee Payment!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <a href="view_payment.php"><span class="pull-left">View Payment</span></a>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
</div>
            <?php
           include "include/footer.php";
           ?>