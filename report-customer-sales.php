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
                                <td><input type="date" class="form-control" name="report_customer_sales_from"></td>    
                            </tr>
                            <tr>
                                <td>To</td>
                                <td><input type="date" class="form-control" name="report_customer_sales_to"></td>    
                            </tr>
                            <tr>
                                <td>Customer</td>
                                <td>
                                    <select class="form-control" name="report_customer">
                                        <option>-</option>
                                        <option>-</option>
                                        <option>-</option>
                                    </select>
                                </td>
                            </tr>
                            
                            
                            <tr>
                                <td><input type="submit" class="btn btn-success"></td>
                            </tr>
                            
                        </table>
                          
                      </div>
                    </div>
          
          
          </form>
          
          
          
          
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
              <h3 class="box-title">Customer Sales Report</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
	       
                  <th>Date</th>
                  <th>Order No</th>
                  <th>Due Date</th>
                  <th>Grand Total</th>
                  <th>Paid</th>
                  <th>Balance</th>
                  <th>Date</th>
                  
                </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
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
