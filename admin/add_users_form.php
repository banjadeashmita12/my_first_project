<?php
include "include/header.php";
include "../connection.php";
?>


<div id="page-wrapper">
<div class="row">
                <div class="col-lg-12" >
                    <div class="panel panel-default" style="margin-top:32px;">
                        <div class="panel-heading">
                           Users Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="add_users_process.php" method="POST">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" placeholder="Enter text" type="text" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input class="form-control" type="text" name="email" placeholder="Enter email...." required>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" type="text" name="address" placeholder="Enter address...." required>
                                        </div>

                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input class="form-control" type="text" name="phone" placeholder="Enter phone...." required>
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="password" name="password" placeholder="Enter password...." required>
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

                                    </form>
                                        </div>
                                       
                                        </div>
                                       
</div>
zz
<?php

include "include/footer.php";
?>