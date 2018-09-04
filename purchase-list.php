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
              <h3 class="box-title">Purchase List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
	       
                  <th>Date</th>
                  <th>Purchase No</th>
                  <th>Supplier</th>
                  <th>Status</th>
                  <th>Grand Total</th>
                  <th>Paid</th>
                  <th>Balance</th>
                  <th>Actions</th>
                
                  
                 
                  
                  
                </tr>
                </thead>
                <tbody>
                    
                <tr>
	     
                  <td>2018-08-12</td>
                  <td>1014</td>
                  <td>Enviro</td>
                  <td>Pending Recieved</td>
                  <td>2864.00</td>
                  <td>0.00</td>
                  <td>2845</td>
                  <td>
                       <div class="dropdown">
                <button class="btn btn-default"
                        data-toggle="dropdown">
                    <span id="dropdown_title2">Actions</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" >
                    <li><a href="">View</a></li>
                    <li><a href="">Edit</a></li>
                    <li><a href="">Add Payment</a></li>
                    <li><a href="">View Payment</a></li>
                    <li><a href="">PDF Invoice</a></li>
                    <li><a href="">Email Invoice</a></li>
                    <li><a href="">Recieved Product</a></li>
                    <li><a href="">Return Purchase</a></li>
                    <li><a href="">Delete</a></li>
                </ul>
                </div>
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
