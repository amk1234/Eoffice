<?php
include 'includes/header.php' ?>



 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Employee
      </h1>
<!--      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>-->
    </section>

    <!-- Main content -->
    <section class="content">

            
	        <div class="row">
                    <form role="form">
        <!-- left column -->
                    <div class="col-md-12">
                      <!-- general form elements -->

                      <div class="box box-primary">
<!--                        <div class="box-header with-border">
                          <h3 class="box-title">User Details</h3>
                        </div>-->
                        <!-- /.box-header -->
                        <!-- form start -->
                        <table class="custom-table">
                            <tr>
                                <td>Name</td>
                                <td>
                                    <input type="text" class="form-control" name="employee_first_name" placeholder="First Name">
                                   
                                </td>
                                <td> <input type="text" class="form-control" name="employee_last_name" placeholder="Last Name"></td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td>
                                <td><input type="date" class="form-control" name="employee_dob"></td>
                            </tr>
                             <tr>
                                <td>Marital Status</td>
                                
                                <td>
                                    <select class="form-control" name="employee_marital_status">
                                        <option>Select</option>
                                        <option>Single</option>
                                        <option>Married</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                
                                <td>
                                    <select class="form-control" name="employee_marital_status">
                                        <option>Select</option>
                                        <option>Pakistan</option>
                                        <option>UK</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Blood Group</td>
                                
                                <td>
                                    <select class="form-control" name="employee_marital_status">
                                        <option>Select</option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>AB</option>
                                        <option>O</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>ID Number</td>
                                <td><input type="text" class="form-control" name="employee_id_number"></td>
                            </tr>
                             <tr>
                                <td>Religion</td>
                                
                                <td>
                                    <select class="form-control" name="employee_religion">
                                        <option>Select</option>
                                        <option>Muslim</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td><input type="radio" name="employee_gender"> Male </td>
                                <td><input type="radio" name="employee_gender"> Female</td>
                            </tr>
                           
                            <tr>
                                <td>Profile Picture</td>
                                <td><input type="file" class="form-control" name="employee_image"></td>
                            </tr>
                            
                            
                            
                        </table>
                          
                      </div>
                    </div>

                    

         <div class="col-md-12">
                     

                       <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save Employee</button>
              </div>

                    </div>
        
                    
        
                    </form>
      </div>

    </section>
    <!-- /.content -->
  </div>




<?php include 'includes/footer.php' ?>

