<?php
include 'includes/header.php' ?>



 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Transaction
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
                                <td>Transaction Type</td>
                                <td>
                                    <select name="trans_type" class="form-control">
                                        <option>Select Type</option>
                                        <option>Deposit</option>
                                        <option>Expense</option>
                                        <option>Accounts Payable</option>
                                    </select>
                                </td>
                            </tr>
                               <tr>
                                <td>Transaction Category</td>
                                <td>
                                    <select name="trans_cat" class="form-control">
                                        <option>Select Category</option>
                                        <option>Deposit</option>
                                       
                                    </select>
                                </td>
                            </tr>
                             <tr>
                                <td>Amount</td>
                                <td><input type="text" class="form-control"  name="trans_amount"></td>
                            </tr>
                             <tr>
                                <td>Ref#</td>
                                <td><input type="text" class="form-control"  name="trans_ref" placeholder="e.g. Transaction ID, Check No."></td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td><textarea rows="5" class="form-control" name="trans_desc"></textarea></td>
                            </tr>
                         
                            
                            
                        </table>
                          
                      </div>
                    </div>

                    

         <div class="col-md-12">
                     

                       <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save Transaction</button>
              </div>

                    </div>
        
                    
        
                    </form>
      </div>

    </section>
    <!-- /.content -->
  </div>




<?php include 'includes/footer.php' ?>

