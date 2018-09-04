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
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box">
               <div class="box-header" style="padding:50px 20px;">
               <a href="add-new-customer.php" class="btn btn-success">Export</a>
               <a href="" class="btn btn-danger">Print</a>
               
            </div>
              
            <div class="box-header">
              <h3 class="box-title">Pending Shipment</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
	       
                  <th>Date</th>
                  <th>Order id</th>
                  <th>Customer</th>
                  <th>Due Date</th>
                  <th>Due Payment</th>
                  <th>Total</th>
                  <th>Print</th>
                  <th>Shipping</th>
                  
                 
                  
                  
                </tr>
                </thead>
                <tbody>
                    
                <tr>
	     
                  <td>2018-08-12</td>
                  <td>24</td>
                  <td>LDA</td>
                  <td>2018-08-12</td>
                  <td>4,500</td>
                  
                  <td>3401</td>
                  <td>
                      <a href="" class="btn btn-default">Packing List</a>
                  </td>
                  <td>
                      <a href="" class="btn btn-default">Mark Shipped</a>
                  </td>
                  
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
