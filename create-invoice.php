<?php
include 'includes/header.php' ?>



 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Create Sales Invoice
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
                                <td>Customer</td>
                                <td>
                                    <select name="select_customer" class="form-control">
                                        <option>Select Customer</option>
                                        <option>Customer 1</option>
                                        <option>Customer 2</option>
                                        <option>Customer 3</option>
                                    </select>
                                </td>
                            </tr>
                             <tr>
                                <td>Email</td>
                                <td><input type="email" class="form-control"  name="customer_email"></td>
                            </tr>
                             <tr>
                                <td>Billing Address</td>
                                <td><textarea name="billing_address" class="form-control" rows="3"></textarea></td>
                            </tr>
                            <tr>
                                <td>Shipping Address</td>
                                <td><textarea name="shipping_address" class="form-control"  rows="3"></textarea></td>
                            </tr>
                            <tr>
                                <td>Terms</td>
                                <td>
                                    <select class="form-control" name="invoice_terms">
                                        <option>Select</option>
                                        <option>Today</option>
                                        <option>Yesterday</option>
                                        <option>7 Days</option>
                                        <option>30 Days</option>
                                        <option>This Month</option>
                                        <option>60 Days</option>
                                        <option>90 Days</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Invoice Date</td>
                                <td>
                                    <input type="date" name="invoice_date">
                                </td>
                            </tr>
                            <tr>
                                <td>Due Date</td>
                                <td>
                                    <input type="date" name="invoice_due_date">
                                </td>
                            </tr>
                            
                            
                            
                        </table>
                          
                      </div>
                    </div>

                    <div class="col-md-12">
                      <!-- general form elements -->
                      <div class="box box-primary">
                       
                        <!-- /.box-header -->
                        <!-- form start -->

                      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box">
           
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Product / Service</th>
                  <th>Description</th>
                  <th>Qty</th>
                  <th>Rate</th>
                  <th>Amount</th>
                
                  
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>  
                  <td>
                      <select class="form-control" name="product_select">
                          <option>Select Product</option>
                          <option>Product 1</option>
                          <option>Product 2</option>
                          <option>Product 3</option>
                          <option>Product 4</option>
                      </select>
                  </td>
                  <td><input type="text" class="form-control" name="product_description"></td>
                  <td><input type="text" class="form-control" name="product_qty"></td>
                  <td><input type="text" class="form-control" name="product_rate"></td>
                  <td><input type="text" class="form-control" name="product_amount"></td>
                  <td><a href=""><i class="fa fa-trash"></i></a></td>
                  
                </tr>
                <tr>
                  <td>2</td>  
                  <td>
                      <select class="form-control" name="product_select">
                          <option>Select Product</option>
                          <option>Product 1</option>
                          <option>Product 2</option>
                          <option>Product 3</option>
                          <option>Product 4</option>
                      </select>
                  </td>
                  <td><input type="text" class="form-control" name="product_description"></td>
                  <td><input type="text" class="form-control" name="product_qty"></td>
                  <td><input type="text" class="form-control" name="product_rate"></td>
                  <td><input type="text" class="form-control" name="product_amount"></td>
                  <td><a href=""><i class="fa fa-trash"></i></a></td>
                  
                </tr>
                <tr>
                    <th colspan="4"></th>
                    <td>Total</td>
                    <td>0</td>
                </tr>
                <tr>
                    <th colspan="4"></th>
                    <td>Tax</td>
                    <td><input type="text" class="form-control" name="product_tax" readonly="" value="0"></td>
                </tr>
                <tr>
                    <th colspan="4"></th>
                    <td>Discount %</td>
                    <td><input type="text" class="form-control" name="product_discount" value="0" ></td>
                </tr>
                <tr>
                    <th colspan="4"></th>
                    <td>Grand Total</td>
                    <td><span>USD 0.00</span></td>
                </tr>
                </tbody>
                
                <tr>
                    <th>Order Note</th>
                    <th>Order Activities</th>
                </tr>
                <tr>
                    <td><textarea class="form-control" name="product_order_note"></textarea></td>
                    <td><textarea class="form-control" name="product_order_activites"></textarea></td>
                </tr>
              </table>
                
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>   
                            
           
                      </div>
                      <!-- /.box -->



                    </div>

         <div class="col-md-12">
                     

                       <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>

                    </div>
        
                    
        
                    </form>
      </div>

    </section>
    <!-- /.content -->
  </div>




<?php include 'includes/footer.php' ?>

