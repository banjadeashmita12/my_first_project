<?php
 include "../connection.php";
session_start();
if(!isset($_SESSION['is_logged_in']))
{
    header('location:login.php');
}
  if(isset($_SESSION['admin'])!='admin')
    {
   echo "<script>history.back()</script>";
 }

     $id=$_SESSION['id'];
     $sql="SELECT * FROM admin WHERE id='$id'";
      $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Employee Theme</title>
     <link rel="icon" href="em.jpg/.'">

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../css/plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Employee</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i><?php echo $row['name'];?><i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="profile_form.php"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li><a href="change_password_form.php"><i class="fa fa-gear fa-fw"></i> Change Password</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../logout.php" onclick="return confirm('Are you want to logout');"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
 
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                               
                               
                            </div>
                            
                        </li> 
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i>Department<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="adddepartment.php">Add Department</a>
                                </li>
                                <!-- <li>
                                    <a href="buttons.html">B</a>
                                </li> -->
                                <li>
                                    <a href="departtable.php">View Department</a>
                                </li>
                                <!-- <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li> -->
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-child"></i>Employee<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="employeeadd.php">Add Employee</a>
                                </li>
                                <li>
                                    <a href="table.php">View Employee</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-trophy"></i>Designation<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="add_designation_form.php">Add Designation</a>
                                </li>
                                <!-- <li>
                                    <a href="buttons.html">B</a>
                                </li> -->
                                <li>
                                    <a href="view_designation_table.php">View Designation</a>
                                </li>
                                <!-- <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li> -->
                            </ul>
                        <!-- <li>
                            <a class="active" href="table.php"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li> -->
                        <!-- <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li> -->
                      
                        <li>
                            <a href="#"><i class="fa fa-bank"></i>Employee Payment<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="addpayment.php">Add payment</a>
                                </li>
                                <li>
                                    <a href="view_payment.php">View Payment</a>
                                </li>
                                                         
                                     <!-- <a href="#">Leave <span class="fa arrow"></span></a> -->
                                    <!-- <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li> -->
                                    </ul>
                                    <li>
                            <a href="#"><i class="fa fa-home"></i>Leave<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="add__leave_form.php">Add Leave</a>
                                </li>
                                <li>
                                    <a href="view_leave_table.php">View Leave</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-child"></i>Employee Task<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="add_task_form.php">Add Task</a>
                                </li>
                                <li>
                                    <a href="view_task_table.php">View Task</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-user"></i>Users<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="add_users_form.php">Add Users</a>
                                </li>
                                <li>
                                    <a href="view_users_table.php">View Users</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                                    <li>
                            <a href="#"><i class="fa fa-automobile"></i>Holiday<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="holiday_form.php">Add Holiday</a>
                                </li>
                                <li>
                                    <a href="view_holiday_table.php">View Holiday</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                                    <!-- /.nav-third-level -->
                                
                        
                         
                         <!-- <li> -->
                            <!-- <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> -->
                                    <!-- <a href="blank.html">Blank Page</a>
                                </li> -->
                                <!-- <li>
                                    <a href="login.php">login</a>
                                 </li> -->
                            <!-- </ul>
                         
                            
                         </li>  --> 
    </ul>
                 </div> 
             <!-- /.sidebar-collapse  -->
            </div>
             <!-- /.navbar-static-side  -->
        </nav>

       