<?php
include 'includes/header.php' ?>



 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New vendor
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
                                <td>Vendor Name</td>
                                <td>
                                    <input type="text" name="vendor_name" class="form-control">
                                  
                                </td>
                            </tr>
                             <tr>
                                <td>Company Name</td>
                                <td>
                                    <input type="text" name="vendor_company_name" class="form-control">
                                  
                                </td>
                            </tr>
                              <tr>
                                <td>Vendor Phone</td>
                                <td>
                                    <input type="text" name="vendor_phone" class="form-control">
                                  
                                </td>
                            </tr>
                            <tr>
                                <td>Vendor Fax</td>
                                <td>
                                    <input type="text" name="vendor_fax" class="form-control">
                                  
                                </td>
                            </tr>
                            <tr>
                                <td>Vendor Email</td>
                                <td>
                                    <input type="text" name="vendor_phone" class="form-control">
                                  
                                </td>
                            </tr>
                            <tr>
                                <td>Vendor Website</td>
                                <td>
                                    <input type="text" name="vendor_website" class="form-control">
                                  
                                </td>
                            </tr>
                            <tr>
                                <td>Vendor Billing Address</td>
                                <td>
                                    <textarea rows="3" name="vendor_billing_address" class="form-control"></textarea>
                                  
                                </td>
                            </tr>
                            <tr>
                                <td>Vendor Shipping Address</td>
                                <td>
                                    <textarea rows="3" name="vendor_shipping_address" class="form-control"></textarea>
                                  
                                </td>
                            </tr>
                            <tr>
                                <td>sendor Note</td>
                                <td>
                                    <textarea rows="3" name="vendor_note" class="form-control"></textarea>
                                  
                                </td>
                            </tr>
                            
                            
                        </table>
                          
                      </div>
                    </div>

                   <div class="col-md-12">
                     

                       <div class="box-footer">
                <button type="submit" class="btn btn-primary">Add vendor</button>
              </div>

                    </div>

      
        
                    
        
                    </form>
      </div>

    </section>
    <!-- /.content -->
  </div>




<?php include 'includes/footer.php' ?>

