<?php
include 'includes/header.php' ?>



  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3>Transaction List</h3>
<!--      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>-->
    </section>
   
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
                   <form>
                   <table id="" class="table table-bordered table-striped">
                       <thead>
                           <tr>
                               <th>Start Date</th>
                               <th>End Date</th>
                               <th>Amount</th>
                               <th>Transaction Type</th>
                               
                               
                           </tr>
                       </thead>
                       
                <tbody>
                    
                    <tr>
                        <td> <input type="date" class="form-control" name="trans_list_start_date"></td>
                        <td> <input type="date" class="form-control" name="trans_list_end_date"></td>
                        <td>
                            <select class="form-control" name="trans_list_amount">
                                <option>Select</option>
                                <option>Pety Cash</option>
                                <option>Accounts Receivable</option>
                                <option>The City Bank</option>
                                <option>Bank Of USA</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" name="trans_list_type">
                                <option>Select</option>
                                <option>Deposit</option>
                                <option>Expense</option>
                                <option>Transfer</option>
                             
                            </select>
                        </td>
                        <td><input type="submit" value="Search" class="btn btn-primary"></td>
                    </tr>
                
                
                </tbody>
                
              </table>
                   </form>
                   <a href="add-transaction.php" class="btn btn-success pull-right">Add Transaction</a>
            </div>
              
            <div class="box-header">
                <hr>
                <a href="" class="btn btn-default">Copy</a>
                <a href="" class="btn btn-default">Csv</a>
                <a href="" class="btn btn-default">Excel</a>
                <a href="" class="btn btn-default">Pdf</a>
                <a href="" class="btn btn-default">Print</a>
                <hr>
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
                    <th>Actions</th>
                  
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>183</td>
                        <td>The City Bank</td>
                        <td>Expenses</td>
                        <td>Advertise</td>
                        <td>0.00</td>
                        <td>100.00</td>
                        <td>200.00</td>
                        <td>26 Aug 2017</td>
                        <td>
                            <a href=""><i class="fa fa-edit"></i></a>
                            <a href=""><i class="fa fa-trash"></i></a>
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
