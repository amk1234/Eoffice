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
                                <td><input type="date" class="form-control" name="report_transaction"></td>    
                            </tr>
                            <tr>
                                <td>To</td>
                                <td><input type="date" class="form-control" name="report_transaction"></td>    
                            </tr>
                            <tr>
                                <td>Account</td>
                                <td>
                                    <select class="form-control" name="report_account_type">
                                        <option>Pety Cash</option>
                                        <option>Account Cash</option>
                                        <option>Bank of USA</option>
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
              <h3 class="box-title">Account Balance</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
	       
                  <th>Trns ID</th>
                  <th>Account</th>
                  <th>Type</th>
                  <th>Category</th>
                  <th>Dr.</th>
                  <th>Cr.</th>
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
                        <td>=0</td>
                        <td>=0</td>
                        <td>=0</td>
                        <td>20198-09</td>
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
