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
                
                  <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#myModal">Add Award</button>

            </div>
              
            <div class="box-header">
              <h3 class="box-title">Employee Award</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
	       
                    <th>Employee ID</th>
                    <th>Employee Name</th>
                    <th>Award Name / Title</th>
                    <th>Gift Item</th>
                    <th>Award Amount</th>
                    <th>Month</th>
                    <th>Actions</th>
                  
                </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td>10111</td>
                        <td>Nisha</td>
                        <td>Best Employee of the month</td>
                        <td>Diary</td>
                        <td>100.00</td>
                        <td>2018-03</td>
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




<!--ADD AWARD-->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
          <form>
              <label>Department</label>
              <select class="form-control" name="award_employee_department">
                  <option>Please Select</option>
                  <option>Engr</option>
                  <option>Software</option>
                  <option>Accounts</option>
              </select>
              <br>
              <label>Employee</label>
              <select class="form-control" name="award_employee_name">
                  <option>Please Select</option>
                  <option>Engr</option>
                  <option>Software</option>
                  <option>Accounts</option>
              </select>
              <br>
              <label>Gift Item</label>
              <input type="text" class="form-control" name="award_gift">
              <br>
              <label>Award Amount</label>
              <input type="text" class="form-control" name="award_amount">
              <br>
              <label>Month</label>
              <input type="date" class="form-control" name="award_month">
          </form>
      </div>
      <div class="modal-footer">
          <input type="submit" name="add_award" class="btn btn-primary">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!--ADD AWARD-->
<?php include 'includes/footer.php' ?>
