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
               <div class="box-header" style="padding:10px 20px;">
                
                   <a href="reimbursement-form.php" class="btn btn-primary pull-right">New Reimbursement Form</a>

            </div>
              
            <div class="box-header">
              <h3 class="box-title">Reimbursement List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
	       
                    <th>Date </th>
                    <th>Employee</th>
                    <th>Department</th>
                    <th>Amount</th>
                    <th>Description</th>
                    <th>Approved By Manager</th>
                    <th>Approved By Admin</th>
                    <th>Actions</th>
                  
                </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td>2018-20-2</td>
                        <td>Daniel</td>
                        <td>Accounts</td>
                        <td>200.0</td>
                        <td>Repair Computer</td>
                        <td>Pending</td>
                        <td>Pending</td>
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
