

 <?php
include "include/header.php";
?> 
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Employee Detail</title>
    <link rel="stylesheet" href="../css/style.css">

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Reset Password</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="task_reset_password_process.php" method="POST">
                            <fieldset>
       

                            <div class="form-group">
                                <label>Employee Full name</label>
                                <select id="select" class="form-control" name="department">
      <?php
      $sql3="SELECT * FROM employeetable";
      $result3=mysqli_query($conn,$sql3);
      while($row3=mysqli_fetch_array($result3))
      {
       
      ?>
        <option value="<?php echo $row3['id'];?>"><?php echo $row3['name']; ?></option>
      <?php
}
      ?>
    </select>
                              
                                </div>

                                <div class="form-group">
                                <label>Address</label>
                                    <input class="form-control" placeholder="Enter address....." name="address" type="text">
                                </div>

                                <div class="form-group">
                                <label>E-mail</label>
                                    <input class="form-control" placeholder="Enter email....." name="email" type="email">
                                </div>

                            <div class="form-group">
                                    <input class="form-control" placeholder="Type  Password" name="tpassword" type="password">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="New Password" name="npassword" type="password">
                                </div>
                               
                                <div class="form-group">
                                    <input class="form-control" placeholder="Confirm Password" name="cpassword" type="password" value="">
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Submit</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <?php
    include "include/footer.php";
    ?>
    </html>