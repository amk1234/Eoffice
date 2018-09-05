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
                                <td>Date</td>
                               
                                <td> <input type="date" class="form-control" name="reimbursement_date"></td>
                            </tr>
                            <tr>
                                <td>Department</td>
                                <td>
                                    <select class="form-control" name="reimbursement_department">
                                        <option>Select Department</option>
                                       
                                    </select>
                                </td>
                            </tr>
                             <tr>
                                <td>Employee</td>
                                
                                <td>
                                    <select class="form-control" name="reimbursement_employee">
                                        <option>Select</option>
                                       
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td><textarea class="form-control" name="reimbursement_description" rows="5"></textarea></td>
                            </tr>
                            
                            
                            
                        </table>
                          
                      </div>
                    </div>

                    

         <div class="col-md-12">
                     

                       <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save Reimbursement</button>
              </div>

                    </div>
        
                    
        
                    </form>
      </div>

    </section>
    <!-- /.content -->
  </div>




<?php include 'includes/footer.php' ?>

