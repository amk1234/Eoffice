<?php
include 'includes/header.php' ?>



 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New Customer
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
                                <td>Customer Name</td>
                                <td>
                                    <input type="text" name="customer_name" class="form-control">
                                  
                                </td>
                            </tr>
                             <tr>
                                <td>Company Name</td>
                                <td>
                                    <input type="text" name="company_name" class="form-control">
                                  
                                </td>
                            </tr>
                              <tr>
                                <td>Customer Phone</td>
                                <td>
                                    <input type="text" name="customer_phone" class="form-control">
                                  
                                </td>
                            </tr>
                            <tr>
                                <td>Customer Fax</td>
                                <td>
                                    <input type="text" name="customer_fax" class="form-control">
                                  
                                </td>
                            </tr>
                            <tr>
                                <td>Customer Email</td>
                                <td>
                                    <input type="text" name="customer_phone" class="form-control">
                                  
                                </td>
                            </tr>
                            <tr>
                                <td>Customer Website</td>
                                <td>
                                    <input type="text" name="customer_website" class="form-control">
                                  
                                </td>
                            </tr>
                            <tr>
                                <td>Customer Billing Address</td>
                                <td>
                                    <textarea rows="3" name="customer_billing_address" class="form-control"></textarea>
                                  
                                </td>
                            </tr>
                            <tr>
                                <td>Customer Shipping Address</td>
                                <td>
                                    <textarea rows="3" name="customer_shipping_address" class="form-control"></textarea>
                                  
                                </td>
                            </tr>
                            <tr>
                                <td>Customer Note</td>
                                <td>
                                    <textarea rows="3" name="customer_note" class="form-control"></textarea>
                                  
                                </td>
                            </tr>
                            
                            
                        </table>
                          
                      </div>
                    </div>

                   <div class="col-md-12">
                     

                       <div class="box-footer">
                <button type="submit" class="btn btn-primary">Add Customer</button>
              </div>

                    </div>

      
        
                    
        
                    </form>
      </div>

    </section>
    <!-- /.content -->
  </div>




<?php include 'includes/footer.php' ?>

