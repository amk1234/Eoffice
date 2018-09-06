<?php
include 'includes/header.php' ?>



  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     
<!--      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>-->
    </section>
    <hr>
    <!-- Main content -->
    <section class="content">
        
        
        
      <!-- Small boxes (Stat box) -->
     
      <!-- /.row -->
      <!-- Main row -->
     <div class="row">
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
                                <td>From</td>
                                <td>
                                    <input type="date" name="payroll_date_from">
                                </td>
                               
                                
                            </tr>
                            <tr>
                                <td>To</td>
                                <td>
                                    <input type="date" name="payroll_date_to">
                                </td>
                               
                                
                            </tr>
                            <tr>
                                <td>Department</td>
                                <td>
                                    <select class="form-control">
                                        <option>Engineer</option>
                                        <option>Accounts</option>
                                        <option>Human Resource</option>
                                    </select>
                                </td>
                               
                                
                            </tr>
                            <tr>
                                <td>Department</td>
                                <td>
                                    <select class="form-control">
                                        <option>Please Select</option>
                                        <option>Accounts</option>
                                        <option>Accounts</option>
                                        <option>Human Resource</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Employee</td>
                                <td>
                                    <select class="form-control">
                                        <option>Please Select</option>
                                    </select>
                                </td>
                               
                                
                            </tr>
                            <tr>
                                <td><input type="submit" class="btn btn-success"></td>
                            </tr>
                        </table>
                          
                      </div>
                    </div>
          
          
          
          
          
          
          
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box">
               <div class="box-header" style="padding:10px 20px;">
               
                   <a href="" class="btn btn-default">Copy</a>
                   <a href="" class="btn btn-default">CSV</a>
                   <a href="" class="btn btn-default">Excel</a>
                   <a href="" class="btn btn-default">PDF</a>
                   <a href="" class="btn btn-default">Print</a>
               
            </div>
              
            <div class="box-header">
              <h3 class="box-title">Danial Martin Payroll Report</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
	       
                  <th>Salary Month</th>
                  <th>Gross Salary</th>
                  <th>Deduction</th>
                  <th>Net Salary</th>
                  <th>Award</th>
                  <th>Fine Deduction</th>
                  <th>Bonus</th>
                  <th>Payment Amount</th>
                  <th>Payment Method</th>
                  
                </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td>2018-02</td>
                        <td>24,300</td>
                        <td>950.00</td>
                        <td>234500</td>
                        <td>200.00</td>
                        <td>100.00</td>
                        <td>50.00</td>
                        <td>23,400</td>
                        <td>Check</td>
                    </tr>
	    
                
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>








<?php include 'includes/footer.php' ?>
