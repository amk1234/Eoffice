<?php
include 'includes/header.php' ?>



  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3>Monthly Salary Generate</h3>
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
               
              
            <div class="box-header">
                
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="" class="table table-bordered table-striped">
                <thead>
                <tr>
	       
                    <th>Employee ID</th>
                    <th>Name</th>
                    <th>Job Title</th>
                    <th>Gross Salary</th>
                    <th>Deduction</th>
                    <th>Net Salary</th>
                    <th>Fine Deduction</th>
                    <th>Bonus</th>
                    <th>Payment Method</th>
                    <th>Note</th>
                  
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>10016</td>
                        <td>Rehman</td>
                        <td>Finanace Manager</td>
                        <td>95600</td>
                        <td>1000</td>
                        <td>8650</td>
                        <td><input type="text" class="form-control" name="monthly_salary_fine_deduction"></td>
                        <td><input type="text" class="form-control" name="monthly_salary_bonus"></td>
                        <td>
                            <select class="form-control" name="monthly_salary_payment_method"></select>
                        </td>
                        <td><input type="text" class="form-control" name="monthly_salary_note"></td>
                    </tr>
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
          
          
                
                  
<div class="col-md-12">
                     

                       <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save Salary</button>
              </div>

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
