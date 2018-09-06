<?php
include 'includes/header.php' ?>



 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Monthly Salary
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
                       
                        <!-- /.box-header -->
                        <!-- form start -->

                      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box">
           
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
              
                <tbody>
                            <tr>
                                <th>Month</th>
                                <td><span class="badge">2018-09</span></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Employee</th>
                                <td>Rafel Jon</td>
                                <th>Employee ID</th>
                                <td>10003</td>
                            </tr>
                            <tr>
                                <th>Department</th>
                                <td>Accounts</td>
                                <th>Job Title</th>
                                <td>Trainnee</td>
                            </tr>
                            <tr>
                                <th>Gross Salary</th>
                                <td><input type="text" class="form-control" readonly="" value="5050.00"></td>
                                <th>Deduction</th>
                                <td><input type="text" class="form-control" readonly="" value="110.00"></td>
                            </tr>
                            <tr>
                                <th>Fine Deduction</th>
                                <td><input type="text" class="form-control" name="fine_deduction"></td>
                                <td></td>
                                <td></td>
                                
                            </tr>
                            <tr>
                                <th>Bonus</th>
                                <td><input type="text" class="form-control" name="bonus"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Payment Amount</th>
                                <td><input type="text" class="form-control" name="payment_amount" readonly="" value="4940"> </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Payment Method</th>
                                <td>
                                    <select>
                                        <option>Please Select</option>
                                        <option>Cash</option>
                                        <option>Check</option>
                                        <option>Electronic Transfer</option>
                                    </select>
                                    
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Comment</th>
                                <td><input type="text" class="form-control" name="set_employee_payment_comment"></td>
                                <td></td>
                                <td></td>
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
                            
           
                      </div>
                      <!-- /.box -->



                    </div>

         <div class="col-md-12">
                     

                       <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save Salary</button>
              </div>

                    </div>
        
                    
        
                    </form>
      </div>

    </section>
    <!-- /.content -->
  </div>




<?php include 'includes/footer.php' ?>

