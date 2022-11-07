<?php
include "include/header.php";
include "../connection.php";
?>


<div id="page-wrapper">
<div class="row">
                <div class="col-lg-12" >
                    <div class="panel panel-default" style="margin-top:32px;">
                        <div class="panel-heading">
                            Holiday Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="holiday_insert_process.php" method="POST">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" type="text" placeholder="Enter title.." name="title" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Start-Date</label>
                                            <input class="form-control" placeholder="Enter text" type="date" name="sdate" required>
                                        </div>
                                        <div class="form-group">
                                            <label>End-Date</label>
                                            <input class="form-control" type="date" name="edate" required>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Reason</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter reason...." name="reason" required></textarea>
                                        </div>

                                        <div class="form-group">
                                                 <label for="field" name="status">Status</label> 
                                                <select id="select" class="form-control" name="status">
                                                    <option value="Active">Active</option>
                                                    <option value="Deactive">Inactive</option>
                                                </select>
                                            </div>
                                        <div class="form-group">
                                           
                                           <button type="submit"  class="btn btn-primary">Submit</button>
                                       </div>
                                        </div>
                                       
                                        </div>
                                       
</div>

<?php

include "include/footer.php";
?>