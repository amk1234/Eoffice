<?php
include 'includes/header.php' ?>



 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Generate PaySlip
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
                                <td>Department</td>
                                <td>
                                    <select class="form-control" name="generate_payslip_department">
                                        <option>Select Department</option>
                                       
                                    </select>
                                </td>
                            </tr>
                             <tr>
                                <td>Employee</td>
                                
                                <td>
                                    <select class="form-control" name="generate_payslip_employee">
                                        <option>Select</option>
                                       
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Month</td>
                                <td><input type="date" class="form-control" name="generate_payslip_date"></td>
                            </tr>
                            
                            
                            
                        </table>
                          
                      </div>
                    </div>

                    
<div class="col-md-12">
                     

                       <div class="box-footer">
                           <a href="monthly-salary-generate.php" class="btn btn-primary">Go</a>
              </div>

                    </div>
        
                    
        
                    </form>
      </div>

    </section>
    <!-- /.content -->
  </div>




<?php include 'includes/footer.php' ?>

