<?php
include 'includes/header.php' ?>



 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Report Category
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
                                <td>Employee</td>
                                <td>
                                    <div class="dropdown">
                <button class="btn btn-default"
                        data-toggle="dropdown">
                    <span id="dropdown_title2">Choose</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" >
                    <li><a href="report-employee-list.php">Employee List</a></li>
                    <li><a href="report-employee-payroll.php">Payroll</a></li>
                </ul>
                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Transaction</td>
                                <td>
                                    <div class="dropdown">
                <button class="btn btn-default"
                        data-toggle="dropdown">
                    <span id="dropdown_title2">Choose</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" >
                    <li><a href="report-transaction.php">Transaction</a></li>
                    <li><a href="report-account-balance.php">Account Balance</a></li>
                </ul>
                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Sales & Purchase</td>
                                <td>
                                    <div class="dropdown">
                <button class="btn btn-default"
                        data-toggle="dropdown">
                    <span id="dropdown_title2">Choose</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" >
                    <li><a href="report-sales.php">Sales Report</a></li>
                    <li><a href="report-purchase.php">Purchase Report</a></li>
                    <li><a href="report-return-purchase.php">Return Purchase</a></li>
                    <li><a href="report-payment-recieved.php">Payment Recieved</a></li>
                </ul>
                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Customer</td>
                                <td>
                                    <div class="dropdown">
                <button class="btn btn-default"
                        data-toggle="dropdown">
                    <span id="dropdown_title2">Choose</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" >
                    <li><a href="report-customer-sales.php">Customer Sales</a></li>
                    <li><a href="report-customer-summary.php">Summary Report</a></li>
                    <li><a href="report-lifetime-sales.php">Lifetime Sales</a></li>
                    <li><a href="report-due-payment.php">Due Payment</a></li>
                    <li><a href="report-over-due-payment.php">Over Due Payment</a></li>
                </ul>
                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Vendor</td>
                                <td>
                                    <div class="dropdown">
                <button class="btn btn-default"
                        data-toggle="dropdown">
                    <span id="dropdown_title2">Choose</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" >
                    <li><a href="">Purchase Report</a></li>
                    <li><a href="">Due Payment</a></li>
                    <li><a href="">Summary Report</a></li>
                    <li><a href="">Lifetime Purchase</a></li>
                    <li><a href="">Return Purchase</a></li>
                </ul>
                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Product & Services</td>
                                <td>
                                    <div class="dropdown">
                <button class="btn btn-default"
                        data-toggle="dropdown">
                    <span id="dropdown_title2">Choose</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" >
                    <li><a href="">Stock Values</a></li>
                    <li><a href="">Product & Purchase Report</a></li>
                    <li><a href="">Stock Report</a></li>
                   
                </ul>
                </div>
                                </td>
                            </tr>
                           
                         
                            
                            
                        </table>
                          
                      </div>
                    </div>
        
                    </form>
      </div>

    </section>
    <!-- /.content -->
  </div>




<?php include 'includes/footer.php' ?>

